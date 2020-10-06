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
   
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
    <!-- END wrapper --> 
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        
                        <div class="col-sm-6">
                            <h4 class="page-title">Effectif <?= $niv ?> </h4>
                        </div>
                    </div>
                </div>
                
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>Nom</th>
                                            <th>Prenoms</th>
                                            <th>sexe</th>
                                            <th>Date de N.</th>
                                            <th>Classe</th>
                                            <th>Commune</th>
                                            <th>Tel. parent</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php  foreach($effectifLikeNiveau as $index => $niveau) : ?>
                                        <tr>
                                            <td><?=$niveau['matricule']?></td>
                                            <td><a href="student-page-<?=$niveau['id_student']?>-<?=str_replace(' ','-', $niveau['nom']) ?>-<?=str_replace(' ','-', $niveau['prenoms']) ?>"><?=strtoupper($niveau['nom'])?></a></td>
                                            <td><?=$niveau['prenoms']?></td>
                                            <td><?=$niveau['sexe']?></td>
                                            <td><?=date_format(date_create($niveau['naissance']), "d-m-Y")?></td>
                                            <td><?=$niveau['id_classe']?></td>
                                            <td><?=$niveau['id_commune']?></td>
                                            <td><?=$niveau['telephone']?></td>
                                            <td><a href="student-page-<?=$niveau['id_student']?>-<?=str_replace(' ','-', $niveau['nom']) ?>-<?=str_replace(' ','-', $niveau['prenoms']) ?>" class="btn btn-outline-primary">voir+</a></td>
                                        </tr>
                                        <?php  endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                <!-- end row -->
                

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->

    </div>

<?php include_once 'views/includes/footer.php' ?>

</body>
</html>