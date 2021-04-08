<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <script>
        function getPaging(str) {
            document.location.href=str;
        }
        function getLanguage(str){
            var element = document.getElementById(str).innerHTML;
            var href = window.location.href;
            if(element=="KZ"){
                href = href.replace('/kz/','/en/'); 
                document.location.href=href;
            }
            else if(element=="RU"){
                href = href.replace('/ru/','/kz/'); 
                document.location.href=href;
            } else{
                href = href.replace('/en/','/ru/'); 
                document.location.href=href;
            }
        }
    </script>
</head>

<body>
    <div class="main">
        <div class="info">
            <div class="text">
                <div class="bgtext">
                    <h1><br> {{__('about_me')}}</h1>
                    <p>"{{__('about_me_information')}}</p>
                    <br>
                    <h1>{{__('languages')}}</h1>
                    <p>{{__('kazakh')}}&nbsp;&nbsp;
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                    </p>
                    <p>{{__('russian')}}&nbsp;
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                    </p>
                    <p>{{__('english')}}&nbsp;&nbsp;
                        <span class="notdot"></span>
                        <span class="notdot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </p>
                    <p>{{__('turkish')}}&nbsp;&nbsp;
                        <span class="notdot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </p> <br>
                    <h1>{{__('interests')}}</h1>
                    <p>{{__('chess')}}</p>
                    <p>{{__('football')}}</p>
                    <p>{{__('music')}}</p>
                    <p>{{__('logic_games')}}</p><br>
                </div>
            </div>
            <div class="photo">
                <br>
                <img class="img" src="{{asset('photo1.jpg')}}" alt="">
                <p style="color:sandybrown; font-size: 30px; font-weight: bold;">Marat Mukhtarbayev</p>
                <p style="color:sandybrown; font-size: 24px; font-weight: 800;">Born in Kazakhstan, Aktobe <br> 6/17/2002</p>
            </div>
        </div>
        <div class="quick">
            <ul class="cursors">
                <li  onclick="getPaging(this.id)" id="main">{{__('home')}}</li>
                <li  onclick="getPaging(this.id)" id = "about">{{__('about')}}</li>
                <li  onclick="getPaging(this.id)" id = "contact">{{__('contact')}}</li>
                <li onclick="getLanguage(this.id)" id="lang">{{__('lang')}}</li>
            </ul>
        </div>
    </div>
</body>
</html>