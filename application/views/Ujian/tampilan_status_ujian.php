<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Status Ujian hari ini</h4>
</div>
<div class="row">
    <div class="col-md">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Status Ujian Akan Muncul Saat Ujian Dimulai</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-="true">&times;</span>
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA MAPEL</th>
                    <th scope="col">TOKEN</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $no = 1;
                    foreach ($ujian_hari_ini as $row) {
                    ?>
                        <td><?= $no++ ?></td>
                        <td class=""><?= $row['id'] ?></td>
                        <td class=""><?= $row['name'] ?></td>
                        <td class="text-center"><?= $row['password'] ?></td>
                        <td>
                            <form action="<?= base_url() ?>Dashboard/refresh_token/<?= $row['id'] ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $row['id'] ?>" name="id" hidden>
                                    <input type="text" class="form-control" value="<?= $row['course'] ?>" name="course" hidden>
                                    <input type="text" class="form-control" value="<?= $row['name'] ?>" name="name" hidden>
                                    <input type="text" class="form-control" value="<?= $row['intro'] ?>" name="intro" hidden>
                                    <input type="text" class="form-control" value="<?= $row['introformat'] ?>" name="introformat" hidden>
                                    <input type="text" class="form-control" value="<?= $row['timeopen'] ?>" name="timeopen" hidden>
                                    <input type="text" class="form-control" value="<?= $row['timeclose'] ?>" name="timeclose" hidden>
                                    <input type="text" class="form-control" value="<?= $row['timelimit'] ?>" name="timelimit" hidden>
                                    <input type="text" class="form-control" value="<?= $row['overduehandling'] ?>" name="overduehandling" hidden>
                                    <input type="text" class="form-control" value="<?= $row['graceperiod'] ?>" name="graceperiod" hidden>
                                    <input type="text" class="form-control" value="<?= $row['preferredbehaviour'] ?>" name="preferredbehaviour" hidden>
                                    <input type="text" class="form-control" value="<?= $row['canredoquestions'] ?>" name="canredoquestions" hidden>
                                    <input type="text" class="form-control" value="<?= $row['attempts'] ?>" name="attempts" hidden>
                                    <input type="text" class="form-control" value="<?= $row['attemptonlast'] ?>" name="attemptonlast" hidden>
                                    <input type="text" class="form-control" value="<?= $row['grademethod'] ?>" name="grademethod" hidden>
                                    <input type="text" class="form-control" value="<?= $row['decimalpoints'] ?>" name="decimalpoints" hidden>
                                    <input type="text" class="form-control" value="<?= $row['questiondecimalpoints'] ?>" name="questiondecimalpoints" hidden>
                                    <input type="text" class="form-control" value="<?= $row['reviewattempt'] ?>" name="reviewattempt" hidden>
                                    <input type="text" class="form-control" value="<?= $row['reviewcorrectness'] ?>" name="reviewcorrectness" hidden>
                                    <input type="text" class="form-control" value="<?= $row['reviewmarks'] ?>" name="reviewmarks" hidden>
                                    <input type="text" class="form-control" value="<?= $row['reviewspecificfeedback'] ?>" name="reviewspecificfeedback" hidden>
                                    <input type="text" class="form-control" value="<?= $row['reviewgeneralfeedback'] ?>" name="reviewgeneralfeedback" hidden>
                                    <input type="text" class="form-control" value="<?= $row['reviewrightanswer'] ?>" name="reviewrightanswer" hidden>
                                    <input type="text" class="form-control" value="<?= $row['reviewoverallfeedback'] ?>" name="reviewoverallfeedback" hidden>
                                    <input type="text" class="form-control" value="<?= $row['questionsperpage'] ?>" name="questionsperpage" hidden>
                                    <input type="text" class="form-control" value="<?= $row['navmethod'] ?>" name="navmethod" hidden>
                                    <input type="text" class="form-control" value="<?= $row['shuffleanswers'] ?>" name="shuffleanswers" hidden>
                                    <input type="text" class="form-control" value="<?= $row['sumgrades'] ?>" name="sumgrades" hidden>
                                    <input type="text" class="form-control" value="<?= $row['grade'] ?>" name="grade" hidden>
                                    <input type="text" class="form-control" value="<?= $row['timecreated'] ?>" name="timecreated" hidden>
                                    <input type="text" class="form-control" value="<?= $row['timemodified'] ?>" name="timemodified" hidden>
                                    <input type="text" class="form-control" value="<?= $row['password'] ?>" name="password" hidden>
                                    <input type="text" class="form-control" value="<?= $row['subnet'] ?>" name="subnet" hidden>
                                    <input type="text" class="form-control" value="<?= $row['browsersecurity'] ?>" name="browsersecurity" hidden>
                                    <input type="text" class="form-control" value="<?= $row['delay1'] ?>" name="delay1" hidden>
                                    <input type="text" class="form-control" value="<?= $row['delay2'] ?>" name="delay2" hidden>
                                    <input type="text" class="form-control" value="<?= $row['showuserpicture'] ?>" name="showuserpicture" hidden>
                                    <input type="text" class="form-control" value="<?= $row['showblocks'] ?>" name="showblocks" hidden>
                                    <input type="text" class="form-control" value="<?= $row['completionattemptsexhausted'] ?>" name="completionattemptsexhausted" hidden>
                                    <input type="text" class="form-control" value="<?= $row['completionpass'] ?>" name="completionpass" hidden>
                                    <input type="text" class="form-control" value="<?= $row['allowofflineattempts'] ?>" name="allowofflineattempts" hidden>
                                </div>
                                <h5 class="text-center">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </h5>
                            </form>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>