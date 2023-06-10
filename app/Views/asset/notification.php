<!-- Start Copy 1  -->
<?php if(session()->getFlashdata('pesan') == "Data Berhasil di Ubah"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Data Berhasil di Ubah",
        icon: "success",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
            // window.location.href = "/mahasiswa";
        }
    });
});
</script>
<?php endif?>

<!-- Nofikasi berhasil menambah data -->
<?php if(session()->getFlashdata('pesan') == "Data Berhasil di Tambah"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Data Berhasil di Tambah",
        icon: "success",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi berhasil menandatangani surat -->
<?php if(session()->getFlashdata('pesan') == "Surat Berhasil Ditandatangani"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Surat Berhasil Ditandatangani",
        icon: "success",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi gagal menandatangani surat -->
<?php if(session()->getFlashdata('pesan') == "Surat Gagal Ditandatangani"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Surat Gagal Ditandatangani",
        text: "Silahkan TTD kembali",
        icon: "error",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi nim telah tersedia -->
<?php if(session()->getFlashdata('pesan') == "Data Sudah Tersedia"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Data Sudah Tersedia",
        text: "Silahkan cek NIM kembali",
        icon: "warning",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi ID Fakultas telah tersedia -->
<?php if(session()->getFlashdata('pesan') == "ID Fakultas Sudah Tersedia"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Data Sudah Tersedia",
        text: "Silahkan cek ID Fakultas kembali",
        icon: "warning",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi berhasil menghapus data -->
<?php if(session()->getFlashdata('pesan') == "Data Berhasil Dihapus"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Data Berhasil Dihapus",
        icon: "success",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi gagal menghapus data -->
<?php if(session()->getFlashdata('pesan') == "Data Gagal Dihapus"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Data Gagal Dihapus",
        icon: "error",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>
<!-- End Copy 1  -->

<!-- Notifikasi berhasil mengirim surat -->
<?php if(session()->getFlashdata('pesan') == "Surat Berhasil Dikirim"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Surat Berhasil Dikirim",
        icon: "success",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi gagal mengirim surat -->
<?php if(session()->getFlashdata('pesan') == "Surat Gagal Dikirim"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Surat Gagal Dikirim",
        text: "Silahkan kirim kembali",
        icon: "error",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Surat belum dikirim -->
<?php if(session()->getFlashdata('pesan') == "Surat Belum Dikirim"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Surat Belum Dikirim",
        text: "Tunggulah hingga surat dikirim oleh admin!",
        icon: "error",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>

<!-- Notifikasi berhasil login -->
<?php if(session()->getFlashdata('pesan') == "login berhasil"):?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: "Selamat Datang!",
        icon: "success",
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = '<?php session()->destroy('pesan')?>';
        }
    });
});
</script>
<?php endif?>