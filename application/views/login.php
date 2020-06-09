<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/login.css';?>">

</head>
<body>
<form class="form-signin" action="<?php echo base_url().'index.php/auth/login';?>" method="post" name="frm" id="frm">

    <?php
    $msg = $this->session->flashdata('msg');
    if($msg != "") {
        ?>
        <div class="alert alert-danger">
            <?php echo $msg;?>
        </div>
        <?php
    }
    ?>

    <h1 class="h3 mb-3 font-weight-normal text-center">Please sign in</h1>
    <label for="email" class="sr-only">Email address</label>
    <input type="text" id="email" name="email" class="form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" placeholder="Email address" value="<?php echo set_value('email')?>" >
    <p class="invalid-feedback"><?php echo strip_tags(form_error('email'));?></p>

    <label for="password" class="sr-only">Password</label>
    <input type="password"  id="password" name="password" class="form-control <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" placeholder="Password">
    <p class="invalid-feedback"><?php echo strip_tags(form_error('password'));?></p>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    <div class="mt-3">
        <a href="<?php echo base_url().'index.php/auth/register';?>">Register here</a>
    </div>



</form>
</body>
</html>