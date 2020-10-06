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
        <div class="content dasboard-content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Administration</h4>
                            <!-- <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Welcome to WMC Dashboard</li>
                            </ol> -->
                        </div>
                        
                    </div> <!-- end row -->
                </div>
                <!-- end page-title -->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card mini-stat bg-pattern">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="fa fa-users bg-soft-primary text-secondary float-right h4"></i>
                                </div>
                                <h6 class="text-uppercase mb-3 mt-0">EFFECTIFS <br> TOTAL</h6>
                                <h5 class="mb-3 text-secondary"><?=$countAllStudents['total_student'] ?></h5>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mini-stat bg-pattern"> 
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="fa fa-user bg-soft-primary text-primary float-right h4"></i>
                                </div>
                                <h6 class="text-uppercase mb-3 mt-0">EFFECTIFS <br> GARCONS</h6>
                                <h5 class="mb-3 text-primary"><?= $countAllMen['total_men'] ?></h5>
                                <!-- <p class="text-muted mb-0"><span class="text-success mr-2"> 33% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mini-stat bg-pattern">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="fa fa-female bg-soft-primary text-danger float-right h4"></i>
                                </div>
                                <h6 class="text-uppercase mb-3 mt-0">EFFECTIF <br> FILLES</h6>
                                <h5 class="mb-3 text-danger"><?= $countAllWomen['total_women'] ?></h5>
                                <!-- <p class="text-muted mb-0"><span class="text-success mr-2"> 33% <i class="mdi mdi-arrow-down"></i> </span> From previous period</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mini-stat bg-pattern">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="fa fa-columns bg-soft-primary text-success float-right h4"></i>
                                </div>
                                <h6 class="text-uppercase mb-3 mt-0">CLASSE AU <br> TOTAL</h6>
                                <h5 class="mb-3 text-success"><?= $countAllClasse['total_classe'] ?></h5>
                                <!-- <p class="text-muted mb-0"><span class="text-success mr-2"> 33% <i class="mdi mdi-arrow-down"></i> </span> From previous period</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Dernière inscription</h4>
                                <h6 class="mb-3 text-primary text-center"><?=$countAllStudents['total_student'] == 0 ? 'Pas d\'eleve inscrit': '' ?></h6>
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                        <?php  foreach($latestStudent as $index => $latStudent) : ?>
                                            <tr>
                                                <td><a href="student-page-<?=$latStudent['id_student']?>-<?=str_replace(' ','-', $latStudent['nom']) ?>-<?=str_replace(' ','-', $latStudent['prenoms']) ?>"><?=$latStudent['nom'].' '.$latStudent['prenoms']?></a></td>
                                                <td><?=$latStudent['id_classe']?></td>
                                                <td> <span class="text-muted"> inscrit le  </span> <?= date_format(date_create($latStudent['regAt']), "d-m-Y") ?></td>
                                                <td>
                                                    <div>
                                                        <a href="student-page-<?=$latStudent['id_student']?>-<?=str_replace(' ','-', $latStudent['nom']) ?>-<?=str_replace(' ','-', $latStudent['prenoms']) ?>" class="btn btn-primary btn-sm">voir+</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
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

<div class="right-sidebar d-none d-xl-block">
    <div class="slimscroll-menu">
        <div class="px-4 pt-4 mt-5">
            <div class="mb-4">
                <h5 class="font-14">Calendrier</h5>

                <div class="dashboard-date-pick" id="date-pick-widget" data-provide="datepicker-inline"></div>
            </div>

        </div>
    </div>
</div>

<?php include_once 'views/includes/footer.php' ?>

</body>
</html>