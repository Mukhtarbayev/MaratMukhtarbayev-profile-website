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
            <div class="contact">
                <h1 style="color: blanchedalmond; font-size:50px;">Contact me</h1><br>
                <div class="elements">
                    <div>
                    <img src="mail.png" alt="" style="heigth:25px; width:50px;">
                    <p> 190103491@stu.sdu.edu.kz</p>
                    </div>
                    <div>
                    <img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/78-instagram-512.png" alt="" style="width:50px; heigth:25px;">
                    <p>@mukhtarbayev</p>
                    </div>
                    <div>
                        <img src="https://www.freeiconspng.com/thumbs/github-icon/github-icon-4.jpg" alt="" style="width:50px; heigth:25px; border-radius:50%">
                        <p>Mukhtarbayev</p>
                    </div>
                    <div>
                        <img src="https://icons-for-free.com/iconfiles/png/512/location+maker+map+icon-1320166084997417306.png" alt="" style="width:50px; heigth:25px;">
                        <p>Kazakhstan, Almaty</p>
                    </div>
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