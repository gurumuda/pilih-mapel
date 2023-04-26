<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapel Peminatan</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/select2/dist/css/select2.min.css">
    <style>
        .select2-selection__rendered {
            line-height: 31px !important;
        }

        .select2-container .select2-selection--single {
            height: 35px !important;
        }

        .select2-selection__arrow {
            height: 34px !important;
        }
    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo_sma.png" alt="Logo" width="25" height="27" class="d-inline-block align-text-top">
                Pemilihan Mata Pelajaran Peminatan
            </a>
        </div>
    </nav>

    <div class="nav-scroller bg-body shadow-sm">
        <nav class="nav container" aria-label="Secondary navigation">
            <a class="nav-link active" href="/">Dashboard</a>
            <a class="nav-link" href="/pilih">Pilih Mapel</a>
            <a class="nav-link" href="/pilih/pilihan">Data Pilihan</a>

        </nav>
    </div>

    <main class="container my-4">
        <?= form_open('pilih/proses'); ?>
        <div class="row mb-3">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <select name="kelas" id="kelas" class="form-control" required>
                    <option value="">-- pilih kelas --</option>
                    <?php foreach ($kelas as $kls) : ?>
                        <option value="<?= $kls->kodeKelas; ?>"><?= $kls->namaKelas; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <select name="nama" id="nama" class="form-control select2" required>
                    <option value="">-- --</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="karir" class="col-sm-2 col-form-label">Karir</label>
            <div class="col-sm-10">
                <select name="karir" id="karir" class="form-control" required>
                    <option value="">-- Pilih rencana setelah lulus--</option>
                    <option value="Bekerja">Bekerja</option>
                    <option value="Kuliah">Kuliah</option>
                </select>
            </div>
        </div>
        <div class="row mb-3 table-responsive">
            <label class="col-form-label col-sm-2 pt-0">Kelas Pilihan</label>
            <div class="col-sm-10">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2">Hari Senin</th>
                            <th class="text-center" colspan="2">Hari Kamis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="kim2" type="checkbox" id="kim2">
                                    <label class="form-check-label me-3" for="kim2">
                                        Kimia 2
                                    </label>
                                    <span class="badge bg-warning"><?= $kim2; ?></span> / <span class="badge bg-success"><?= $kuota_kim2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="fis2" type="checkbox" id="fis2">
                                    <label class="form-check-label me-3" for="fis2">
                                        Fisika 2
                                    </label>
                                    <span class="badge bg-warning"><?= $fis2; ?></span> / <span class="badge bg-success"><?= $kuota_fis2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="fis1" type="checkbox" id="fis1">
                                    <label class="form-check-label me-3" for="fis1">
                                        Fisika 1
                                    </label>
                                    <span class="badge bg-warning"><?= $fis1; ?></span> / <span class="badge bg-success"><?= $kuota_fis1; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="bio2" type="checkbox" id="bio2">
                                    <label class="form-check-label me-3" for="bio2">
                                        Biologi 2
                                    </label>
                                    <span class="badge bg-warning"><?= $bio2; ?></span> / <span class="badge bg-success"><?= $kuota_bio2; ?></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="bio3" type="checkbox" id="bio3">
                                    <label class="form-check-label me-3" for="bio3">
                                        Biologi 3
                                    </label>
                                    <span class="badge bg-warning"><?= $bio3; ?></span> / <span class="badge bg-success"><?= $kuota_bio3; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="kim1" type="checkbox" id="kim1">
                                    <label class="form-check-label me-3" for="kim1">
                                        Kimia 1
                                    </label>
                                    <span class="badge bg-warning"><?= $kim1; ?></span> / <span class="badge bg-success"><?= $kuota_kim1; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="kim3" type="checkbox" id="kim3">
                                    <label class="form-check-label me-3" for="kim3">
                                        Kimia 3
                                    </label>
                                    <span class="badge bg-warning"><?= $kim3; ?></span> / <span class="badge bg-success"><?= $kuota_kim3; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="mat1" type="checkbox" id="mat1">
                                    <label class="form-check-label me-3" for="mat1">
                                        Matematika 1
                                    </label>
                                    <span class="badge bg-warning"><?= $mat1; ?></span> / <span class="badge bg-success"><?= $kuota_mat1; ?></span>
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="mat2" type="checkbox" id="mat2">
                                    <label class="form-check-label me-3" for="mat2">
                                        Matematika 2
                                    </label>
                                    <span class="badge bg-warning"><?= $mat2; ?></span> / <span class="badge bg-success"><?= $kuota_mat2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="bio1" type="checkbox" id="bio1">
                                    <label class="form-check-label me-3" for="bio1">
                                        Biologi 1
                                    </label>
                                    <span class="badge bg-warning"><?= $bio1; ?></span> / <span class="badge bg-success"><?= $kuota_bio1; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="bio5" type="checkbox" id="bio5">
                                    <label class="form-check-label me-3" for="bio5">
                                        Biologi 5
                                    </label>
                                    <span class="badge bg-warning"><?= $bio5; ?></span> / <span class="badge bg-success"><?= $kuota_bio5; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="eko1" type="checkbox" id="eko1">
                                    <label class="form-check-label me-3" for="eko1">
                                        Ekonomi 1
                                    </label>
                                    <span class="badge bg-warning"><?= $eko1; ?></span> / <span class="badge bg-success"><?= $kuota_eko1; ?></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="eko3" type="checkbox" id="eko3">
                                    <label class="form-check-label me-3" for="eko3">
                                        Ekonomi 3
                                    </label>
                                    <span class="badge bg-warning"><?= $eko3; ?></span> / <span class="badge bg-success"><?= $kuota_eko3; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="bio4" type="checkbox" id="bio4">
                                    <label class="form-check-label me-3" for="bio4">
                                        Biologi 4
                                    </label>
                                    <span class="badge bg-warning"><?= $bio4; ?></span> / <span class="badge bg-success"><?= $kuota_bio4; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="mat3" type="checkbox" id="mat3">
                                    <label class="form-check-label me-3" for="mat3">
                                        Matematika 3
                                    </label>
                                    <span class="badge bg-warning"><?= $mat3; ?></span> / <span class="badge bg-success"><?= $kuota_mat3; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="sos3" type="checkbox" id="sos3">
                                    <label class="form-check-label me-3" for="sos3">
                                        Sosiologi 3
                                    </label>
                                    <span class="badge bg-warning"><?= $sos3; ?></span> / <span class="badge bg-success"><?= $kuota_sos3; ?></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="sos2" type="checkbox" id="sos2">
                                    <label class="form-check-label me-3" for="sos2">
                                        Sosiologi 2
                                    </label>
                                    <span class="badge bg-warning"><?= $sos2; ?></span> / <span class="badge bg-success"><?= $kuota_sos2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="eko2" type="checkbox" id="eko2">
                                    <label class="form-check-label me-3" for="eko2">
                                        Ekonomi 2
                                    </label>
                                    <span class="badge bg-warning"><?= $eko2; ?></span> / <span class="badge bg-success"><?= $kuota_eko2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="sos1" type="checkbox" id="sos1">
                                    <label class="form-check-label me-3" for="sos1">
                                        Sosiologi 1
                                    </label>
                                    <span class="badge bg-warning"><?= $sos1; ?></span> / <span class="badge bg-success"><?= $kuota_sos1; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="geo4" type="checkbox" id="geo4">
                                    <label class="form-check-label me-3" for="geo4">
                                        Geografi 4
                                    </label>
                                    <span class="badge bg-warning"><?= $geo4; ?></span> / <span class="badge bg-success"><?= $kuota_geo4; ?></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="geo3" type="checkbox" id="geo3">
                                    <label class="form-check-label me-3" for="geo3">
                                        Geografi 3
                                    </label>
                                    <span class="badge bg-warning"><?= $geo3; ?></span> / <span class="badge bg-success"><?= $kuota_geo3; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="geo1" type="checkbox" id="geo1">
                                    <label class="form-check-label me-3" for="geo1">
                                        Geografi 1
                                    </label>
                                    <span class="badge bg-warning"><?= $geo1; ?></span> / <span class="badge bg-success"><?= $kuota_geo1; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="geo2" type="checkbox" id="geo2">
                                    <label class="form-check-label me-3" for="geo2">
                                        Geografi 2
                                    </label>
                                    <span class="badge bg-warning"><?= $geo2; ?></span> / <span class="badge bg-success"><?= $kuota_geo2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="geo5" type="checkbox" id="geo5">
                                    <label class="form-check-label me-3" for="geo5">
                                        Geografi 5
                                    </label>
                                    <span class="badge bg-warning"><?= $geo5; ?></span> / <span class="badge bg-success"><?= $kuota_geo5; ?></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="tik2" type="checkbox" id="tik2">
                                    <label class="form-check-label me-3" for="tik2">
                                        TIK 2
                                    </label>
                                    <span class="badge bg-warning"><?= $tik2; ?></span> / <span class="badge bg-success"><?= $kuota_tik2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="ba2" type="checkbox" id="ba2">
                                    <label class="form-check-label me-3" for="ba2">
                                        B. Arab 2
                                    </label>
                                    <span class="badge bg-warning"><?= $ba2; ?></span> / <span class="badge bg-success"><?= $kuota_ba2; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="tik3" type="checkbox" id="tik3">
                                    <label class="form-check-label me-3" for="tik3">
                                        TIK 3
                                    </label>
                                    <span class="badge bg-warning"><?= $tik3; ?></span> / <span class="badge bg-success"><?= $kuota_tik3; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="tik1" type="checkbox" id="tik1">
                                    <label class="form-check-label me-3" for="tik1">
                                        TIK 1
                                    </label>
                                    <span class="badge bg-warning"><?= $tik1; ?></span> / <span class="badge bg-success"><?= $kuota_tik1; ?></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" name="ba1" type="checkbox" id="ba1">
                                    <label class="form-check-label me-3" for="ba1">
                                        B. Arab 1
                                    </label>
                                    <span class="badge bg-warning"><?= $ba1; ?></span> / <span class="badge bg-success"><?= $kuota_ba1; ?></span>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Pilihan</button>
        <?= form_close(); ?>
    </main>


    <script src="/assets/jquery-3.6.4.min.js"></script>
    <script src="/assets/select2/dist/js/select2.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $("#kelas").change(function() {
            const kelas = $(this).val();

            $.ajax({
                url: 'pilih/getSiswa',
                type: 'post',
                data: {
                    kelas
                },
                success: function(data) {
                    $("#nama").html(data)
                }
            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>

</html>