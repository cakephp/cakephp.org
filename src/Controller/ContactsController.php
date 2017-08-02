<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Email;
use Cake\Event\Event;

/**
 * @property \App\Model\Table\ContactsTable $Contacts
 */
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

    public function roadTrip()
    {
        $this->autoRender = false;

        $contact = $this->Contacts->createRapidContact(['type' => 'road_trip', 'subject' => 'road_trip'] + $this->request->data);

        if ($this->Contacts->save($contact)) {
            $this->sendEmail($contact);

            $this->Flash->success(__('Thank you, we are adding your city to the list if others and will let you know if we choose yours to visit.'), ['key' => 'contact']);
        }

        return $this->redirect('/roadtrip');
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
