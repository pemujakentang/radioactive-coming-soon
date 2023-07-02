<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>UMN Radioactive 2023</title>
    </head>
    <body>
        <header>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">VO CHALLENGE</a></li>
                <li><a href="#">RAC</a></li>
                <li><a href="#">CLOSING NIGHT</a></li>
            </ul>
        </header>
        <div class="sec_1">
                <li><p>THE MOST SPECTACULAR ANNUAL EVENT BY </p></li>
                <li><img class="logo_radio" src="img/LOGO UMN RADIO.png"></li>
        </div>
        <center>
            <img class="logo logo_stack" src="img/logo.gif" alt="logo"/>
            <img class="background_logo" src="img/BACKGROUND LOGO.png" alt="background logo"/>
        </center>
        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);
            });
        </script>
    </body>
</html>