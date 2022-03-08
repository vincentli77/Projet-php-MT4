<div class="blogCreateArticle ">
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
    <h1 class="form-title">Créer un article</h1>
    <div class="grid">
        <div class="form-group">
            <input type="text" name="authorId" id="name" placeholder="Author Id ">
            <!-- <label for="authorId"> Author Id : <input name="authorId" type="text"></label>  -->
        </div>
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
        <button type="submit" class="btn" value="Envoyer"><a class="submit" href="http://localhost:5555/">Votre mon
                article prendre son envol</a></button>
        <!-- <input type="submit" value="Envoyer" /> -->
    </div>
</form>
</div>