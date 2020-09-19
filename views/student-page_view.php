<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title><?= WEBSITE_TITLE .' | '. ucfirst($studentById['nom'].' '.$studentById['prenoms']); ?></title>
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
                                                            <div>Nom: <strong><?=$studentById['nom']?></strong> </div>
                                                            <div>Prenoms: <strong><?=$studentById['prenoms']?></strong> </div>
                                                            <div>Sexe: <strong><?=$studentById['sexe']?></strong> </div>
                                                            <div>Date de N.: <strong> <?= date_format(date_create($studentById['naissance']), "d/m/Y") ?></strong> </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <div>Classe: <strong><?=$studentById['classe']?></strong> </div>
                                                        <div>Commune: <strong><?=$studentById['commune']?></strong> </div>
                                                        <div>Tel. Parent: <strong><?=$studentById['telephone']?></strong> </div>
                                                        <div>Inscrit(e) le: <strong><?= date_format(date_create($studentById['regAt']), "d-m-Y H:i") ?></strong> </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
        
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <h3 class="font-16"><strong>Historique de Paiement</strong></h3>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Payer scolarité</button>
                                                        </div>
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
                                                                   <td> no data</td>
                                                                   <td> no data</td>
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

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="mySmallModalLabel">Payer Scolarité</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body px-3 pb-5">
                    <p> <h6 class="text-success">Déjà Payer: 150 000 Fcfa</h6> </p>
                    <p> <h6 class="text-danger">Reste à Payer: 50 000 Fcfa</h6> </p>
                    <hr>
                    <form action="" method="post">
                        <label for="">Effectuer un Payement</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Entrer la somme à payer">
                        <button class="btn btn-success btn-block my-2" type="submit">Payer</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php include_once 'views/includes/footer.php' ?>

</body>
</html>