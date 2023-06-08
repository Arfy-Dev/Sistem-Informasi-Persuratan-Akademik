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