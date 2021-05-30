<?php
// include bootstrap
include_once 'partials/boot.php';
?>

<title>Restaurant</title>

<style>
    div.footer i.fab{
        font-size: 25px;
        margin: 5px 15px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Restaurant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dishes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>

<!-- -------------S-L-I-D-E-R------------- -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/4.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/1.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <h1 class="text-center my-4 mx-auto">D I S H E S</h1>
    <div class="dishes">
        <div class="row" style="background: #aaa;font-size: 12px">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card mx-auto my-1" style="width: 18rem;">
                    <img class="card-img-top" src="img/dish1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pindi Chana</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card mx-auto my-1" style="width: 18rem;">
                    <img class="card-img-top" src="img/dish2.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chhole Bhature</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card mx-auto my-1" style="width: 18rem;">
                    <img class="card-img-top" src="img/dish3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Masala Chai</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <hr>
<div class="container-fluid footer">
    <h1 class="text-center">Our Restaurant</h1>
    <p class="text-center bg-dark text-white">AZ-39, DURGA MATA ROAD, DELHI - 110038 <br><br> Social Links <br><br>
        <a href="https://www.facebook.com/lalitsinghrocks/" class="text-white" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/lalitsinggh/" class="text-white" target="_blank"><i class="fab fa-instagram-square"></i></a>
        <i class="fab fa-youtube"></i>
    </p>
    <!-- <p class="text-center text-white bg-dark"></p> -->
</div>