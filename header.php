<!DOCTYPE html>
<html lang="en" dir="ltr">

  <body>
<header>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
        <title>hotel moon</title>
        <link href="https://fonts.googleapis.com/css?family=Abel|Raleway|Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="shortcut icon" href="">
      <link rel="stylesheet" href="bootstrap/index.css">

      <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    </head>

















      <nav class="navontop">
        <img src='all_img/logo.png' class='logo' alt='Moon Tower Inn (Birtamod) Logo'/>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="food.php">Food Menu</a></li>
        <li><a href="#">Rooms</a></li>
        <li><a href="#">Travels</a></li>
        <li><a href="about.php">About us</a></li>

    </ul>
      </nav>

    <div class="navonbottom">
      <div class="menubotton">

      </div>
      <div class="closebtn">

      </div>
      <nav class="dallo">

    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="food.php">Food Menu</a></li>
        <li><a href="#">Rooms</a></li>
        <li><a href="#">Travels</a></li>
        <li><a href="about.php">About us</a></li>

    </ul>
      </nav>
    </div>






























    </header>
    <script>
    var lastScroll = 0;
         $(window).scroll(function(event){
             var st = $(this).scrollTop();
             if (st > 20){
                $(".navontop").fadeOut(500)
                $(".navonbottom").css({
                  "display":"block",
                  "position":"fixed",
                  "background":"transparent",
                  "height":"25%",
                  "width":"25%",
                  "z-index":"25"
              },200)
             }
             else if (st < 20) {
                $(".navontop").fadeIn(500)
                $(".navonbottom").css("display","none")
             }
             lastScroll = st;
         });

         $('.menubotton').click(function(){
             $(".navonbottom").css({
               "height":"100%",
               "width":"100%"
           },500)
           $(".dallo").toggle(0)
    $('.closebtn').show(200)
         })

         $('.closebtn').click(function(){
             $(".navonbottom").css({
               "height":"25%",
               "width":"25%"
           },500)
           $(".dallo").toggle(0)
    $('.closebtn').hide(200)
         })

    </script>
