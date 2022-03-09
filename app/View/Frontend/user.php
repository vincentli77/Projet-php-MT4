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

            <!-- <input type="submit" value="Envoyer" /> -->
        </div>
    </form>
</div>