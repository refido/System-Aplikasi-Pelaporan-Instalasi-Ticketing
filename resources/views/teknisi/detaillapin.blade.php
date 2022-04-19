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

    <!--venobox lightbox-->
    <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css" />

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
                            <h4 class="page-title">DETAIL LAPORAN INSTALASI</h4>
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
        @include('teknisi.sbteknisi')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-11 ">
                            <div class="m-b-30">
                                <a href="/viewlapinteknisi" type="button" class="btn btn-primary"><i class="fa fa-back">
                                    </i>
                                    Back</a>
                            </div>
                            <div class="card-box task-detail col-sm-offset-1">
                                
                                <div class="row">
                                    <ul class="list-inline task-dates col-sm-offset-2">
                                        <li>
                                        <h5 class="font-600 m-b-10 ">Nama Leader</h5>
                                            <p>Jefri Al Berto</p>
                                            <br><br>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <ul class="list-inline task-dates col-sm-offset-2">
                                        <li>
                                            <h5 class="font-600 m-b-5">Nama Instansi</h5>
                                            <p> Haruka Persada </p>
                                        </li>

                                        <li>
                                            <h5 class="font-600 m-b-5">Kategori Instansi</h5>
                                            <p> {{@$data[0]['category_instansi']}}</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <ul class="list-inline task-dates col-sm-offset-2">
                                        <li>
                                            <h5 class="font-600 m-b-5">Tanggal Mulai Instalasi</h5>
                                            <p> {{@$data[0]['start_installation']}} </p>
                                        </li>

                                        <li>
                                            <h5 class="font-600 m-b-5">Tanggal Selesai Instalasi</h5>
                                            <p> {{@$data[0]['completed_installation']}}</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <ul class="list-inline task-dates m-b-0 m-t-20 col-sm-offset-2">
                                        <li>
                                            <h5 class="font-600 m-b-5">Tanggal Mulai Training</h5>
                                            <p>{{@$data[0]['start_training']}}</p>
                                        </li>

                                        <li>
                                            <h5 class="font-600 m-b-5">Tanggal Selesai Instalasi</h5>
                                            <p>{{@$data[0]['complete_training']}}</p>
                                        </li>
                                    </ul>
                                </div><!-- end row -->
                                <div class="clearfix"></div>
                                <br>
                                <hr>

                                <div class="row">
                                    <div class="col-md-10 ">
                                        <div class="pull-left m-t-30 col-sm-offset-2">
                                        <h5 class="font-600 m-b-5">Anydesk ID</h5>
                                            <p>{{@$data[0]['anydesk_id']}}</p><br>
                                        </div>
                                        <div class="pull-left m-t-30 col-sm-offset-3">
                                        <h5 class="font-600 m-b-5">IP Address</h5>
                                            <p>202.189.87.220</p>
                                        </div>
                                        <div class="pull-right m-t-30 sm-offset-2">
                                        <h5 class="font-600 m-b-5">Lisensi</h5>
                                            <p>Full</p><br>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <div class="row">
                                    <ul class="list-inline task-dates col-sm-offset-2">
                                        <li>
                                            <h5 class="font-600 m-b-5">Jumlah Caller</h5>
                                            <p>2</p>
                                        </li>

                                        <li>
                                            <h5 class="font-600 m-b-5">Jenis Caller</h5>
                                            <p>Device</p>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Komponen -->
                                <div class="task-tags m-t-20">
                                    <h5 class="font-600">Komponen</h5>
                                    <span class="label label-purple">Ticketing</span>
                                    <span class="label label-purple">Caller</span>
                                    <span class="label label-purple">Digital Signage</span>
                                    <span class="label label-purple">Hardware</span>
                                    <span class="label label-purple">Jaringan</span>
                                </div>
                                <br>

                                <!-- kondisi -->
                                <h5 class="font-600 m-b-20 ">Kondisi Sistem Antrian</h5>
                                <p>{{@$data[0]['condition']}}</p>
                                <br><br>

                                <!-- problem -->
                                <h5 class="font-600 m-b-20">Problem Instalasi</h5>
                                <p class="text-muted">
                                    {{@$data[0]['problem']}}
                                </p>
                                <br>

                                <!-- attach -->
                                <div class="portfolioContainer">
                                    <div class="attached-files m-t-30 ">
                                        <h5 class="font-600">Bukti Foto </h5>
                                        <div class="files-list">
                                            <div class="file-box">
                                                <a href="/assets/images/attached-files/img-2.jpg" class="image-popup"
                                                    title="Foto-1">
                                                    <img src="/assets/images/attached-files/img-2.jpg" class="thumb-img"
                                                        alt="work-thumbnail">
                                                </a>
                                                <p class="font-13 m-b-5 text-muted"><small></small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href="/assets/images/attached-files/img.jpg" class="image-popup"
                                                    title="Foto-2">
                                                    <img src="/assets/images/attached-files/img.jpg" class="thumb-img"
                                                        alt="work-thumbnail">
                                                </a>
                                                <p class="font-13 m-b-5 text-muted"><small></small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href="assets/images/attached-files/img-3.jpg" class="image-popup"
                                                    title="Foto-3">
                                                    <img src="/assets/images/attached-files/img-3.jpg" class="thumb-img"
                                                        alt="work-thumbnail">
                                                </a>
                                                <p class="font-13 m-b-5 text-muted"><small></small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href="/assets/images/attached-files/img-2.jpg" class="image-popup"
                                                    title="Foto-4">
                                                    <img src="/assets/images/attached-files/img-2.jpg" class="thumb-img"
                                                        alt="work-thumbnail">
                                                </a>
                                                <p class="font-13 m-b-5 text-muted"><small></small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href="/assets/images/attached-files/img-3.png" class="image-popup"
                                                    title="Foto-5">
                                                    <img src="/assets/images/attached-files/img-3.png" class="thumb-img"
                                                        alt="work-thumbnail">
                                                </a>
                                                <p class="font-13 m-b-5 text-muted"><small></small></p>
                                            </div>
                                        </div>
                                        <!-- end attach -->

                                        <!-- attach video-->
                                        <div class="attached-files m-t-30">
                                            <h5 class="font-600">Bukti Video </h5>
                                            <div class="files-list">
                                                <div class="file-box col-sm-offset-2">
                                                    <a>
                                                        <video width="540" height="320" controls>
                                                            <source src="{{@$data[0]['problem']}}"
                                                                type="video/mp4">
                                                        </video>
                                                    </a>
                                                    <p class="font-13 m-b-5 text-muted"><small></small></p>
                                                </div>
                                            </div>
                                            <!-- end attach -->

                                            <!-- attach bast -->
                                            <div class="attached-files m-t-30">
                                                <h5 class="font-600">Bukti BAST </h5>
                                                <div class="files-list">
                                                    <div class="file-box">
                                                        <a href="assets/images/attached-files/img-1.jpg"
                                                            class="image-popup" title="Foto-3">
                                                            <img src="/assets/images/attached-files/img-1.jpg"
                                                                class="thumb-img" alt="work-thumbnail">
                                                        </a>
                                                        <p class="font-13 m-b-5 text-muted"><small></small></p>
                                                    </div>
                                                    <div class="file-box">
                                                        <a href="assets/images/attached-files/img-1.jpg"
                                                            class="/image-popup" title="Foto-3">
                                                            <img src="/assets/images/attached-files/img-1.jpg"
                                                                class="thumb-img" alt="work-thumbnail">
                                                        </a>
                                                        <p class="font-13 m-b-5 text-muted"><small></small></p>
                                                    </div>
                                                    <div class="file-box">
                                                        <a href="assets/images/attached-files/img-1.jpg"
                                                            class="image-popup" title="Foto-3">
                                                            <img src="/assets/images/attached-files/img-1.jpg"
                                                                class="thumb-img" alt="work-thumbnail">
                                                        </a>
                                                        <p class="font-13 m-b-5 text-muted"><small></small></p>
                                                    </div>
                                                </div>
                                                <!-- end attach -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
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
                <!-- Bootstrap tagsinput -->
                <script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

                <!-- Magnific popup -->
                <script type="text/javascript" src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js">
                </script>
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
                <script type="text/javascript">
                $(window).load(function() {
                    var $container = $('.portfolioContainer');
                    $container.isotope({
                        filter: '*',
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                });
                $(document).ready(function() {
                    $('.image-popup').magnificPopup({
                        type: 'image',
                        closeOnContentClick: true,
                        mainClass: 'mfp-fade',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0,
                                1] // Will preload 0 - before current, and 1 after the current image
                        }
                    });
                });
                </script>

</body>

</html>