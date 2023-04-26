<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/logo_sma.png" type="image/x-icon">
    <title><?= 'Mapel Peminatan'; ?></title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
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

    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Informasi Umum</h6>
            <div class="d-flex text-body-secondary pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">Selamat datang !</strong>
                    Assalamualaikum Warahmatullahi Wabarakatuh <br>
                    Selamat datang diaplikasi pemilihan mata pelajaran (mata pelajaran pilihan) untuk kelas XI (Fase E). Mata pelajaran pilihan yang tersedia adalah sebagai berikut : <br><br>
                    <strong>Kelompok MIPA</strong> <br>
                    - Fisika <br>
                    - Kimia <br>
                    - Biologi <br>
                    - Matematika Tingkat Lanjut <br>
                    - Teknologi Informasi dan Komunikasi <br><br>
                    <strong>Kelompok IPS</strong><br>
                    - Sosiologi <br>
                    - Geografi <br>
                    - Ekonomi <br><br>
                    <strong>Kelompok Bahasa</strong><br>
                    - Bahasa Arab <br><br>
                    Peserta didik diberikan kesempatan untuk memilih mata pelajaran sesuai bakat, minat, dan jenjang karir atau minat jurusan pada perguruan tinggi setelah lulus dari SMA.
                </p>
            </div>
            <div class="d-flex text-body-secondary pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#e83e8c" /><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
                </svg>
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">Aturan Pemilihan Mapel</strong>
                    Peserta didik dapat memilih 4 mata pelajaran yang berbeda. Peserta didik memilih maksimal 3 mata pelajaran pada satu kelompok mata pelajaran.
                </p>
            </div>

        </div>

        <div class="my-4 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Contoh Pemilihan Mata Pelajaran</h6>
            <div class="d-flex text-body-secondary pt-3">
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">Contoh 1</strong>
                    </div>
                    <span class="d-block">a</span>
                </div>
            </div>
            <div class="d-flex text-body-secondary pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>
            <div class="d-flex text-body-secondary pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>
            <small class="d-block text-end mt-3">
                <a href="#">All suggestions</a>
            </small>
        </div>
    </main>


    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>