<?= $this->extend('layout/interface');?>
<?= $this->section('content');?>
<div class="sipa-wrapper" onclick="closeNav()">
    <div class="container ta-left">
        <div class="container-article">
            <h1 class="article-title ta-center">Sistem Informasi Persuratan Akademik</h1>
        </div>
    </div>
</div>
<div class="wave-divider">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#011c27" fill-opacity="1"
            d="M0,96L48,101.3C96,107,192,117,288,149.3C384,181,480,235,576,240C672,245,768,203,864,197.3C960,192,1056,224,1152,218.7C1248,213,1344,171,1392,149.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</div>
<div class="wave-wrapper">
    <div class="dark wave-dark-wrapper">
        <div class="sipa-wrapper">
            <div class="container-fluid-custom">
                <div class="row">
                    <div class="col-md-12 pt150">
                        <div class="ta-center">
                            <span class="title2"></span>
                            <h1 class="slogan">Bentuk Pelayanan Kami!</h1>
                        </div>
                    </div>
                </div>
                <div class="row ta-center topic">
                    <div class="col-lg-6 col-md-12">
                        <div class="topic-row">
                            <img src="https://cdn.jsdelivr.net/gh/dazelpro/cdn@3.0.0/dark/image/icons/angular.svg"
                                style="width:120px;" alt="Angular - Dazelpro">
                            <h2><a href="https://dazelpro.com/category/angular">Pendaftaran dan Administrasi yang
                                    Cepat</a></h2>
                            <p class="topic-desc">
                                Hematkan waktu berhari-hari dalam proses administrasi! Dengan SIPA, proses
                                administrasi yang sebelumnya memakan waktu berhari-hari dapat diselesaikan dengan
                                cepat, hanya dalam hitungan jam atau bahkan menit.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="topic-row">
                            <img src="https://cdn.jsdelivr.net/gh/dazelpro/cdn@3.0.0/dark/image/icons/nodejs.svg"
                                style="width:120px;" alt="Node JS - Dazelpro">
                            <h2><a href="https://dazelpro.com/category/node-js">Akses Informasi yang Mudah</a></h2>
                            <p class="topic-desc">
                                Dengan SIPA, mahasiswa bebas dari ketergantungan pada saluran komunikasi lain dan
                                kunjungan ke kantor administrasi. Akses informasi yang mudah dan cepat telah menjadi
                                kenyataan.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="topic-row">
                            <img src="https://cdn.jsdelivr.net/gh/dazelpro/cdn@3.0.0/dark/image/icons/nodejs.svg"
                                style="width:120px;" alt="Node JS - Dazelpro">
                            <h2><a href="https://dazelpro.com/category/node-js">Pengarsipan Digital</a>
                            </h2>
                            <p class="topic-desc"> Tidak perlu lagi repot mencari dokumen fisik atau khawatir
                                tentang kerusakan atau kehilangan. Dengan SIPA, pengolahan dokumen menjadi lebih
                                efisien dan aksesibilitasnya semakin terjamin. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="topic-row">
                            <img src="https://cdn.jsdelivr.net/gh/dazelpro/cdn@3.0.0/dark/image/icons/angular.svg"
                                style="width:120px;" alt="Angular - Dazelpro">
                            <h2><a href="https://dazelpro.com/category/angular">Lacak Surat</a></h2>
                            <p class="topic-desc"> Tidak perlu lagi khawatir tentang keberadaan surat atau status
                                pengiriman, karena kami memberikan informasi real-time tentang status pengiriman
                                surat. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wave-divider">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#011c27" fill-opacity="1"
            d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,149.3C672,149,768,203,864,202.7C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
</div>

<script src="/js/main.js"></script>
<script src="/js/slide.js"></script>
<script src="/js/prism.js"></script>
<script src="/js/register.js"></script>

<?= $this->endSection();?>