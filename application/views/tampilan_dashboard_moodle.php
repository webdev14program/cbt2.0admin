    <div class="alert alert-success" role="alert">
        <h2 class="text-center text-uppercase font-weight-bold">Dashboard Moodle</h2>
    </div>
    <div class="row">
        <div class="col-md mt-2">
            <div class="card rounded">
                <div class="card-body bg-dark">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-white  font-italic font-weight-bold"><?= $siswa_moodle ?></h3>
                            <h4 class=" text-white font-italic font-weight-bold">Peserta Ujian Moodle</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <h5 class="text-center">
                        <a class="btn btn-primary btn-sm text-uppercase font-weight-bnolder" href="<?= base_url() ?>Dashboard/siswa_moodle">Show Detail</a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md mt-2">
            <div class="card rounded">
                <div class="card-body bg-success">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-white  font-italic font-weight-bold"><?= $siswa_aktif ?></h3>
                            <h4 class=" text-white font-italic font-weight-bold">Peserta Ujian Aktif</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <h5 class="text-center">
                        <a class="btn btn-primary btn-sm text-uppercase font-weight-bnolder" href="<?= base_url() ?>Dashboard/siswa_moodle">Show Detail</a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md mt-2">
            <div class="card rounded">
                <div class="card-body bg-danger">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-white  font-italic font-weight-bold"><?= $siswa_non_aktif ?></h3>
                            <h4 class=" text-white font-italic font-weight-bold">Peserta Ujian Block</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <h5 class="text-center">
                        <a class="btn btn-primary btn-sm text-uppercase font-weight-bnolder" href="<?= base_url() ?>Dashboard/siswa_block">Show Detail</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class=" row">
                            <div class="col-md mt-2">
                                <div class="card rounded">
                                    <div class="card-body bg-info">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="text-white  font-italic font-weight-bold"><?= $siswa_login ?></h3>
                                                <h4 class=" text-white font-italic font-weight-bold">Peserta Login</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md mt-2">
                                <div class="card rounded">
                                    <div class="card-body bg-primary">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="text-white  font-italic font-weight-bold">0</h3>
                                                <h4 class=" text-white font-italic font-weight-bold">Peserta Selesai</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md mt-2">
                                <div class="card rounded">
                                    <div class="card-body bg-secondary">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="text-white  font-italic font-weight-bold">0</h3>
                                                <h4 class=" text-white font-italic font-weight-bold">Peserta Belum Selesai</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div> -->