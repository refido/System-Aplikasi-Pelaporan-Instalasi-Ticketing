<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    @include('fix.title')

    <!-- DataTables -->
    <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>
</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            @include('fix.logo')


            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li>
                            <h4 class="page-title">DETAIL LAPORAN TICKETING</h4>
                        </li>
                    </ul>

                    <!-- Right(Notification and Searchbox -->
                    @include('fix.right')
                    <!-- End Notification bar -->
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        @include('fix.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="m-b-30">
                            <a href="/lapting" type="button" class="btn btn-primary"><i class="fa fa-back"> </i>
                                Back</a>
                        </div>
                        <div class="col-sm-10 col-sm-offset-1 ">
                            <div class="card-box table-responsive">
                                <div class="clearfix">
                                    <div class="pull-left col-sm-offset-1">
                                        <h4>BANK MANDIRI<br>
                                            <strong>Jl. Sigura-gura 12A</strong>
                                        </h4>
                                    </div>
                                    <div class="pull-left col-sm-offset-4">
                                        <h4>Kategori Instansi :
                                            <strong>Industri</strong>
                                        </h4>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10 ">
                                        <div class="pull-left m-t-30 col-sm-offset-2">
                                            <p><strong>Tanggal Aduan </strong> </p>
                                            <p>Jan 17, 2016</p><br>
                                        </div>
                                        <div class="pull-left m-t-30 col-sm-offset-2">
                                            <p><strong>No Ticket </strong> </p>
                                            <p>172016</p><br>
                                        </div>
                                        <div class="pull-left m-t-30 col-sm-offset-2">
                                            <p><strong>No Telepon Aduan</strong> </p>
                                            <p>0812172016</p><br>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-11 ">
                                        <div class="pull-left m-t-30 col-sm-offset-1">
                                            <h5 class="font-600 m-b-20 ">Isi Aduan</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates,
                                                illo, iste
                                                itaque voluptas corrupti ratione reprehenderit magni similique? Tempore,
                                                quos
                                                delectus asperiores libero voluptas quod perferendis! Voluptate, quod
                                                illo
                                                rerum? Lorem ipsum dolor sit amet.
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates,
                                                illo, iste
                                                itaque voluptas corrupti ratione reprehenderit magni similique? Tempore,
                                                quos
                                                delectus asperiores libero voluptas quod perferendis! Voluptate, quod
                                                illo
                                                rerum? Lorem ipsum dolor sit amet.
                                            </p>
                                        </div>
                                        <div class="pull-right m-t-30 col-sm-offset-1">
                                            <h5 class="font-600 m-b-20 ">Penyelesaian</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates,
                                                illo, iste
                                                itaque voluptas corrupti ratione reprehenderit magni similique? Tempore,
                                                quos
                                                delectus asperiores libero voluptas quod perferendis! Voluptate, quod
                                                illo
                                                rerum? Lorem ipsum dolor sit amet.
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates,
                                                illo, iste
                                                itaque voluptas corrupti ratione reprehenderit magni similique? Tempore,
                                                quos
                                                delectus asperiores libero voluptas quod perferendis! Voluptate, quod
                                                illo
                                                rerum? Lorem ipsum dolor sit amet.
                                            </p>
                                            <br>
                                        </div>

                                    </div><!-- end col -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->

        @include('fix.footer')

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    @include('fix.rightsb')
    <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- Datatables-->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });
    });
    TableManageButtons.init();
    </script>

</body>

</html>