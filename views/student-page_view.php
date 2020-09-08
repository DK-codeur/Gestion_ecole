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
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20 mt-5">
                                    <div class="card-body">
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="invoice-title">
                                                    <h5> Information complemenaire</h5>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <div>Nom: <strong>KEITA</strong> </div>
                                                            <div>Prenoms: <strong>Aya Natacha</strong> </div>
                                                            <div>Sexe: <strong>F</strong> </div>
                                                            <div>Date de N.: <strong>23/12/2000</strong> </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <div>Classe: <strong>4eme2</strong> </div>
                                                        <div>Commune: <strong>Port Bouet</strong> </div>
                                                        <div>Tel. Parent: <strong>42 00 00 23</strong> </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
        
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div>
                                                    <div class="p-2">
                                                        <h3 class="font-16"><strong>Historique de Paiement</strong></h3>
                                                    </div>
                                                    <div class="">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td><strong>Date</strong></td>
                                                                        <td><strong>Somme versée</strong></td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                                <tr>
                                                                    <td>01/02/2019</td>
                                                                    <td>15 000 FCFA</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>30/01/2019</td>
                                                                    <td>30 000 FCFA</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>12/12/2018</td>
                                                                    <td>30 000 FCFA</td>
                                                                </tr>
                                                               
                                                                </tbody>
                                                            </table>
                                                        </div>
        
                                                        <div class="d-print-none">
                                                            <div class="float-right">
                                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i> Imprimer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div> <!-- end row -->
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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