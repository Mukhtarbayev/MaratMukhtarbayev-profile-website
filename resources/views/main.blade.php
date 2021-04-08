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
            <div class="photo">
                <br><br>
                <img class="img" src="{{asset('photo.jpg')}}" alt="">
                <p style="color:brown; font-size: 30px; font-weight: bold;">{{__('name_surname')}}</p>
                <p style="color: brown; font-size: 24px; font-weight: 800;">{{__('opisanie')}}</p>
            </div>
            <div class = "text">
                <br><br>
                <div class="education">
                    <p style="color: antiquewhite; font-size: 28px; font-weight: bold;">{{__('education')}}</p>
                    <br>
                    <p style="color: antiquewhite; font-size: 18px; font-weight: 650;">{{__('school')}}</p>
                    <p style="color: antiquewhite; font-size: 18px;">{{__('sch_loc')}}</p>
                    <br>
                    <p style="color: antiquewhite; font-size: 18px; font-weight: 650;">{{__('sdu')}}</p>
                    <p style="color: antiquewhite; font-size: 18px;">{{__('sdu_loc')}}</p>
                    <br>
                </div>
                <div class="lang">
                    <p style="color: antiquewhite; font-size: 28px; font-weight: bold;">{{__('program_lang')}}</p>
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
                <li  onclick="getPaging(this.id)" id="main">{{__('home')}}</li>
                <li  onclick="getPaging(this.id)" id = "about">{{__('about')}}</li>
                <li  onclick="getPaging(this.id)" id = "contact">{{__('contact')}}</li>
                <li onclick="getLanguage(this.id)" id="lang">{{__('lang')}}</li>
            </ul>
        </div>
    </div>

</body>
</html>