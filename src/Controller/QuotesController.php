<?php

// src/Controller/QuotesController.php

namespace App\Controller;

class QuotesController extends AppController
{
    // action
    public function hello()
    {

    }

    // action
    public function content()
    {
        $c = 'Bonjour';

        // On transmet une variable
        // On peut lui donner un nom perso / renommer comme on veut pour la transmission avec la vue
        $this->set('c', $c);
    }

    // action
    public function index()
    {
        // on récupère tous les éléments de la BDD
        $list = $this->Quotes->find();
        // envoi les infos à la vue
        $this->set('list', $list);
    }

    // action view qui prend un parametre, pour recuperer les infos d'un id en particulier
    public function view($id) {
        // methode get / plutot que find()->where() ...
        $quote = $this->Quotes->get($id);
        $this->set('quote', $quote);
    }

    // action pour creer un nouveau
    public function new() {
        // On creer une entite vide, qu on va transmettre a notre vue
        $new = $this->Quotes->newEntity();

        // Si on est en methode post
        if($this->request->is('post')){
            // On fait l enregistrement
            // On recupere le contenu des elements du formulaire pour les placer dans l'entité vide
            $new = $this->Quotes->patchEntity($new, $this->request->getData());

            // Si l enregistrement peut se faire
            if($this->Quotes->save($new)){
                // On creer un message de succes
                $this->Flash->success('Ok, citation enregistrée');
                // On redirige vers la liste global des citations
                return $this->redirect(['action' => 'index']);
            }
            // Message de plantage
            $this->Flash->error('plante');
        }

        // $this->set('new', $new);
        // equivalent en compact ( car la varible transmise aura le meme nom que celle du controller )
        $this->set(compact('new'));
    }
}
