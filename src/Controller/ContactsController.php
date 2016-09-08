<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Email;
use Cake\Event\Event;

class ContactsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();

        return parent::beforeFilter($event);
    }

    public function rapid()
    {
        $this->autoRender = false;

        $contact = $this->Contacts->createRapidContact($this->request->data);

        if ($this->Contacts->save($contact)) {
            $this->sendEmail($contact);

            return;
        }

        $this->response->statusCode(422);
    }

    private function sendEmail($contact)
    {
        $email = new Email('default');

        $email
            ->emailFormat('text')
            ->replyTo($contact->email, $contact->name)
            ->from([Configure::read('Site.contact.email') => 'CakeDC Website'])
            ->to(Configure::read('Site.contact.email'))
            ->subject($contact->subject)
            ->send($contact->body);
    }
}
