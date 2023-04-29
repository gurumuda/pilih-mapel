<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/logo_sma.png" type="image/x-icon">
    <title>Mapel Pilihan Kelas XI</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo_sma.png" alt="Logo" width="25" height="27" class="d-inline-block align-text-top">
                Pemilihan Mata Pelajaran Pilihan
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

    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table id="example" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Karir</th>
                        <th>Pilihan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($siswa as $sis) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $sis['nama']; ?></td>
                            <td><?= $sis['kelas']; ?></td>
                            <td><?= $sis['karir']; ?></td>
                            <td>
                                <?php foreach ($sis['pilihan'] as $pi) {
                                    echo $pi->pilihan;
                                    echo '<br>';
                                }
                                ?>
                            </td>
                            <td>
                                <?= ($sis['pilihan']) ? '<a class="badge bg-danger nav-link" href="/pilih/hapus/' . $sis['nama'] . '/' . $sis['kelas'] . '">Hapus</a>' : '' ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>


    </main>

    <script src="/assets/jquery-3.6.4.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                stateSave: true
            });
        });
    </script>
</body>

</html>