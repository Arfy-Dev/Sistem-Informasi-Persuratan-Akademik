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
                                                <form action="<?='/surat/save'?>" class="needs-validation" method="post"
                                                    id="form" novalidate="novalidate">
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
                                                                class="form-control " aria-describedby="tanggalHelp"
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
                        <td>
                            <!-- Lihat Surat -->
                            <a style="font-size: 12px; color:white; padding: 5px 10px;" class="btn btn-warning"
                                href="lihat_surat/<?= $result['id_pengajuan'] ?>"
                                onclick="sweetAlert(event, 'lihat_surat')">Lihat Surat</a>

                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, action) {
                                event.preventDefault();
                                if (action === 'lihat_surat') {
                                    Swal.fire({
                                        title: 'Lihat PDF Surat Pengajuan?',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonText: 'Ya',
                                        cancelButtonText: 'Tidak',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Arahkan pengguna ke halaman lihat_surat
                                            window.location.href = "lihat_surat/<?= $result['id_pengajuan'] ?>";
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