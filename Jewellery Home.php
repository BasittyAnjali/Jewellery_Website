<?php
include 'config.php';
error_reporting(0);

?>
<!DOCTYPE hmtl>
<html lang="en">

<!--------------------CSS Starts-------------------->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: serif;
    }
    /* Global tags*/
    
    h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: rgb(35, 35, 85);
    }
    
    span {
        font-size: .9rem;
        color: #757373;
    }
    
    h6 {
        font-size: 1.1rem;
        color: rgb(34, 34, 48);
    }
    /*Navigation*/
    /*--------------------First Navbar-----------------*/
    
    .header_middel {
        padding: 40px 0;
        border-bottom: 1px solid #ebebeb;
    }
    
    .header_black .header_middel {
        border-bottom: 1px solid #2d2d2d;
    }
    
    div img {
        width: 20%;
        margin: auto;
        display: block;
        cursor: pointer;
    }
    /*--------------------Second Navbar-----------------*/
    
    .header_bottom.sticky-header.sticky .main_menu_inner {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .header_bottom.sticky-header.sticky .logo_sticky {
        display: block;
        text-align: center;
    }
    
    .header_black .header_bottom {
        border-bottom: 1px solid #2d2d2d;
    }
    
    .sticky-header.sticky {
        position: fixed;
        z-index: 99;
        width: 100%;
        top: 0;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.11);
        animation-name: fadeInDown;
        animation-duration: 900ms;
        animation-timing-function: cubic-bezier(0.2, 1, 0.22, 1);
        animation-delay: 0s;
        animation-iteration-count: 1;
        animation-direction: normal;
        animation-fill-mode: none;
        animation-play-state: running;
    }
    
    .header_bottom.sticky-header.sticky .main_menu_inner {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .header_black .sticky-header.sticky {
        background: rgba(54, 63, 77, 0.9);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.11);
    }
    
    .main_menu_inner {
        text-align: center;
    }
    
    .logo_sticky {
        display: block;
        margin-right: 15px;
    }
    
    .logo_sticky a img {
        max-width: 320px;
    }
    
    .main_menu nav>ul>li {
        display: inline-block;
        position: relative;
    }
    
    .main_menu nav>ul>li>a i {
        margin-left: 2px;
        
    }
    
    .main_menu nav>ul>li:hover>a {
        color: #a8741a;
    }
    
    .main_menu nav>ul>li.active>a {
        color: #a8741a;
        text-decoration: none;
        display: inline-block;
    }
    
    .main_menu nav>ul>li:first-child a {
        padding-left: 0;
        text-decoration: none;
        display: inline-block;
    }
    
    .main_menu nav>ul>li:last-child a {
        padding-right: 0;
        text-decoration: none;
        display: inline-block;
    }
    
    .main_menu nav>ul>li ul.sub_menu {
        position: absolute;
        min-width: 200px;
        padding: 30px 25px;
        background: #fff;
        border: 1px solid #ebebeb;
        transform: perspective(600px) rotateX(-90deg);
        transform-origin: 0 0 0;
        left: 0;
        right: auto;
        opacity: 0;
        visibility: hidden;
        transition: 0.5s;
        z-index: 9;
        top: 100%;
        text-align: left;
    }
    
    .main_menu nav>ul>li ul.sub_menu>li>a {
        font-size: 15px;
    }
    
    .main_menu nav ul li:hover .sub_menu,
    .main_menu nav ul li:hover .mega_menu {
        opacity: 1;
        visibility: visible;
        transform: perspective(600px) rotateX(0deg);

    }
    
    .main_menu nav ul li ul li.active a,
    .main_menu nav ul li ul li a:hover {
        color: #c09578;

    }
    
    .main_menu nav>ul>li>ul>li>a {
        color: #808080;
        font-size: 13px;
        text-transform: capitalize;
        line-height: 18px;
        margin-bottom: 15px;
        display: block;
        font-weight: 400;
        text-decoration: none;
        display: inline-block;
    }
    
    .main_menu nav>ul>li>ul.sub_menu>li:last-child>a {
        margin-bottom: 0;
        text-decoration: none;
        display: inline-block;
    }
    
    .main_menu nav>ul>li>ul.mega_menu li ul li:last-child a {
        margin-bottom: 0;

    }
    
    .main_menu nav ul li ul.mega_menu {
        position: absolute;
        min-width: 580px;
        padding: 30px 25px 35px;
        background: #fff;
        border: 1px solid #ebebeb;
        transform: perspective(600px) rotateX(-90deg);
        transform-origin: 0 0 0;
        left: 0;
        right: auto;
        opacity: 0;
        visibility: hidden;
        transition: 0.5s;
        z-index: 9;
        top: 100%;
        text-align: left;
    }
    
    .main_menu nav>ul>li>ul.mega_menu>li {
        width: 33%;
        float: left;
        text-decoration: none;
        display: inline-block;
    }
    
    .main_menu nav>ul>li>ul.mega_menu>li>a {
        text-transform: uppercase;
        color: #242424;
        font-weight: 500;
        margin-bottom: 30px;

    }
    
    .main_menu nav>ul>li>ul.maga_menu>li>a:hover {
        color: #c09578;

    }
    
    .main_menu nav>ul>li>ul.maga_menu li ul li a {
        color: #808080;
        font-size: 13px;
        line-height: 18px;
        margin-bottom: 11px;
        display: block;
        text-transform: capitalize;
        font-weight: 400;
        text-decoration: none;
        display: inline-block;
    }
    
    .main_menu nav>ul>li>ul.maga_menu li ul li a:hover {
        color: #c09578;
    }
    
    .main_menu nav ul li ul.sub_menu.pages {
        left: inherit;
        right: inherit;
    }
    
    .header_black .main_menu nav>ul>li.active>a {
        color: #a8741a;
    }
    
    .header_black .main_menu nav>ul>li:hover>a {
        color: #a8741a;
    }
    
    .header_black .main_menu nav>ul>li>a {
        color: #ffffff;
        font-family: serif;
        font-weight: 400;
        text-transform: capitalize;
        font-size: 18px;
    }
    
    .header_black .main_menu nav>ul>li ul.sub_menu {
        background: #242424;
        border: 1px solid #2d2d2d;
    }
    
    .header_black .main_menu nav>ul>li ul.sub_menu li a {
        color: #ffffff;
        font-family: serif;
    }
    
    .header_black .main_menu nav>ul>li ul.sub_menu li a:hover {
        color: #a8741a;
    }
    
    .header_black .main_menu nav>ul>li ul.mega_menu {
        background: #242424;
        border: 1px solid #2d2d2d;
    }
    
    .header_black .main_menu nav>ul>li ul.mega_menu>li>a {
        color: #ffffff;
        font-family: serif;
    }
    
    .header_black .main_menu nav>ul>li ul.mega_menu>li>a:hover {
        color: #a8741a;
    }
    
    .header_black .main_menu nav>ul>li ul.mega_menu>li ul li a {
        color: #ffffff;
    }
    
    .header_black .main_menu nav>ul>li ul.mega_menu>li ul li a:hover {
        color: #a8741a;
    }
    
    .ion-chevron-down {
        font-size: 14px;
        padding-left: 3px;
    }
    
    .main_menu nav>ul>li>a {
        display: block;
        padding: 19px 20px;
        color: #212121;
        font-size: 13px;
        line-height: 26px;
        text-transform: uppercase;
        font-weight: 500;
    }
    /*================ Home ================*/
    /* **********Slider Section *************** */
    
    #home {
        background-image: linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), ;
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding-top: 40px;
    }
    
    .slides {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
    }
    
    .slides>div {
        display: flex;
        flex-shrink: 0;
        width: 150%;
        height: 750px;
        scroll-snap-align: start;
        scroll-behavior: smooth;
        background: #74ABE2;
        justify-content: center;
        align-items: center;
        font-size: 100px;
    }

 
