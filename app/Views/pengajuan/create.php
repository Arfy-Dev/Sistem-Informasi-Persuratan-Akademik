<div class="modal fade" id="SKAKModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Aktif Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="card card-outline p-4">
                        <div class="card-header nohr">
                            <p class="login-box-msg">Mohon isi formulir pengajuan yang telah disediakan untuk
                                melanjutkan proses pengajuan Anda.</p>
                            <p class="text-info text-bold">Gunakan data diri yang sesuai dengan Kartu Tanda Mahasiswa
                                Anda!
                            </p>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="<?= '/pengajuan/save'?>" class="needs-validation" method="post"
                                    id="formSKAK" novalidate="novalidate">
                                    <div class="form-group">
                                        <input id="id_pengajuan autorefresh" name="id_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="id_pengajuanHelp"
                                            value="<?= substr(uniqid(), 5, 10);?>" data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="kode_surat" name="kode_surat" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="kode_suratHelp" value="<?php echo 'SKAK';?>"
                                            data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="tanggal_pengajuan" name="tanggal_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="tanggal_pengajuanHelp"
                                            value="<?php echo date('Y-m-d');;?>" data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <input id="status" name="status" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="statusHelp" value="Pengajuan"
                                            data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="harus">Nama</label>
                                        <input id="nama" type="text" class="form-control" required autofocus=""
                                            aria-describedby="
                                            namaHelp" name="nama" data-form-type="other"
                                            onkeydown="return /[A-Z, a-z]/.test(event.key)">
                                        <div class="invalid-feedback">
                                            Harap isi nama Anda!
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nim" class="harus">NIM</label>
                                                <input id="nim" type="number" required minlength="11" maxlength="11"
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
                                                <label for="semester" class="harus">Semester</label>
                                                <input name="semester" type="number" required class="form-control "
                                                    autofocus="" aria-describedby=" semesterHelp"
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
                                                <label for="tempat_lahir" class="harus">Tempat Lahir</label>
                                                <input id="tempat_lahir" type="text" required class="form-control "
                                                    autofocus="" aria-describedby="tempat_lahirHelp"
                                                    onkeydown="return /[A-Z, a-z]/.test(event.key)" name="tempat_lahir"
                                                    data-form-type="other">
                                                <div class="invalid-feedback">
                                                    Harap isi tempat lahir Anda!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggal_lahir" class="harus">Tanggal Lahir</label>
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input id="tanggal_lahir" required type="date" class="form-control "
                                                        aria-describedby="tanggal_lahirHelp" name="tanggal_lahir"
                                                        autocomplete="off" data-form-type="other">
                                                    <div class="invalid-feedback">
                                                        Harap isi tanggal lahir Anda!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_mhs" class="harus">Alamat</label>
                                        <input id="alamat_mhs" required type="text" class="form-control " autofocus=""
                                            aria-describedby="alamat_mhsHelp" name="alamat_mhs" data-form-type="other">
                                        <div class="invalid-feedback">
                                            Harap isi alamat Anda!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_prodi" class="harus">Program Studi</label>
                                        <select name="id_prodi" required
                                            class="form-control chosen select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="3">Pilih Prodi</option>
                                            <option value="SIF">S1 - Sistem Informasi</option>
                                            <option value="TIN">S1 - Teknik Industri</option>
                                            <option value="TIF">S1 - Teknik Informatika</option>
                                            <option value="MTK">S1 - Matematika</option>
                                            <option value="TEL">S1 - Teknik Elektro</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harap isi program studi Anda!
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-3">
                                        Kirim
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

