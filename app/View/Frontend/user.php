<a href="/">Home</a>

<h1> Users list </h1>


<form class="form" method="post">
    <h1 class="form-title">Créer un user</h1>
    <div class="grid">
        <div class="form-group">
            <input type="text" name="userId" id="name" placeholder="User Id ">
            <!-- <label for="authorId"> Author Id : <input name="authorId" type="text"></label>  -->
        </div>
        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="User Name">
            <!-- <label for="title"> Titre: <input name="title" type="text"></label>  -->
        </div>
        <div class="form-group">
            <input type="text" name="content" id="content" placeholder="User Rank">
            <!-- <label for="content"> Content : <input name="content" type="text"></label>  -->
        </div>
        <div class="form-group">
            <!-- <textarea name="message" id="message" placeholder="Your message goes here"></textarea> -->
            <input type="submit" value="Envoyer" />
        </div>
        <button type="submit" class="btn" value="Envoyer"><a class="submit" href="http://localhost:5555/">Votre
                user prendre son envol</a></button>
        <!-- <input type="submit" value="Envoyer" /> -->
    </div>
</form>

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