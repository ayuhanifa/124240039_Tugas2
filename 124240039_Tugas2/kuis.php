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
    <header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center" style="background-color: darkcyan;">
        <img src="logo.png" alt="" width="100">
        <span style="font-size: 30px;">Learnify</span>
        <span class="tagline ms-3">: Belajar Cerdas, Kuasai Dunia!</span>
    </header>
    
    <form action="jawaban.php" class="d-flex justify-content-center" method="POST" style="padding: 20px; margin-top: 100px;" onsubmit="return validateForm();">
        <div class="card" style="width: 40rem; background-color: lightcyan;">
            <div class="card-body">
                <h5 class="card-title text-center" style="font-weight: bold; font-size: 30px; margin-top: 10px; margin-bottom: 10px;">Kuis</h5>
                <p class="card-text" style="width: 600px; margin-left: 20px; margin-right: 20px; margin-bottom: 20px;">
                <fieldset>
                    <legend class="visually-hidden">Pertanyaan Kuis</legend>
                    <table>
                        <tr>
                            <td>1. Apa kepanjangan dari HTML? <br>
                                <input type="radio" name="answer0" value="a" aria-label="Hyper Text Markup Language"> a. Hyper Text Markup Language <br>
                                <input type="radio" name="answer0" value="b" aria-label="Hyperlinks and Text Markup Language"> b. Hyperlinks and Text Markup Language <br>
                                <input type="radio" name="answer0" value="c" aria-label="Home Tool Markup Language"> c. Home Tool Markup Language <br>
                                <input type="radio" name="answer0" value="d" aria-label="Hyper Tool Multi Language"> d. Hyper Tool Multi Language <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>2. Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS? <br>
                                <input type="radio" name="answer1" value="a" aria-label="background: red;"> a. background: red; <br>
                                <input type="radio" name="answer1" value="b" aria-label="bgcolor: red;"> b. bgcolor: red; <br>
                                <input type="radio" name="answer1" value="c" aria-label="color-background: red;"> c. color-background: red; <br>
                                <input type="radio" name="answer1" value="d" aria-label="background-color: red;"> d. background-color: red; <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>3. Tag HTML apa yang digunakan untuk membuat baris baru? <br>
                                <input type="radio" name="answer2" value="a" aria-label="newline"> a. newline<br>
                                <input type="radio" name="answer2" value="b" aria-label="hr"> b. hr <br>
                                <input type="radio" name="answer2" value="c" aria-label="line"> c. line <br>
                                <input type="radio" name="answer2" value="d" aria-label="br"> d. br <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>4. Apa fungsi utama dari PHP? <br>
                                <input type="radio" name="answer3" value="a" aria-label="Mengatur tata letak halaman web"> a. Mengatur tata letak halaman web <br>
                                <input type="radio" name="answer3" value="b" aria-label="Mengatur tampilan halaman web"> b. Mengatur tampilan halaman web <br>
                                <input type="radio" name="answer3" value="c" aria-label="Memproses data di sisi server"> c. Memproses data di sisi server <br>
                                <input type="radio" name="answer3" value="d" aria-label="Menambahkan animasi ke halaman web"> d. Menambahkan animasi ke halaman web <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>5. Bagaimana cara menampilkan gambar di HTML? <br>
                                <input type="radio" name="answer4" value="a" aria-label="img src='gambar.jpg'"> a. img src='gambar.jpg' <br>
                                <input type="radio" name="answer4" value="b" aria-label="image src='gambar.jpg'"> b. image src='gambar.jpg' <br>
                                <input type="radio" name="answer4" value="c" aria-label="pic src='gambar.jpg'"> c. pic src='gambar.jpg' <br>
                                <input type="radio" name="answer4" value="d" aria-label="photo src='gambar.jpg'"> d. photo src='gambar.jpg' <br>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <button type="submit" class="btn btn-info" style="margin-top: 50px; margin-left: 470px;">Kirim Jawaban</button>
                </p>
            </div>
        </div>
    </form>

    <script>
        function validateForm() {
            const totalQuestions = 5;
            for (let i = 0; i < totalQuestions; i++) {
                const selected = document.querySelector(`input[name="answer${i}"]:checked`);
                if (!selected) {
                    alert(`Pertanyaan ${i + 1} belum dijawab!`);
                    return false;
                }
            }
            return true;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>
</html>
