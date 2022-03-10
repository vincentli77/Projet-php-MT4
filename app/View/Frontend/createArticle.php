<div class="blogCreateArticle ">
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


    <form class="form" method="post">
        <h1 class="form-title">Créer un article</h1>
        <div class="grid">

            <div class="form-group">
                <input type="text" name="title" id="title" placeholder="Titre:">
                <!-- <label for="title"> Titre: <input name="title" type="text"></label>  -->
            </div>
            <div class="form-group">
                <input type="text" name="content" id="content" placeholder="Content">
                <!-- <label for="content"> Content : <input name="content" type="text"></label>  -->
            </div>
            <div class="form-group">
                <!-- <textarea name="message" id="message" placeholder="Your message goes here"></textarea> -->
                <input type="submit" value="Envoyer" />
            </div>
            <!-- <input type="submit" value="Envoyer" /> -->
        </div>
    </form>
</div>