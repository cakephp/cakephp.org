<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use ReCaptcha\ReCaptcha;

/**
 * Writers Controller
 *
 * @property \App\Model\Table\WritersTable $Writers
 */
class WritersController extends AppController
{
    /**
     * @inheritDoc
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        $this->Auth->allow();

        return parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void
     */
    public function index()
    {
        $writer = $this->Writers->newEmptyEntity();

        if (Configure::read('Site.writers_form_enabled') && $this->request->is('post')) {
            $recaptcha = new ReCaptcha(Configure::read('ReCaptcha.secret_key'));
            $resp = $recaptcha->verify($this->getRequest()->getData('g-recaptcha-response'), $this->request->clientIp());
            if ($resp->isSuccess()) {
                $writer = $this->Writers->newEntity($this->getRequest()->getData());
                $writer->client_ip = $this->request->clientIp();
                if ($this->Writers->save($writer)) {
                    $email = new Mailer('default');
                    $email
                        ->setEmailFormat('text')
                        ->setReplyTo($writer->email, $writer->name)
                        ->setFrom([Configure::read('Site.contact.marketing_email') => __('CakePHP Website')])
                        ->setTo(Configure::read('Site.contact.marketing_email'))
                        ->setSubject(__('Writers Form'))
                        ->setViewVars(compact('writer'))
                        ->viewBuilder()
                        ->setTemplate('writers_form');

                    $email->send();

                    $this->Flash->success(__('Thanks for your submission! We will review and get back to you shortly!'));

                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('Please check your Recaptcha Box.'));
            }
        }

        $this->set(compact('writer'));
    }
}
