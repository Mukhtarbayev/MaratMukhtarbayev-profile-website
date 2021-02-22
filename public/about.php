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
            <div class="text">
                <div class="bgtext">
                    <h1><br> About me</h1>
                    <p>"Hi, my name is Marat. I'm a student at SDU. 18 years old. I quickly adapt to anything, the main thing is the desire.  I do not like the humanities."</p>
                    <br>
                    <h1>Languages</h1>
                    <p>Kazakh&nbsp;&nbsp;
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                    </p>
                    <p>Russian&nbsp;
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                    </p>
                    <p>English&nbsp;&nbsp;
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </p>
                    <p>Turkish&nbsp;&nbsp;
                        <span class="notdot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </p> <br>
                    <h1>Interests</h1>
                    <p>Chess</p>
                    <p>Football</p>
                    <p>Music</p>
                    <p>Logic games</p><br>
                </div>
            </div>
            <div class="photo">
                <br>
                <img class="img" src="photo1.jpg" alt="">
                <p style="color:sandybrown; font-size: 30px; font-weight: bold;">Marat Mukhtarbayev</p>
                <p style="color:sandybrown; font-size: 24px; font-weight: 800;">Born in Kazakhstan, Aktobe <br> 6/17/2002</p>
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