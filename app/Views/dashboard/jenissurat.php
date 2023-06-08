<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Jenis Surat</h3>
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Surat</th>
                        <th>Jenis Surat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_jenis_surat as $result):?>
                    <tr>
                        <td><?= $result['kode_surat']?></td>
                        <td><?= $result['jenis_surat']?></td>
                        <td>

                            <a href="/jenis_surat/delete/<?= $result['kode_surat']?>"
                                onclick="sweetAlert(event, '<?= $result['kode_surat']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, kode_surat) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['kode_surat']?>?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "/jenis_surat/delete/" + kode_surat;
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