<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Buat Janji</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    body {
        height: 100vh;
        width: 100%;
        background: linear-gradient(180deg, #FFB9B9 0%, #F5DBDB 100%);
    }
    .footer{
        position: sticky;
        left: 0px;
    }

    .container-janji{
        margin-top: 10px;
    }
    .container-janji h2 {
        background-color: transparent;
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-size: 70px;
        margin-right: 200px;
        padding: 0px;
        width: 784px;
    }
    .container-janji h2.text_1{
        color:  #E67591;
    }
    .container-janji h2.text_2{
        color:  #fff;
    }

    .text-buatJanji{
        background-color: transparent;
        position: absolute;
        width: 784px;
        height: 123px;
        left: 1040px;
        top: 251px;
    }
    button.link-form {
        background-color:  #E1295B;
        color: #fff;
        margin-top: 20px;
        font-size: 32px;
        width: 245px;
        height: 70px;
        border-radius: 10px;
        border: none;
    }
    button.link-form:hover{
        transition: all .3s linear;
        box-shadow: 0px 4px 24px rgba(209, 77, 77, 0.808);
    }
</style>
<body>
    <header>
        <div class="nav-container">
            <nav>
                <a href="/"><div class="logo"></div></a>
                <ul class="nav__links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/article">Artikel</a></li>
                    <li><a href="#contact">Contact</a></li>                
                </ul>
                <a href = "login.html" class="cta"><button class="login"> Login </button></a>
            </nav>
        </div>
    </header>
    <div class="container-janji">
        <div class="text-buatJanji">
            <h2 class="text_1">Take Care of Your</h2>
            <h2 class="text_2">Health Anytime</h2>
            <h2 class="text_2">Anywhere</h2>
            <a href="/form janji"><button class="link-form">Buat Janji</button></a>
        </div>
        
        <img src="/svg/docter-image.svg" alt="">
        
    </div> 
    <div class="footer"><img src="/svg/footer.svg" alt="" /></div>
</body>
</html>