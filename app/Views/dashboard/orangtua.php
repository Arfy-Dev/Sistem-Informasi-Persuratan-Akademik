<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Orang Tua</h3>
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>NIM</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($data_orang_tua as $result):?>
                    <tr>
                        <td><?= $result['id_orangtua']?></td>
                        <td><?= $result['nama_orangtua']?></td>
                        <td><?= $result['pekerjaan_orangtua']?></td>
                        <td><?= $result['alamat_orangtua']?></td>
                        <td><?= $result['nim']?></td>
                        <td>

                            <a href="/orangtua/delete/<?= $result['id_orangtua']?>"
                                onclick="sweetAlert(event, '<?= $result['id_orangtua']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, id_orangtua) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['nim']?>?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "/orangtua/delete/" + nim;
                                    }
                                });
                            }
                            </script>

                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection();?>