<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous">
    </script>
		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.5.3/handlebars.min.js"></script>
    
    <script id="entry-template" type="text/x-handlebars-template">
        <div class="wrapper">
            <img src="{{src}}" alt="" srcset="">
            <p>{{album}}</p>
            <p class="artist">{{artista}}</p>
            <p>{{anno}}</p>

        </div>
    
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="nav"> </div>
        
    </div>

    <script src="script.js"></script>

    
</body>
</html>