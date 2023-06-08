<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>
        <?= $title?>
    </title>
    <?= $this->include('asset/css')?>
    <?= $this->include('asset/js')?>
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
            <!-- <li class="side_menu_title">
                <span>Data Master</span>
            </li> -->
            <!-- <li class="">
                <a class="" href="/mahasiswa">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Mahasiswa</span>
                </a>
            </li>
            <li class="">
                <a class="" href="orangtua">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Orang Tua</span>
                </a>

            </li>
            <li class="">
                <a class="" href="prodi">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Program Studi</span>
                </a>

            </li>
            <li class="">
                <a class="" href="fakultas">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Fakultas</span>
                </a>

            </li>
            <li class="">
                <a class="" href="jenissurat">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Jenis Surat</span>
                </a>

            </li> -->

            <li class="side_menu_title">
                <span>Pengajuan</span>
            </li>
            <li class="">
                <a class="" href="pengajuan_surat">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Pengajuan Surat</span>
                </a>

            </li>
            <li class="side_menu_title">
                <span>Arsip Surat</span>
            </li>
            <!-- <li class="">
                <a class="" href="surat">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Surat</span>
                </a>

            </li> -->
            <!-- <li class="side_menu_title">
                <span>Manajemen Pengguna</span>
            </li>
            <li class="">
                <a class="" href="pengguna">
                    <img src="/css/Hospital_files/2.svg" alt="">
                    <span>Pengguna</span>
                </a>

            </li> -->
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
                                                    <h3><span class="counter"> </span> </h3>
                                                    <p>Total <?= $title?>
                                                    </p>
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