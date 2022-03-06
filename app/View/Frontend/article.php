<a href="/">Home</a>

<div class="blog-header-container">
    <div class="blog-header">
                <div class="blog-article header-article">
                    <div class="blog-big__title">
                        <?php
                        echo $article->getTitle(); ?><br>
                        <div class="blog-menu small-title date">
                        <?php echo $article->getCreatedAt()->format('D, d M Y H:i') ?></div>
                        </div>
                            <div class="blog-article">
                            <div class="blog-detail">
                        <?php
                        echo $article->getContent();
                        ?>
                    </div>
                </div>
    </div>
</div>