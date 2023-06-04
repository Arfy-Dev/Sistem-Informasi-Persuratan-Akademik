// Trigger Untuk memunculkan modal
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

// Trigger Close Button untuk Form Pencarian ID Pengajuan
document.getElementById('closeLacak').addEventListener('click', function() {
    var data = "<?php session()->destroy('pesan')?>";
    window.location.href = '/lacak';
})