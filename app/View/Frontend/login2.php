<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <hr>
    <div class="box_connect">
        <form method="post">
            <!-- <label for="title"> Username: <input name="username" type="text"></label>
            <label for="content"> Password : <input name="password" type="text"></label>
            <input type="submit" value="Envoyer" /> -->
            <div class='bold-line'></div>
                    <div class='container'>
                    <div class='window'>
                        <div class='overlay'></div>
                        <div class='content'>
                        <div class='welcome'> Se connecter </div>
                        <div class='subtitle'>On y est presque. Avant d'utiliser nos services on a besoin que tu te connectes.</div>
                        <div class='input-fields'>
                            <input name="username" type='text' placeholder='Username' class='input-line full-width'></input>
                            <!-- <label for="title"> Username: <input name="username" type="text"></label> -->
                            <input name="password" type="text" type='password' placeholder='Password' class='input-line full-width'></input>
                            <!-- <label for="content"> Password : <input name="password" type="text"></label> -->
                        </div>
                        <div><button class='ghost-round full-width'><input type="submit" value="Se connecter" /></button></div>
                        <!-- <input type="submit" value="Envoyer" /> -->

                    </div>
                    </div>
                </div> 
        </form>

        <?php $check ?>


    </div>
    <!--  -->
    <hr>


</body>

</html>