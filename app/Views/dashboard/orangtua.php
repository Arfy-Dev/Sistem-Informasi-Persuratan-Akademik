<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Pegawai</h3>
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
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>NIM</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($data_orang_tua as $result):?>
                    <tr>
                        <td><?= $result['id_orangtua']?></td>
                        <td><?= $result['nama_orangtua']?></td>
                        <td><?= $result['pekerjaan_orangtua']?></td>
                        <td><?= $result['alamat_orangtua']?></td>
                        <td><?= $result['nim']?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection();?>