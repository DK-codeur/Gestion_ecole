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
                        
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-md-8">
                            
                                <div class="card">
                                    <div class="card-body">
                                        <div class="container mt-2">
                                            <div class="page-title-box">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6">
                                                        <h4 class="page-title">Ajouter une commune</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                            <div style="width: 60%; margin: auto;">
                                                <form method="POST" action="">
                                                    <h6 class="text-danger "> <?=  $error ?> </h6>
                                                    <br>
                                                    <label for="commune">Nom de la commune</label>
                                                    <input id="commune" name="commune" type="text" class="form-control" placeholder="Entrer le nom de la commune" value="<?=$commune?>">
                                                    <small class="text-danger"> <?=  $communeError ?> </small>

                                                    <div style="width: 60%; margin: 4% auto">
                                                        <button type="submit" class="btn btn-primary btn-block">Enregister</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <h6 class="font-weight-bold">Commune Enregistrées (<?= $countAllCommune['total_commune'] ?>) </h6>
                                    <ol>
                                        <?php  foreach ($allCommune as $index => $commune) : ?>

                                            <li><?=$commune['nom']?></li>

                                        <?php  endforeach; ?>
                                    </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

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
    
<script>

    let valInput = '';
    let valInput2 = '';

    $('#niveau').change(function() {
        valInput = $(this).val();
        $('.niveauLive').text('classe: ' + valInput);
    })

    $('#numerotation').keyup(function() {

        valInput2 = $(this).val();
        $('.numLive').text(valInput2) ;
    });


</script>

</body>
</html>