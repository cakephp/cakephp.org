<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Mailer;

/**
 * @property \App\Model\Table\ContactsTable $Contacts
 */
class ContactsController extends AppController
{
    /**
     * @inheritDoc
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        return parent::beforeFilter($event);
    }

    /**
     * @return \Cake\Http\Response|null|void
     */
    public function rapid()
    {
        $this->autoRender = false;

        $contact = $this->Contacts->createRapidContact($this->getRequest()->getData());

        if ($this->Contacts->save($contact)) {
            $this->sendEmail($contact);

            return;
        }

        $this->response = $this->response->withStatus(422);
    }

    /**
     * @return \Cake\Http\Response|null|void
     */
    public function roadTrip()
    {
        $this->autoRender = false;

        $contact = $this->Contacts->createRapidContact(['type' => 'road_trip', 'subject' => 'road_trip'] + $this->getRequest()->getData());

        if ($this->Contacts->save($contact)) {
            $this->sendEmail($contact);

            $this->Flash->success(__('Thank you, we are adding your city to the list if others and will let you know if we choose yours to visit.'), ['key' => 'contact']);
        }

        return $this->redirect('/roadtrip');
    }

    /**
     * @param \App\Model\Entity\Contact $contact contact
     * @return void
     */
    private function sendEmail($contact)
    {
        $email = new Mailer('default');

        $email
            ->setEmailFormat('text')
            ->setReplyTo($contact->email, $contact->name)
            ->setFrom([Configure::read('Site.contact.email') => 'CakeDC Website'])
            ->setTo(Configure::read('Site.contact.email'))
            ->setSubject($contact->subject)
            ->deliver($contact->body);
    }
}
