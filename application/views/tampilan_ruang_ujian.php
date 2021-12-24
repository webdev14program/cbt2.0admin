<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold">Ruang Ujian</h4>
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
                                <th>ID Ruang</th>
                                <th>Nama Ruang</th>
                                <th>Jumlah Siswa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($ruang as $row) {
                                ?>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td class="text-center"><?= $row['id_ruang'] ?></td>
                                    <td class="font-weight-bold "><?= $row['nama_ruang'] ?></td>
                                    <td class="font-weight-bold text-center"><?= $row['jumlah_siswa'] ?> Siswa</td>
                                    <td class="text-center"><a class="btn btn-primary btn-sm" href="">Detail Siswa</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>