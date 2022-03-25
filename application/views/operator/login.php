<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://simunipa.unipa.ac.id/gtakademik/images/logo_client.png">

    <title>Login - PMB Online Unipa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
    <style>
        button.btn.btn-lg.btn-primary.btn-block {
            background-color: #673ab7;
            border: 0;
        }

        form.form-signin input {
            border-radius: 5px !important;
        }

        .form-signin {
            width: 100%;
            max-width: 450px;
            padding: 20px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px 3px 6px 0px rgb(0 0 0 / 10%), 0px 1px 3px 0px rgb(0 0 0 / 8%);
        }

        body.text-center {
            background-image: url(http://simunipa.unipa.ac.id/gtakademik/assets/versi_3.0/img/grid.png);
            background-position: center;
        }
    </style>
</head>
 
<body class="text-center">
    <?php echo $this->session->flashdata('message'); ?></p>
    <?php echo form_open("auth/login", array('class' => 'form-signin'));  ?>
    <!-- <form class="form-signin"> -->
    <img class="mb-4" src="http://simunipa.unipa.ac.id/gtakademik/images/logo_client.png" alt="" width="72" height="72">
    <h1 class="h3 mb-5 font-weight-bold">Login Panel Admin PMB Sesama</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input name="identity" type="text" id="inputEmail" class="form-control mb-4 mt-4" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control  mb-4 mt-4" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
    <p class="mt-5 mb-3 text-muted text-small">Portal PMB Unipa &copy; 2021. Hak Cipta Dilindungi Undang-Undang.</p>
    <!-- </form> -->
    <?php echo form_close(); ?>

</body>

</html>