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
