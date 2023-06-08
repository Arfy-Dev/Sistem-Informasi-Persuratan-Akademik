<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<?= $this->include('asset/notification')?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Fakultas</h3>
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
                                                <form action="<?='/fakultas/save/(:segment)'?>" class="needs-validation"
                                                    method="post" id="form" novalidate="novalidate">
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
                                                        <label for="alamat_fakultas" class="harus">Alamat</label>
                                                        <input name="alamat_fakultas" type="text" required
                                                            class="form-control " autofocus=""
                                                            aria-describedby=" alamat_fakultasHelp"
                                                            onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi alamat Anda!
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
                        <th>ID Fakultas</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_fakultas as $result):?>
                    <tr>
                        <td><?= $result['id_fakultas']?></td>
                        <td><?= $result['nama']?></td>
                        <td><?= $result['alamat_fakultas']?></td>
                        
                            <!-- Start Copy 4 -->
                            <td><button type="button" class="btn btn-warning"
                                style="font-size: 12px; color:white; padding: 5px 10px;" data-toggle="modal"
                                data-target="#editModal<?= $result['id_fakultas']?>">
                                Edit
                            </button>

                            <div class="modal fade" id="editModal<?= $result['id_fakultas']?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                <?= $result['id_fakultas']?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div class="card card-outline p-4">

                                                    <div class="card-body">
                                                        <div>
                                                            <form action="<?='/fakultas/update/'. $result['id_fakultas']?>"
                                                                class="needs-validation" method="post"
                                                                id="form<?= $result['id_fakultas']?>" novalidate="novalidate">
                                                                <div class="form-group">
                                                                    <input id="id_fakultas autorefresh" name="id_fakultas" type="hidden"
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="id_fakultasHelp"
                                                                        value="<?= $result['id_fakultas']?>"
                                                                        data-form-type="other">
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="id_fakultas" class="harus">ID Fakultas</label>
                                                                <input disabled value="<?= $result['id_fakultas']?>"
                                                                                id="
                                                                                id_fakultas" type="number" required
                                                                                minlength="11" maxlength="11"
                                                                                class="form-control "
                                                                                onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                                autofocus="" aria-describedby="
                                                                    id_fakultasHelp" name="id_fakultas" data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi ID Fakultas!
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
                                                                    <label for="alamat_fakultas" class="harus">Alamat</label>
                                                                    <input value="<?= $result['alamat_fakultas']?>"
                                                                        value="oke" name="alamat_fakultas" type="text"
                                                                        required class="form-control " autofocus=""
                                                                        aria-describedby=" alamat_fakultasHelp"
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

                            <a href="/fakultas/delete/<?= $result['id_fakultas']?> " class="btn btn-danger"
                                style="font-size: 12px; padding: 5px 10px; color:white; border-radius: 3px;"
                                onclick="sweetAlert(event, '<?= $result['id_fakultas']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, id_fakultas) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['id_fakultas']?>?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "/fakultas/delete/" + id_fakultas;
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