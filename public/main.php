<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script>
        function getPaging(str) {
            document.location.href=str;
        }
    </script>
</head>

<body>
    <div class="main">
        <div class="info">
            <div class="photo">
                <br><br>
                <img class="img" src="photo.jpg" alt="">
                <p style="color:brown; font-size: 30px; font-weight: bold;">Marat Mukhtarbayev</p>
                <p style="color: brown; font-size: 24px; font-weight: 800;">Student, Information Systems</p>
            </div>
            <div class = "text">
                <br><br>
                <div class="education">
                    <p style="color: antiquewhite; font-size: 28px; font-weight: bold;">Education</p>
                    <br>
                    <p style="color: antiquewhite; font-size: 18px; font-weight: 650;">School №5 (2008-2019)</p>
                    <p style="color: antiquewhite; font-size: 18px;">Kazakhstan, Aktobe</p>
                    <br>
                    <p style="color: antiquewhite; font-size: 18px; font-weight: 650;">Suleyman Demirel University (2019-Present)</p>
                    <p style="color: antiquewhite; font-size: 18px;">Kazakhstan, Almaty, Kaskelen</p>
                    <br>
                </div>
                <div class="lang">
                    <p style="color: antiquewhite; font-size: 28px; font-weight: bold;">Programming Languages</p>
                    <br>
                    <p style="color: antiquewhite; font-size: 18px; font-weight: 650;">Java 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    </p>
                    <br>
                    <p style="color: antiquewhite; font-size: 18px; font-weight: 650;">HTML,CSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="quick">
            <ul class="cursors">
                <li  onclick="getPaging(this.id)" id="main">Home</li>
                <li  onclick="getPaging(this.id)" id = "about">About</li>
                <li  onclick="getPaging(this.id)" id = "contact">Contact</li>
            </ul>
        </div>
    </div>

</body>
</html>