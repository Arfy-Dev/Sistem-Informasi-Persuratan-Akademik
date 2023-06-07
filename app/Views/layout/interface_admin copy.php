<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

    <!-- <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <title>SIPA</title>
    <link rel="icon" type="image/x-icon" href="/img/sipa-logo.png" />


    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="/css/dashboard/bootstrap1.min.css">
    <link rel="stylesheet" href="/css/dashboard/themify-icons.css">
    <link rel="stylesheet" href="/css/dashboard/swiper.min.css">
    <link rel="stylesheet" href="/css/dashboard/select2.min.css">
    <link rel="stylesheet" href="/css/dashboard/nice-select.css">
    <link rel="stylesheet" href="/css/dashboard/owl.carousel.css">
    <link rel="stylesheet" href="/css/dashboard/gijgo.min.css">
    <link rel="stylesheet" href="/css/dashboard/all.min.css">
    <link rel="stylesheet" href="/css/dashboard/tagsinput.css">
    <link rel="stylesheet" href="/css/dashboard/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="/css/dashboard/responsive.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="/css/dashboard/buttons.dataTables.min.css"> -->
    <link rel="stylesheet" href="/css/dashboard/summernote-bs4.css">
    <link rel="stylesheet" href="/css/dashboard/morris.css">
    <link rel="stylesheet" href="/css/dashboard/material-icons.css">
    <link rel="stylesheet" href="/css/dashboard/metisMenu.css">
    <link rel="stylesheet" href="/css/dashboard/style1.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/dashboard/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="/"><img src="/img/sipa-logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu" class="metismenu">
            <li class="side_menu_title">
                <span>Data Master</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Mahasiswa</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Orang Tua</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Program Studi</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Fakultas</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Jenis Surat</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>

            <li class="side_menu_title">
                <span>Pengajuan</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Pengajuan Surat</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>
            <li class="side_menu_title">
                <span>Arsip Surat</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Surat</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>
            <li class="side_menu_title">
                <span>Manajemen Pengguna</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Pengguna</span>
                </a>
                <ul class="mm-collapse" style="height: 0px;">
                    <li><a href="login.html">Tambah Data</a></li>
                </ul>
            </li>
        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">

                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="/img/dashboard//bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/img/dashboard//msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="/img/profile.png.jpg" alt="#">
                                <div class="profile_info_iner">
                                    <p>Super Admin</p>
                                    <h5>Ahmad Dhani</h5>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        <a href="#">Settings <i class="ti-settings"></i></a>
                                        <a href="#">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="Hospital_files/man.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">520</span> </h3>
                                                    <p>Mahasiswa</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="Hospital_files/cap.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">6969</span> </h3>
                                                    <p>Aktif</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="Hospital_files/wheel.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">7509</span> </h3>
                                                    <p>Cuti</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="Hospital_files/pharma.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">2110</span> </h3>
                                                    <p>Dropout</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                    $(document).ready(function() {
                        $('#tabel-data').DataTable();
                    });
                    </script>
                    <?= $this->renderSection('content')?>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2023 - Sistem Informasi Persuratan Akademik Group 5 SIF-B</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>