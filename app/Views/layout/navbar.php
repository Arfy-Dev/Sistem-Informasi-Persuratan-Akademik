<div id="loading">
    <div class="loader"></div>
</div>
<div class="intro-article">
    <div class="navigation-wrapper user-select">
        <div class="sipa-wrapper">
            <div class="container-fluid-custom menu-desktop" style="background-color: transparent;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="/"><img src="" alt="Logo SIPA"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-menu fw600">
                            <li class="logo-find">
                                <a href="javascript:void(0)" id="find-btn" class="link-find" title="Cari">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#fff"
                                            d="M23.111 20.058l-4.977-4.977c.965-1.52 1.523-3.322 1.523-5.251 0-5.42-4.409-9.83-9.829-9.83-5.42 0-9.828 4.41-9.828 9.83s4.408 9.83 9.829 9.83c1.834 0 3.552-.505 5.022-1.383l5.021 5.021c2.144 2.141 5.384-1.096 3.239-3.24zm-20.064-10.228c0-3.739 3.043-6.782 6.782-6.782s6.782 3.042 6.782 6.782-3.043 6.782-6.782 6.782-6.782-3.043-6.782-6.782zm2.01-1.764c1.984-4.599 8.664-4.066 9.922.749-2.534-2.974-6.993-3.294-9.922-.749z" />
                                    </svg>
                                </a>
                            </li>
                            <li><a class="link-menu" href="/lacak">Lacak Surat</a></li>
                            <li><a class="link-menu" href="/api">Pengumuman</a></li>
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