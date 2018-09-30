<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Create SPPD FORM ITU Portal | Dasboard</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/material.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard">ITU - PORTAL DASHBOARD</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url(); ?>assets/admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">

                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>

                        <a href="<?php echo base_url(); ?>index.php/dashboard">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <!-- Create sppd form -->

                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_atm</i>
                            <span>SPPD FORM</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/getemp">Create SPPD Form</a>
                            </li>

                        </ul>
                    </li>

                    <!-- END Create sppd form -->

                    <!-- Create CUTI form -->

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_airport</i>
                            <span>CUTI FORM</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/cutiemp">Create CUTI Form</a>
                            </li>

                        </ul>
                    </li>

                    <!-- END Create CUTI form -->

                    <!-- Create LBPD form -->

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_atm</i>
                            <span>LBPD FORM</span>&nbsp; &nbsp;<span class="blinking">Coming Soon</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="#">Create LBPD Form</a>
                            </li>
                            <li>
                                <a href="#">View LBPD Form</a>
                            </li>

                        </ul>
                    </li>

                    <!-- END Create LBPD form -->

                    <!-- Create IMP form -->

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_mall</i>
                            <span>IMP FORM</span>&nbsp; &nbsp;<span class="blinking">Coming Soon</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Create IMP Form</a>
                            </li>
                            <li>
                                <a href="#">View IMP Form</a>
                            </li>

                        </ul>
                    </li>

                    <!-- END Create IMP form -->

                    <!-- Create IMP form -->

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">directions_walk</i>
                            <span>ST FORM</span>&nbsp; &nbsp;<span class="blinking">Coming Soon</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Create ST Form</a>
                            </li>
                            <li>
                                <a href="#">View ST Form</a>
                            </li>

                        </ul>
                    </li>

                    <!-- END Create IMP form -->

                </ul>
            </div>
            <!-- #Menu -->

            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 IT Dept <a href="http://www.indotruck-utama.co.id/"> Indotruck Utama</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CREATE SURAT PERINTAH PERJALAN DINAS(SPPD)</h2>
            </div>
            <!-- Input -->

            <br />

            <!--DateTime Picker -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SPPD FORM
                                <small>Demi kepentingan Perusahaan ditugaskan kepada:</small></h2>

                            </a>

                            </li>
                            </ul>
                        </div>
                        <br />
                        <!--start form -->
                        <form method="POST" action="<?php echo base_url(); ?>index.php/getemp">
                             <div class="row">
                <?php if (!empty($this->session->flashdata('msg-true'))) { ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <span style="color: green; font-size: 15px;">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <?php echo $this->session->flashdata('msg-true');?>
                        </span>
                    </div>
                    <?php } if (!empty($this->session->flashdata('msg-false'))) {?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <span style="color: red; font-size: 15px;">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            <?php echo $this->session->flashdata('msg-false');?>
                        </span>
                        </div>
                        <?php }?>
            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Location Branch
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="locbr" class="form-control" placeholder="MKT-JKT" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Month
                                    </label>
                                    <div class="form-line">
                                        <input type="number" name="month" class="form-control" placeholder="12" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Year
                                    </label>
                                    <div class="form-line">
                                        <input type="number" name="year" class="form-control" placeholder="2018" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Form
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="form" class="form-control" placeholder="SPPD" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Name
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Nama:" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <label class="bmd-label-floating">
                                        Employe ID
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="emp" class="form-control" placeholder="Employe ID:" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <label class="bmd-label-floating">
                                        Title
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="title" class="form-control" placeholder="Jabatan:" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <label class="bmd-label-floating">
                                        Rank
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="rank" class="form-control" placeholder="Rank:" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Location
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="loc" class="form-control" placeholder="Lokasi:" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Department
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="dep" class="form-control" placeholder="Bagian:" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Designation
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="desi" class="form-control" placeholder="Tujuan:" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        From
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="from" class="form-control" placeholder="Dari:" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Purpose
                                    </label>
                                    <div class="form-line">
                                        <textarea rows="2" name="purp" class="form-control no-resize auto-growth" placeholder="Keperluan..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Follower
                                    </label>
                                    <div class="form-line">
                                        <input type="text" name="follow" class="form-control" placeholder="Pengikut:" />
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Date of Departure
                                            </label>
                                            <div class="form-line">
                                                <input type="date" name="datedep" placeholder="Tanggal Berangkat..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Date of Return
                                            </label>
                                            <div class="form-line">
                                                <input type="date" name="dateret" placeholder="Tanggal kembali..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Type of transportation
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="typetra" class="form-control" placeholder="Jenis Angkutan:" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Luggage
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="lagg" class="form-control" placeholder="Barang yang dibawa:" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Pending Cash
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="pendcas" class="form-control" placeholder="ada/tidak - kalau ada brpa" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="demo-radio-button">
                                        <input name="group1" type="radio" id="radio_1" value="BPP" checked />
                                        <label for="radio_1">BPP (Biaya Pengganti Penginapan)</label>
                                        Level dibawa Supervisor
                                        <input name="group1" type="radio" id="radio_2" value="Hotel" />
                                        <label for="radio_2">Hotel</label>

                                    </div>
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <br />

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Branch/Site
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="brasit" class="form-control" placeholder="Beban Biaya - Branch/Site" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Warehouse
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="ware" class="form-control" placeholder="Beban Biaya - Warehouse" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Business unit
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="busi" class="form-control" placeholder="Beban Biaya - Business unit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Cost Center
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="cost" class="form-control" placeholder="Beban Biaya - Cost Center" />
                                            </div>
                                        </div>
                                    </div>

                                    <center>

                                        <H2>Detail Advance Payment:</H2>
                                    </center>
                                    <br />
                                    <!-- angular start -->
                                    <div ng-app="">

                                        <div class="col-md-3">
                                            <b>BPP (total)</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line" ng-model="bppmoney">
                                                    <input type="number" name="bppmoney" class="form-control money-dollar" placeholder="Ex: 500.000 Rp" ng-model="bppmoney">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Notes
                                                </label>
                                                <div class="form-line">
                                                    <input type="text" name="note1" class="form-control" placeholder="Keterangan (notes about BPP)" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <b>Transport - LOCAL (total)</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line">
                                                    <input type="number" name="local" class="form-control money-dollar" placeholder="Ex: 500.000 Rp" ng-model="local">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Notes
                                                </label>
                                                <div class="form-line">
                                                    <input type="text" name="note2" class="form-control" placeholder="Keterangan (notes about Transport)" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <b>Transport - Outside (total)</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line">
                                                    <input type="number" name="out" class="form-control money-dollar" placeholder="Ex: 500.000 Rp" ng-model="out">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Notes
                                                </label>
                                                <div class="form-line">
                                                    <input type="text" name="note3" class="form-control" placeholder="Keterangan (notes about Transport)" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <b>Flight (total)</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line">
                                                    <input type="number" name="flight" class="form-control money-dollar" placeholder="Ex: 500.000 Rp" ng-model="flight">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Notes
                                                </label>
                                                <div class="form-line">
                                                    <input type="text" name="note4" class="form-control" placeholder="Keterangan (notes about Pesawat)" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <b>Meals Cost (total)</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line">
                                                    <input type="number" name="meals" class="form-control money-dollar" placeholder="Ex: 500.000 Rp" ng-model="meals">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Notes
                                                </label>
                                                <div class="form-line">
                                                    <input type="text" name="note5" class="form-control" placeholder="Keterangan (notes about Biaya Makan)" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <b>other Cost (total)</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line">
                                                    <input type="number" name="cost1" class="form-control money-dollar" placeholder="Ex: 500.000 Rp" ng-model="cost1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Notes
                                                </label>
                                                <div class="form-line">
                                                    <input type="text" name="note6" class="form-control" placeholder="Keterangan (notes about Biaya Lain-lain)" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <b>Others (total)</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line">
                                                    <input type="number" name="others" class="form-control money-dollar" placeholder="Ex: 500.000 Rp" ng-model="others">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    Notes
                                                </label>
                                                <div class="form-line">
                                                    <input type="text" name="note7" class="form-control" placeholder="Keterangan (notes about Lain - Lain )" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <b>ALL TOTAL</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                                <div class="form-line">
                                                    <input type="number" name="alltotal" class="form-control money-dollar" placeholder="Ex: 1.000.000 Rp" value={{bppmoney+local+out+flight+meals+cost1+others}}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Angular coponent-->

                                    <H2>Detail Payment Others:</H2>

                                    <br />

                                    <div class="col-md-3">
                                        <b>Company Cost (total)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                            <div class="form-line">
                                                <input type="number" name="comcost" class="form-control money-dollar" placeholder="Ex: 500.000 Rp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Note
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="note8" class="form-control" placeholder="Keterangan (notes about Beban Perusahaan )" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Customer Cost (total)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                            <div class="form-line">
                                                <input type="number" name="custcost" class="form-control money-dollar" placeholder="Ex: 500.000 Rp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Notes
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="note9" class="form-control" placeholder="Keterangan (notes about Beban Customer  )" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <b>Flight Ticket (total)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                            <div class="form-line">
                                                <input type="number" name="flight1" class="form-control money-dollar" placeholder="Ex: 500.000 Rp diisi apa bila pembelian melalui travel agent perusahaan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Notes
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="note10" class="form-control" placeholder="Keterangan (notes about Ticket Pesawat )" />
                                            </div>
                                        </div>
                                    </div>

                                    <center>

                                        <H2>Submiting to:</H2>
                                    </center>
                                    <br />

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Submiting from
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="subfrom" class="form-control" placeholder="Place (JAKARTA atu BALI atu SURABAYA.... )" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Person in Sign,
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="sign" class="form-control" placeholder="Yg Diberi tugas )" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Title
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="title1" class="form-control" placeholder=" Jabatan" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Approve By,
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="sign1" class="form-control" placeholder="Disetujui oleh," />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                title
                                            </label>
                                            <div class="form-line">
                                                <input type="text" name="title2" class="form-control" placeholder="Jabatan " />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="body">
                                        <div class="demo-masked-input">
                                            <div class="row clearfix">
                                                <div class="col-md-3">
                                                    <b>Know By,</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">

                                                                                                                    </span>
                                                        <div class="form-line">
                                                            <input type="text" name="sign3" class="form-control date" placeholder="Diketahui oleh,">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">
                                                            Title
                                                        </label>
                                                        <div class="form-line">
                                                            <input type="text" name="sign4" class="form-control" placeholder="Jabatan " />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <center>

                                <input class="btn btn-primary waves-effect" type="submit" value="Submit">

                            </center>
                        </form>
                        <!--end form -->
                    </div>
    </section>
    <script src="<?php echo base_url(); ?>assets/angular.min.js"></script>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
</body>

</html>
