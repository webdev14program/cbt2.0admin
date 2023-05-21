<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h2 class="text-center font-weight-bold"><?= $admin['nama'] ?></h2>
        </div>

        <div class="row mb-3">
            <div class="col-md mt-2">
                <div class="card rounded">
                    <div class="card-body bg-success">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold"><?= $siswaAKL ?></h3>
                                <h4 class=" text-white font-italic font-weight-bold">Peserta Ujian AKL</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mt-2">
                <div class="card">
                    <div class="card-body bg-primary">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold"><?= $kelasAKL ?></h3>
                                <h4 class=" text-white font-italic font-weight-bold">Kelas AKL</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md mt-2">
                <div class="card">
                    <div class="card-body bg-success">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold "><?= $ujiaAKL ?></h3>
                                <h4 class="text-white  font-italic font-weight-bold">Jadwal Ujian AKL</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mt-2">
                <div class="card">
                    <div class="card-body bg-primary">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold"><?= $mapel_akl ?></h3>
                                <h4 class="text-white  font-italic font-weight-bold">Mapel AKL</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header alert alert-success">
                        <h4 class="text-center font-weight-bold">Ujian Terdaftar Hari Ini</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">JENIS UJIAN</th>
                                    <th scope="col">NAMA MAPEL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($ujian_hari_ini as $row) {
                                    ?>
                                        <td><?= $no++ ?></td>
                                        <td class="  text-uppercase">Computer Based Test</td>
                                        <td class=""><?= $row['fullname'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>