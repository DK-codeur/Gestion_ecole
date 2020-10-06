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
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h4 class="page-title">Ajouter une nouvelle classe</h4>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="float-right"> 
                                        <span class="niveauLive"></span><span class="numLive"></span> 
                                    </div>

                                        <div class="container mt-5">
                                            <div style="width: 70%; margin: auto;">
                                                <form method="POST" action="">
                                                    <div class="form-group">
                                                        <h5 class="text-warning "> <?=  $error ?> </h5>
                                                        <br>
                                                        <label for="niveau">Niveau</label>
                                                        <select id="niveau" name="niveau" class="form-control">
                                                            <option value="">--Selectionner le niveau--</option>
                                                            
                                                            <option value="6eme">6eme</option>
                                                            <option value="5eme">5eme</option>
                                                            <option value="4eme">4eme</option>
                                                            <option value="3eme">3eme</option>
                                                            <option value="2ndA">2ndA</option>
                                                            <option value="2ndC">2ndC</option>
                                                            <option value="1ereA">1ereA</option>
                                                            <option value="1ereC">1ereC</option>
                                                            <option value="1ereD">1ereD</option>
                                                            <option value="TleA">TleA</option>
                                                            <option value="TleC">TleC</option>
                                                            <option value="TleD">TleD</option>
                                                        </select>
                                                        <small class="text-danger"> <?=  $niveauError ?> </small>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="numerotation">Numerotation</label>
                                                        <input id="numerotation" name="numerotation" type="number" class="form-control">
                                                        <small class="text-danger"> <?=  $numError ?> </small>
                                                    </div>

                                                    
                                                    <div style="width: 60%; margin: auto">
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
                                    <h6 class="font-weight-bold">Liste des classes (<?= $countAllClasse['total_classe'] ?>) </h6>
                                    <ul>
                                        <?php  foreach ($allClasse as $index => $classe) : ?>

                                            <li><?=$classe['nom']?></li>

                                        <?php  endforeach; ?>
                                    </ul>
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