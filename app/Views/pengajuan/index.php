<?= $this->extend('layout/interface');?>
<?= $this->section('content');?>
<?php include('create.php')?>
<div class="wave-divider-pengajuan">
    <svg xmlns="http://www.w3.org/1000/svg" viewBox="0 0 1440 320">
        <path fill="#011c27" fill-opacity="1"
            d="M0,192L48,176C96,160,192,128,288,149.3C384,171,480,245,576,277.3C672,309,768,299,864,282.7C960,267,1056,245,1152,218.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</div>

<?php if(session()->getFlashdata('pesan') > 1):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Pengajuan Berhasil",
        text: "Pantau surat Anda dengan ID Pengajuan <?= $kode_surat.$id_pengajuan?>",
        icon: "success",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
            window.location.href = "/pengajuan"; // Ganti dengan link yang diinginkan
        }
    });
});
</script>
<?php endif?>

<div class="wave-wrapper">
    <div class="dark wave-dark-wrapper">
        <div class="sipa-wrapper">
            <div class="container-fluid-custom">
                <div class="row justify-content-center">
                    <div class="col-md-12 pt20">
                        <div class="ta-center">
                            <h1 class="slogan">Daftar Jenis Surat Pengajuan</h1>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-4 ml-5 mr-5 d-flex align-items-stretch px-1">
                        <div class="card card-body text-center glassmorphism">
                            <h1 class="card-title text-dark m-5" style="font-size:4rem"><img class="col-md-6" src="">
                            </h1>
                            <h4 class="card-title font-weight-bolder">Surat Keterangan Aktif Kuliah</h4>
                            <p class="card-text font-weight-bolder">
                                Dapatkan keuntungan sebagai mahasiswa aktif dengan Surat Aktif Kuliah! Akses
                                fasilitas,
                                hak istimewa, dan kegiatan akademik.</p>

                            <div class="flex-row">
                                <button type="button" class="btn text-white" style="background:#f66903"
                                    data-toggle="modal" data-target="#SKAKModal">
                                    Ajukan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-4 ml-5 mr-5 d-flex align-items-stretch px-1">
                        <div class="card card-body text-center glassmorphism">
                            <h1 class="card-title text-dark m-5" style="font-size:4rem"><img class="col-md-6" src="">
                            </h1>
                            <h4 class="card-title font-weight-bolder">Surat Keterangan Berkelakuan Baik</h4>
                            <p class="card-text font-weight-bolder">
                                Reputasi Cemerlang dengan Surat Berkelakuan Baik: Raih Pengakuan dan Kesempatan Terbaik.
                            </p>

                            <div class="flex-row">
                                <button type="button" class="btn text-white" style="background:#f66903"
                                    data-toggle="modal" data-target="#SKBBModal">
                                    Ajukan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-4 ml-5 mr-5 d-flex align-items-stretch px-1">
                        <div class="card card-body text-center glassmorphism">
                            <h1 class="card-title text-dark m-5" style="font-size:4rem"><img class="col-md-6" src="">
                            </h1>
                            <h4 class="card-title font-weight-bolder">Surat Keterangan Bebas Beasiswa</h4>
                            <p class="card-text font-weight-bolder">
                                Bukti Kebutuhan dan Potensi untuk Meraih Bantuan Pendidikan yang Layak!
                            </p>

                            <div class="flex-row">
                                <button type="button" class="btn text-white" style="background:#f66903"
                                    data-toggle="modal" data-target="#SKTBModal">
                                    Ajukan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mt-4 ml-5 mr-5 d-flex align-items-stretch px-1">
                        <div class="card card-body text-center glassmorphism">
                            <h1 class="card-title text-dark m-5" style="font-size:4rem"><img class="col-md-6" src="">
                            </h1>
                            <h4 class="card-title font-weight-bolder">Surat Keterangan Masih Kuliah</h4>
                            <p class="card-text font-weight-bolder">
                                Buktikan Keterlibatan Aktifmu dengan Surat Keterangan Masih Kuliah. Dapatkan Pengalaman
                                Berharga dan Kenalan Baru di Kampus!
                            </p>

                            <div class="flex-row">
                                <button type="button" class="btn text-white" style="background:#f66903"
                                    data-toggle="modal" data-target="#SKMKModal">
                                    Ajukan
                                </button>
                            </div>
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
<script src="/js/modal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/autorefresh.js"></script>


<?= $this->endSection();?>