<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        background-color: lightblue;
    }

    header {
        font-family: 'Fira Code', monospace;
        font-weight: bold;
    }

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        background-color: lightcyan;
        margin-top: 100px;
    } 

    .benar {
        color: green;
    }

    .salah {
        color: red;
    }

    .pertanyaan {
        color: black;
    }
</style>

<body>
<header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center" style="background-color: darkcyan;">
        <img src="logo.png" alt="" width="100">
        <span style="font-size: 30px;">Learnify</span>
        <span class="tagline ms-3">: Belajar Cerdas, Kuasai Dunia!</span>
    </header>

    <div class="container d-flex justify-content-center" style="margin-top: 0px;">
        <div class="card p-4" style="width: 40rem;">
            <h5 class="text-center" style="font-weight: bold; font-size: 30px;">Hasil Kuis</h5>
            <?php
            $jawabanBenar = ["a", "d", "d", "c", "a"];
            $jawabanUser = [];
            $skor = 0;
            $hasil = [];

            for ($i = 0; $i < count($jawabanBenar); $i++) {
                $jawabanUser[$i] = $_POST["answer$i"] ?? '';
            }
            foreach ($jawabanUser as $index => $jawaban) {
                if ($jawaban === $jawabanBenar[$index]) {
                    $hasil[$index] = ["pesan" => "<span style='color: green;'>Jawaban Anda benar!</span>", "benar" => true];
                    $skor++;
                } else {
                    $hasil[$index] = ["pesan" => "<span style='color: red;'>Jawaban Anda salah. Jawaban yang benar: </span> <span style='color: red; font-weight: bold;'>" . strtoupper($jawabanBenar[$index]) . "</span>", "benar" => false];
                }
            }

            $persentase = ($skor / count($jawabanBenar)) * 100;
            ?>
            <ul style="margin-top: 30px;">
                <?php foreach ($hasil as $index => $item): ?>
                    <li class="pertanyaan <?= $item["benar"] ? 'benar' : 'salah' ?>">Pertanyaan <?= $index + 1 ?>: <?= $item["pesan"] ?></li>
                <?php endforeach; ?>
            </ul>
            <table style="font-size: 20px; font-weight: bold;">
                <tr>
                    <td>Skor: <?= $skor ?> / <?= count($jawabanBenar) ?></td>
                </tr>
                <tr>
                    <td>Persentase Nilai: <?= $persentase ?>%</td>
                </tr>
            </table>
            <br>
            <a href="index.php" class="btn btn-info">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>
</html>