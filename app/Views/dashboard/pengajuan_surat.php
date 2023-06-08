<?= $this->extend('layout/interface_pimpinan');?>
<?= $this->section('content');?>
<?= $this->include('asset/notification')?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Pengajuan Surat</h3>
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Pengajuan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>NIM</th>
                        <th>Kode Surat</th>
                        <th>Tanggal TTD</th>
                        <th>Deksripsi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_pengajuan_surat as $result):?>
                    <tr>
                        <td><?= $result['id_pengajuan']?></td>
                        <td><?= $result['tanggal_pengajuan']?></td>
                        <td><?= $result['nim']?></td>
                        <td><?= $result['kode_surat']?></td>
                        <td><?= $result['tanggal_ttd']?></td>
                        <td><?= $result['deskripsi']?></td>
                        <td><?= $result['status']?></td>
                        <td>
                            <a style="font-size: 12px; color:white; padding: 5px 10px;" class="btn btn-success"
                                href="pengajuan_surat/ttd/<?= $result['id_pengajuan']?>"
                                onclick="sweetAlert(event, '<?= $result['id_pengajuan']?>')">TTD</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, id_pengajuan) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'TTD Pengajuan Surat',
                                    text: 'Apakah Anda yakin menandatangani surat ini?',
                                    icon: 'question',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "pengajuan_surat/ttd/" + id_pengajuan;
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