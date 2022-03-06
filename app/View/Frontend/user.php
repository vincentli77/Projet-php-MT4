<h1>Je suis la page users</h1>


<?php
// /** @var $article \App\Entity\Post */

foreach ($users as $key => $user) {
    echo $user->getId();
    echo $user->getNickname();
    echo $user->getRank();
    ?>
<a href="/modifyUser/<?php echo $user->getId()?>">Modifier cet utilisateur</a>
<a href="/deleteUser/<?php echo $user->getId()?>">Supprimer cet utilisateur</a>

<?php } ?>