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
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/admin">ITU - PORTAL DASHBOARD</a>
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
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                    <!-- <div class="email">john.doe@example.com</div> -->
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">

                            <li><a href="<?php echo base_url(); ?>index.php/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->



            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>

                        <a href="<?php echo base_url(); ?>index.php/admin">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <!-- Create sppd form -->

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_atm</i>
                            <span>SPPD FORM</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/get">Create SPPD Form</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/viewsppd">View SPPD Form</a>
                            </li>

                        </ul>
                    </li>

                    <!-- END Create sppd form -->

                    <!-- Create CUTI form -->

                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_airport</i>
                            <span>CUTI FORM</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/getcuti">Create CUTI Form</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/viewcuti">View CUTI Form</a>
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
                                CUTI FORM
                                <small>Demi kepentingan Perusahaan ditugaskan kepada:</small></h2>

                            </a>

                            </li>
                            </ul>
                        </div>
                        <br />
                        <!--start form -->
                        <form method="POST" action="<?php echo base_url(); ?>index.php/getcuti">
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

            <div class="col-sm-4">
             <div class="form-group">
                 <label class="bmd-label-floating">
                     Name
                 </label>
                 <div class="form-line">
                     <input type="text" name="name" class="form-control" placeholder="Full Name :" />
                 </div>
             </div>
         </div>
         <div class="col-sm-3">
             <div class="form-group">
                 <label class="bmd-label-floating">
                     Employe ID
                 </label>
                 <div class="form-line">
                     <input type="number" name="empid"  class="form-control" placeholder="Employe ID No :" required/>
                 </div>
             </div>
         </div>
         <div class="col-sm-4">
             <div class="form-group">
                 <label class="bmd-label-floating">
                     Department
                 </label>
                 <div class="form-line">
                     <input type="text" name="dep" class="form-control" placeholder=" Department :" required="true" />
                 </div>
             </div>
         </div>

         <div class="col-sm-4">
             <div class="form-group">
                 <label class="bmd-label-floating">
                    grpup
                 </label>
                 <div class="form-line">
                     <input type="text" name="group" class="form-control" placeholder=" Department :" />
                 </div>
             </div>
         </div>
                 <div class="body">
                     <div class="row clearfix">
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="bmd-label-floating">
                                     Date From
                                 </label>
                                 <div class="form-line">
                                     <input type="date" name="date" placeholder="Tanggal Dari.." required>
                                 </div>
                             </div>
                         </div>

                         <div class="body">
                             <div class="row clearfix">
                                 <div class="col-sm-4">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             Date to
                                         </label>
                                         <div class="form-line">
                                             <input type="date" name="dateto" placeholder="Tanggal Sampai.." required>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             Days
                                         </label>
                                         <div class="form-line">
                                             <input type="text" name="days" class="form-control" placeholder=" Hari:" / required="true">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">

                                        For the purpose
                                         </label>
                                         <div class="form-line">
                                             <textarea rows="3" name="pur" class="form-control no-resize auto-growth" placeholder="Untuk Keperluan..."></textarea>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             Address during leave
                                         </label>
                                         <div class="form-line">
                                             <textarea rows="3" name="add" class="form-control no-resize auto-growth" placeholder="Alamat selama cuti..."></textarea>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">

                                        Personnel record
                                         </label>
                                         <div class="form-line">
                                             <textarea rows="3" name="rec" class="form-control no-resize auto-growth" placeholder=" Catatan Personalia..."></textarea>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                           Person in Sign
                                         </label>
                                         <div class="form-line">
                                             <input type="text" name="sign1" class="form-control" placeholder="Yg Diberi tugas )" />
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-5">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             title
                                         </label>
                                         <div class="form-line">
                                             <input type="text" name="title1" class="form-control" placeholder=" Jabatan" />
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             Approved by
                                         </label>
                                         <div class="form-line">
                                             <input type="text" name="sign2" class="form-control" placeholder="Disetujui oleh," />
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-5">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             Titile
                                         </label>
                                         <div class="form-line">
                                             <input type="text" name="title2" class="form-control" placeholder="Jabatan " />
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-6">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             Know By,
                                         </label>
                                         <div class="form-line">
                                             <input type="text" name="sign3" class="form-control" placeholder="Diketahui oleh," />
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-sm-5">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">
                                             title
                                         </label>
                                         <div class="form-line">
                                             <input type="text" name="title3" class="form-control" placeholder="Jabatan " />
                                         </div>
                                     </div>
                                 </div>

                                 <br />
                                 <br />
                                 <br />
                                 <br />
                                 <br />

                             </div>
                         </div>
                     </div>
                 </div>
                 <center>

                     <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>

                 </center>
             </div>
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
