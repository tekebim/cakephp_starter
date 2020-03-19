<?php // src/Template/Quotes/view.ctp ?>

<?php
// WARNING : Use Form with F majuscule
// Debut du formulaire
?>

<?= $this->Form->create($new) ?>
    <?= $this->Form->control('content') ?>
    <?= $this->Form->control('author') ?>
    <?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>

<?php
// fin du formulaire
?>
