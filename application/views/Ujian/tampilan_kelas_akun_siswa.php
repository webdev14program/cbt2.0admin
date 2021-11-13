<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Cetak Akun Siswa Per kelas</h4>
</div>

<div class="row mt-2">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase font-weight-bold">
                                <th scope="col">#</th>
                                <th scope="col">ID Kelas</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Kode Jurusan</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Total Siswa</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($kelas as $row) {
                                ?>
                                    <td><?php echo $no++; ?></td>
                                    <td class="text-center text-uppercase font-weight-bold"><?= $row['id_kelas'] ?></td>
                                    <td class="text-center text-uppercase font-weight-bold"><?= $row['kelas'] ?></td>
                                    <td class="text-center"><?= $row['kode'] ?></td>
                                    <td><?= $row['jurusan'] ?></td>
                                    <td class="text-center text-uppercase font-weight-bold"><?= $row['jumlah_siswa'] ?> Siswa</td>
                                    <td class="text-center text-uppercase font-weight-bold"><a class="btn btn-success btn-sm" href="<?= base_url() ?>Dashboard/print_akun/<?= $row['id_kelas'] ?>" target="_blank"><i class="fas fa-print"></i> cetak</a> </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>