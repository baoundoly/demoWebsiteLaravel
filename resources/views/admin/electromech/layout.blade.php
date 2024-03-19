<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroMech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-md" style="background-color: lightgray">
        <!-- Navbar content -->
        <div class=" navbar container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <a class="navbar-brand" href="{{ ('home') }}">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/electromech-logo-02.png" alt="Logo"
                        width="205" height="40" class="d-inline-block align-text-top">

                </a>
                <ul class="navbar-nav  ms-auto  m-2 ">
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{ ('home') }}">Home</a>
                    </li>

                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="home.html" role="button" data-bs-toggle="dropdown">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route ('bods') }}">Board Of Director</a></li>
                            <li><a class="dropdown-item" href="{{ route ('glance') }}">At a Glance</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="home.html" role="button" data-bs-toggle="dropdown">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Low Voltage Component<span class="ms-2"><i
                                            class="fa-solid fa-angle-right fa-lg"></i></span> </a>

                                <ul class="submenu">
                                    <!-- style="border-left: 1px solid #f60000 !important;" border-style -->
                                    <li><a class="dropdown-item" href="{{ route ('worlds') }}">World Super WS Series:
                                            630A-6300A</a></li>
                                    <li><a class="dropdown-item" href="#">Economic Series Mccb (Fixed)</a></li>
                                    <li><a class="dropdown-item" href="#">Miniature Circuit Breaker (MCB)</a></li>
                                    <li><a class="dropdown-item" href="#">Residual Current Circuit Breaker (RCCB)</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Earth Leakage Circuit Breaker (ELCB)</a></li>
                                    <li><a class="dropdown-item" href="#">Magnetic Contactor</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#"> Switchgear <span class="ms-5"><i
                                            class="fa-solid fa-angle-right fa-lg"></i></span> </a>

                                <ul class="submenu">
                                    <!-- style="border-left: 1px solid #f60000 !important;" border-style -->
                                    <li><a class="dropdown-item" href="{{ route ('transforms') }}">TRANSFORMER</a></li>
                                    <li><a class="dropdown-item" href="#">HT PANEL</a></li>
                                    <li><a class="dropdown-item" href="#">LT PANEL</a></li>
                                    <li><a class="dropdown-item" href="#">PFI PLANT</a></li>
                                    <li><a class="dropdown-item" href="#">Distribution Panel</a></li>
                                    <li><a class="dropdown-item" href="#">Motor Control Center (MMC)</a></li>
                                    <li><a class="dropdown-item" href="#">Inverter Panel</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="glance.html">Lightning Protection System</a></li>
                            <li><a class="dropdown-item" href="#"> Control System <span class="ms-5"><i
                                            class="fa-solid fa-angle-right fa-lg"></i></span> </a>

                                <ul class="submenu">
                                    <!-- style="border-left: 1px solid #f60000 !important;" border-style -->
                                    <li><a class="dropdown-item" href="#">Programable Logic Controller (PLC)</a></li>
                                    <li><a class="dropdown-item" href="#">Industrial Automation</a></li>
                                    <li><a class="dropdown-item" href="#">Building Management System</a></li>
                                    <li><a class="dropdown-item" href="#">Manufacturing Facility</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('maintaining') }}">Maintenance</a></li>
                                    <li><a class="dropdown-item" href="#">Testing Facility</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="home.html" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">



                            <!-- style="border-left: 1px solid #f60000 !important;" border-style -->
                            <li><a class="dropdown-item" href="{{ route ('supply') }}">Supply Installation</a></li>
                            <li><a class="dropdown-item" href="#">Industrial Automation</a></li>
                            <li><a class="dropdown-item" href="#">Building Management System</a></li>
                            <li><a class="dropdown-item" href="{{ route ('maanufacture') }}">Manufacturing Facility</a></li>
                            <li><a class="dropdown-item" href="{{ route ('maintaining') }}">Maintenance</a></li>
                            <li><a class="dropdown-item" href="{{ route ('testings') }}">Testing Facility</a></li>

                            <li><a class="dropdown-item" href="vision.html">Vision & Mission</a></li>
                        </ul>
                    </li>


                    <li class="nav-item me-2">
                        <a class="nav-link" href="#global" data-after="global">Global_Partner</a>
                    </li>

                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Portfoilo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route ('certifications') }}">Our Certificate</a></li>
                            <li><a class="dropdown-item" href="{{route('ongoing') }}">On Going Project</a></li>
                            <li><a class="dropdown-item" href="{{ route('completed') }}">Completed Project</a></li>
                            <li><a class="dropdown-item" href="completed-project.html">Gallery <span class="ms-5"><i
                                            class="fa-solid fa-angle-right fa-lg"></i></span></a>
                                <ul class="submenu">
                                    <!-- style="border-left: 1px solid #f60000 !important;" border-style -->
                                    <li><a class="dropdown-item" href="{{ route('video') }}">Video</a></li>
                                    <li><a class="dropdown-item" href="#">Economic Series Mccb (Fixed)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{ route ('news') }}">News&Events</a>
                    </li>




                </ul>
                <div class="nav-item mt-1">
                    <a class="nav-link" href="{{ 'contact' }}"><button class="btn  " type="button">Contact Us</button></a>
                </div>

            </div>
        </div>
    </nav>

    <section class="content">
        {{-- <div class="container-fluid"> --}}
            @yield('content')
        </div>
    </section>

  
    <section class="footer">
        <div class="background" style="background-color: rgba(13, 13, 20, 0.841)">
            <div class="container-fluid mt-5">

                <footer class="text-center text-lg-start text-white">

                    <div class="container mt-3 mb-0 pt-4 pb-0">

                        <div class="footer-sec row justify-content-center">

                            <div class="col-lg-3 col-md-8 col-sm-8 col-8 mb-4" data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="2000" >
                                <div  data-aos="zoom-in-right" data-aos-easing="ease" data-aos-duration="2000"> <a
                                    class="footer-brand" href="index.html">
                                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/electromech-logo-02.png"
                                        alt="logo" width="50%" height="15%">
                                </a></div>

                                <p class="small pt-5" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="2000">
                                    ELECTROMECH is an engineering company with operations in the technology,
                                    engineering, construction, power, factory automation and energy sector.

                                </p>
                                <div class="call pb-2 mb-4 text-white">
                                    <div class="row">
                                        <div class="col-md-2"><img
                                                src="https://electromechbd.net/wp-content/uploads/2023/03/Picture6.png"
                                                alt="" width="100%" height="70%"></div>
                                        <div class="col-md-6 " data-aos="fade-in" data-aos-easing="ease-in" data-aos-duration="3000">
                                            <p class="small">ISO 9001 : 2015
                                                CERTIFIED COMPANY
                                            </p>
                                        </div>
                                    </div>


                                </div>
                           
                            </div>



                            <div class="col-lg-3 col-md-6 col-sm-5 col-5 mb-4 " data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="2000">
                                <h5 class="pt-2 text-uppercase border-bottom border-light w-50">Head Office</h5>

                                <p class="small pt-5">Wahid Masafi Center, 73 Purana Paltan Line (5th floor),
                                    Dhaka-1000, Bangladesh.

                                    Phone: 02226663880-81

                                    Fax: 02226663882

                                    E-mail: info@electromechbd.com; info@electromechbd.net</p>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-4 col-4 mb-4"data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="2000">
                                <h5 class="pt-2 text-uppercase border-bottom border-light w-75">Chattagram Office</h5>

                                <p class="small pt-5">Rumana Haque Tower (15th Floor), 167/A, Goshaildanga Agrabad,
                                    Chattagram, Bangladesh.

                                    Phone: 02226663880-81

                                    Fax: 02226663882

                                    Client Service: +880-1709-377991-95

                                    E-mail : ctg@electromechbd.net</p>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-5 col-5 mb-4 "data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="2000">
                                <h5 class=" pt-2 text-uppercase border-bottom border-light w-50">Factory</h5>

                                <p class="small pt-5">1 Mohakash Road, Uttar Sanarpar, Demra, Dhaka, Bangladesh.

                                    Phone: 01709 377985

                                    Fax: 02226663882

                                    E-mail: info@electromechbd.com; info@electromechbd.net</p>
                            </div>

                     

                        </div>



                    </div>


                </footer>

            </div>
            <div class="mt-2 pb-2 text-center border-bottom border-light">


                <a class="btn btn-outline-light btn-floating m-1 " href="#!" role="button"><i
                        class="fa-brands fa-facebook fa-2xl" style="color: #230dc8;"></i></a>
                <a class="btn btn-outline-light btn-floating m-1 " href="#!" role="button"><i class="fa-brands fa-linkedin
                         fa-2xl" style="color: #0da6d9;"></i></a>


                <a class="btn btn-outline-light btn-floating m-1 " href="#!" role="button"><i
                        class="fa-brands fa-twitter fa-2xl" style="color: #06acda;"></i></a>


                <a class="btn btn-outline-light btn-floating m-1 " href="#!" role="button"><i
                        class="fa-brands fa-youtube fa-2xl" style="color: #f60000;"></i></a>


            </div>
            <div class="row m-2">
                <div class="col-md-5 col-lg-5">
                    <div class="text-center text-white ">
                        Copyrights © 2022 Electromech. All Rights Reserved.
                    </div>
                </div>
                <div class="text-white text-end col-md-5 col-lg-5">
                    <p>Designed and Developed by <span class="footer-creater">Jahirul Haque</span></p>
                </div>

            </div>
        </div>

    </section>

    <script>
        AOS.init();

    </script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

         
</style>
</body>

</html>