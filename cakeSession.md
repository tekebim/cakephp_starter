Noms des tables toujours au pluriel et en anglais.

3 tables obligatoires :

- id
- created
- modified



---------------------------

Pour gérer des objets

models
Model/Entity
Model/Table


> /!\ pour les namespace et use il utilise toujours des \ au lieu de /
`exemple : namespace App\Model\Entity;`

Exemples pour un objet "Quote" :
Model/Entity/Quote.php
Model/Table/QuotesTable.php
Controller/QuotesController.php

> /!\ Bien respecter les majuscules / minucules
`QuotesController`

> créer la vue
` src/Template/Quotes/hello.ctp`

> création d'une méthode index

> création lien
Utilisation d'un helper (link) qui prend deux params ( nom, [lien : nom de l'action => param ])
$ $this->Html->link('voir la fiche', ['action' => 'view'])

> création d'un formulaire au travers d'une méthode Form de CakePHP
`$this->Form->create()
$this->Form->end()`
