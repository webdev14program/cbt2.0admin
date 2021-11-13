<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Status Ujian hari ini</h4>
</div>
<div class="row">
    <div class="col-md">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Status Ujian Akan Muncul Saat Ujian Dimulai</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">JENIS UJIAN</th>
                    <th scope="col">NAMA MAPEL</th>
                    <th scope="col">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $no = 1;
                    foreach ($ujian_hari_ini as $row) {
                    ?>
                        <td><?= $no++ ?></td>
                        <td class="  text-uppercase">pas ganjil 2021/2022</td>
                        <td class=""><?= $row['fullname'] ?></td>
                        <td class="text-center">OPEN</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>