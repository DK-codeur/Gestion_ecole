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

    <!-- Top Bar Start -->
    <?php include_once 'views/includes/header.php' ?>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <?php include_once 'views/includes/leftside.php' ?>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <h6 class="page-title">Inscription Elève: Veuillez remplir les champs correctement</h6>
                                </div>
                                <div class="col-md-4">
                                <?=  $error ?>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- <h4 class="mt-0 header-title text-muted"></h4> </h4> -->
                                            </div>
                                        </div>
                                        
                                        <div class="container mt-5">
                                                <form method="POST" action="">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nom">Nom</label>
                                                                <input id="nom" name="nom" type="text" class="form-control" value="<?=$nom?>">
                                                                <small class="text-danger"> <?=  $nomError ?> </small>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="prenoms">Prenoms</label>
                                                                <input id="prenoms" name="prenoms" type="text" class="form-control" value="<?=$prenoms?>">
                                                                <small class="text-danger"> <?=  $prenomsError ?> </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="naissance">Date de naissance</label>
                                                                <input id="naissance" name="naissance" type="date" class="form-control" value="<?=$naissance?>">
                                                                <small class="text-danger"> <?=  $naissanceErrror ?> </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="sexe">Sexe</label>
                                                                <select id="sexe" name="sexe" class="form-control">
                                                                    <option value="">--Selectionner le genre--</option>
                                                                    <option value="M">Masculin </option>
                                                                    <option value="F">Feminin</option>
                                                                </select>
                                                                <small class="text-danger"> <?=  $sexeError ?> </small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="classe">classe</label>
                                                                <select id="classe" name="classe" class="form-control">
                                                                    <option value="">--Selectionner la classe--</option>
                                                                    <?php  foreach ($allClasse as $index => $classe) : ?>

                                                                    <option value="<?=$classe['nom']?>"> <?=$classe['nom'] ?> </option>

                                                                    <?php  endforeach; ?>
                                                                </select>
                                                                <small class="text-danger"> <?=  $classeError ?> </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="matricule">Matricule</label>
                                                                <input id="matricule" name="matricule" type="text" class="form-control" value="<?=$matricule?>">
                                                                <small class="text-danger"> <?=  $matriculeError ?> </small>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="commune">Quartier/commune </label>
                                                                <select id="commune" name="commune" class="form-control">
                                                                    <option value="">--Selectionner la commune--</option>
                                                                    <?php  foreach ($allCommune as $index => $commune) : ?>

                                                                    <option value="<?=$commune['nom']?>" > <?=$commune['nom'] ?> </option>

                                                                    <?php  endforeach; ?>
                                                                </select>
                                                                <small class="text-danger"> <?=  $communeError ?> </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="telephone">Telephone parent</label>
                                                                <input id="telephone" name="telephone" type="number" class="form-control" min="8" value="<?=$telephone?>">
                                                                <small class="text-danger"> <?=  $telephoneError ?> </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div style="width: 60%; margin: auto">
                                                        <button type="submit" class="btn btn-primary btn-block">Inscrire l'eleve</button>
                                                    </div>
                                                </form>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

            </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<?php include_once 'views/includes/footer.php' ?>

</body>
</html>