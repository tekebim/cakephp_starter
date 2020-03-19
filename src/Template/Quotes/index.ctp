<?php // src/Template/Quotes/index.ctp ?>

<h1>Liste des citations</h1>

<?php
// On compte le nombre d'éléments dans la liste
if ($list->count() == 0) {
    echo '<p>Désolé il n\'y a pas de contenu</p>';
} else {
    echo '<ul>';
    foreach ($list as $key => $value) {
        echo '<li>' . $value->content . ''. $this->html->link('voir la fiche', ['action' => 'view', $value->id ]).'</li>';
    }
    echo '</ul>';
}
?>
