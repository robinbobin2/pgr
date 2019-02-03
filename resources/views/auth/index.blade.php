<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar" style="display:none;margin-bottom:50px;">
        <a class="navbar-brand" href="#">Pager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-astronaut"></i> Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-id-badge"></i> Редактор</a>
                </li>
            </ul>

            <button class="btn btn-light" type="submit" onclick="deleteCookie('Bearer');location.reload();"><i class="fas fa-power-off"></i> Выйти</button>

        </div>
    </nav>

    <div class="container" id="auth" style="margin-top:50px;">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Авторизация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#reg" role="tab" aria-controls="reg" aria-selected="false">Регистрация</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="home-tab">

                <form style="margin-top:50px;">
                    <div class="form-group">
                        <label for="">Электронная почта</label>
                        <input type="email" id="login_email" class="form-control"placeholder="Электронная почта">

                    </div>
                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input type="password" id="login_password" class="form-control" placeholder="Пароль">
                    </div>

                    <button type="button" class="btn btn-primary" onclick="login();location.reload();">Авторизация</button>
                </form>

            </div>

            <div class="tab-pane fade" id="reg" role="tabpanel" aria-labelledby="profile-tab">

                <form style="padding-top:50px;">
                    
					
					<div class="form-group">
                        <label for="">Имя пользователя</label>
                        <input type="email" class="form-control" id="signup_name" placeholder="Придумайте логин, на него будет ссылаться страница">
                    </div>
					
					<div class="form-group">
                        <label for="">Электронная почта</label>
                        <input type="email" class="form-control" id="signup_email" placeholder="Электронная почта">
                    </div>
					
                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input type="password" class="form-control" id="signup_password" placeholder="Пароль">
                    </div>

                    <button type="button" class="btn btn-primary" onclick="signup()">Регистрация</button>
                </form>

            </div>

        </div>

    </div>

    <div class="container" id="info" style="text-align:center;display:none">
		
		<img src="http://everydaynutrition.co.uk/wp-content/uploads/2015/01/default-user-avatar.png" id="user_avatar" style="width:200px;border-radius:50%;margin-bottom:25px;"/>
        
		
        <p id="email"></p>
		<p id="balance"></p>
        <p id="instagram_name"></p>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script>
        function setCookie(name, value, days) {

            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }

            document.cookie = name + "=" + (value || "") + expires + "; path=/";

        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function eraseCookie(name) {
            document.cookie = name + '=; Max-Age=-99999999;';
        }
		
		function deleteCookie(name) {
		setCookie(name, "", {
		expires: -1
		})
		}

        var key;

        function login() {

            var form = new FormData();
            form.append("email", document.getElementById('login_email').value);
            form.append("password", document.getElementById('login_password').value);

            var settings = {
                "async": false,
                "crossDomain": true,
                "url": "http://api.pgr.link/api/auth/login",
                "method": "POST",
                "headers": {
                    "Access-Control-Allow-Origin": "*"
                },
                "processData": false,
                "contentType": false,
                "mimeType": "multipart/form-data",
                "data": form
            }

            $.ajax(settings).done(function(response) {
                key = JSON.parse(response).access_token;
                console.log(JSON.parse(response).access_token);

                setCookie('Bearer', '' + key + '', 7);

                user_page(key);
				
            });

        }

        function signup() {

            var form = new FormData();
			
			form.append("email", document.getElementById('signup_email').value);
			
			form.append("instagram_name", document.getElementById('signup_name').value);
			
            form.append("password", document.getElementById('signup_password').value);

            var settings = {
                "async": false,
                "crossDomain": true,
                "url": "http://api.pgr.link/api/auth/signup",
                "method": "POST",
                "headers": {
                    "Access-Control-Allow-Origin": "*"
                },
                "processData": false,
                "contentType": false,
                "mimeType": "multipart/form-data",
                "data": form
            }

            $.ajax(settings).done(function(response) {
                console.log(response);
				alert("Успешно");
            });
			
			
			
        }

        function user_page() {

            var settings = {
                "async": false,
                "crossDomain": true,
                "url": "http://api.pgr.link/api/auth/user",
                "method": "GET",
                "headers": {
                    "Access-Control-Allow-Origin": "*",
                    "Authorization": "Bearer " + key
                }
            }

			
			
			
			
            $.ajax(settings).done(function(response) {
                
				
				console.log(response);

                document.getElementById('balance').innerHTML = 'Баланс ' + response.balance;
                document.getElementById('email').innerHTML = 'Электронная почта ' + response.email;
                document.getElementById('instagram_name').innerHTML = 'Имя ' + response.instagram_name;
				
				
				

            });
			
			

			

        }

        if (getCookie('Bearer')) {

            key = getCookie('Bearer');

            user_page(key);

            document.getElementById('auth').style.display = 'none';
			document.getElementById('navbar').style.display = 'flex';
			document.getElementById('info').style.display = 'block';

        }
    </script>

</body>

</html>