<?php

$profil = [
    "nama"          => "Muhammad Nabil Syarif Ubaidillah",
    "nim"           => "2505090065",
    "prodi"         => "Pendidikan Teknik Informatika dan Komputer",
    "angkatan"      => "2025",
    "kesibukan"     => [
        "Mengikuti kegiatan organisasi kampus",
        "Belajar coding secara mandiri",
        "Mengerjakan proyek freelance kecil",
    ],
    "cita_cita"     => "Menjadi software engineer yang menciptakan produk digital bermanfaat bagi banyak orang.",
    "bidang_it"     => "Web Development (Backend & Cloud)",
    "alasan_bidang" => "Hampir semua layanan modern berjalan di web. Saya ingin menguasai cara membangun sistem yang cepat, aman, dan mudah dikembangkan.",
];

// Fungsi bantu agar output aman dari karakter HTML berbahaya
function e($teks) {
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

$tahunIni = date("Y");
$inisial  = strtoupper(substr($profil["nama"], 0, 1));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil <?= e($profil["nama"]) ?> | UTS Pemrograman Web</title>
    <style>
        :root {
            --bg: #f3f6f4;
            --kartu: #ffffff;
            --teks: #1d2b26;
            --redup: #5c6e67;
            --aksen: #0f766e;
            --garis: #d9e2de;
        }
        @media (prefers-color-scheme: dark) {
            :root {
                --bg: #0f1a17;
                --kartu: #17252f;
                --kartu: #162420;
                --teks: #e6efeb;
                --redup: #9db0a8;
                --aksen: #2dd4bf;
                --garis: #26372f;
            }
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: "Segoe UI", system-ui, -apple-system, Arial, sans-serif;
            background: var(--bg);
            color: var(--teks);
            line-height: 1.65;
        }
        .wrap { max-width: 860px; margin: 0 auto; padding: 40px 20px 60px; }

        header {
            display: flex;
            gap: 28px;
            align-items: center;
            flex-wrap: wrap;
            padding-bottom: 32px;
            border-bottom: 2px solid var(--aksen);
        }
        .foto {
            width: 140px; height: 140px;
            border-radius: 50%;
            object-fit: cover;
            background: var(--aksen);
            color: #fff;
            display: flex; align-items: center; justify-content: center;
            font-size: 3.5rem; font-weight: 700;
            flex-shrink: 0;
        }
        h1 { font-size: 2.2rem; line-height: 1.2; }
        .sub { color: var(--redup); margin-top: 6px; }

        section { margin-top: 36px; }
        h2 { font-size: 1.25rem; color: var(--aksen); margin-bottom: 14px; }

        dl {
            display: grid;
            grid-template-columns: 140px 1fr;
            gap: 10px 16px;
            background: var(--kartu);
            border: 1px solid var(--garis);
            border-radius: 10px;
            padding: 20px 24px;
        }
        dt { color: var(--redup); }
        dd { font-weight: 600; }

        .blok {
            background: var(--kartu);
            border: 1px solid var(--garis);
            border-radius: 10px;
            padding: 20px 24px;
        }
        .blok ul { padding-left: 20px; }
        .blok li + li { margin-top: 6px; }
        .blok p + p { margin-top: 10px; }
        .tebal { font-weight: 700; }

        footer {
            margin-top: 48px;
            padding-top: 20px;
            border-top: 1px solid var(--garis);
            color: var(--redup);
            font-size: .9rem;
            text-align: center;
        }
        @media (max-width: 520px) {
            dl { grid-template-columns: 1fr; gap: 2px; }
            dd { margin-bottom: 10px; }
            h1 { font-size: 1.7rem; }
        }
    </style>
</head>
<body>
<div class="wrap">

    <header>
        <?php if (!empty($profil["foto"]) && file_exists($profil["foto"])): ?>
            <img class="foto" src="<?= e($profil["foto"]) ?>" alt="Foto <?= e($profil["nama"]) ?>">
        <?php else: ?>
            <div class="foto" aria-hidden="true"><?= e($inisial) ?></div>
        <?php endif; ?>
        <div>
            <h1><?= e($profil["nama"]) ?></h1>
            <p class="sub">Mahasiswa <?= e($profil["prodi"]) ?> &middot; Angkatan <?= e($profil["angkatan"]) ?></p>
        </div>
    </header>

    <section>
        <h2>Data diri</h2>
        <dl>
            <dt>Nama</dt>     <dd><?= e($profil["nama"]) ?></dd>
            <dt>NIM</dt>      <dd><?= e($profil["nim"]) ?></dd>
            <dt>Prodi</dt>    <dd><?= e($profil["prodi"]) ?></dd>
            <dt>Angkatan</dt> <dd><?= e($profil["angkatan"]) ?></dd>
        </dl>
    </section>

    <section>
        <h2>Kesibukan selain kuliah</h2>
        <div class="blok">
            <ul>
                <?php foreach ($profil["kesibukan"] as $item): ?>
                    <li><?= e($item) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section>
        <h2>Cita-cita</h2>
        <div class="blok">
            <p><?= e($profil["cita_cita"]) ?></p>
        </div>
    </section>

    <section>
        <h2>Bidang IT yang ingin didalami</h2>
        <div class="blok">
            <p class="tebal"><?= e($profil["bidang_it"]) ?></p>
            <p><?= e($profil["alasan_bidang"]) ?></p>
        </div>
    </section>

    <footer>
        &copy; <?= $tahunIni ?> <?= e($profil["nama"]) ?> &mdash; Tugas UTS Pemrograman Web
        <br>Dibuat dengan PHP <?= e(PHP_VERSION) ?>
    </footer>

</div>
</body>
</html>