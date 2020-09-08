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
                        
                        <div class="col-sm-6">
                            <h4 class="page-title">Effectifs</h4>

                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    
                    <!-- end col -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="header-title mt-0 mb-5">Effectifs par Niveau</h4>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"><a href="effectif-par-niveau">6ème</a></th>
                                                <th scope="col">5ème</th>
                                                <th scope="col">4ème</th>
                                                <th scope="col">3ème</th>
                                                <th scope="col">2nd</th>
                                                <th scope="col">1ème</th>
                                                <th scope="col">Tle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="effectifs">
                                                <td><a href="effectif-par-niveau">69</a></td>
                                                <td><a href="#">24</a></td>
                                                <td><a href="#">22</a></td>
                                                <td><a href="#">35</a></td>
                                                <td><a href="#">33</a></td>
                                                <td><a href="#">29</a></td>
                                                <td><a href="#">41</a></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 mb-5 header-title">Effectif total</h4>

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
                                        <?php  foreach($allStudent as $index => $student) : ?>
                                        <tr>
                                            <td><?=$student['matricule']?></td>
                                            <td><a href=""><?=$student['nom']?></a></td>
                                            <td><?=$student['prenoms']?></td>
                                            <td><?=$student['sexe']?></td>
                                            <td><?=date_format(date_create($student['naissance']), "d-m-Y")?></td>
                                            <td><?=$student['classe']?></td>
                                            <td><?=$student['commune']?></td>
                                            <td><?=$student['telephone']?></td>
                                            <td><a href="student-page-<?=$student['id_student']?>-<?=str_replace(' ','-', $student['nom']) ?>-<?=str_replace(' ','-', $student['prenoms']) ?>" class="btn btn-outline-primary">voir+</a></td>
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
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<?php include_once 'views/includes/footer.php' ?>
<?php include_once 'views/includes/scripts.php' ?>

</body>
</html>