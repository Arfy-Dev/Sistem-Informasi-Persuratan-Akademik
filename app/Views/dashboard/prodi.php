<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<?= $this->include('asset/notification')?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Program Studi</h3>
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
                                                <form action="<?='/prodi/save/(:segment)'?>" class="needs-validation"
                                                    method="post" id="form" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="id_prodi" class="harus">ID Prodi</label>
                                                        <input value="" id="
                                                                    id_prodi" type="number" required
                                                                    minlength="11" maxlength="11" class="form-control "
                                                                    onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                    autofocus="" aria-describedby="id_prodiHelp" name="id_prodi" data-form-type="other">
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
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
                                                    
                                                    <div class="form-group">
                                                        <label for="alamat_prodi" class="harus">Alamat</label>
                                                        <input name="alamat_prodi" type="text" required
                                                            class="form-control " autofocus=""
                                                            aria-describedby=" alamat_prodiHelp"
                                                            onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi alamat Anda!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_fakultas" class="harus">ID Fakultas</label>
                                                        <input value="" id="
                                                                    id_fakultas" type="number" required
                                                                    minlength="11" maxlength="11" class="form-control "
                                                                    onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                    autofocus="" aria-describedby="id_fakultasHelp" name="id_fakultas" data-form-type="other">
                                                        <div class="invalid-feedback">
                                                        </div>
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
                        <th>ID Prodi</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>ID Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_prodi as $result):?>
                    <tr>
                        <td><?= $result['id_prodi']?></td>
                        <td><?= $result['nama']?></td>
                        <td><?= $result['alamat_prodi']?></td>
                        <td><?= $result['id_fakultas']?></td>

                            <td><button type="button" class="btn btn-warning"
                                style="font-size: 12px; color:white; padding: 5px 10px;" data-toggle="modal"
                                data-target="#editModal<?= $result['id_prodi']?>">
                                Edit
                            </button>

                            <div class="modal fade" id="editModal<?= $result['id_prodi']?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                <?= $result['id_prodi']?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div class="card card-outline p-4">

                                                    <div class="card-body">
                                                        <div>
                                                            <form action="<?='/prodi/update/'. $result['id_prodi']?>"
                                                                class="needs-validation" method="post"
                                                                id="form<?= $result['id_prodi']?>" novalidate="novalidate">
                                                                <div class="form-group">
                                                                    <input id="id_prodi autorefresh" name="id_prodi" type="hidden"
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="id_prodiHelp"
                                                                        value="<?= $result['id_prodi']?>"
                                                                        data-form-type="other">
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="id_prodi" class="harus">ID Prodi</label>
                                                                <input disabled value="<?= $result['id_fakultas']?>"
                                                                                id="
                                                                                id_prodi" type="number" required
                                                                                minlength="11" maxlength="11"
                                                                                class="form-control "
                                                                                onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                                autofocus="" aria-describedby="
                                                                    id_prodiHelp" name="id_prodi" data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi ID Prodi!
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
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat_prodi" class="harus">Alamat</label>
                                                                    <input value="<?= $result['alamat_prodi']?>"
                                                                        value="oke" name="alamat_prodi" type="text"
                                                                        required class="form-control " autofocus=""
                                                                        aria-describedby=" alamat_prodiHelp"
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

                            <a href="/prodi/delete/<?= $result['id_prodi']?> " class="btn btn-danger"
                                style="font-size: 12px; padding: 5px 10px; color:white; border-radius: 3px;"
                                onclick="sweetAlert(event, '<?= $result['id_prodi']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, id_prodi) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['id_prodi']?>?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "/prodi/delete/" + id_prodi;
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