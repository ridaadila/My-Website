
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/custom.css">
   
</head>
<body background="foto/Vintage Background 1.jpg">
    <nav class="navbar navbar-default" role="navigation" style="background-color: blanchedalmond;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle colapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle Nav</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">My Website</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php?module=homepage">Homepage <span class="sr-only">(current)</span></a></li>
                    <li><a class="navbar-link" href="index.php?module=profil">Profil</a></li>
                    <li><a class="navbar-link" href="index.php?module=hometown">Hometown</a></li>
                    <li><a class="navbar-link" href="index.php?module=food">Local Food</a></li>
                    <li><a class="navbar-link" href="index.php?module=tourist">Tourist Places</a></li>
                </ul>
            </div>
        </div>
    </nav>


    
    <?php
        include "content.php";
    ?>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
