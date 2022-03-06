<div class="blog">
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


    <!-- ----------------- Coté statique ---------- ----------------- -->

    <div class="blog-header blog-is-sticky">
        <div class="blog-article header-article">
            <div class="blog-big__title">Self</div>
            <div class="blog-menu rounded small-title">Pinned Issue</div>
        </div>
        <div class="blog-article page-number">
            NO. 01
        </div>
    </div>

    <!-- ----------------- cote article qui défile------------ ----------------- -->
    <!----------------- l'article 1 ------------------>
    <div class="blog-header-container">
        <!----------------- l'article 1 ------------------>

        <?php

        
        foreach ($articles as $key => $article) {
           if(count($articles) == 0) { //si y a 0  resultat
                echo "Aucun articles"; // on affiche aucun article
            } else if($key<3){   
            // sinon
                ?>
        <div class="blog-header">
            <div class="blog-article header-article">
                <div class="blog-big__title"><?php echo $article->getTitle();?></div>
                <div class="blog-menu small-title date">
                    <?php echo $article->getCreatedAt()->format('D, d M Y H:i') ?></div>
            </div>
            <div class="blog-article">
                <img src="https://images.unsplash.com/photo-1496629062893-b0f566065d44?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGJsYWNrJTIwYW5kJTIwd2hpdGV8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <h2>Sharing The <span>Widespread</span> Acclaim About Motivation</h2>

                <div class="blog-detail">
                    <span><?php echo $user[$article->getAuthorId()]['nickname']?></span>
                    <span><a style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                            href="/modifyArticle/<?php echo $article->getId()?>">Modifier cet
                            article</a>
                    </span>


                    <span> <a style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                            href="/deleteArticle/<?php echo $article->getId()?>">Supprimer cet article</a>

                    </span>



                </div>

                <p><?php echo substr($article->getContent(),0,200).'...';?></p>
                <a href="/article/<?php echo $article->getId()?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right"
                        viewBox="0 0 24 24">
                        <path d="M15 10l5 5-5 5" />
                        <path d="M4 4v7a4 4 0 004 4h12" />
                    </svg>
                    See More
                </a>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>

    <!-- -------------- PARTIE DE DROITE ------------ -->
    <div class=" blog-part right-blog">
        <!-- la bande passante qui tourne en boucle -->
        <marquee width="100%" direction="left">
            <span>Now And Then You Miss It Sounds Make You Cry</span>
            <span>Now In - MoMa Sharing Exhibition NOW</span>
            <span>NYC Opens After Long Lockdown Check</span>
        </marquee>

        <div class="blog-right-title-container">
            <div class="blog-right-title">
                New Articles
            </div>
            <div class="blog-menu rounded">See All</div>
        </div>

        <div class="blog-right">
            <!-- 1er article -->

            <?php
        
        foreach ($articles as $key => $article) {
           if(count($articles) == 0) { //si y a 0  resultat
                echo "Aucun articles"; // on affiche aucun article
            } else if($key>2) {        
                ?>
            <div class="blog-right-container">
                <div class="blog-title-date">
                    <div class="blog-right-page"><?php echo $key-2;?></div>
                    <div class="date"><?php echo $article->getCreatedAt()->format('D, d M Y H:i') ?></div>
                </div>
                <div class="blog-right-page-title"><?php echo $article->getTitle();?></div>
                <div class="blog-right-page-subtitle">
                    <?php echo substr($article->getContent(),0,200).'...';?></div>
            </div>
            <div class="editArticle">
                <span><a style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                        href="/modifyArticle/<?php echo $article->getId()?>">Modifier cet
                        article</a>
                </span>


                <span> <a style="font-size:initial;font-weight:bold;border-top:unset;padding-top:unset"
                        href="/deleteArticle/<?php echo $article->getId()?>">Supprimer cet article</a>

                </span>
            </div>

            <?php
            }
        }
        ?>

            <div class="circle">
                <div class="circle-title">Leave Your Old Life Behind</div>
                <div class="circle-subtitle">Don't try to be like someone else, be yourself. Be secure with
                    yourself.
                </div>
                <div class="circle-footer">Explore</div>
            </div>

        </div>
<<<<<<< Updated upstream
=======
        </div>
</div>

<h1> En attendant voici la liste de tous vos articles</h1>

<?php
// show_error();
// show_success();
?>
    <div class="articles">
        <a href="/">Retour à l'accueil</a> <!-- RESTO URL SITE configurer dans config -->
        <a href="/createArticle">Ajouter un article</a>
>>>>>>> Stashed changes
    </div>
</div>
<ul class="list">

    <?php
        
        foreach ($articles as $key => $article) {
           if(count($articles) == 0) { //si y a 0  resultat
                echo "Aucun articles"; // on affiche aucun article
            } else {               // sinon
                echo "<li>";
                echo $article->getId(); 
                echo "<hr>";
                echo $article->getTitle();
                echo "<hr>";
                echo $article->getContent();
                echo "</li>";
                ?>
    <a href="/article/<?php echo $article->getId()?>">Voir l'article</a>
    <a href="/modifyArticle/<?php echo $article->getId()?>">Modifier cet article</a>
    <a href="/deleteArticle/<?php echo $article->getId()?>">Supprimer cet article</a>
    <?php
            }
        }
        ?>

    <div class="blog-header-container">
        <!----------------- l'article 1 ------------------>

        <div class="blog-header">
            <div class="blog-article header-article">
                <div class="blog-big__title">Esteem</div>
                <div class="blog-menu small-title date">12.06.2022</div>
            </div>
            <div class="blog-article">
                <img src="https://images.unsplash.com/photo-1496629062893-b0f566065d44?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGJsYWNrJTIwYW5kJTIwd2hpdGV8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <h2>Sharing The <span>Widespread</span> Acclaim About Motivation</h2>

                <div class="blog-detail">
                    <span>By Richard Carnation</span>
                    <span>5 Min Read</span>
                </div>

                <p>Blonde received widespread acclaim, with critics praising Ocean's introspective lyrics and
                    the album's unconventional</p>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-right"
                        viewBox="0 0 24 24">
                        <path d="M15 10l5 5-5 5" />
                        <path d="M4 4v7a4 4 0 004 4h12" />
                    </svg>
                    See More
                </a>
            </div>
        </div>
</ul>