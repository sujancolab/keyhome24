<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyHome24 - Find Your Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/ac42c3b1f7.js" crossorigin="anonymous"></script>
    <style>
        .body {
            background-color: rgb(249, 249, 249);
        }

        /* Navbar styling */
        .navbar {
            background-color: #000;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }

        .nav-link:hover {
            color: #ddd !important;
        }

        /* Hero Section */
        .hero-section {
            background: #c30010;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
        }

        .featured-section {
            background-color: rgb(249, 249, 249);
        }

        /* Property Cards */
        .property-card {
            height: 100%;
        }

        .property-image {
            height: 200px;
            object-fit: cover;
        }

        .property-card:hover {
            transform: scale(1.05);
        }

        .span-style {
            background: #ee1527;
            padding: 8px;
            color: #fff;
            font-size: 12px;
            font-weight: 400;
            height: auto;
            border-radius: 8px;
        }

        .icon-size {
            color: grey;
            padding: 0px;
            height: 25px;
            width: 30px;
        }

        .card-text-color {
            color: rgb(90, 90, 90);
        }

        .slider-radio-group {
            background-color: white;
            border-radius: 8px;
            padding: 5px;
            display: inline-flex;
            gap: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .slider-radio-group .slider-btn {
            padding: 10px 20px;
            border-radius: 8px;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            position: relative;
            z-index: 1;
            background-color: transparent;
        }

        .slider-radio-group .btn-check:checked+.slider-btn {
            background-color: #d50000;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .slider-radio-group .btn-check:checked+.slider-btn i {
            color: white;
        }

        .slider-radio-group .slider-btn i {
            margin-right: 5px;
            color: #d50000;
        }

        .see-more-link {
            font-size: 18px;
            color: red;
        }

        .see-more-link:hover {
            color: #c30010;
        }


        /* Footer */
        footer {
            background-color: #000;
            color: #aaa;
            padding: 20px 0;
        }

        .logo-container {
            height: 50px;
            width: 50px;
            background-color: rgb(255, 146, 146);
            border-radius: 50%;
            margin: 5px;
            padding-top: 12px;
        }
		.icon-size-specific {
            color: rgb(239, 11, 11);
            font-weight: 800;
            padding: 0px;
            height: 25px;
            width: 30px;
        }
    </style>
</head>


<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                    class=" icon-size bi bi-house-door" viewBox="0 0 16 16">
                    <path
                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                </svg>
                KeyHome24</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Properties</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Requests</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">French</a></li>
                    <li class="nav-item"><button class="btn btn-danger nav-link text-white">Login</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center py-5" style="background-color: #d50000;">
        <h1 class="text-white mb-4">Find Your Property in Switzerland</h1>
        <div class="slider-radio-group d-inline-flex" role="group" aria-label="Property Options">
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
            <label class="slider-btn" for="option1">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 128 128">
                    <path
                        d="M 86 1 C 63.4 1 45 19.4 45 42 C 45 64.6 63.4 83 86 83 C 108.6 83 127 64.6 127 42 C 127 19.4 108.6 1 86 1 z M 86 7 C 105.3 7 121 22.7 121 42 C 121 61.3 105.3 77 86 77 C 66.7 77 51 61.3 51 42 C 51 22.7 66.7 7 86 7 z M 86 32 A 10 10 0 0 0 76 42 A 10 10 0 0 0 86 52 A 10 10 0 0 0 96 42 A 10 10 0 0 0 86 32 z M 42.363281 62.599609 C 41.600781 62.599609 40.850781 62.9 40.300781 63.5 L 1.9003906 101.90039 C 1.3003906 102.40039 1 103.2 1 104 L 1 124 C 1 125.7 2.3 127 4 127 L 24 127 C 25.7 127 27 125.7 27 124 L 27 107 L 44 107 C 45.7 107 47 105.7 47 104 L 47 87 L 61 87 C 62.7 87 64 85.7 64 84 C 64 82.3 62.7 81 61 81 L 44 81 C 42.3 81 41 82.3 41 84 L 41 101 L 24 101 C 22.3 101 21 102.3 21 104 L 21 121 L 7 121 L 7 105.19922 L 44.5 67.699219 C 45.7 66.499219 45.7 64.6 44.5 63.5 C 43.9 62.9 43.125781 62.599609 42.363281 62.599609 z">
                    </path>
                </svg> To rent out
            </label>

            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
            <label class="slider-btn" for="option2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-house-door" viewBox="0 0 16 16">
                    <path
                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                </svg> Buy
            </label>

            <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
            <label class="slider-btn" for="option3">
                Shared accommodation
            </label>
        </div>
    </section>




    <!-- Featured Properties Section -->
    <div class="featured-section">
        <section class="container pt-5">
            <div class="row">
                <div class="col-8">
                    <h2 class=" mb-4">Featured Properties</h2>
                </div>
                <div class="col-4">
                    <a class="see-more-link" href="#">see more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                      </svg>

                    </a>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card property-card h-100">
                        <div class="position-relative">
                            <img src="img/homepageimg-1.jpg" class="card-img-top property-image" alt="Apartment">
                            <span class="span-style position-absolute top-0 end-0 m-2">950,000 CHF <br />Gross
                                price</span>
                        </div>
                        <div class="card-body">
                            <p class="card-text card-text-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                1007 Lausanne, Avenue de Cour 25
                            </p>
                            <h5 class="card-title">Apartment, 4.5 rooms, 120 m²</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card property-card h-100">
                        <div class="position-relative">
                            <img src="img/homepageimg-2.jpg" class="card-img-top property-image" alt="Villa">
                            <span class="span-style position-absolute top-0 end-0 m-2">2,450,000 CHF <br />Gross
                                price</span>
                        </div>
                        <div class="card-body">
                            <p class="card-text card-text-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                1095 Lutry, Vineyard Path 8
                            </p>
                            <h5 class="card-title">Villa, 7.5 rooms, 280 m²</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card property-card h-100">
                        <div class="position-relative">
                            <img src="img/homepageimg-3.jpg" class="card-img-top property-image" alt="Studio">
                            <span class="span-style position-absolute top-0 end-0 m-2">1,200 CHF/month <br />Gross
                                price</span>
                        </div>
                        <div class="card-body">
                            <p class="card-text card-text-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                1003 Lausanne, Rue Centrale 15
                            </p>
                            <h5 class="card-title">Studio, 1.5 rooms, 35 m²</h5>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <!-- Why Trust Us Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Why trust us?</h2>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="logo-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="icon-size-specific bi bi-shield" viewBox="0 0 16 16">
                                    <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                                  </svg>
                            </div>
                        </div>
                        <h5 class="card-title">Safety guaranteed</h5>
                        <p class="card-text">Secure transactions and protected data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="logo-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="icon-size-specific bi bi-card-heading" viewBox="0 0 16 16">
                                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                    <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                            </div>
                        </div>
                        <h5 class="card-title">Transparent prices</h5>
                        <p class="card-text">Competitive prices with no hidden costs</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="logo-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="icon-size-specific bi bi-telephone-outbound" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
                                  </svg>
                            </div>
                        </div>
                        <h5 class="card-title">Support service</h5>
                        <p class="card-text">An after-sales team available 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="logo-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" icon-size-specific bi bi-person-plus" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                                  </svg>
                            </div>
                        </div>
                        <h5 class="card-title">Maximum visibility</h5>
                        <p class="card-text">Increase visibility with our campaigns</p>
                    </div>
                </div>
            </div>
        </div>
    </section

     <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <h5> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                            class=" icon-size bi bi-house-door" viewBox="0 0 16 16">
                            <path
                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                        </svg> KeyHome24</h5>
                    <p>Your trusted partner to find the property of your dreams.</p>
                    <i class="fa-brands fa-instagram icon-size"></i>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6>Contact</h6>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                            class="icon-size bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        info@keyhome24.com
                    </p>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">To research</a></li>
                        <li><a href="#" class="text-light">Requests</a></li>
                        <li><a href="#" class="text-light">User space</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6>Legal links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">General conditions</a></li>
                        <li><a href="#" class="text-light">Data protection</a></li>
                        <li><a href="#" class="text-light">Legal notices</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary">
            <p class="text-center mb-0">&copy; 2024 KeyHome24. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
