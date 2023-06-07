<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Mahasiswa</h3>
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Semester</th>
                        <th>ID Prodi</th>
                    </tr>
                </tfoot> -->
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
                        <td>
                            <!-- Tautan "Edit" -->
                            <a href="/mahasiswa/edit/<?= $result['nim']?>" onclick="openEditModal(event)">Edit</a>

                            <!-- Modal Form Edit -->
                            <div id="editModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeEditModal()">&times;</span>
                                    <h2>Edit Mahasiswa</h2>
                                    <form action="/mahasiswa/edit/<?= $result['nim']?>" method="POST">
                                        <!-- Tambahkan input fields dan tombol submit di sini -->
                                        <!-- Contoh: -->
                                        <label for="name">Nama:</label>
                                        <input type="text" id="name" name="name" value="<?= $result['name'] ?>">

                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" value="<?= $result['email'] ?>">

                                        <button type="submit">Simpan</button>
                                    </form>
                                </div>
                            </div>

                            <!-- CSS untuk tampilan modal -->
                            <style>
                            .modal {
                                display: none;
                                position: fixed;
                                z-index: 1;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                overflow: auto;
                                background-color: rgba(0, 0, 0, 0.4);
                            }

                            .modal-content {
                                background-color: #fefefe;
                                margin: 10% auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            .close {
                                color: #aaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close:hover,
                            .close:focus {
                                color: black;
                                text-decoration: none;
                                cursor: pointer;
                            }
                            </style>

                            <!-- JavaScript untuk membuka dan menutup modal -->
                            <script>
                            function openEditModal(event) {
                                event.preventDefault();
                                var modal = document.getElementById("editModal");
                                modal.style.display = "block";
                            }

                            function closeEditModal() {
                                var modal = document.getElementById("editModal");
                                modal.style.display = "none";
                            }
                            </script>

                            <a href="/mahasiswa/delete/<?= $result['nim']?>"
                                onclick="sweetAlert(event, '<?= $result['nim']?>')">Hapus</a>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function sweetAlert(event, nim) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Hapus',
                                    text: 'Apakah Anda yakin ingin menghapus data <?= $result['nim']?>?',
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
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection();?>