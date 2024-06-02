<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold">Status Peserta</h4>
</div>
<!-- <div class="row">
    <div class="col-md">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Status Peserta Akan Muncul Saat Ujian Dimulai</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div> -->
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <!-- <a class="btn btn-success btn-sm" href="<?= base_url() ?>Dashboard/tambah_jurusan"><i class="fas fa-plus-square"></i> Tambah Jurusan</a> -->
                <a class="btn btn-danger btn-sm text-uppercase" href="<?= base_url() ?>Dashboard/hapus_all_peserta_login"><i class="fas fa-trash-alt"></i> Hapus Semua peserta login</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col" class="text-center">Kelas</th>
                                <th scope="col" class="text-center">Jumlah Login</th>
                                <th scope="col" class="text-center">Waktu</th>
                                <!-- <th scope="col">Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($status as $row) {
                                ?>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['firstname'] ?></td>
                                    <td class="text-center"><?= $row['lastname'] ?></td>
                                    <td class="text-center"><?= $row['banyak_login'] ?> X</td>
                                    <td class="text-center"><?= $row['waktu_login'] ?></td>
                                    <!-- <td>
                                        <h5 class="text-center">
                                            <a class="btn btn-danger btn-sm" href="<?= base_url() ?>Dashboard/hapus_session_login/<?= $row['id'] ?>">Hapus Login</a>
                                        </h5>
                                    </td> -->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>