<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Mahasiswa</h3>
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Semester</th>
                        <th>ID Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_mahasiswa as $result):?>
                    <tr>
                        <td><?= $result['nim']?></td>
                        <td><?= $result['nama']?></td>
                        <td><?= $result['tempat_lahir']?></td>
                        <td><?= $result['tanggal_lahir']?></td>
                        <td><?= $result['alamat_mhs']?></td>
                        <td><?= $result['semester']?></td>
                        <td><?= $result['id_prodi']?></td>
                        <td>




                            <a href="/mahasiswa/delete/<?= $result['nim']?>"
                                onclick="sweetAlert(event, '<?= $result['nim']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, nim) {
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
                                        window.location.href = "/mahasiswa/delete/" + nim;
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