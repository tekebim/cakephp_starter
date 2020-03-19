<?php // src/Template/Quotes/edit.ctp ?>

<?php // var_dump($elmt); ?>

<?= $this->Form->create($elmt) ?>
    <?= $this->Form->control('content') ?>
    <?= $this->Form->control('author') ?>
    <?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>
