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
    }
</style>

<body>
    <header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center"
        style="background-color: darkcyan;">
        <img src="logo.png" alt="" width="100">
        <span style="font-size: 30px;">Learnify</span>
        <span class="tagline ms-3">: Belajar Cerdas, Kuasai Dunia!</span>
    </header>
    <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 500px;">
            <div style="margin-bottom: 30px;">
                <div class="card-header">
                    <h5>
                        <center>Data Pengguna</center>
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>Ayu Hanifa</td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td>124240039</td>
                            </tr>
                            <tr>
                                <td>Plug</td>
                                <td>:</td>
                                <td>SI-B</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="position-absolute bottom-0 end-0" style="padding: 10px;">
                    <a href="ketentuan.html" class="btn btn-info">Mulai Kuis</a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>