<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<?= $this->include('asset/notification')?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Orang Tua</h3>

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
                                                <form action="<?='/orangtua/save'?>" class="needs-validation"
                                                    method="post" id="form" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="id_orangtua" class="harus">ID Orang Tua</label>
                                                        <input id="id_orangtua" type="text" required
                                                            class="form-control " autofocus=""
                                                            aria-describedby="id_orangtuaHelp" name="id_orangtua"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi ID Orang Tua!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_orangtua" class="harus">Nama</label>
                                                        <input id="nama_orangtua"  type="text" class="form-control "
                                                            autofocus="" aria-describedby="nama_orangtuaHelp" name="nama_orangtua"
                                                            onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi nama Orang Tua!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pekerjaan_orangtua" class="harus">Pekerjaan</label>
                                                        <input name="pekerjaan_orangtua" type="text" required
                                                            class="form-control " autofocus=""
                                                            aria-describedby=" pekerjaan_orangtuaHelp"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi pekerjaan Orang Tua!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat_orangtua" class="harus">Alamat</label>
                                                        <input name="alamat_orangtua" type="text" required
                                                            class="form-control " autofocus=""
                                                            aria-describedby=" alamat_orangtuaHelp"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi alamat Orang Tua!
                                                        </div>
                                                    </div>
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
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>NIM</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($data_orang_tua as $result):?>
                    <tr>
                        <td><?= $result['id_orangtua']?></td>
                        <td><?= $result['nama_orangtua']?></td>
                        <td><?= $result['pekerjaan_orangtua']?></td>
                        <td><?= $result['alamat_orangtua']?></td>
                        <td><?= $result['nim']?></td>
                        
                        <!-- Start Copy 4 -->
                        <td><button type="button" class="btn btn-warning"
                                style="font-size: 12px; color:white; padding: 5px 10px;" data-toggle="modal"
                                data-target="#editModal<?= $result['id_orangtua']?>">
                                Edit
                            </button>

                            <div class="modal fade" id="editModal<?= $result['id_orangtua']?>" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                <?= $result['id_orangtua']?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div class="card card-outline p-4">

                                                    <div class="card-body">
                                                        <div>
                                                            <form action="<?='/orangtua/update/'. $result['id_orangtua']?>"
                                                                class="needs-validation" method="post"
                                                                id="form<?= $result['id_orangtua']?>"
                                                                novalidate="novalidate">
                                                                <div class="form-group">
                                                                    <input id="id_orangtua autorefresh" name="id_orangtua"
                                                                        type="hidden" class="form-control " autofocus=""
                                                                        aria-describedby="id_orangtuaHelp"
                                                                        value="<?= $result['id_orangtua']?>"
                                                                        data-form-type="other">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input id="nim autorefresh" name="nim" type="hidden"
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="nimHelp"
                                                                        value="<?= $result['nim']?>"
                                                                        data-form-type="other">
                                                                </div>
                                    
                                                                <div class="form-group">
                                                                    <label for="id_orangtua" class="harus">ID Orang Tua</label>
                                                                    <input disabled value="<?= $result['id_orangtua']?>"
                                                                        id="
                                                                        id_orangtua" type="number" required
                                                                        minlength="11" maxlength="11"
                                                                        class="form-control "
                                                                        onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                        autofocus="" aria-describedby="
                                                                    id_orangtuaHelp" name="id_orangtua"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi ID Orang Tua!
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nama_orangtua" class="harus">Nama</label>
                                                                        <input value="<?= $result['nama_orangtua']?>" id="nama_orangtua"
                                                                            required type="text" class="form-control "
                                                                            autofocus="" aria-describedby="nama_orangtuaHelp"
                                                                            name="nama_orangtua"
                                                                            onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                            data-form-type="other">
                                                                        <div class="invalid-feedback">
                                                                            Harap isi Nama Orang Tua!
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pekerjaan_orangtua"
                                                                        class="harus">Alamat</label>
                                                                    <input value="<?= $result['pekerjaan_orangtua']?>"
                                                                        value="oke" name="pekerjaan_orangtua" type="text"
                                                                        required class="form-control " autofocus=""
                                                                        aria-describedby=" pekerjaan_orangtuaHelp"
                                                                        onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi pekerjaan orang tua Anda!
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat_orangtua"
                                                                        class="harus">Alamat</label>
                                                                    <input value="<?= $result['alamat_orangtua']?>"
                                                                        value="oke" name="alamat_orangtua" type="text"
                                                                        required class="form-control " autofocus=""
                                                                        aria-describedby=" alamat_orangtuaHelp"
                                                                        onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi alamat orang tua Anda!
                                                                    </div>
                                                                </div>
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

                            <a href="/orangtua/delete/<?= $result['id_orangtua']?> " class="btn btn-danger"
                                style="font-size: 12px; padding: 5px 10px; color:white; border-radius: 3px;"
                                onclick="sweetAlert(event, '<?= $result['id_orangtua']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, id_orangtua) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['id_orangtua']?>?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Arahkan pengguna ke halaman delete
                                        window.location.href = "/orangtua/delete/" + id_orangtua;
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