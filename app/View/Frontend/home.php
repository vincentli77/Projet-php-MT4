<h1>Je suis la page d'accueil</h1>
<h2> Liste des articles </h2>
<?php
// show_error();
// show_success();
?>
    <div class="articles">
        <a href="/">Retour à l'accueil</a> <!-- RESTO URL SITE configurer dans config -->
        <a href="/">Ajouter un article</a>
    </div>

    <button><a href="/createArticle"></a></button>

    <div class="list">
        <?php
        foreach ($articles as $key => $article) {
           if(count($articles) == 0) { //si y a 0  resultat
                echo "Aucun articles"; // on affiche aucun article
            } else {               // sinon
                echo "<ul>";
                echo $article->getId();
                echo $article->getTitle();
                echo $article->getContent();
                ?>
                <a href="/article/<?php echo $article->getId()?>">Voir l'article</a>
                <?php
                echo "</ul>";
            }
        }
        ?>
    </div>
<?php
