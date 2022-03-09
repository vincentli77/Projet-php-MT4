<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form class="login" method="post">
        <div class="register h-100">
            <div class="row h-100 d-flex align-items-center">
                <div class="col-md-4 offset-md-4">
                    <div class="loginWrapper p-5 rounded">
                        <h4 class="mb-4 text-center text-uppercase">Login</h4>

                        <div class="inputBox mb-4">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="fname">
                        </div>
                        <div class="inputBox mb-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="pwd">
                        </div>
                        <div class="inputBox mb-4">
                            <input type="submit" class="btn btn-default btn-block" value="Sign In">
                        </div>
                        <p class="text-center"> Register?<a href="/register">Click here !</a></p>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- </div> -->

    <?php $check ?>

</body>

</html>