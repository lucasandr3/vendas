<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="pt_BR" data-layout="semi-dark-layout">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title><?=$this->e($title)?></title>
    <link rel="apple-touch-icon" href="<?=url('assets/app/images/ico/apple-icon-120.png')?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=url('assets/app/images/ico/favicon.ico')?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/vendors.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/charts/apexcharts.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/extensions/toastr.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/forms/select/select2.min.css')?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/vendors.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/tables/datatable/responsive.bootstrap4.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/tables/datatable/buttons.bootstrap4.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/pickers/flatpickr/flatpickr.min.css')?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/bootstrap-extended.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/colors.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/components.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/themes/dark-layout.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/themes/bordered-layout.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/themes/semi-dark-layout.css')?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/core/menu/menu-types/vertical-menu.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/pages/dashboard-ecommerce.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/plugins/charts/chart-apex.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/css/plugins/extensions/ext-component-toastr.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('assets/app/vendors/css/extensions/sweetalert2.min.css')?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('assets/css/style.css')?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout footer-static pace-done menu-hide vertical-overlay-menu navbar-sticky" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center navbar-light navbar-shadow fixed-top">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block">
                        <a class="btn btn-outline-primary" href="<?=url('pdv');?>" data-toggle="tooltip" data-placement="top" title="Ponto de Venda">
                            <i data-feather='shopping-cart'></i> Nova Venda
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder"><?=$this->e($username)?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="<?=url('assets/app/images/portrait/small/avatar-s-11.jpg')?>" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="<?=url('sair')?>">
                            <i class="mr-50" data-feather="power"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="<?=url('');?>">
                        <span class="brand-logo"><i data-feather='home' style="height:20px;width:20px;color:#fff;"></i></span>
                        <h2 class="brand-text text-white"><?=$this->e($company)?></h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none toggle-icon font-medium-4" data-feather="x" style="color:#fff;" ></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>

