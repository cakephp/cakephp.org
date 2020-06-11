<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Email;
use Cake\Event\EventInterface;

/**
 * @property \App\Model\Table\ContactsTable $Contacts
 */
class ContactsController extends \App\Controller\AppController
{
    public function beforeFilter(EventInterface $event)
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
        $email = new \Cake\Mailer\Email('default');
        $email->setEmailFormat('text')->setReplyTo($contact->email, $contact->name)->setFrom([\Cake\Core\Configure::read('Site.contact.email') => 'CakeDC Website'])->setTo(\Cake\Core\Configure::read('Site.contact.email'))->setSubject($contact->subject)->send($contact->body);
    }
}
