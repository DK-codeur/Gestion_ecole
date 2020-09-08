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
                                    <h4 class="page-title">Ajouter une nouvelle classe</h4>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container mt-5">
                                        <div style="width: 70%; margin: auto;">
                                            <form method="POST" action="#">
                                                <div class="form-group">
                                                    <label for="niveau">Niveau</label>
                                                    <select id="niveau" name="niveau" class="form-control">
                                                        <option value="">--Selectionner le niveau--</option>
                                                        
                                                        <option value="">6ème</option>
                                                        <option value="">5ème</option>
                                                        <option value="">4ème</option>
                                                        <option value="">3ème</option>
                                                        <option value="">2nd</option>
                                                        <option value="">1ère</option>
                                                        <option value="">Tle</option>
                                                    </select>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="numerotation">Numerotation</label>
                                                    <input id="numerotation" name="numerotation" type="number" class="form-control">
                                                </div>

                                                <div class="live">

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