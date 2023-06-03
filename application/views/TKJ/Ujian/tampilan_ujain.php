<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold">Jadwal Ujian</h4>
</div>

<?= $this->session->flashdata('pesan') ?>
<div class="row mt-2">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Ujian</th>
                                <th scope="col">Nama Mapel</th>
                                <th scope="col">Durasi Ujian</th>
                                <th scope="col">Tanggal Ujian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($ujian_tkj as $row) {
                                ?>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <h4 class="badge badge-primary"><?= $row['sortorder']; ?></h4>
                                    </td>
                                    <td>
                                        <h4 class="badge badge-info text-uppercase"><?= $row['fullname']; ?></h4>
                                    </td>
                                    <td>
                                        <h4 class="badge badge-info"><?= $row['timelimit'] / 60; ?> Menit</h4>
                                    </td>
                                    <td><?= $row['harimulai']; ?>, <?= $row['taggalmulai']; ?> <?= $row['bulanmulai']; ?> <?= $row['tahunmulai']; ?>
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