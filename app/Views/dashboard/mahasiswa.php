<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<!-- Start Copy 1 -->
<?= $this->include('asset/notification')?>
<!-- End Copy 1 -->

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Mahasiswa</h3>
                <!-- Start Copy 2 -->
                <button type="button" class="btn btn-primary"
                    style="margin-top: -30px; font-size: 12px; color:white; padding: 5px 10px;" data-toggle="modal"
                    data-target="#tambahModal">
                    Tambah Data
                </button>
                <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <div class="card card-outline p-4">

                                        <div class="card-body">
                                            <div>
                                                <form action="<?='/mahasiswa/save'?>" class="needs-validation"
                                                    method="post" id="form" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="nama" class="harus">Nama</label>
                                                        <input id="nama" required type="text" class="form-control "
                                                            autofocus="" aria-describedby="namaHelp" name="nama"
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
                                                                <input value="" id="
                                                                                nim" type="number" required
                                                                    minlength="11" maxlength="11" class="form-control "
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
                                                                <label for="semester" class="harus">Semester</label>
                                                                <input name="semester" type="number" required
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
                                                                <label for="tempat_lahir" class="harus">Tempat
                                                                    Lahir</label>
                                                                <input id="tempat_lahir" type="text" required
                                                                    class="form-control " autofocus=""
                                                                    aria-describedby="tempat_lahirHelp"
                                                                    onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                    name="tempat_lahir" data-form-type="other">
                                                                <div class="invalid-feedback">
                                                                    Harap isi tempat lahir Anda!
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="tanggal_lahir" class="harus">Tanggal
                                                                    Lahir</label>
                                                                <div class="input-group date" data-provide="datepicker">
                                                                    <input id=" tanggal_lahir" required type="date"
                                                                        class="form-control "
                                                                        aria-describedby="tanggal_lahirHelp"
                                                                        name="tanggal_lahir" autocomplete="off"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi tanggal lahir Anda!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat_mhs" class="harus">Alamat</label>
                                                        <input name="alamat_mhs" type="text" required
                                                            class="form-control " autofocus=""
                                                            aria-describedby=" alamat_mhsHelp" data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi alamat Anda!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_prodi" class="harus">Program Studi</label>
                                                        <select name="id_prodi" required
                                                            class="form-control chosen select2-hidden-accessible"
                                                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                            <option value="" data-select2-id="3">Pilih Prodi</option>
                                                            <?php foreach($data_prodi as $result):?>
                                                            <option value="<?= $result['id_prodi']?>">
                                                                <?= $result['nama']?>
                                                            </option>
                                                            <?php endforeach?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Harap isi program studi Anda!
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary ">
                                            Tambah
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copy 2 -->
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
                        <!-- Start Copy 3 -->
                        <th>Aksi</th>
                        <!-- End Copy 3 -->
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
                        <!-- Start Copy 4 -->
                        <td><button type="button" class="btn btn-warning"
                                style="font-size: 12px; color:white; padding: 5px 10px;" data-toggle="modal"
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
                                                            <form action="<?='/mahasiswa/update/'. $result['nim']?>"
                                                                class="needs-validation" method="post"
                                                                id="form<?= $result['nim']?>" novalidate="novalidate">
                                                                <div class="form-group">
                                                                    <input id="nim autorefresh" name="nim" type="hidden"
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="nimHelp"
                                                                        value="<?= $result['nim']?>"
                                                                        data-form-type="other">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_prodi autorefresh" name="id_prodi"
                                                                        type="hidden" class="form-control " autofocus=""
                                                                        aria-describedby="id_prodiHelp"
                                                                        value="<?= $result['id_prodi']?>"
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
                                                                            <input disabled value="<?= $result['nim']?>"
                                                                                id="
                                                                                nim" type="number" required
                                                                                minlength="11" maxlength="11"
                                                                                class="form-control "
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
                                                                    <label for="alamat_mhs" class="harus">Alamat</label>
                                                                    <input value="<?= $result['alamat_mhs']?>"
                                                                        value="oke" name="alamat_mhs" type="text"
                                                                        required class="form-control " autofocus=""
                                                                        aria-describedby=" alamat_mhsHelp"
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
                                    text: "Apakah Anda yakin ingin menghapus data ini?",
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
                        <!-- End Copy 4 -->
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection();?>