<div class="modal fade" id="SKBBModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Berlakuan Baik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="card card-outline p-4">
                        <div class="card-header nohr">
                            <p class="login-box-msg">Mohon isi formulir pengajuan yang telah disediakan untuk
                                melanjutkan proses pengajuan Anda.</p>
                            <p class="text-info text-bold">Gunakan data diri yang sesuai dengan Kartu Tanda Mahasiswa
                                Anda!
                            </p>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="<?= '/pengajuan/save'?>" class="needs-validation" method="post"
                                    id="formSKAK" novalidate="novalidate">
                                    <div class="form-group">
                                        <input id="id_pengajuan autorefresh" name="id_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="id_pengajuanHelp"
                                            value="<?= substr(uniqid(), 5, 10);?>" data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="kode_surat" name="kode_surat" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="kode_suratHelp" value="<?php echo 'SKBB';?>"
                                            data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="tanggal_pengajuan" name="tanggal_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="tanggal_pengajuanHelp"
                                            value="<?php echo date('Y-m-d');;?>" data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <input id="status" name="status" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="statusHelp" value="Pengajuan"
                                            data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="harus">Nama</label>
                                        <input id="nama" type="text" class="form-control" required autofocus=""
                                            aria-describedby="
                                            namaHelp" name="nama" data-form-type="other"
                                            onkeydown="return /[A-Z, a-z]/.test(event.key)">
                                        <div class="invalid-feedback">
                                            Harap isi nama Anda!
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nim" class="harus">NIM</label>
                                                <input id="nim" type="number" required minlength="11" maxlength="11"
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
                                                <label for="semester" class="harus">Semester</label>
                                                <input name="semester" type="number" required class="form-control "
                                                    autofocus="" aria-describedby=" semesterHelp"
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
                                                <label for="tempat_lahir" class="harus">Tempat Lahir</label>
                                                <input id="tempat_lahir" type="text" required class="form-control "
                                                    autofocus="" aria-describedby="tempat_lahirHelp"
                                                    onkeydown="return /[A-Z, a-z]/.test(event.key)" name="tempat_lahir"
                                                    data-form-type="other">
                                                <div class="invalid-feedback">
                                                    Harap isi tempat lahir Anda!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggal_lahir" class="harus">Tanggal Lahir</label>
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input id="tanggal_lahir" required type="date" class="form-control "
                                                        aria-describedby="tanggal_lahirHelp" name="tanggal_lahir"
                                                        autocomplete="off" data-form-type="other">
                                                    <div class="invalid-feedback">
                                                        Harap isi tanggal lahir Anda!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_mhs" class="harus">Alamat</label>
                                        <input id="alamat_mhs" required type="text" class="form-control " autofocus=""
                                            aria-describedby="alamat_mhsHelp" name="alamat_mhs" data-form-type="other">
                                        <div class="invalid-feedback">
                                            Harap isi alamat Anda!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_prodi" class="harus">Program Studi</label>
                                        <select name="id_prodi" required
                                            class="form-control chosen select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="3">Pilih Prodi</option>
                                            <option value="SIF">S1 - Sistem Informasi</option>
                                            <option value="TIN">S1 - Teknik Industri</option>
                                            <option value="TIF">S1 - Teknik Informatika</option>
                                            <option value="MTK">S1 - Matematika</option>
                                            <option value="TEL">S1 - Teknik Elektro</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harap isi program studi Anda!
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-3">
                                        Kirim
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

<div class="modal fade" id="SKMKModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Masih Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="card card-outline p-4">
                        <div class="card-header nohr">
                            <p class="login-box-msg">Mohon isi formulir pengajuan yang telah disediakan untuk
                                melanjutkan proses pengajuan Anda.</p>
                            <p class="text-info text-bold">Gunakan data diri yang sesuai dengan Kartu Tanda Mahasiswa
                                Anda!
                            </p>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="<?= '/pengajuan/save'?>" class="needs-validation" method="post"
                                    id="formSKAK" novalidate="novalidate">
                                    <div class="form-group">
                                        <input id="id_pengajuan autorefresh" name="id_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="id_pengajuanHelp"
                                            value="<?= substr(uniqid(), 5, 10);?>" data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="kode_surat" name="kode_surat" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="kode_suratHelp" value="<?php echo 'SKMK';?>"
                                            data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="tanggal_pengajuan" name="tanggal_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="tanggal_pengajuanHelp"
                                            value="<?php echo date('Y-m-d');;?>" data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <input id="status" name="status" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="statusHelp" value="Pengajuan"
                                            data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="harus">Nama</label>
                                        <input id="nama" type="text" class="form-control" required autofocus=""
                                            aria-describedby="
                                            namaHelp" name="nama" data-form-type="other"
                                            onkeydown="return /[A-Z, a-z]/.test(event.key)">
                                        <div class="invalid-feedback">
                                            Harap isi nama Anda!
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nim" class="harus">NIM</label>
                                                <input id="nim" type="number" required minlength="11" maxlength="11"
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
                                                <label for="semester" class="harus">Semester</label>
                                                <input name="semester" type="number" required class="form-control "
                                                    autofocus="" aria-describedby=" semesterHelp"
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
                                                <label for="tempat_lahir" class="harus">Tempat Lahir</label>
                                                <input id="tempat_lahir" type="text" required class="form-control "
                                                    autofocus="" aria-describedby="tempat_lahirHelp"
                                                    onkeydown="return /[A-Z, a-z]/.test(event.key)" name="tempat_lahir"
                                                    data-form-type="other">
                                                <div class="invalid-feedback">
                                                    Harap isi tempat lahir Anda!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggal_lahir" class="harus">Tanggal Lahir</label>
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input id="tanggal_lahir" required type="date" class="form-control "
                                                        aria-describedby="tanggal_lahirHelp" name="tanggal_lahir"
                                                        autocomplete="off" data-form-type="other">
                                                    <div class="invalid-feedback">
                                                        Harap isi tanggal lahir Anda!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_mhs" class="harus">Alamat</label>
                                        <input id="alamat_mhs" required type="text" class="form-control " autofocus=""
                                            aria-describedby="alamat_mhsHelp" name="alamat_mhs" data-form-type="other">
                                        <div class="invalid-feedback">
                                            Harap isi alamat Anda!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_prodi" class="harus">Program Studi</label>
                                        <select name="id_prodi" required
                                            class="form-control chosen select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="3">Pilih Prodi</option>
                                            <option value="SIF">S1 - Sistem Informasi</option>
                                            <option value="TIN">S1 - Teknik Industri</option>
                                            <option value="TIF">S1 - Teknik Informatika</option>
                                            <option value="MTK">S1 - Matematika</option>
                                            <option value="TEL">S1 - Teknik Elektro</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harap isi program studi Anda!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_ortu" class="harus">Nama Orang Tua</label>
                                        <input id="nama_ortu" type="text" class="form-control" required autofocus=""
                                            aria-describedby="
                                            nama_ortuHelp" name="nama_ortu" data-form-type="other"
                                            onkeydown="return /[A-Z, a-z]/.test(event.key)">
                                        <div class="invalid-feedback">
                                            Harap isi nama orang tua Anda!
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="pekerjaan_ortu" class="harus">Pekerjaan Orang Tua</label>
                                                <input name="pekerjaan_ortu" type="text" required class="form-control "
                                                    autofocus="" aria-describedby=" pekerjaan_ortuHelp"
                                                    onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                    data-form-type="other">
                                                <div class="invalid-feedback">
                                                    Harap isi Pekerjaan Orang Tua Anda!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="alamat_ortu" class="harus">Alamat Orang Tua</label>
                                                <input name="alamat_ortu" type="text" required class="form-control "
                                                    autofocus="" aria-describedby=" alamat_ortuHelp"
                                                    onkeydown="return /[A-Z, a-z]/.test(event.key)"
                                                    data-form-type="other">
                                                <div class="invalid-feedback">
                                                    Harap isi Alamat Orang Tua Anda!
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mt-3">
                                        Kirim
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

