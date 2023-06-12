<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<?= $this->include('asset/notification')?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Jenis Surat</h3>

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
                                                <form action="<?='/jenissurat/save'?>" class="needs-validation"
                                                    method="post" id="form" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="kode_surat" class="harus">Kode Surat</label>
                                                        <input id="kode_surat" name="kode_surat" type="text" required
                                                                class="form-control " autofocus=""
                                                                aria-describedby=" kode_suratHelp"
                                                                                                                                data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi ID Kode Surat!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_surat" class="harus">Jenis Surat</label>
                                                        <input id="jenis_surat" required type="text" class="form-control "
                                                            autofocus="" aria-describedby="jenis_suratHelp" name="jenis_surat"
                                                            onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi Jenis Surat!
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
                    </div>
                </div>
                <!-- End Copy 2 -->
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Surat</th>
                        <th>Jenis Surat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_jenis_surat as $result):?>
                    <tr>
                        <td><?= $result['kode_surat']?></td>
                        <td><?= $result['jenis_surat']?></td>

                        <td><button type="button" class="btn btn-warning"
                                style="font-size: 12px; color:white; padding: 5px 10px;" data-toggle="modal"
                                data-target="#editModal<?= $result['kode_surat']?>">
                                Edit
                            </button>

                            <div class="modal fade" id="editModal<?= $result['kode_surat']?>" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                <?= $result['kode_surat']?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div class="card card-outline p-4">

                                                    <div class="card-body">
                                                        <div>
                                                            <form
                                                                action="<?='/jenissurat/update/'. $result['kode_surat']?>"
                                                                class="needs-validation" method="post"
                                                                id="form<?= $result['kode_surat']?>"
                                                                novalidate="novalidate">
                                                                <div class="form-group">
                                                                    <input id="kode_surat autorefresh"
                                                                        name="kode_surat" type="hidden"
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="kode_suratHelp"
                                                                        value="<?= $result['kode_surat']?>"
                                                                        data-form-type="other">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kode_surat" class="harus">ID
                                                                        Fakultas</label>
                                                                    <input disabled value="<?= $result['kode_surat']?>"
                                                                        id="
                                                                                kode_surat" type="text" required
                                                                        minlength="11" maxlength="11"
                                                                        class="form-control "
                                                                        onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                        autofocus="" aria-describedby="
                                                                    kode_suratHelp" name="kode_surat"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi Kode Surat!
                                                                    </div>
                                                                </div>
                                                                    <div class="form-group">
                                                                        <label for="jenis_surat" class="harus">Jenis Surat</label>
                                                                        <input value="<?= $result['jenis_surat']?>" id="jenis_surat"
                                                                            required type="text" class="form-control "
                                                                            autofocus="" aria-describedby="jenis_suratHelp"
                                                                            name="jenis_surat"
                                                                            onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                            data-form-type="other">
                                                                        <div class="invalid-feedback">
                                                                            Harap isi Jenis Surat Anda!
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
                    
                            <a href="/jenissurat/delete/<?= $result['kode_surat']?>" class="btn btn-danger"
                                style="font-size: 12px; padding: 5px 10px; color:white; border-radius: 3px;"
                                onclick="sweetAlert(event, '<?= $result['kode_surat']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, kode_surat) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data ini?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "jenissurat/delete/<?= $result['kode_surat']?>";
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