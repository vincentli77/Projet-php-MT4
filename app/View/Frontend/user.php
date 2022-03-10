<div class="blogCreateUser">
    <div class="blog-part is-menu">
        <p><strong>Hello <?php echo $_SESSION['prenom'] ?></strong></p>
        <a href="/" class="blog-menu">
            Home
            <svg fill="none" stroke="currentColor" stroke-width=".7" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-arrow-up-right" viewBox="0 0 24 24">
                <path d="M7 17L17 7M7 7h10v10" />
            </svg>
        </a>
        <a href="/users" class="blog-menu">User</a>
        <a href="/createArticle" class="blog-menu">Add Article</a>
        <a href="/logout" class="blog-menu">Disconnect</a>
        <a href="#" class="blog-menu mention">Created by @LynchVinceLau</a>
    </div>


    <div style="display: initial;" class="blog-header-container">
        <!----------------- l'article 1 ------------------>

        <?php

        
        foreach ($users as $key => $user) {
           if(count($users) == 0) { //si y a 0  resultat
                echo "Aucun articles"; // on affiche aucun article
            } else if($key<3){   
            // sinon
                ?>
        <div style="min-height:unset" class="blog-article">
            <div><?php echo $user->getNickname();?></div>

        </div>

        <div style="min-height:unset" class="blog-article">
            <div style="justify-content: initial; align-items: flex-start;" class="blog-detail">
                <span style="margin: 0 1rem 1rem 0"><a
                        style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                        href="/modifyUser/<?php echo $user->getId()?>">Modifier cet user</a>
                </span>

                <span> <a style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                        href="/deleteUser/<?php echo $user->getId()?>">Supprimer cet user</a>
                </span>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>

</div>