<div class="modal fade" id="SKTBModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Bebas Beasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="card card-outline p-4">
                        <div class="card-header nohr">
                            <p class="login-box-msg">Mohon isi formulir pengajuan yang telah disediakan untuk
                                melanjutkan proses pengajuan Anda.</p>
                            <p class="text-info text-bold">Gunakan data diri yang sesuai dengan Kartu Tanda Mahasiswa
                                Anda!
                            </p>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="<?= '/pengajuan/save'?>" class="needs-validation" method="post"
                                    id="formSKAK" novalidate="novalidate">
                                    <div class="form-group">
                                        <input id="id_pengajuan autorefresh" name="id_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="id_pengajuanHelp"
                                            value="<?= substr(uniqid(), 5, 10);?>" data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="kode_surat" name="kode_surat" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="kode_suratHelp" value="<?php echo 'SKTB';?>"
                                            data-form-type="other">
                                    </div>
                                    <div class="form-group">
                                        <input id="tanggal_pengajuan" name="tanggal_pengajuan" type="hidden"
                                            class="form-control " autofocus="" aria-describedby="tanggal_pengajuanHelp"
                                            value="<?php echo date('Y-m-d');;?>" data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <input id="status" name="status" type="hidden" class="form-control "
                                            autofocus="" aria-describedby="statusHelp" value="Pengajuan"
                                            data-form-type=" other">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="harus">Nama</label>
                                        <input id="nama" type="text" class="form-control" required autofocus=""
                                            aria-describedby="
                                            namaHelp" name="nama" data-form-type="other"
                                            onkeydown="return /[A-Z, a-z]/.test(event.key)">
                                        <div class="invalid-feedback">
                                            Harap isi nama Anda!
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nim" class="harus">NIM</label>
                                                <input id="nim" type="number" required minlength="11" maxlength="11"
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
                                                <label for="semester" class="harus">Semester</label>
                                                <input name="semester" type="number" required class="form-control "
                                                    autofocus="" aria-describedby=" semesterHelp"
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
                                                <label for="tempat_lahir" class="harus">Tempat Lahir</label>
                                                <input id="tempat_lahir" type="text" required class="form-control "
                                                    autofocus="" aria-describedby="tempat_lahirHelp"
                                                    onkeydown="return /[A-Z, a-z]/.test(event.key)" name="tempat_lahir"
                                                    data-form-type="other">
                                                <div class="invalid-feedback">
                                                    Harap isi tempat lahir Anda!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggal_lahir" class="harus">Tanggal Lahir</label>
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input id="tanggal_lahir" required type="date" class="form-control "
                                                        aria-describedby="tanggal_lahirHelp" name="tanggal_lahir"
                                                        autocomplete="off" data-form-type="other">
                                                    <div class="invalid-feedback">
                                                        Harap isi tanggal lahir Anda!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_mhs" class="harus">Alamat</label>
                                        <input id="alamat_mhs" required type="text" class="form-control " autofocus=""
                                            aria-describedby="alamat_mhsHelp" name="alamat_mhs" data-form-type="other">
                                        <div class="invalid-feedback">
                                            Harap isi alamat Anda!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_prodi" class="harus">Program Studi</label>
                                        <select name="id_prodi" required
                                            class="form-control chosen select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="3">Pilih Prodi</option>
                                            <option value="SIF">S1 - Sistem Informasi</option>
                                            <option value="TIN">S1 - Teknik Industri</option>
                                            <option value="TIF">S1 - Teknik Informatika</option>
                                            <option value="MTK">S1 - Matematika</option>
                                            <option value="TEL">S1 - Teknik Elektro</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Harap isi program studi Anda!
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-3">
                                        Kirim
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


<script src="/js/validate.js"></script>