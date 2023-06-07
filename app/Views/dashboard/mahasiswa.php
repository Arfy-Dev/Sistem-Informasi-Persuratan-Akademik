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
                        <td><button type="button" class="btn text-white"
                                style="background:#f66903;font-size: 12px; padding: 5px 10px;" data-toggle="modal"
                                data-target="#editModal<?= $result['nim']?>">
                                Edit
                            </button>

                            <div class="modal fade" id="editModal<?= $result['nim']?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                <?= $result['nim']?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div class="card card-outline p-4">

                                                    <div class="card-body">
                                                        <div>
                                                            <form action="<?= '/pengajuan/save'?>"
                                                                class="needs-validation" method="post" id="formSKAK"
                                                                novalidate="novalidate">
                                                                <div class="form-group">
                                                                    <input id="id_pengajuan autorefresh"
                                                                        name="id_pengajuan" type="hidden"
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="id_pengajuanHelp"
                                                                        value="<?= substr(uniqid(), 5, 10);?>"
                                                                        data-form-type="other">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="nama" class="harus">Nama</label>
                                                                    <input value="<?= $result['nama']?>" id="nama"
                                                                        required type="text" class="form-control "
                                                                        autofocus="" aria-describedby="namaHelp"
                                                                        name="nama"
                                                                        onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi nama Anda!
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="nim" class="harus">NIM</label>
                                                                            <input value="<?= $result['nim']?>" id="nim"
                                                                                type="number" required minlength="11"
                                                                                maxlength="11" class="form-control "
                                                                                onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                                autofocus="" aria-describedby="
                                            nimHelp" name="nim" data-form-type="other">
                                                                            <div class="invalid-feedback">
                                                                                Harap isi NIM Anda!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="semester"
                                                                                class="harus">Semester</label>
                                                                            <input value="<?= $result['semester']?>"
                                                                                name="semester" type="number" required
                                                                                class="form-control " autofocus=""
                                                                                aria-describedby=" semesterHelp"
                                                                                onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                                data-form-type="other">
                                                                            <div class="invalid-feedback">
                                                                                Harap isi semester Anda!
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="tempat_lahir"
                                                                                class="harus">Tempat Lahir</label>
                                                                            <input value="<?= $result['tempat_lahir']?>"
                                                                                id="tempat_lahir" type="text" required
                                                                                class="form-control " autofocus=""
                                                                                aria-describedby="tempat_lahirHelp"
                                                                                onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                                name="tempat_lahir"
                                                                                data-form-type="other">
                                                                            <div class="invalid-feedback">
                                                                                Harap isi tempat lahir Anda!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_lahir"
                                                                                class="harus">Tanggal Lahir</label>
                                                                            <div class="input-group date"
                                                                                data-provide="datepicker">
                                                                                <input
                                                                                    value="<?= $result['tanggal_lahir']?>"
                                                                                    id="tanggal_lahir" required
                                                                                    type="date" class="form-control "
                                                                                    aria-describedby="tanggal_lahirHelp"
                                                                                    name="tanggal_lahir"
                                                                                    autocomplete="off"
                                                                                    data-form-type="other">
                                                                                <div class="invalid-feedback">
                                                                                    Harap isi tanggal lahir Anda!
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat" class="harus">Alamat</label>
                                                                    <input value="<?= $result['alamat_mhs']?>"
                                                                        name="alamat" type="text" required
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby=" alamatHelp"
                                                                        onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi alamat Anda!
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary ">
                                                        Edit
                                                    </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="/mahasiswa/delete/<?= $result['nim']?> " class="btn btn-danger"
                                style="font-size: 12px; padding: 5px 10px; color:white; border-radius: 3px;"
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