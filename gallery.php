<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>architecture</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link href="./css/main.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <section class="gallery">
            <div class="container">
                <div class="gallery-head text-center ">
                    <h1>gallery</h1>
                </div>
                <div class="row text-center m-3 p-3">
                    <div class="col-lg-4 col-md-6  gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/287263/pexels-photo-287263.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                   
                    <div class="col-lg-4 col-md-6  gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/287263/pexels-photo-287263.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6  gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/257736/pexels-photo-257736.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    <div class="col-lg-4  col-md-6 gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/302822/pexels-photo-302822.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6  gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/584399/living-room-couch-interior-room-584399.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6  gallery-items"  data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/2883049/pexels-photo-2883049.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6  gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/3935351/pexels-photo-3935351.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6  gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/3637800/pexels-photo-3637800.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6  gallery-items" data-aos="zoom-in" data-aos-offset="200">  
                        <img src="https://images.pexels.com/photos/1094770/pexels-photo-1094770.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class=" img-fluid img-responsive m-2" alt="">
                    </div>
                    
                </div>
            </div>
        </section>




        <!-- Header -->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Header end-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>