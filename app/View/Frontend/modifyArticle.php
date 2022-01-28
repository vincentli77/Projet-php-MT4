<form method="post">
    <input name="title" type="text" value="<?php echo $article->getTitle();?>">
    <textarea name="content" id="" cols="30" rows="10"><?php echo $article->getContent();?></textarea>
    <input name="authorId" type="text" value="<?php echo $article->getAuthorId();?>">
    <input type="submit" value="modify">
</form>