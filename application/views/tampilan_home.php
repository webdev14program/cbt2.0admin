<div class="alert alert-success" role="alert">
    <h2 class="text-center font-weight-bold">Administrator Computer Based Test</h2>
    <h2 class="text-center font-weight-bold text-uppercase"><?= $nama_sekolah['nama_sekolah'] ?></h2>
    <h2 class="text-center font-weight-bold">Admin Utama</h2>
</div>

<div class="row mb-3">
    <div class="col-sm mt-2">
        <div class="card rounded">
            <div class="card-body bg-success">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold"><?= $siswa ?></h3>
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
                        <h3 class="text-white  font-italic font-weight-bold"><?= $kelas ?></h3>
                        <h4 class=" text-white font-italic font-weight-bold">Kelas</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm mt-2">
        <div class="card">
            <div class="card-body bg-success">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold "><?= $ujian ?></h3>
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
                        <h3 class="text-white  font-italic font-weight-bold"><?= $mapel ?></h3>
                        <h4 class="text-white  font-italic font-weight-bold">Mapel</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body bg-primary">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold"><?= $akl ?></h3>
                        <h4 class="text-white  font-italic font-weight-bold">Peserta AKL</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body bg-success">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold"><?= $bdp ?></h3>
                        <h4 class="text-white  font-italic font-weight-bold">Peserta BDP</h4>
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
                        <h3 class="text-white  font-italic font-weight-bold"><?= $otkp ?></h3>
                        <h4 class="text-white  font-italic font-weight-bold">Peserta OTKP</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body bg-success">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold"><?= $tkj ?></h3>
                        <h4 class="text-white  font-italic font-weight-bold">Peserta TKJ</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="row">
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-header bg-primary">
                <h5 class="font-weight-bolder text-white" style="text-transform: uppercase;">Identitas Sekolah</h5>
            </div>
            <div class="card-body">
                <table class="table table-border">
                    <tbody>
                        <tr>
                            <td>Nama Sekolah </td>
                            <td class="text-uppercase">: <?= $nama_sekolah['nama_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>NPSN </td>
                            <td class="text-uppercase">: <?= $nama_sekolah['npsn'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td class="text-uppercase">: <?= $nama_sekolah['alamat_sekolah'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>