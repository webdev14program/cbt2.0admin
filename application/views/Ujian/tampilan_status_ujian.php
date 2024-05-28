<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Status Ujian hari ini</h4>
</div>
<div class="row">
    <div class="col-md">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Status Ujian Akan Muncul Saat Ujian Dimulai</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-="true">&times;</span>
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center text-uppercase">
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">NAMA MAPEL</th>
                            <th scope="col">Keterangan Ujian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($ujian_hari_ini as $row) {
                            ?>
                                <td class="text-center text-uppercase"><?= $no++ ?></td>
                                <td class="text-center text-uppercase"><?= $row['sortorder'] ?></td>
                                <td class="text-center text-uppercase"><?= $row['fullname'] ?></td>
                                <td class="text-center text-uppercase"><?= $row['status_ujian'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>