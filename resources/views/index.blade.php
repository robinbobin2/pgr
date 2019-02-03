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

	<style>
	
	
	
	
	
	    body {
        background-repeat: no-repeat;
    }
    
    a.card {
        border: 0;
        margin-top: 25px;
        color: #212529;
    }
    
    a.card:hover,
    a.card:focus {
        color: #212529;
        text-decoration: none;
    }
    
    a.card.bg-primary:hover,
    a.card.bg-primary:focus {
        background-color: #007bff!important;
    }
    
    .card-title{margin-bottom: 0}
	
	
	
	
	</style>
	
	</head>

<body>


<div class="container">

        <div class="row">

		
		
		            <div class="col-md-12 text-center" style="margin-top:25px;">

                <div>
                    <img src="http://everydaynutrition.co.uk/wp-content/uploads/2015/01/default-user-avatar.png" class="rounded-circle" alt="..." style="margin-bottom:10px;width:180px;height:180px;">
                </div>

                <p style="margin:0;">This line of text is meant to be treated as fine print 👅</p>
                <h3 style="margin:0;margin-top:5px;">Name Surname</h3>

            </div>
		
		

		 <div class="col-md-12">
		
			<div id="links"></div>
	
	
            </div>

        </div>

    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script>
        var user="";
		
		console.log(window.location.href);
		
		
		var str = window.location.href;
		var n = str.search("@");
		n=n+1;
		
		for (n;n<window.location.href.length;n++){
		
		console.log(window.location.href[n]);
		
		user+=window.location.href[n];
		
		}
		
		console.log(user);
		
		
		var settings = {
		"async": true,
		"crossDomain": true,
		"url": "http://api.pgr.link/api/get_links/"+user+"",
		"method": "GET",
		"headers": {

		}
		}

		$.ajax(settings).done(function (response) {
		console.log(response);
		
		for (i=0;i<response.links.length;i++){
		
		document.getElementById('links').innerHTML+='<a href="https://'+response.links[i].link_address+'" class="card shadow-lg"><div class="card-body"><h5 class="card-title">'+response.links[i].title+'</h5><p class="card-text">'+response.links[i].description+'</p></div></a>';
		
		}
		
		
		});
		
    </script>

</body>

</html>