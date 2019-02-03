<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Neucha&amp;subset=cyrillic" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title></title>
</head>

<style>
    body {
        background-repeat: no-repeat;
        padding-bottom: 60px;
    }
    
    .heart {
        animation: .8s infinite beatHeart;
        background: #833ab4;
        width:300px; 
        height: 60px; /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        border:0;
        margin:0 auto;
    }
    
    @keyframes beatHeart {
        0% {
            transform: scale(1);
        }
        25% {
            transform: scale(1.1);
        }
        40% {
            transform: scale(1);
        }
        60% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
    
    @keyframes fadein {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes leftin {
        from {
            opacity: 0;
            width: 400px;
            min-height: 5px;
            height: auto;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            z-index: 19;
        }
        to {
            opacity: 1;
            width: 400px;
            min-height: 5px;
            height: auto;
            position: absolute;
            margin: auto;
            left: -300px;
            right: 0;
            z-index: 19;
        }
    }
    
    @keyframes rightin {
        from {
            opacity: 0;
            width: 400px;
            min-height: 5px;
            height: auto;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            z-index: 19;
        }
        to {
            opacity: 1;
            width: 400px;
            min-height: 5px;
            height: auto;
            position: absolute;
            margin: auto;
            left: 0;
            right: -300px;
            z-index: 19;
        }
    }
    
    .img-first {
        width: 400px;
        min-height: 5px;
        height: auto;
        position: absolute;
        margin: auto;
        left: 0;
        right: 0;
        z-index: 20;
        animation: fadein 1s;
    }
    
    .img-second-left {
        width: 400px;
        min-height: 5px;
        height: auto;
        position: absolute;
        margin: auto;
        left: -300px;
        right: 0;
        z-index: 19;
        animation: leftin 2s ease-in-out;
    }
    
    .img-second-right {
        width: 400px;
        min-height: 5px;
        height: auto;
        position: absolute;
        margin: auto;
        left: 0;
        right: -300px;
        z-index: 19;
        animation: rightin 2s ease-in-out;
    }
    
    .title_free {
        font-size: 25px;
        font-family: 'Neucha', cursive;
        width: 38%;
        float: left;
        line-height: 160px;
        text-align: center;
        margin: 0;
        overflow: hidden;
    }
    
    .arrow {
        width: 24%;
        line-height: 160px;
        float: left;
        text-align: center
    }
    
    .btn_block {
        width: 38%;
        line-height: 160px;
        float: left;
        text-align: center
    }
    
    @media screen and (max-width: 1024px) {
        .img-second-left {
            display: none
        }
        .img-second-right {
            display: none
        }
        .title_free {
            display: none
        }
        .arrow {
            display: none
        }
        .btn_block {
            width: 100%;
        }
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0px;height: 60px;">

        <div class="container">
            
            <a class="navbar-brand" href="#">PAGER</a>
            
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">О проекте</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Авторизация</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12  text-center" style="margin-top:30px;margin-bottom:30px;">

                <h1 class="display-4" style="font-weight: lighter;line-height: 60px;">Мы знаем как добавить несколько ссылок в профиль Instagram 💃</h1>

                <h2 style="font-weight: lighter"> <b>Пейджер</b> собирает все ссылки на одной странице.

                <br>И подписчики ничего не потеряют.

                </h2>

            </div>

            <div class="col-md-12 col-sm-12  text-center" style="position:relative;min-height:650px;">

                <img src="smartmockups_jqxetqxn.png" class="img-second-left">
                <img src="smartmockups_jqxetqxn.png" class="img-first">
                <img src="smartmockups_jqxetqxn.png" class="img-second-right">

            </div>

            <div class="col-md-12 col-sm-12 " style="position:relative;">

                <p class="title_free">Это БЕСПЛАТНО и займет 5 минут времени! </p>

                <div class="arrow">

                    <img src="https://mbotaswbcw-flywheel.netdna-ssl.com/wp-content/uploads/2016/09/black-arrow-curved-Yf3S26-clipart.png" style="max-height:130px;">

                </div>

                <div class="btn_block">

                    <button type="button" class="btn btn-lg shadow-lg text-white heart"><i class="fab fa-instagram"></i> Повысить интерес</button>

                </div>

            </div>

        </div>

    </div>
    
    <div class="container text-center shadow-lg" style="background: #f8f9fa;border-radius:10px;padding-top:100px;padding-bottom: 100px;">
        
        <h1 class="display-4" style="font-weight: lighter;margin-bottom:30px;"> Увеличьте количество ссылок в Вашем профиле </h1>
        
        <img src="https://assets-ouch.icons8.com/thumb/477/16700aad-f040-48d1-9107-3f97e3a9c0ed.png" style="width:100%;max-width:588px;">
        
        <h2 style="font-family: 'Neucha', cursive;"> Пейджер это бесплатный инструмент для оптимизации трафика в Instagram. </h2>
        
        <img src="https://assets-ouch.icons8.com/thumb/64/7b091c80-a847-426b-8f41-5ab5749ec477.png" style="width:100%;max-width:588px;">
            
         <h2 style="font-family: 'Neucha', cursive;">   Вы получаете одну ссылку для управления всем контентом на одной странице.</h2>
        
        <img src="https://assets-ouch.icons8.com/thumb/815/4d63b485-c6bf-4150-8fce-beba9b7292da.png" style="width:100%;max-width:588px;">

         <h2 style="font-family: 'Neucha', cursive;">   Это очень просто, а главное очень полезно.</h2>
        
        
        

        
    </div>
    
     <div class="container text-center" style="padding-top:100px;padding-bottom: 100px;">
        
         <h2 style="font-family: 'Neucha', cursive;"> Выделиться просто! Пейджер поможет!</h2>
         
        <img src="https://assets-ouch.icons8.com/thumb/572/556ee24b-c73e-4c77-82f8-3dc8838afd07.png" style="width:100%;max-width:588px;">
         
        <blockquote class="blockquote" >
        
        <p class="mb-0" style="font-family: 'Neucha', cursive;">Что лучше? Потратить 5 минут на ленту Вконтакте или запустить свою страницу в пейджере? Конечно, второе!</p>
        
        <footer class="blockquote-footer">Любой пользователь <cite title="Source Title">пейджера</cite></footer>
        
         </blockquote>
         
         <button type="button" class="btn btn-lg shadow-lg text-white heart"> Это бесплатно! </button>
    
     </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>