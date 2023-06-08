<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Surat</h3>
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor Surat </th>
                        <th>Tanggal</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Id Pengajuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_surat as $result):?>
                    <tr>
                        <td><?= $result['nomor_surat']?></td>
                        <td><?= $result['tanggal']?></td>
                        <td><?= $result['tanggal_pengajuan']?></td>
                        <td><?= $result['id_pengajuan']?></td>
                        <td>

                            <a href="/surat/delete/<?= $result['nomor_surat']?>"
                                onclick="sweetAlert(event, '<?= $result['nomor_surat']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, nomor_surat) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['nomor_surat']?>?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "/surat/delete/" + nomor_surat;
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