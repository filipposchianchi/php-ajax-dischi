<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous">
    </script>
		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.5.3/handlebars.min.js"></script>
    
    <script id="entry-template" type="text/x-handlebars-template">
    
    </script>
    <link rel="stylesheet" href="style.css">

    <?php
        include "data.php";

    ?>

</head>
<body>
    
    

    <div class="container">
        <div class="nav"> </div>
        
        <?php
            foreach($database as $disco) {
        ?> 
            <?php
                echo '<div class="wrapper">';
                    echo '<img src="'.$disco["poster"].'" alt="">';
                    echo '<p>'.$disco["title"].'</p>';
                    echo '<p class="artist">'.$disco["author"].'</p>';
                    echo '<p>'.$disco["year"].'</p>';
                echo '</div>';
            }       
            ?> 
        
                
                
        
    </div>

    <script src="script.js"></script>
    
</body>
</html>