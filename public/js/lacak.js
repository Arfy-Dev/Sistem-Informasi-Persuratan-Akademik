

  window.addEventListener('DOMContentLoaded', (event) => {
    var modal = document.getElementById('cariModal');
    modal.style.opacity = '0'; // Mengatur opasitas awal menjadi 0
    modal.style.transition = 'opacity 0.3s ease'; // Mengatur transisi pada opasitas dengan durasi 0.3 detik dan fungsi timing ease
  
    setTimeout(function() {
      modal.style.opacity = '1'; // Fade in modal
    }, 100); // Waktu penundaan sebelum fade in modal
    modal.style.display = 'block';

    var closeBtn = modal.querySelector('.tutup');
    closeBtn.addEventListener('click', function() {
      modal.style.opacity = '0'; // Mengatur opasitas modal menjadi 0 saat menutup modal
  
      setTimeout(function() {
        modal.style.display = 'none'; // Menyembunyikan modal setelah animasi selesai
      }, 300); // Waktu delay sebelum menyembunyikan modal (dalam milidetik)
    });
  });
  
  