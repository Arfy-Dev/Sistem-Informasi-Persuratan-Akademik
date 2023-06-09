<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<?= $this->include('asset/notification')?>

<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Surat</h3>
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
                                                <form action="<?='/surat/save'?>" class="needs-validation"
                                                    method="post" id="form" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="nomor_surat" class="harus">Nomor Surat</label>
                                                        <input id="nomor_surat" type="text" required
                                                            class="form-control " autofocus=""
                                                            aria-describedby=" semesterHelp"
                                                            onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi Nomor Surat!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tanggal" class="harus">Tanggal
                                                                </label>
                                                    <div class="input-group date" data-provide="datepicker">
                                                        <input id=" tanggal" eequired type="date"
                                                            class="form-control "
                                                            aria-describedby="tanggalHelp"
                                                            name="tanggal" autocomplete="off"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi Tanggal!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="tanggal_pengajuan" class="harus">Tanggal Pengajuan
                                                                </label>
                                                    <div class="input-group date" data-provide="datepicker">
                                                        <input id=" tanggal_pengajuan" eequired type="date"
                                                            class="form-control "
                                                            aria-describedby="tanggal_pengajuanHelp"
                                                            name="tanggal_pengajuan" autocomplete="off"
                                                            data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi Tanggal Pengajuan!
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <label for="id_pengajuan" class="harus">ID Pengajuan</label>
                                                    <input id="id_pengajuan" type="text" required
                                                                class="form-control " autofocus=""
                                                                aria-describedby=" id_pengajuanHelp"
                                                                onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                data-form-type="other">
                                                        <div class="invalid-feedback">
                                                            Harap isi ID Pengajuan!
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
                    </div>
                </div>
                <!-- End Copy 2 -->
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
                        
                        <td><button type="button" class="btn btn-warning"
                                style="font-size: 12px; color:white; padding: 5px 10px;" data-toggle="modal"
                                data-target="#editModal<?= $result['nomor_surat']?>">
                                Edit
                            </button>

                            <div class="modal fade" id="editModal<?= $result['nomor_surat']?>" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                <?= $result['nomor_surat']?></h5>
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
                                                                action="<?='/surat/update/'. $result['nomor_surat']?>"
                                                                class="needs-validation" method="post"
                                                                id="form<?= $result['nomor_surat']?>"
                                                                novalidate="novalidate">
                                                                <div class="form-group">
                                                                    <input id="nomor_surat autorefresh"
                                                                        name="nomor_surat" type="hidden"
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="nomor_suratHelp"
                                                                        value="<?= $result['nomor_surat']?>"
                                                                        data-form-type="other">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nomor_surat" class="harus">ID
                                                                        Fakultas</label>
                                                                    <input disabled value="<?= $result['nomor_surat']?>"
                                                                        id="
                                                                                nomor_surat" type="number" required
                                                                        minlength="11" maxlength="11"
                                                                        class="form-control "
                                                                        onkeydown="return /[0-9]/.test(event.key) || event.key === 'Backspace';"
                                                                        autofocus="" aria-describedby="
                                                                    nomor_suratHelp" name="nomor_surat"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi Nomor Surat!
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tanggal"
                                                                        class="harus">Tanggal</label>
                                                                    <div class="input-group date"
                                                                        data-provide="datepicker">
                                                                    <input
                                                                        value="<?= $result['tanggal']?>"
                                                                        id="tanggal" required
                                                                        type="date" class="form-control "
                                                                        aria-describedby="tanggalHelp"
                                                                        name="tanggal"
                                                                        autocomplete="off"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi tanggal!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                
                                                                <div class="form-group">
                                                                    <label for="tanggal_pengajuan"
                                                                        class="harus">Tanggal Pengajuan</label>
                                                                    <div class="input-group date"
                                                                        data-provide="datepicker">
                                                                    <input
                                                                        value="<?= $result['tanggal_pengajuan']?>"
                                                                        id="tanggal_pengajuan" required
                                                                        type="date" class="form-control "
                                                                        aria-describedby="tanggal_pengajuanHelp"
                                                                        name="tanggal_pengajuan"
                                                                        autocomplete="off"
                                                                        data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi tanggal Pengajuan!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <div class="form-group">
                                                                    <label for="id_pengajuan" class="harus">Id Pengajuan</label>
                                                                    <input id="id_pengajuan" type="number" required
                                                                         class="form-control " autofocus=""
                                                                        aria-describedby="id_pengajuanHelp"
                                                                        onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                                        name="id_pengajuan" data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi id pengajuan Anda!
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
                
                            <a href="/surat/delete/<?= $result['nomor_surat']?>"  class="btn btn-danger"
                                style="font-size: 12px; padding: 5px 10px; color:white; border-radius: 3px;"
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