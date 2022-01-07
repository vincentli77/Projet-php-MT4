<h1>Je suis une page article</h1>

<?php

echo $article->getTitle();
echo $article->getContent();

//  $lienModifier = html_a("Modifier", BLOG_URL_SITE . "admin/menu/menu_formulaire.php?menuAAfficher=$result[id_article]");
//  $lienSupprimer = html_a("Supprimer", BLOG_URL_SITE . "admin/menu/menu_supprimer.php?menuASupprimer=$result[id_article]", "alert", "Voulez-vous effacer cet article ?");
//  echo "<li>$result[nom]  ( $lienModifier | $lienSupprimer)</li>";

// if(!isset($_GET["articleASupprimer"])) { // on verifie que nous avons bien l'identifiant de notre article à supprimer.
//     ajouterErreur("Merci de choisir l'article à supprimer.");
// } else {
//     // on a l'identifiant, nous supprimons le menu
//     $bdd -> query("DELETE FROM article WHERE id_article = " . $_GET["articleASupprimer"]);
//     ajouterSuccess("L'article a été supprimer.");

// }

// changeDePage(BLOG_URL_SITE . "admin/articles/article_lister.php");
?>

