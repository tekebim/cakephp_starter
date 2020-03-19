<?php // src/Template/Quotes/view.ctp ?>

<?php
// retourne une collection ( ce n'est pas un tableau )
// print_r($quote);
?>

<p>Id: <?= $quote->id ?></p>
<p>Content: <?= $quote->content ?></p>
<p>Author: <?= $quote->author ?></p>
<p>Created: <?= $quote->created->i18nFormat('dd/MM/yyy HH:mm:ss') ?></p>
<p>Modified: <?= $quote->modified->i18nFormat('dd/MM/yyy HH:mm:ss') ?></p>

<p>
    <?= $this->Form->postLink('Supprimer cette citation', ['action' => 'delete', $quote->id]); ?>
</p>
<p>
    <?= $this->Html->link('Modifier la citation', ['action' => 'edit', $quote->id]); ?>
</p>
<p>
    <?= $this->Html->link('Retour à la liste', ['action' => 'index']); ?>
</p>
