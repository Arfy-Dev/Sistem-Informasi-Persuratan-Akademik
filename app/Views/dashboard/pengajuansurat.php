<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

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
                        <!-- <td>

                            <a href="/pengajuansurat/delete/<?= $result['id_pengajuan']?>"
                                onclick="sweetAlert(event, '<?= $result['id_pengajuan']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, id_pengajuan) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['id_pengajuan']?>?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "/pengajuansurat/delete/" + id_pengajuan;
                                    }
                                });
                            }
                            </script>

                        </td> -->
                        <td>
                            <!-- TTD Pengajuan Surat -->
                            <a style="font-size: 12px; color:white; padding: 5px 10px;" class="btn btn-warning"
                                href="pengajuan_surat/cetak_surat/<?= $result['id_pengajuan']?>/<?= $result['nim']?>"
                                onclick="sweetAlert(event, 'cetak_surat', '<?= $result['id_pengajuan']?>', '<?= $result['nim']?>')">Lihat
                                Surat</a>
                            <!-- Lihat Surat -->
                            <?php if($result['status'] == "Ditandatangani"):?>
                            <a style="font-size: 12px; color:white; padding: 5px 10px;" class="btn btn-success"
                                href="pengajuan_surat/kirim_surat/<?= $result['id_pengajuan']?>"
                                onclick="sweetAlert(event, 'kirim_surat', '<?= $result['id_pengajuan']?>')">Kirim
                                Surat</a>
                            <?php endif?>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, action, id_pengajuan, nim) {
                                event.preventDefault();
                                if (action === 'kirim_surat') {
                                    Swal.fire({
                                        title: 'Kirim Surat',
                                        text: 'Apakah Anda yakin mengirim surat ini?',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonText: 'Ya',
                                        cancelButtonText: 'Tidak',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Arahkan pengguna ke halaman ttd
                                            window.location.href = "pengajuan_surat/kirim_surat/" +
                                            id_pengajuan;
                                        }
                                    });
                                } else if (action === 'cetak_surat') {
                                    Swal.fire({
                                        title: 'Lihat PDF Surat Pengajuan?',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonText: 'Ya',
                                        cancelButtonText: 'Tidak',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Arahkan pengguna ke halaman cetak_surat
                                            window.location.href = "pengajuan_surat/cetak_surat/" +
                                                id_pengajuan + "/" + nim;
                                        }
                                    });
                                }
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