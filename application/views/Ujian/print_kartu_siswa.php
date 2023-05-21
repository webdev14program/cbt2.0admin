<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?= $title ?></title>
</head>


<body>
    <div class="container">
        <h2 class="text-center text-uppercase font-weight-bold">kartu peserta cbt</h2>
        <h2 class="text-center text-uppercase font-weight-bold">smk tunas harapan</h2>
        <h2 class="text-center text-uppercase font-weight-bold">UJIAN AKHIR SEMESTER GANJIL 2021/202</h2>
        <h3>Kelas : <?= $header['nama_kelas'] ?></h3>
        <hr style="border-top: 5px dashed black;">
        <br>

        <?php foreach ($siswa as $row) : ?>
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header">
                            Quote
                        </div>
                        <div class="card-body">
                            <h3><?= $row['nama_siswa'] ?><br></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?><br>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>