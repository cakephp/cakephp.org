<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Mailer\Email;

/**
 * @property \App\Model\Table\ContactsTable $Contacts
 */
class ContactsController extends AppController
{
    /**
     * @inheritDoc
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();

        return parent::beforeFilter($event);
    }

    /**
     * @return \Cake\Http\Response|null|void
     */
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

    /**
     * @return \Cake\Http\Response|null|void
     */
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

    /**
     * @param App\Model\Entity\Contact $contact contact
     * @return void
     */
    private function sendEmail($contact)
    {
        $email = new Email('default');

        $email
            ->setEmailFormat('text')
            ->setReplyTo($contact->email, $contact->name)
            ->setFrom([Configure::read('Site.contact.email') => 'CakeDC Website'])
            ->setTo(Configure::read('Site.contact.email'))
            ->setSubject($contact->subject)
            ->send($contact->body);
    }
}
