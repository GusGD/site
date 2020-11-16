<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Como jogar</title>
        <style>
            body {
                max-width: 100%;
                width: 100%;
            }
            img {
                display: block;
                max-width: 100%;
            }
            .img.carrousel {
                width: 2020px;
                height: 93%;
            }
            .carousel-indicators li{
                background-color: black !important;
            }
            a.btn-voltar {
                color: black;
            }
        </style>
        <link rel="stylesheet" href="../views/assets/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body cz-shortcut-listen="true">
        <div class="container-flex">
            <a href="index.php" class="btn-voltar"><i class="fa fa-arrow-left"></i> Voltar</a>
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                
                    <div class="carousel-item active">
                        <img class="img carrousel" src="assets/img/como-jogar/1.png"
                        alt="First slide">
                    </div>
                    
                    <div class="carousel-item">
                        <img class="img carrousel" src="assets/img/como-jogar/2.png"
                        alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="img carrousel" src="assets/img/como-jogar/3.png"
                        alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="img carrousel" src="assets/img/como-jogar/4.png"
                        alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="img carrousel" src="assets/img/como-jogar/5.png"
                        alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="img carrousel" src="assets/img/como-jogar/6.png"
                        alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="img carrousel" src="assets/img/como-jogar/7.png"
                        alt="First slide">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                        
                    </li>

                    <li data-target="#carousel-thumb" data-slide-to="1">
                        
                    </li>

                    <li data-target="#carousel-thumb" data-slide-to="2">
                        
                    </li>

                    <li data-target="#carousel-thumb" data-slide-to="3">
                        
                    </li>

                    <li data-target="#carousel-thumb" data-slide-to="4">
                        
                    </li>

                    <li data-target="#carousel-thumb" data-slide-to="5">
                        
                    </li>

                    <li data-target="#carousel-thumb" data-slide-to="6">
                        
                    </li>
                </ol>
            </div>
        </div>
        <!--/.Carousel Wrapper-->
        <script src="../views/assets/vendor/jquery/jQuery-v3.5.1.min.js"></script>
        <script src="../views/assets/vendor/js/popper.min.js"></script>
        <script src="../views/assets/vendor/js/bootstrap.min.js"></script>        
        <script src="../views/assets/vendor/animation/tilt/tilt.jquery.min.js"></script>
        <script src="../views/assets/js/menu.js"></script>
    </body>
</html>