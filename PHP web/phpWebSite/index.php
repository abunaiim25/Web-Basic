<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="./css/style.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Protfolio</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>





    <!--carousel-->
    <div class="carousel">

        <div id="myCarousel" class="carousel slide  carousel-fade" data-bs-ride="carousel">
            <!--bottom arrow-->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 5"></button>
            </div>


            <div class="carousel-inner">

                <div class="carousel-item  active">
                    <div class="overlay-image">
                        <img src="./images/pic1.jpg" alt="">
                    </div>
                </div>

                <div class="carousel-item ">
                    <div class="overlay-image">
                        <img src="./images/pic2.jpg" alt="">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="overlay-image">
                        <img src="./images/pic3.jpg" alt="">
                    </div>
                </div>

                <!--left righr arraw-->
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </div>



        

        <!--Grid about-->
        <section class="about my-5">

            <div class="py-5">
                <h3 class="text-center my-5">About Us</h3>
            </div>

            <div class="container-fluid">

                <div class="row">

                    <!-- style="width: 100%; height: 290px;" -->
                    <div class="col-lg-6  col-md-6  col-sm-12">
                        <img style="width: 100%; height: 290px;" class=" img-fluid  aboutimg" src="./images/pic1.jpg"
                            alt="" srcset="">
                    </div>

                    <div class="col-lg-6  col-md-6  col-sm-12">
                        <h2 class="display-4">I am Abu Naiim</h2>
                        <p class="py-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis officiis
                            temporibus animi maxime laborum. Natus, culpa sunt, molestiae doloribus placeat, fugiat nam
                            ipsa vel ipsam cumque quae? Molestiae, saepe hic?</p>
                        <a class="btn btn-success " href="about.php">Check More</a>
                    </div>

                </div>
            </div>
        </section>



        <!--Grid & card-->
        <section class=" my-5">

            <div class="py-5">
                <h3 class="text-center my-5">Our Services</h3>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-12">

                        <div class="card">
                            <img src="./images/pic3.jpg" class="card-img-top  " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Laptop</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12">

                        <div class="card">
                            <img src="./images/pic3.jpg" class="card-img-top  " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Laptop</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-4 col-sm-12">

                        <div class="card">
                            <img src="./images/pic3.jpg" class="card-img-top  " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Laptop</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <!--Gallery grid-->
        <section class=" my-5">

            <div class="py-5">
                <h3 class="text-center my-5">Our Gallery</h3>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>
                    <div class="col-lg-4  col-md-4  col-12">
                        <img class="img-fluid  pb-5" src="./images/pic2.jpg" alt="">
                    </div>


                </div>
            </div>

        </section>





        <!--Form-->
        <section class=" my-5">

            <div class="py-5">
                <h3 class="text-center my-5">Contact Form</h3>
            </div>


            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post">

                    <div class="form-group mb-3">
                        <label class="mb-1" for="">Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group  mb-3">
                        <label class="mb-1" for="">Email Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group  mb-3">
                        <label class="mb-1" for="">Mobile</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group  mb-3">
                        <label class="mb-1" for="">Comment</label>
                        <!--textarea name="" id="" cols="30" rows="10"-->
                        <textarea class="form-control" name="comment">
                </textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>


                </form>
            </div>

        </section>




        <footer>
            <p class="p-3 bg-dark text-white text-center">@AbuNaiimProduction</p>
        </footer>











        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
</body>

</html>