<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title><?= WEBSITE_TITLE .' | '. ucfirst($page); ?></title>
</head>
<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper-page">
        
            <div class="card overflow-hidden account-card mx-3">
                
                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 m-b-5">Welcome Back !</h4>
                    <p class="text-white-50 mb-4">Sign in to continue.</p>
                    <a href="index.html" class="logo logo-admin"><img src="assets/images/logoWMC-01.png" height="50" alt="logo"></a>
                </div>
                <div class="account-card-content"> 

                    <form method="POST" action="" class="form-horizontal m-t-30">
                        <div class="my-3 text-center">
                            <div class="alert alert-<?= $isSuccess ? 'success' : 'danger' ?> bg-<?= $isSuccess ? 'success' : 'white' ?> text-white" role="alert">
                                <strong class="text-<?= $isSuccess ? 'white' : 'danger' ?>"><?= $error ?></strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Entrer votre Email" value="<?=$email?>">
                            <small class="text-danger"> <?=  $emailError ?> </small>
                        </div>

                        

                        <div class="form-group">
                            <label for="pass">Mot de Passe</label>
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Enter votre Mot de Passe">
                            <small class="text-danger"><?= $passError ?> </small>
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-sm-6">
                                
                            </div>
                            <div class="col-sm-6 text-right">
                                <button type="submit" class="btn btn-primary w-md waves-effect waves-light" >Se Connecter</button>
                            </div>
                        </div>

                        <!-- <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                            </div>
                        </div> -->
                    </form>

                </div>
            </div>


        </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->


<?php include_once 'views/includes/footer.php' ?>

</body>
</html>