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
                            <h4 class="page-title">RIWAYAT ADUAN</h4>
                        </li>
                    </ul>

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
                        <div class="col-md-12">
                            <div class="m-b-30">
                                <a href="/formtiketteknisi" type="button" class="btn btn-primary"><i class="fa fa-back"> </i>
                                    Back</a>
                            </div>
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
                                    <h4>Invoice</h4>
                                </div> -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                                            <div class="portfolioFilter">
                                                <a href="#" data-filter="*" class="current waves-effect waves-custom">All</a>
                                                <a href="#" data-filter=".ticketing" class="waves-effect waves-custom">Ticketing</a>
                                                <a href="#" data-filter=".caller" class="waves-effect waves-custom">Caller</a>
                                                <a href="#" data-filter=".digital" class="waves-effect waves-custom">Digital Signage</a>
                                                <a href="#" data-filter=".hardware" class="waves-effect waves-custom">Hardware</a>
                                                <a href="#" data-filter=".jaringan" class="waves-effect waves-custom">Jaringan</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row-responsive">
                                        <div class="portfolioContainer">
                                            {{-- Ticketing --}}
                                            <div class="col-sm-20 col-lg-10 col-md-10 ticketing">
                                                <div class="row m-t-40">
                                                    {{-- sebelah kiri --}}
                                                    <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion" href="#collapseOne"
                                                                               aria-expanded="true" aria-controls="collapseOne">
                                                                                Tidak bisa cetak
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                                         role="tabpanel" aria-labelledby="headingOne">
                                                                        <div class="panel-body">
                                                                            Penyelesaian :<br/> <br/>Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                            {{-- Sebelah kanan --}}
                                                    {{-- <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion1" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion1" href="#faq4">
                                                                                Tidak terhubung
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="faq4" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
            
                                                                            <br/> <br/>
            
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col --> --}}
                                                </div><!-- end row -->
                                            </div>
                                        {{-- Caller --}}
                                            <div class="col-sm-20 col-lg-10 col-md-10 caller">
                                                <div class="row m-t-40">
                                                    {{-- sebelah kiri --}}
                                                    <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion" href="#collapseOne"
                                                                               aria-expanded="true" aria-controls="collapseOne">
                                                                                Tidak bisa cetak
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                                         role="tabpanel" aria-labelledby="headingOne">
                                                                        <div class="panel-body">
                                                                            Penyelesaian :<br/> <br/>Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                            {{-- Sebelah kanan --}}
                                                    <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion1" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion1" href="#faq4">
                                                                                Tidak terhubung
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="faq4" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
            
                                                                            <br/> <br/>
            
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div>

                                            {{-- Digital Signage --}}
                                            <div class="col-sm-20 col-lg-10 col-md-10 digital">
                                                <div class="row m-t-40">
                                                    {{-- sebelah kiri --}}
                                                    <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion" href="#collapseOne"
                                                                               aria-expanded="true" aria-controls="collapseOne">
                                                                                Tidak bisa cetak
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                                         role="tabpanel" aria-labelledby="headingOne">
                                                                        <div class="panel-body">
                                                                            Penyelesaian :<br/> <br/>Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                            {{-- Sebelah kanan --}}
                                                    {{-- <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion1" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion1" href="#faq4">
                                                                                Tidak terhubung
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="faq4" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
            
                                                                            <br/> <br/>
            
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col --> --}}
                                                </div><!-- end row -->
                                            </div>

                                            {{-- Hardware --}}
                                            <div class="col-sm-20 col-lg-10 col-md-10 hardware">
                                                <div class="row m-t-40">
                                                    {{-- sebelah kiri --}}
                                                    {{-- <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion" href="#collapseOne"
                                                                               aria-expanded="true" aria-controls="collapseOne">
                                                                                Tidak bisa cetak
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                                         role="tabpanel" aria-labelledby="headingOne">
                                                                        <div class="panel-body">
                                                                            Penyelesaian :<br/> <br/>Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <!-- end col -->
                                                            {{-- Sebelah kanan --}}
                                                    {{-- <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion1" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion1" href="#faq4">
                                                                                Tidak terhubung
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="faq4" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
            
                                                                            <br/> <br/>
            
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col --> --}}
                                                   
                                                </div><!-- end row -->
                                            </div>

                                            {{-- Jaringan --}}
                                            <div class="col-sm-20 col-lg-10 col-md-10 jaringan">
                                                <div class="row m-t-40">
                                                    {{-- sebelah kiri --}}
                                                    {{-- <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion" href="#collapseOne"
                                                                               aria-expanded="true" aria-controls="collapseOne">
                                                                                Tidak bisa cetak
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                                         role="tabpanel" aria-labelledby="headingOne">
                                                                        <div class="panel-body">
                                                                            Penyelesaian :<br/> <br/>Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <!-- end col -->
                                                            {{-- Sebelah kanan --}}
                                                    <div class="col-lg-6">
                                                        <div class="p-20">
                                                            <div class="panel-group m-b-0" id="accordion1" role="tablist"
                                                                 aria-multiselectable="true">
                                                                <div class="panel panel-default bx-shadow-none">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion1" href="#faq4">
                                                                                Tidak terhubung
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="faq4" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book.
            
                                                                            <br/> <br/>
            
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                                            quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end portfoliocontainer-->
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
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
    <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
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

<!-- isotope filter plugin -->
<script type="text/javascript" src="assets/plugins/isotope/dist/isotope.pkgd.min.js"></script>

<!-- Magnific popup -->
<script type="text/javascript" src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(window).load(function(){
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
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
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    });
</script>

</body>

</html>