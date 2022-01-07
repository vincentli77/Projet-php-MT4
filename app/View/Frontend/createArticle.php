<h1>Gestion des articles</h1>
<form method="post">
    <input name="title" type="text">
    <input name="content" type="text">
    <input name="authorId" type="text">
    <input type="submit" value="Envoyer" />
</form>


<!-- <?php
// show_error();
// show_success();
?> -->

<div class="form">
    <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
    <form enctype="multipart/form-data" action="menu_formulaire_reponse.php" method="post">

        <div class="field">
            Titre : <input name="titre" placeholder="Titre" type="text" value="<?php echoKey($menuAModifier, "titre")  ?>">
        </div>

      <div class="field">
            Content : <input name="content" placeholder="Content" type="text" value="<?php echoKey($articleAModifier, "content")?>">
        </div>

        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000000" /> -->

        <!-- <div class="image_admin">
        <?php
        if(!empty($_GET["menuAAfficher"])) {
            echo html_image("image/menu/$_GET[menuAAfficher].jpg", "mini_image");
            }
        ?> -->
        </div>

        <div>
        Image du menu : <input name="imageMenu" type="file"  accept="image/jpeg" />
        </div>

        <input type="submit" value="Envoyer" />
        <a href="<?php echo RESTO_URL_SITE ?>admin/accueil.php" class="button">Annuler</a>

    </form>

</div>

<?php