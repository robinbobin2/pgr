<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title></title>
</head>

<style>
    html {
        height: 100%;
        width: 100%;
    }
    
    body {
        position: relative;
        height: 100%;
        width: 100%;
        background-repeat: no-repeat;
    }
    
    a.card {
        border: 0;
        margin-top: 15px;
        color: #212529;
    }
    
    a.card:hover,
    a.card:focus {
        color: #212529;
        text-decoration: none;
    }
    
    .card-title {
        margin-bottom: 0
    }
    
    ::-webkit-scrollbar {
        display: none;
    }
    
    input.form-control {
        border: 0
    }
    
    input[name="p"].form-control {
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
    }
    
    input[name="h5"].form-control {
        font-size: 1.25rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit;
    }
    
    .list-group-item {
        padding: 0;
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>

<body>

    <div style="position: relative; display: block; width:25%;height:100%;float:left;background: #fff;-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
-moz-box-sizing: border-box;    /* Firefox, other Gecko */
box-sizing: border-box;  padding:15px;">

        <div id="list_elements" class="list-group list-group-flush">

        </div>

    </div>

    <div style="position: relative; display: block; width:75%;height:100%;float:left;background: #eee">

        <section id="page">

            <div style="position: absolute; width:325px;height:667px;background: #fff;border-radius:6px;margin:auto;top:0;bottom:0;right:0;left:0;overflow: scroll;padding-bottom: 15px" class="shadow-lg">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 text-center" style="margin-top:15px;">

                            <div>
                                <img src="https://www.myuniverse.co.in/creditcards/assets/admin/img/user2.jpg" class="rounded-circle shadow-lg" alt="..." style="margin-bottom:10px;width:150px;height:150px;">
                            </div>

                            <p style="margin:0;">Статус. О себе. Небольшое описание 👅</p>
                            <h3 style="margin:0;margin-top:5px;">Имя Фамилия</h3>

                        </div>

                        <div class="col-md-12" id="render_list_links">

                            <div id="links"></div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        var user;

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

                user = response.instagram_name;

                get_links(user);

            });

        }

        if (getCookie('Bearer')) {

            key = getCookie('Bearer');

            user_page(key);

        }

        function get_links() {

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "http://api.pgr.link/api/get_links/" + user + "",
                "method": "GET",
                "headers": {

                }
            }

            $.ajax(settings).done(function(response) {
                console.log(response);

                for (i = 0; i < response.links.length; i++) {
				
					
					document.getElementById('list_elements').innerHTML += '<input type="text" name="a" class="form-control" value="' + response.links[i].link_address + '" oninput="changevalue(this.value,' + response.links[i].id + ',this)"><input name="h5" class="form-control" type="text" value="' + response.links[i].title + '" oninput="changevalue(this.value,' + response.links[i].id + ',this)"><input name="p" class="form-control" type="text" value="' + response.links[i].description + '" oninput="changevalue(this.value,' + response.links[i].id + ',this)" />'

                    document.getElementById('links').innerHTML += '<a href="https://' + response.links[i].link_address + '" class="card shadow-lg"><div class="card-body"><h5 class="card-title">' + response.links[i].title + '</h5><p class="card-text">' + response.links[i].description + '</p></div></a>';

                }

            });

        }
		
		
		function changevalue(value,id,el){
		
		
		console.log(value);
		console.log(id);
		console.log(el);
		
		
		
		
		
		}
		
		
		
		function add_link(){
		
		var form = new FormData();
		form.append("link_address", "vk12345.com");
		form.append("title", "VK12345");
		form.append("description", "COM12345");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.pgr.link/api/add_link",
  "method": "POST",
  "headers": {
    "Authorization": "Bearer " + key
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
		
		
		
		}
		
		
		
    </script>

</body>

</html>