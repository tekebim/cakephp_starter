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
        $this->set('c', $c);
    }
}
