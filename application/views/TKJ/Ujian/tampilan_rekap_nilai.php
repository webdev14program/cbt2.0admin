<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold">Rekap Nilai</h4>
</div>
<div class="row">
    <div class="col-md">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Rekap Nilai Akan Muncul Saat Ujian Dimulai</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID Ujian</th>
                                <th>Nama Ujian</th>
                                <th>Waktu Ujian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($rekap_tkj as $row) {
                                ?>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['sortorder'] ?></td>
                                    <td class="font-weight-bold"><?= $row['name'] ?></td>
                                    <td>
                                        <h4 class="badge badge-success"><?= $row['jamAwal'] ?> : <?= $row['menitAwal'] ?> - <?= $row['jamAkhir'] ?> : <?= $row['menitAkhir'] ?> <?= $row['harimulai']; ?>, <?= $row['taggalmulai']; ?> <?= $row['bulanmulai']; ?> <?= $row['tahunmulai']; ?></h4>
                                    </td>
                                    <td class="ml-auto d-flex justify-content-aroundml-auto d-flex justify-content-around">
                                        <a class="btn btn-primary btn-sm" href="<?= base_url() ?>Dashboard_tkj/print_nilai_tkj/<?= $row['id_course'] ?>" target="_blank">Rekap Nilai</a>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>