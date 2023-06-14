<div id="loading">
    <div class="loader"></div>
</div>
<div class="intro-article">
    <div class="navigation-wrapper user-select">
        <div class="sipa-wrapper">
            <div class="container-fluid-custom menu-desktop" style="background-color: transparent;">
                <div class="row">
                    <div class="col-md-4">
                        <!-- <div class="logo">
                            <a href="/img/sipa-logo.png"><img src="/img/sipa-logo.png" alt="Logo SIPA"></a>
                        </div> -->
                    </div>
                    <div class="col-md-8">
                        <ul class="list-menu fw600">

                            <li><a class="link-menu" href="/lacak">Lacak Surat</a></li>
                            <li><a class="link-menu" href="/pengumuman">Pengumuman</a></li>
                            <li><a class="link-menu" href="/pengajuan">Pengajuan</a></li>
                            <li><a class="link-menu text-white" data-toggle="modal"
                                    data-target="#formLoginModal">Masuk</a></li>

                            <div class="modal fade" id="formLoginModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Login
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div class="card card-outline p-4">
                                                    <div class="card-header nohr">
                                                        <p class="login-box-msg">Selamat datang di Sistem Informasi
                                                            Persuratan Akademik</p>

                                                    </div>
                                                    <div class="card-body">
                                                        <div>
                                                            <form action="<?= '/login/process'?>"
                                                                class="needs-validation" method="post" id="formSKAK"
                                                                novalidate="novalidate">


                                                                <div class="form-group">
                                                                    <label for="username" class="harus">Username</label>
                                                                    <input id="username" type="text" required
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="
                                            usernameHelp" name="username" data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi username Anda!
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password" class="harus">Password</label>
                                                                    <input id="password" type="password" required
                                                                        class="form-control " autofocus=""
                                                                        aria-describedby="
                                            passwordHelp" name="password" data-form-type="other">
                                                                    <div class="invalid-feedback">
                                                                        Harap isi password Anda!
                                                                    </div>
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn btn-primary btn-block mt-3">
                                                                    Masuk
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

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>