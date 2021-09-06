<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h2 class="text-center font-weight-bold">Administrator Computer Based Test</h2>
            <h2 class="text-center font-weight-bold"><?= $admin['nama'] ?></h2>
        </div>

        <div class="row mb-3">
            <div class="col-sm mt-2">
                <div class="card rounded">
                    <div class="card-body bg-success">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-white  font-italic font-weight-bold"><?= $siswaTKJ ?></h3>
                                <h4 class=" text-white font-italic font-weight-bold">Peserta Ujian TKJ</h4>
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
                                <h3 class="text-white  font-italic font-weight-bold"><?= $kelasTKJ ?></h3>
                                <h4 class=" text-white font-italic font-weight-bold">Kelas TKJ</h4>
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
                                <h3 class="text-white  font-italic font-weight-bold "><?= $ujianTKJ ?></h3>
                                <h4 class="text-white  font-italic font-weight-bold">Jadwal Ujian TKJ</h4>
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
                                <h3 class="text-white  font-italic font-weight-bold"><?= $mapel_tkj ?></h3>
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
                                        <td class="  text-uppercase">uts ganjil 2021/2022</td>
                                        <td class=""><?= $row['fullname'] ?></td>
                                        <td class="d-flex justify-content-center badge badge-success">OPEN</td>
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