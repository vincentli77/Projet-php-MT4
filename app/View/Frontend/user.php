
<div class="blogCreateUser">
    <div class="blog-part is-menu">
        <a href="/" class="blog-menu">
            Blog
            <svg fill="none" stroke="currentColor" stroke-width=".7" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-arrow-up-right" viewBox="0 0 24 24">
                <path d="M7 17L17 7M7 7h10v10" />
            </svg>
        </a>
        <a href="/users" class="blog-menu">User</a>
        <a href="/createArticle" class="blog-menu">Add Article</a>
        <a href="/logout" class="blog-menu">Disconnect</a>
        <a href="#" class="blog-menu mention">@LynchVinceLau</a>
        <a href="#" class="blog-menu subscribe">Subscribe</a>
    </div>

        <form class="form" method="post">
            <h1 class="form-title">Créer un user</h1>
            <div class="grid">
                <div class="form-group">
                    <input type="text" name="userId" id="userId" placeholder="User Id ">
                    <!-- <label for="authorId"> Author Id : <input name="authorId" type="text"></label>  -->
                </div>
                <div class="form-group">
                    <input type="text" name="name" id="user name" placeholder="User Name">
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
</div>

<div class="displaynone">
    <?php
// /** @var $article \App\Entity\Post */


// probleme avec ce bloc, si je le supprime ca fait tout peter x) 
foreach ($users as $key => $user) {
    echo $user->getId();
    echo $user->getNickname();
    echo $user->getRank();
     ?>
 <a href="/modifyUser/<?php echo $user->getId()?>">Modifier cet utilisateur</a> 
 <a href="/deleteUser/<?php echo $user->getId()?>">Supprimer cet utilisateur</a>

<?php } ?> 
</div>


<!-- USERS -->
<h1> Users list </h1>

<div class="blog-header-container">
        <!----------------- l'article 1 ------------------>

        <?php

        
        foreach ($users as $key => $user) {
           if(count($users) == 0) { //si y a 0  resultat
                echo "Aucun articles"; // on affiche aucun article
            } else if($key<3){   
            // sinon
                ?>
        <div class="blog-header">
            <div class="blog-article header-article">
                <div class="blog-big__title"><?php echo $user->getNickname();?></div>
                <div class="blog-menu small-title date">
                    <?php echo $user->getCreatedAt()->format('D, d M Y H:i') ?></div>
            </div>

            <div class="blog-article">
                <div class="blog-detail">
                    <span><a style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                            href="/modifyUser/<?php echo $user->getId()?>">Modifier cet user</a>
                    </span>

                    <span> <a style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                            href="/deleteUser/<?php echo $user->getId()?>">Supprimer cet user</a>
                    </span>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
