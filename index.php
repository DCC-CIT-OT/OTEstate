<!DOCTYPE html>
<html>
<head>
<title>Estate</title>
<link rel="stylesheet" type="text/css" href="/style/style.css">
<link rel="stylesheet" type="text/css" href="/style/nav.css">
<link rel="stylesheet" type="text/css" href="/style/bg.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Abril+Fatface');
</style> 
<body>
<!--NavBar-->
<div class="topnav">
    <a class="logo" href="/home">ESTATE</a>
    <a class="link" href="/buy">Buy</a>
    <a class="link" href="/rent">Rent</a>
    <a class="link" href="/sell">Sell</a>
    <a class="link" href="/more">More</a>
    <a class="sign" href="/signup">Sign Up</a>
    <a class="sign" href="/login">Login</a>
</div>

<!--Content-->
<div class="content">
    <p class="slogan">Slogan of the company goes here.</p><br />
</div>
<div class="search">
    <input class="addressSearch" type="text" name="address"><br /><br />
    Price: <input class="price" placeholder="Min" type="select" name="priceMin"> - <input class="price" placeholder="Min" type="select" name="priceMax">
</div>

<!--Background-->
<div class="backgroundDiv">
    <video loop muted autoplay poster="/bg/backgroundStill.jpg" class="backgroundVid">
        <source src="/bg/backgroundVideo.mp4" type="video/mp4">
    </video>
</div>
<div class="background"></div>
<div class="frame"> </div>

</body>
</html>