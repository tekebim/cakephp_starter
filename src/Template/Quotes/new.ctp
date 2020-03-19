<?php // src/Template/Quotes/view.ctp ?>

<?php
// WARNING : Use Form with F majuscule
// Debut du formulaire
?>

<?= $this->Form->create($new) ?>
<?= $this->Form->control('content') ?>

<?php
// fin du formulaire
?>

<?= $this->Form->end() ?>
