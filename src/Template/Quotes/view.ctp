<?php // src/Template/Quotes/view.ctp ?>

<?php
// retourne une collection ( ce n'est pas un tableau )
// print_r($quote);
?>

<p>Id: <?= $quote->id ?></p>
<p>Content: <?= $quote->content ?></p>
<p>Author: <?= $quote->author ?></p>
<p>Created: <?= $quote->created ?></p>
<p>Modified: <?= $quote->modified ?></p>


<?= $this->Html->link('retour à la liste', ['action' => 'index']); ?>
