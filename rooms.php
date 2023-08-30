<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>



    <?php require('include/links.php'); ?>
    <style>


    </style>
</head>

<body class="bg-light">
    <?php require('include/header.php'); ?>


    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>

    </div>




    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-item-stretch">
                        <h4 class="mt-2">FILTER</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-item-stretch" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>

                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">


                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f2">Facility Two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f3">Facility Three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">

                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">

                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </nav>
            </div>



            <!--Cards for rooms -->
            <div class="col-lg-9 col-md-12 px-4">
                <!--first card room-->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/simple.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple rooms</h5>
                            <div class="featurea mb-3">
                                <h6 class="mb-3">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Rooms

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathroom

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 sofa

                                </span>

                            </div>
                            <div class="facilities mb-4 mx-3">
                                <h6 class="mb-1 ">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Television

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Fan

                                </span>


                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">Rs1000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>

                        </div>
                    </div>

                </div>

                <!--Second card room-->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/5.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Deluxe rooms</h5>
                            <div class="featurea mb-3">
                                <h6 class="mb-3">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Rooms

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathroom

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 sofa

                                </span>

                            </div>
                            <div class="facilities mb-4 mx-3">
                                <h6 class="mb-1 ">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Television

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Ac

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Room Heater

                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">Rs2000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>

                        </div>
                    </div>

                </div>

                <!--third card room-->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/simple.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple rooms</h5>
                            <div class="featurea mb-3">
                                <h6 class="mb-3">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Rooms

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathroom

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 sofa

                                </span>

                            </div>
                            <div class="facilities mb-4 mx-3">
                                <h6 class="mb-1 ">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Television

                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Fan

                                </span>


                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">Rs1000 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>







    <?php require('include/footer.php'); ?>








</body>

</html>