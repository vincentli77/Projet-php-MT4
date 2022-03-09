<form method="post">
    <!-- <?php echo $user->getId();?> -->
    <label for="nickname">nickname</label>
    <input name="nickname" type="text" value="<?php echo $user->getNickname();?>">
    <br>
    <label for="password">password</label>
    <input name="password" type="password" value="">
    <br>
    <label for="rank">rank</label>
    <input name="rank" type="text" value="<?php echo $user->getRank();?>">
    <br>
    <input type="submit" value="modify">
</form>