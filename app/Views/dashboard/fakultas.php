<?= $this->extend('layout/interface_admin');?>
<?= $this->section('content');?>

<div class="col-lg-12 col-xl-12">
    <div class="white_box mb_30 " style="position: relative;">
        <div class="box_header border_bottom_1px  ">
            <div class="main-title">
                <h3 class="mb_25">Data Fakultas</h3>
            </div>
        </div>

        <div class="income_servay">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Fakultas</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID Fakultas</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($data_fakultas as $result):?>
                    <tr>
                        <td><?= $result['id_fakultas']?></td>
                        <td><?= $result['nama']?></td>
                        <td><?= $result['alamat_fakultas']?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection();?>