<?php
// src

namespace App\Model\Table;

use Cake\ORM\Table;

class QuotesTable extends Table {
    public function initialize(array $config)
    {
        // permet que l'app gere toute seule les champs created et modified
        $this->addBehavior('Timestamp');
        // parent::initialize($config);
    }
}
