<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
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
    <link rel="stylesheet" href="/css/dashboard/responsive.dataTables.min.css">
    <link rel="stylesheet" href="/css/dashboard/buttons.dataTables.min.css">
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
            <a href="https://demo.dashboardpack.com/hospital-html/index.html"><img src="/img/sipa-logo.png" alt=""></a>
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
                                <img src="/img/dashboard/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <p>Neurologist </p>
                                    <h5>Dr. Robar Smith</h5>
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
                    <div class="col-lg-12 col-xl-12">
                        <div class="white_box mb_30 " style="position: relative;">
                            <div class="box_header border_bottom_1px  ">
                                <div class="main-title">
                                    <h3 class="mb_25">Data Mahasiswa</h3>
                                </div>
                            </div>
                            <div class="income_servay">
                                <table id="tabel-data" class="table table-striped table-bordered" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>

                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

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



    <script src="/js/Hospital_files/jquery1-3.4.1.min.js"></script>

    <script src="/js/Hospital_files/popper1.min.js"></script>

    <script src="/js/Hospital_files/bootstrap1.min.js"></script>

    <script src="/js/Hospital_files/metisMenu.js"></script>

    <script src="/js/Hospital_files/jquery.waypoints.min.js"></script>

    <script src="/js/Hospital_files/Chart.min.js"></script>

    <script src="/js/Hospital_files/jquery.counterup.min.js"></script>

    <script src="/js/Hospital_files/swiper.min.js"></script>

    <script src="/js/Hospital_files/jquery.nice-select.min.js"></script>

    <script src="/js/Hospital_files/owl.carousel.min.js"></script>

    <script src="/js/Hospital_files/gijgo.min.js"></script>

    <script src="/js/Hospital_files/jquery.dataTables.min.js"></script>
    <script src="/js/Hospital_files/dataTables.responsive.min.js"></script>
    <script src="/js/Hospital_files/dataTables.buttons.min.js"></script>
    <script src="/js/Hospital_files/buttons.flash.min.js"></script>
    <script src="/js/Hospital_files/jszip.min.js"></script>
    <script src="/js/Hospital_files/pdfmake.min.js"></script>
    <script src="/js/Hospital_files/vfs_fonts.js"></script>
    <script src="/js/Hospital_files/buttons.html5.min.js"></script>
    <script src="/js/Hospital_files/buttons.print.min.js"></script>
    <script src="/js/Hospital_files/chart.min.js"></script>

    <script src="/js/Hospital_files/jquery.barfiller.js"></script>

    <script src="/js/Hospital_files/tagsinput.js"></script>

    <script src="/js/Hospital_files/summernote-bs4.js"></script>
    <script src="/js/Hospital_files/apexcharts.js"></script>

    <script src="/js/Hospital_files/custom.js"></script>
    <script src="/js/Hospital_files/bar_active_1.js"></script>
    <script src="/js/Hospital_files/apex_chart_list.js"></script>

    <svg id="SvgjsSvg1246" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1247"></defs>
        <polyline id="SvgjsPolyline1248" points="0,0"></polyline>
        <path id="SvgjsPath1249"
            d="M-1 184.5018450184502L-1 184.5018450184502L55.666666666666664 184.5018450184502L111.33333333333333 184.5018450184502L167 184.5018450184502L222.66666666666666 184.5018450184502L278.3333333333333 184.5018450184502L334 184.5018450184502L389.66666666666663 184.5018450184502L445.3333333333333 184.5018450184502L501 184.5018450184502C501 184.5018450184502 501 184.5018450184502 501 184.5018450184502 ">
        </path>
    </svg>
</body>

</html>