<?= $this->extend('layout/interface');?>
<?= $this->section('content');?>
<?php if(session()->getFlashdata('pesan') == "Data Tidak Ditemukan"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Data Tidak Ditemukan",
        text: "Harap periksa kembali ID Pengajuan Anda",
        icon: "error",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
            window.location.href = "/lacak"; // Ganti dengan link yang diinginkan
        }
    });
});
</script>
<?php endif?>

<?php if(session()->getFlashdata('pesan') == "Data Ditemukan"):?>
<div class="modal fade show" id="cariModal" tabindex="-1" aria-labelledby="cariModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cariModalLabel">Informasi Surat Anda!
                </h5>

            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <?php
                    if(count($hasil)>0) {
                        foreach ($hasil as $result) {
                            echo $html = '<li class="list-group-item d-flex justify-content-between align-items-center">
                            ID Pengajuan
                            <span class="badge badge-primary badge-pill">' . $result['id_pengajuan'] . '</span>
                        </li>';
                            echo $html = '<li class="list-group-item d-flex justify-content-between align-items-center">
                            Kode Surat
                            <span class="badge badge-primary badge-pill">' . $result['kode_surat'] . '</span>
                        </li>';
                            echo $html = '<li class="list-group-item d-flex justify-content-between align-items-center">
                            Status
                            <span class="badge badge-primary badge-pill">' . $result['status'] . '</span>
                        </li>';
                        
                        }
                    }?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" id="closeLacak" class="btn btn-secondary tutup"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <?php session()->destroy('pesan')?>
</div>
<script src="/js/modal.js"></script>
<?php endif?>


<div class="wave-divider-pengajuan">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#011c27" fill-opacity="1"
            d="M0,96L48,117.3C96,139,192,181,288,208C384,235,480,245,576,229.3C672,213,768,171,864,181.3C960,192,1056,256,1152,261.3C1248,267,1344,213,1392,186.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</div>

<div class="wave-wrapper">
    <div class="dark wave-dark-wrapper">
        <div class="sipa-wrapper">
            <div class="container-fluid-custom">
                <div class="ta-center">
                    <ch1 class="slogan">Temukan Surat Anda!</h1>
                </div>
                <div class="s130">
                    <form action="/lacak/cari" action="post" class="needs-validation" novalidate="novalidate"
                        data-form-type="">
                        <div class="inner-form">
                            <div class="input-field first-wrap">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                        </path>
                                    </svg>
                                </div>
                                <input id="cari" name="cari" class="form-control" required type="text"
                                    placeholder=" Masukkan ID Pengajuan Anda!" data-form-type=""><br>
                                <div class="invalid-feedback">
                                    <script>
                                    $(document).ready(function() {
                                        // Ketika tombol "Cari" diklik
                                        $('#cariButton').click(function() {
                                            // Mendapatkan nilai input
                                            var inputVal = $('#cari').val();

                                            // Validasi apakah input kosong
                                            if (inputVal === '') {
                                                // Mengganti placeholder pada input dengan ID "cari"
                                                $('#cari').attr('placeholder',
                                                    'Input ID Pengajuan Anda!').addClass(
                                                    'error-placeholder');
                                            }
                                        });
                                    });
                                    </script>
                                </div>
                            </div>

                            <div class="input-field second-wrap">
                                <button id="cariButton" class="btn-search" type="action"
                                    data-form-type="">Cari!</button>
                            </div>
                        </div>
                    </form>
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
<script src="/js/modal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/register.js"></script>
<script src="/js/lacak.js"></script>
<script src="/js/validate.js"></script>

<?= $this->endSection();?>