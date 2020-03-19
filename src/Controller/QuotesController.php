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
}
