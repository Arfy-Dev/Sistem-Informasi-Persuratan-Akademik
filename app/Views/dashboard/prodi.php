<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Program Studi</h3>
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Prodi</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID Prodis</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($data_prodi as $result):?>
                    <tr>
                        <td><?= $result['id_prodi']?></td>
                        <td><?= $result['nama']?></td>
                        <td><?= $result['alamat_prodi']?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection();?>