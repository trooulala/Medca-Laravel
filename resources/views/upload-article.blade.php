<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Artikel</title>
</head>
<body>
    <header>
        <div class="nav-container">
        <nav>
            <a href="/"><div class="logo"></div></a>
            <ul class="nav__links">
                <li><a href="/">Home</a></li>
                <li><a href="article.html">Artikel</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <div class="medca-upload">
        <div class="wrap-header">
            <div class="medca-logo"></div>
            <h3>Unggah Artikel</h3>
        </div>
    </div>
    <div class="content-container">
        <h4 class="kategori">Kategori</h4>
        <div class="kategori-artikel">
            <select classname="kategori_artikel" id="kategori_artikel">
                <option selected disabled>Pilih Kategori</option>
                <option value="umum">Umum</option>
                <option value="covid">Covid</option>
                <option value="paru-paru">Paru-Paru</option>
                <option value="lambung">Lambung</option>
                <option value="mata">Mata</option>
            </select>
        </div>
        <h4 class="judul-artikel">Masukkan Judul Artikel</h4>
        <div class="input-judul">
            <input type="text">
        </div>
        <h4 class="upload-cover">Upload Cover Artikel</h4>
        <div class="drop-zone">
            <span class="drop-zone__prompt">Masukkan file disini atau klik untuk upload</span>
        </div>
        <h4 class="tulis-paragraf">Tulis Paragraf</h4>
        <form class="form-text" action="">
            <textarea>Masukkan teks...</textarea>
        </form>
    <div class="submit-artikel">
        <div class="btn-submit-artikel">
            <a href="">Submit Artikel</a>
        </div>
    </div>
    </div>
</body>
</html>