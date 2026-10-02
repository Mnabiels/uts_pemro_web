<?php

$profil = [
    "nama"          => "Muhammad Nabil Syarif Ubaidillah",
    "nim"           => "2505090065",
    "prodi"         => "Pendidikan Teknik Informatika dan Komputer",
    "angkatan"      => "2025",
    "kesibukan"     => [
        "Part time fotografer/dokumentasi acara",
        "Belajar coding dan UI/UX desain secara mandiri",
        "Memantau tren, topik, dan perkembangan konten di medsos untuk referensi pengembangan ide dan strategi konten",
    ],
    "cita_cita"     => "Desainer UI/UX.",
    "bidang_it"     => "UI/UX Design",
    "alasan_bidang" => "Saya ingin mendalami bidang UI/UX Design karena tertarik dengan proses merancang tampilan dan pengalaman pengguna pada website atau aplikasi. Bidang ini juga dapat melatih kreativitas, kemampuan memecahkan masalah, serta memahami kebutuhan pengguna agar menghasilkan produk digital yang mudah dan nyaman digunakan.
",
    "foto"          => "foto.jpg", // taruh file foto di folder yang sama; kosongkan "" jika tidak ada
];

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
    <title><?= e($profil["nama"]) ?></title>
    <style>
        :root {
            --langit-1: #1c46bd;
            --langit-2: #2f66dc;
            --cyan: #19d3e6;
            --cyan-tua: #0aa6c0;
            --kaca: rgba(255,255,255,.18);
            --garis-kaca: rgba(255,255,255,.65);
            --putih: #ffffff;
            --navy: #0b2a73;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { overflow-x: hidden; }

        body {
            font-family: Verdana, Tahoma, "Trebuchet MS", sans-serif;
            color: var(--putih);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        
            background:
                radial-gradient(ellipse 34% 7% at 18% 9%,  rgba(255,255,255,.95), transparent 72%),
                radial-gradient(ellipse 28% 6% at 42% 13%, rgba(255,255,255,.80), transparent 72%),
                radial-gradient(ellipse 38% 8% at 82% 7%,  rgba(255,255,255,.90), transparent 72%),
                radial-gradient(ellipse 30% 6% at 70% 22%, rgba(255,255,255,.55), transparent 72%),
                radial-gradient(ellipse 36% 7% at 8%  34%, rgba(255,255,255,.45), transparent 72%),
                linear-gradient(180deg, #3f78e6 0%, var(--langit-2) 25%, var(--langit-1) 60%, #2a56cb 100%);
            background-attachment: fixed;
        }
        
        body::before {
            content: "";
            position: fixed; inset: 0;
            pointer-events: none;
            z-index: 50;
            opacity: .22;
            mix-blend-mode: overlay;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='220' height='220'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='2' stitchTiles='stitch'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
        }

        .wrap {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
            padding: 14px 18px 0;
        }

        
        .label-atas {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            font-family: "Courier New", monospace;
            font-size: .78rem;
            text-shadow: 0 1px 2px rgba(0,20,80,.6);
        }

        
        h1 {
            margin-top: 10px;
            font-family: "Arial Black", Impact, "Arial Narrow Bold", sans-serif;
            font-style: italic;
            font-size: clamp(1.9rem, 7.5vw, 4rem);
            line-height: 1.05;
            text-transform: uppercase;
            letter-spacing: -.01em;
            background: linear-gradient(180deg, #ffffff 0%, #d7e6ff 40%, #8fb2ee 52%, #ffffff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-stroke: 1.5px #223a86;
            filter: drop-shadow(3px 3px 0 rgba(8,25,90,.55));
            overflow-wrap: anywhere;
        }
        .tag {
            margin-top: 6px;
            display: flex; justify-content: space-around; flex-wrap: wrap; gap: 8px;
            font-family: "Arial Black", Impact, sans-serif;
            font-style: italic;
            font-size: .85rem;
            color: #bcd4ff;
            -webkit-text-stroke: .5px #12307f;
            text-shadow: 1px 1px 0 #12307f;
        }

        
        .monitor {
            position: relative;
            z-index: 2;
            margin-top: 26px;
            padding: 26px 26px 20px;
            border-radius: 34px 34px 26px 26px;
            background:
                linear-gradient(135deg, rgba(255,255,255,.9), rgba(205,215,232,.9) 60%, rgba(240,244,250,.95));
            box-shadow:
                inset 0 0 0 3px rgba(255,255,255,.8),
                inset 0 -10px 22px rgba(120,140,180,.35),
                0 18px 40px rgba(5,20,80,.55);
            transform: rotate(-1.2deg);
        }
        .layar {
            position: relative;
            border-radius: 18px;
            padding: 22px 20px 24px;
            overflow: hidden;
            color: var(--putih);
            border: 3px solid #9fb1d4;
            box-shadow: inset 0 0 28px rgba(0,20,90,.7);
            background:
                radial-gradient(ellipse 45% 12% at 25% 8%,  rgba(255,255,255,.9), transparent 70%),
                radial-gradient(ellipse 35% 9%  at 80% 14%, rgba(255,255,255,.7), transparent 70%),
                linear-gradient(180deg, #4d86f0 0%, #1e4fc9 55%, #123aa0 100%);
        }
        
        .layar::after {
            content: "";
            position: absolute; inset: 0;
            pointer-events: none;
            background: linear-gradient(115deg, rgba(255,255,255,.28) 0%, rgba(255,255,255,0) 32%);
        }

        .sambutan {
            font-family: "Courier New", monospace;
            font-weight: bold;
            font-size: 1.15rem;
            text-shadow: 2px 2px 0 rgba(10,40,140,.9), 0 0 10px rgba(120,230,255,.9);
        }
        .nama-layar {
            font-family: "Courier New", monospace;
            font-weight: bold;
            font-size: clamp(1.4rem, 5vw, 2.1rem);
            line-height: 1.15;
            text-shadow: 2px 2px 0 rgba(10,40,140,.9), 0 0 12px rgba(120,230,255,.9);
            overflow-wrap: anywhere;
        }
        .kecil { font-size: .9rem; color: #d5ecff; margin-top: 4px; }

        .profil-atas { display: flex; gap: 18px; align-items: center; flex-wrap: wrap; position: relative; z-index: 1; }
        .foto {
            width: 112px; height: 112px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
            border: 3px solid #fff;
            box-shadow: 0 0 0 3px var(--cyan), 0 6px 14px rgba(0,10,70,.55);
            background: radial-gradient(circle at 30% 25%, #ffffff, var(--cyan) 55%, #1478c8);
            display: flex; align-items: center; justify-content: center;
            font-family: "Arial Black", sans-serif; font-size: 3rem;
            text-shadow: 0 2px 4px rgba(0,30,90,.6);
        }

        .grid {
            position: relative; z-index: 1;
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }
        .kaca {
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid var(--garis-kaca);
            background: linear-gradient(180deg, rgba(255,255,255,.34), rgba(255,255,255,.1));
            box-shadow: inset 0 1px 0 rgba(255,255,255,.7), 0 4px 12px rgba(0,15,80,.35);
            backdrop-filter: blur(3px);
        }
        .kaca.lebar { grid-column: 1 / -1; }
        .kaca h2 {
            font-family: "Arial Black", Impact, sans-serif;
            font-style: italic;
            font-size: 1rem;
            margin-bottom: 8px;
            text-shadow: 1px 1px 0 rgba(10,40,140,.9);
        }
        dl { display: grid; grid-template-columns: 82px 1fr; gap: 4px 10px; }
        dt { color: #cfe6ff; }
        dd { font-weight: bold; overflow-wrap: anywhere; }
        .kaca ul { list-style: none; }
        .kaca li { padding-left: 22px; position: relative; }
        .kaca li + li { margin-top: 4px; }
        .kaca li::before {
            content: "";
            position: absolute; left: 0; top: .5em;
            width: 12px; height: 12px;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, #fff, var(--cyan) 60%, #0b7fb8);
            box-shadow: 0 0 6px rgba(120,240,255,.9);
        }
        .kaca p + p { margin-top: 8px; }
        .sorot {
            display: inline-block;
            padding: 2px 12px;
            border-radius: 999px;
            font-weight: bold;
            background: linear-gradient(#5cf0ff, #12b4d4);
            border: 1px solid #fff;
            color: #06307a;
            box-shadow: inset 0 2px 3px rgba(255,255,255,.8);
        }

        
        .dagu {
            display: flex; align-items: center; justify-content: space-between;
            margin-top: 14px; padding: 0 8px;
        }
        .speaker {
            width: 46px; height: 46px; border-radius: 50%;
            background:
                radial-gradient(circle at 50% 50%, #0b7e96 0 22%, transparent 24%),
                repeating-radial-gradient(circle, #22e0f2 0 3px, #0aa9c2 3px 6px);
            box-shadow: inset 0 0 8px rgba(0,60,90,.6), 0 2px 4px rgba(0,0,0,.25);
        }
        .slot { width: 90px; height: 10px; border-radius: 6px; background: linear-gradient(#aab6cd, #e8eef9); box-shadow: inset 0 2px 3px rgba(0,0,0,.35); }
        .power { width: 16px; height: 16px; border-radius: 50%; background: radial-gradient(circle at 35% 30%, #fff, #9fb1d4); box-shadow: 0 1px 3px rgba(0,0,0,.4); }

        
        .hiasan { position: absolute; pointer-events: none; z-index: 3; }
        .gelembung {
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,.75);
            background: radial-gradient(circle at 30% 25%, rgba(255,255,255,.95) 0 6%, rgba(255,255,255,.12) 16%, rgba(170,225,255,.14) 62%, rgba(255,255,255,.5) 100%);
            box-shadow: inset 0 0 18px rgba(255,255,255,.55), 0 4px 10px rgba(0,20,90,.25);
            animation: melayang 7s ease-in-out infinite;
        }
        .mata {
            border-radius: 50%;
            background:
                radial-gradient(circle at 63% 54%, #07287c 0 9%, #1f72e6 10% 19%, #0b3fae 20% 25%, transparent 26%),
                radial-gradient(circle at 35% 28%, #ffffff, #d6deee 62%, #8b9ec6);
            box-shadow: 0 6px 12px rgba(0,15,80,.45);
            animation: melayang 9s ease-in-out infinite reverse;
        }
        @keyframes melayang { 50% { transform: translateY(-14px); } }

        .g1 { width: 120px; height: 120px; left: -46px;  top: 150px; }
        .g2 { width: 70px;  height: 70px;  right: -22px; top: 260px; animation-delay: -2s; }
        .g3 { width: 150px; height: 150px; right: -60px; bottom: 150px; animation-delay: -4s; }
        .m1 { width: 74px;  height: 74px;  left: -26px;  bottom: 110px; }
        .m2 { width: 56px;  height: 56px;  right: 70px;  top: 118px; }
        .m3 { width: 64px;  height: 64px;  right: 12%;   bottom: -26px; }

        
        .bawah { position: relative; margin-top: 10px; text-align: center; z-index: 4; }
        .penghitung { position: relative; z-index: 5; padding-top: 6px; }
        .angka {
            display: inline-block;
            padding: 3px 12px;
            font-family: "Courier New", monospace;
            font-size: 1.2rem;
            letter-spacing: .25em;
            color: #6bffe6;
            background: #06143f;
            border: 2px solid #fff;
            border-radius: 6px;
            text-shadow: 0 0 6px #6bffe6;
        }
        .lantai-wadah { perspective: 520px; height: 230px; overflow: hidden; margin-top: -26px; }
        .lantai {
            width: 220%;
            height: 440px;
            margin-left: -60%;
            transform-origin: 50% 0;
            transform: rotateX(62deg);
            background:
                conic-gradient(#050505 25%, #f4f4f4 0 50%, #050505 0 75%, #f4f4f4 0) 0 0 / 120px 120px;
            filter: contrast(1.1);
        }
        .kaki {
            position: relative; z-index: 6;
            margin-top: -70px;
            padding: 10px 14px 18px;
            font-size: .82rem;
            color: #fff;
            text-shadow: 0 1px 3px rgba(0,0,0,.9);
        }

        @media (max-width: 640px) {
            .grid { grid-template-columns: 1fr; }
            .monitor { padding: 16px 14px 14px; transform: none; border-radius: 26px; }
            .layar { padding: 16px 14px 18px; }
            .g1, .g3, .m1 { display: none; }
            .label-atas span:nth-child(n+4) { display: none; }
            .lantai-wadah { height: 170px; }
        }
        @media (prefers-reduced-motion: reduce) {
            .gelembung, .mata { animation: none; }
        }
    </style>
</head>
<body>
<div class="wrap">

    <div class="label-atas">
        <span>//profil_01.exe</span>
        <span>gravitasi nol</span>
        <span>dibuat oleh <?= e($profil["nama"]) ?></span>
        <span>is reality offline</span>
        <span>uts pemrograman web</span>
    </div>

    <h1><?= e($profil["nama"]) ?></h1>
    <div class="tag"><span><?= e($profil["prodi"]) ?></span><span>angkatan <?= e($profil["angkatan"]) ?></span></div>

    
    <div class="hiasan gelembung g1" aria-hidden="true"></div>
    <div class="hiasan gelembung g2" aria-hidden="true"></div>
    <div class="hiasan gelembung g3" aria-hidden="true"></div>
    <div class="hiasan mata m1" aria-hidden="true"></div>
    <div class="hiasan mata m2" aria-hidden="true"></div>
    <div class="hiasan mata m3" aria-hidden="true"></div>

    <main class="monitor">
        <div class="layar">
            <div class="profil-atas">
                <?php if (!empty($profil["foto"]) && file_exists($profil["foto"])): ?>
                    <img class="foto" src="<?= e($profil["foto"]) ?>" alt="Foto <?= e($profil["nama"]) ?>">
                <?php else: ?>
                    <div class="foto" aria-hidden="true"><?= e($inisial) ?></div>
                <?php endif; ?>
                <div>
                    <p class="sambutan">welcome to</p>
                    <p class="nama-layar"><?= e($profil["nama"]) ?>'s world</p>
                    <p class="kecil">NIM <?= e($profil["nim"]) ?></p>
                </div>
            </div>

            <div class="grid">
                <section class="kaca">
                    <h2>Data diri</h2>
                    <dl>
                        <dt>Nama</dt>     <dd><?= e($profil["nama"]) ?></dd>
                        <dt>NIM</dt>      <dd><?= e($profil["nim"]) ?></dd>
                        <dt>Prodi</dt>    <dd><?= e($profil["prodi"]) ?></dd>
                        <dt>Angkatan</dt> <dd><?= e($profil["angkatan"]) ?></dd>
                    </dl>
                </section>

                <section class="kaca">
                    <h2>Kesibukan selain kuliah</h2>
                    <ul>
                        <?php foreach ($profil["kesibukan"] as $item): ?>
                            <li><?= e($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>

                <section class="kaca lebar">
                    <h2>Cita-cita</h2>
                    <p><?= e($profil["cita_cita"]) ?></p>
                </section>

                <section class="kaca lebar">
                    <h2>Bidang IT yang ingin didalami</h2>
                    <p><span class="sorot"><?= e($profil["bidang_it"]) ?></span></p>
                    <p><?= e($profil["alasan_bidang"]) ?></p>
                </section>
            </div>
        </div>

        <div class="dagu" aria-hidden="true">
            <div class="speaker"></div>
            <div class="slot"></div>
            <div class="power"></div>
            <div class="slot"></div>
            <div class="speaker"></div>
        </div>
    </main>
        <div class="lantai-wadah" aria-hidden="true"><div class="lantai"></div></div>
        <p class="kaki">
        </p>
    </div>

</div>
</body>
</html>