/* ****************banner section ************** */
.banner_section_five {
  border-bottom: 0;
  padding: 25px;
}
.banner_section_five .row {
  margin-right: 0;
  margin-left: 0;
}

.port-box {
  background-color: #1f1f1f;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.3);
  position: relative;
}

.text-overlay {
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #3b3f3f;
  opacity: 0.8;
  display: none;
}
.text-overlay h1,
p {
  color: whitesmoke;
}

.text-overlay h1 {
  font-size: 2.2rem;
  margin: 0;
  padding: 0;
  letter-spacing: 2px;
}

.text-overlay p {
  font-size: 1.2rem;
  margin: 0;
}

.port-box:hover .text-overlay {
  display: flex;
}

.port-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


/* **********Footer Section *************** */
    
    a,
    a:hover {
        text-decoration: none;
    }
    
    .socialbtns,
    .socialbtns ul,
    .socialbtns li {
        margin: 0;
        padding: 5px;
    }
    a{
        text-decoration: none;
    }
    .socialbtns li {
        list-style: none outside none;
        display: inline-block;
    }
    
    .socialbtns .fa {
        width: 40px;
        height: 28px;
        color: #000;
        background-color: #FFF;
        border: 1px solid #000;
        padding-top: 12px;
        border-radius: 22px;
        -moz-border-radius: 22px;
        -webkit-border-radius: 22px;
        -o-border-radius: 22px;
    }
    
    .socialbtns .fa:hover {
        color: #FFF;
        background-color: #000;
        border: 1px solid #000;
    }
    
    .fa-facebook {
        color: #242424;
    }
    
    .fa-twitter {
        color: #242424;
    }
    
    .fa-google {
        color: #242424;
    }
    
    .fa-github {
        color: #242424;
    }
    
    .fa-linkedin {
        color: #242424;
    }
    
    .fa-instagram {
        color: #242424;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Gehna Jewellers</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Navigation -->
    <header>
        <div class="header_middel">
            <div class="container">
                <div class="row align-items-center">
                    <div>
                    <?php if (isset($_SESSION['USER_LOGIN'])) {
                     ?>
                     <a class="up" style="text-decoration: none;" href=""><span>Hi,<?php echo $_SESSION['USER_NAME'] ?></span></a>
                     <a class="up" style="text-decoration: none;" href="logout.php">Logout</a>
                     <?php
                     } else {
                     	?>
                                           <a class="up" style="text-decoration: none;" href="login.php">Login/Register</a>

                  <?php
                     }
                     ?>
                  
                         <a class="up" style="text-decoration: none;" href="MyAccount.php">My Account</i></a>
                        
                         
                        <style>
                            .up {
                                color: black;
                                padding-left: 10px;
                                padding-bottom: 10px;
                                padding-right: 20px;
                            }
                        </style>
                        
                        <style>
                            .lp {
                                color: black;
                                padding-bottom: 10px;
                                padding-right: 20px;
                            }
                        </style>
                    </div>
                  
                   <center><div class="col-lg-5">
                        <img src="images\logo\R.png" alt=""  width="100px">

                    </div></center> 

                    <div class="header_bottom sticky-header">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="main_menu_inner">

                                        <div class="main_menu">
                                            <nav>
                                                <ul>
                                                    <li class="active">
                                                        <a href="#">Home <i class="ion-chevron-down"></i></a>
                                                        <ul class="sub_menu">
                                                            <style>
                                                                li{
                                                                    display: inline-block;

                                                                }
                                                            </style>
                                                            <li style="display:inline-block;"><a href="#">Banner</a></li></br>
                                                            <li><a href="#">Featured</a></li></br>
                                                            <li><a href="#">Collection</a></li></br>
                                                            <li><a href="#">Best Selling</a></li></br>
                                                            <li><a href="#">News</a></li></br>
                                                            <li><a href="#">Blog</a></li></br>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a style="text-decoration:none;" href="Category.php">Category <i class="ion-chevron-down"></i></a>
                                                        <ul class="mega_menu">
                                                            <li style="display:inline-block;">
                                                                <a style="text-decoration: none;" href="women.php">Women</a>
                                                                
                                                            </li>
                                                            <li style="display:inline-block;">
                                                                <a style="text-decoration: none;" href="men.php">Men</a>
                                                                
                                                            </li>
                                                            <li style="display:inline-block;">
                                                                <a style="text-decoration: none;" href="kids.php">Kids</a>  
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a style="text-decoration:none;" href="#">Uncut Diamonds <i class="ion-chevron-down"></i></a>
                                                        <ul class="sub_menu pages">
                                                            <li><a href="Earrings.php">Earrings</a></li></br>
                                                            <li><a href="Pendant.php">Pendant</a></li></br>
                                                            <li><a href="Rosegold.php">Ring</a></li></br>
                                                            <li><a href="Bracelet.php">Bracelet</a></li></br>
                                                            <li><a href="Necklace.php">Necklace Set</a></li></br>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a style="text-decoration:none;" href="AboutUs.php">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a style="text-decoration:none;" href="SpecialCollection.php">Special Collection <i class="ion-chevron-down"></i></a>
                                                        <ul class="sub_menu pages">
                                                            <li><a href="GemStone.php">Gemstone</a></li></br>
                                                            <li><a href="GemStone.php">Gold</a></li></br>
                                                            <li><a href="Rosegold.php">Rose Gold</a></li></br>
                                                            <li><a href="Silver.php">Silver</a></li></br>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom ends -->
    </header>

    <!------------------------------------------Slider section---------------------------------->


    <section id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div style="width:1500px" class="carousel-inner">
                <div class="carousel-item active">
                    <h2 style="position: absolute;color: white;top: 50%;right: 50%; font-style: italic;" class ="heading"><!------middle text----></h2>
                    <img src="images\slider\1.png" class="d-block w-100" width="1250px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images\slider\2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images\slider\3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images\slider\earrings.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images\slider\pexels-fox-998521.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
	  		</button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
  			</button>
        </div>
    </section>

        <!-- banner area starts  -->
        <section class="banner_section banner_section_five">
            <center><h4 style="padding-bottom: 20px;">Banner</h4></center>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>New Arrivals 2020</h1>
                                <p>Crown for wife</p>
                            </div>
                            <img src="images/banner/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>Featured Products 2020</h1>
                                <p>Pendant for Valentine</p>
                            </div>
                            <img src="images/banner/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- banner area ends -->
       <!-- <section class="video_section video_section_five">
            <center><br />
                <video controls autoplay src="videos/jewellary.mp4"></video>
                <audio src=""></audio>
            </center>
        </section>-->


        <section id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div style="width:1500px" class="carousel-inner">
            <h2>Videos</h2><br />
                <div class="carousel-item active">
                    <h2 style="position: absolute;color: white;top: 50%;right: 50%; font-style: italic;" class ="heading"><!------middle text----></h2>
                    <video controls autoplay src="videos/jewellary.mp4"></video>
                </div>
                <div class="carousel-item">
                    <video controls autoplay src="videos/jewellary1.mp4"></video>
                </div>
                <div class="carousel-item">
                    <video controls autoplay src="videos/jewellary2.mp4"></video>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
	  		</button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
  			</button>
        </div>
    </section><br /><br /><br /><br />
    <!------------------------------------------Footer section---------------------------------->
</body>

</html>


<?php
include 'footer.php';
?>
