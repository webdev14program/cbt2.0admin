<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h2 class="text-center font-weight-bold"><?= $admin['nama'] ?></h2>
        </div>

        <div class="row mb-3">
            <div class="col-sm mt-2">
                <div class="card rounded">
                    <div class="card-body bg-success">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold"><?= $siswaOTKP ?></h3>
                                <h4 class=" text-white font-italic font-weight-bold">Peserta Ujian</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm mt-2">
                <div class="card">
                    <div class="card-body bg-primary">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold"><?= $kelasOTKP ?></h3>
                                <h4 class=" text-white font-italic font-weight-bold">Kelas</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-sm mt-2">
                <div class="card">
                    <div class="card-body bg-success">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold "><?= $ujianOTKP ?></h3>
                                <h4 class="text-white  font-italic font-weight-bold">Jadwal Ujian</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm mt-2">
                <div class="card">
                    <div class="card-body bg-primary">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold"><?= $mapel_otkp ?></h3>
                                <h4 class="text-white  font-italic font-weight-bold">Mapel</h4>
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
                        <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <th scope="col">#</th>
                                <th scope="col">NAMA MAPEL</th>
                                <th scope="col">Jumlah Siswa</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($ujian_hari_ini as $row) {
                                    ?>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-uppercase"><?= $row['fullname'] ?></td>
                                        <td class="text-uppercase"><?= $row['jumlah_siswa'] ?> siswa</td>
                                </tr>
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