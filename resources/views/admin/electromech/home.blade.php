@extends('admin.electromech.layout')
@section('content')
<section class="content">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">
            {{-- <div class="carousel-item active">
                <img src="{{ asset('common/images/slider_bg_transformer.png') }}" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block" data-aos="fade-left" data-aos-duration="2000">
                    <h5>EM Transformer</h5>
                    <p>Low Loss, Low Temperature Rise,<br> Ultimate Green Transformer.</p>
                </div>
            </div> --}}
            @foreach($sliders as $slider)
            @if ($loop->first)
                @php
                    $active = "active";
                @endphp
            @else
                @php
                    $active = "";
                @endphp
            @endif
            <div class="carousel-item {{ $active }}">
                <img src="{{ asset('common/images/' . $slider->img) }}" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{!! $slider->title !!}</h5>
                    <p>{!! $slider->description !!}</p>
                </div>
            </div>
            @endforeach
            {{-- <div class="carousel-item">
                <img src="{{ asset('common/images/low-voltage-componant-1.png') }}" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block"data-aos="fade-left" data-aos-duration="3000">
                    <h5>Low Voltage Component</h5>
                    <p>Make Electricity Safe.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('common/images/BG-5.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" data-aos="fade-left" data-aos-duration="3000">
                    <h5>Busbar Trunking System</h5>
                    <p>Powerful Connection, Seamless Distribution</p>
                </div>
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="first-sec col-sm-8 col-md-8">
                <div data-aos="fade-right" data-aos-easing="ease-in" data-aos-duration="1000">
                    <h3>ABOUT ELECTROMECH</h3>
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    @foreach($abouts as $about)
                    <p>{!! $about->description !!}</p>
                    @endforeach
                </div>
            </div>
            <div class="first-sec-body col-sm-4 col-md-4">
                <a class="card-part" href="{{ route('news') }}">
                    <div class="card1" data-aos="zoom-in-left" data-aos-easing="ease" data-aos-duration="1000">
                        
                        <div class="card-body">
                            <span class="badge bg-transparent text-primary">
                                <h3>News & Events</h3>
                            </span>
                            <h5 class="card-title text-light text-center text-uppercase">ElectroMech</h5>
                            <p class="card-text">

                                PARTICIPATING<br>
                                Dhaka International Textile and Garment Machinery Exhibition<br> (DTG)-2024<br>
                                THE LARGEST INTERNATIONAL EXHIBITION IN BANGLADESH<br>
                                From 1 to 4 February 2024<br><br>

                                HALL# 4, Booth -119<br>
                                International Convention City Bashundhara (ICCB)</p>
                            <div class="button mb-4 mt-4 text-center"><button type="button"
                                    class="btn border-2 border-light text-light">Click Here</button></div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="product-range col-8 col-sm-6 col-md-7">
                <div data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000">
                    <h5>ELECTROMECH PRODUCT RANGE:</h5>
                </div>
                <ul style="list-style-type: none;">
                    @foreach($products as $product)
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        {{$product->list}}</li>
                    @endforeach
                    {{-- <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        11/0.415kV Distribution Transformer with OLTC/NLTC</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        HT Switchgear upto 132kV</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        HT Automatic Voltage Regulator</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        LT switchgear tailored customer's functional reequipment's.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Power Factor Improvement Plant</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Motor Control Panel conventional/with inverters.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Energy Management System and Building & Factory Automation.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Distribution Boards</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Busbar Trunking System
                    </li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Cable Tray</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Diesel Generator</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Lightning Protection System</li> --}}

                </ul>
            </div>
            <div class="col-4 col-sm-6 col-md-4">
                <div class="range-img" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1000"><img
                        src="{{ asset('common/images/img1.png') }}" alt="" class="img-fluid" width="100%" height="100%">
                </div>
            </div>
            <div class="txt col-10" data-aos="fade-in" data-aos-easing="ease" data-aos-duration="1000">
                <p>In addition of complete system capability, we have also adequate quantities of spare parts for those
                    systems in our ready stock to support the repairing & retrofit activities of the system/equipment’s.
                </p>
            </div>
        </div>
        <div class="txt-stock">
            <div data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">
                <h5>WE CAN DELIVER THE FOLLOWING SPARES AT CUSTOMER'S PREMISE ON DEMAND FROM READY STOCK:</h5>
            </div>
            <div data-aos="fade-down" data-aos-easing="ease" data-aos-duration="1000">
                <ul style="list-style-type: none;">
                    @foreach($stocks as $stock)
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        {{$stock->list}}</li>
                    @endforeach
                    {{-- <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Mitsubishi range of Molded Case Circuit Breaker (MCCB) upto 1600A
                    </li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>

                        Mitsubishi range of Magnetic Contactors & Overload Relay</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>

                        Mitsubishi range of Inverters & Servo Drives.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        Mitsubishi range of GOT/HMI and PLC</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>

                        Mitsubishi range of Metering devices</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check" style="color: #74C0FC;"></i>
                        FRAKO range of capacitors</li> --}}
                </ul>
            </div>
            <div data-aos="fade-up" class="txt">
                <p>We have dedicated & strong after-sales team who will be happy to respond customers even at odd time
                    to cater customers demand.<br> ELECTROMECH’s well trained service team is eager to listen you first.
                </p>
            </div>
        </div>
        <div class="txt-status col-10">
            <div data-aos="fade-down-left" data-aos-easing="ease" data-aos-duration="1000">
                <h5>LEGAL STATUS:</h5>
            </div>
            <div data-aos="fade-up">
                <p>The Company is Registered as a Limited Company by the Registrar Joint Stock Companies of the People’s
                    Republic of Bangladesh vide Registration No. C-83270/10 dated 18/03/2010.</p>
            </div>

        </div>
    </div>

    <div style="background-color:  rgb(4, 103, 196);">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="mission-sec col-6 col-sm-5 col-md-4">
                    <div data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1500">
                        <h5>MISSION</h5>
                    </div>

                    <div data-aos="fade-in" data-aos-easing="ease-in" data-aos-duration="3000">
                        <p>To provide a level of service that is beyond the expectations of our customer’s,
                            maintain highest
                            level of quality. Maintain highest degree of professionalism in offering products,</p>
                    </div>

                </div>
                <div class="mission-sec2 col-6 col-sm-5 col-md-5 border-start border-2 border-light">
                    <div data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1500">
                        <h5 class="text-light">OUR VALUES</h5>
                    </div>
                    <div data-aos="fade-in" data-aos-easing="ease-in" data-aos-duration="3000">
                        <p class="text-light">We create a great working environment where we all try to cultivate a
                            strong
                            culture that will help
                            us to meet the challenges of the present & future. We are passionate about our business,
                            customer &
                            people. We strive to create a real sense of partnership with our clients; we try to develop
                            human
                            resources to reach their potential. We together always think for the green environment, a
                            greener
                            world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="img-sec mt-5 pt-5">
            <div data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1000">
                <h5>PARTICIPATION IN NATIONAL/ INTERNATIONAL EXHIBITIONS, TRADE FAIRS</h5>
            </div>

            <div data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000">
                <p>ELECTROMECH used to participate in the national and international exhibitions & trade fairs to
                    demonstrate ELECTROMECH product quality & quality concepts and share and learn with other exhibitors
                    and
                    participants.</p>
            </div>
            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4 pe-2">
                    <img src="{{ asset('common/images/'. $image->img) }}" class="" alt="..." width="100%" height="100%">

                </div>
                    
                @endforeach
                {{-- <div class="col-md-4 pe-2">
                    <img src="{{ asset('common/images/img-sec2.jpg') }}" class="" alt="..." width="100%" height="100%">

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('common/images/img-sec3.jpg') }}" class="" alt="..." width="100%" height="100%">

                </div> --}}
            </div>
        </div>
    </div>
    <div style="background-color: #F7F7F7;">

        <div class="container-fluid mt-5">
            <div data-aos="fade-in" data-aos-easing="ease-in" data-aos-duration="2000">
                <p class="mt-5 pt-5 d-flex justify-content-center">Our company is a leading Power and Electrical
                    Engineering
                    Company in Bangladesh. We provide the best
                    services to our customers throughout Bangladesh.</p>
            </div>

         
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="supply card h-100 " data-aos="fade-in" data-aos-easing="ease-in-out" data-aos-duration="3000">
                        <div style="box-shadow: 0px 0px 25px -10px rgba(124.00000000000001, 146.9999999999999, 255, 0.5); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;"
                            class="card-body">
                            <h5 class="card-title "><i aria-hidden="true" class="fas fa-fan fa-2xl pe-3"
                                    style="color: rgb(255, 106, 0);"></i>Supply and Installation</h5>
                            <p class="card-text ">We provide electrical equipment supply, installation, and other
                                associated services to commercial and industrial clients and owners of high and
                                low-voltage electrical distribution systems.</p>
                            <div class="pt-2 "><a href="{{ route ('supply') }}"
                                    class="btn btn-secondary text-dark rounded-pill bg-transparent">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="maintains card h-100 " data-aos="fade-out" data-aos-easing="ease-in" data-aos-duration="3000">
                        <div style="box-shadow: 0px 0px 25px -10px rgba(124.00000000000001, 146.9999999999999, 255, 0.5); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;"
                            class="card-body">
                            <div class="card-body">
                                <h5 class="card-title"><i aria-hidden="true" class="fas fa-fill fa-2xl pe-3"
                                        style="color: rgb(255, 106, 0);"></i>Maintenance</h5>
                                <p class="card-text w-100">We specialize in power and electrical maintenance,troubleshooting,
                                    and repair. We are a fully licensed and insured company that is dedicated to
                                    providing our customers with the highest level of service possible.</p>
                                <div class=" "><a href="{{ route ('maintaining') }}"
                                        class="btn btn-secondary text-dark rounded-pill bg-transparent">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="col-md-6">
                        <div class="mannu card " data-aos="fade-out" data-aos-easing="ease-in-out"
                            data-aos-duration="3000">

                            <div style="box-shadow: 0px 0px 25px -10px rgba(124.00000000000001, 146.9999999999999, 255, 0.5); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;"
                                class="card-body">
                                <h5 class="card-title "><i aria-hidden="true" class="fab fa-safari fa-2xl pe-3"
                                        style="color: rgb(255, 106, 0);"></i>Manufacturing Facility</h5>
                                <p class="card-text ">We are a manufacturing company that specializes in electrical
                                    power
                                    and distribution equipment. We provide services, products, and solutions in this
                                    area. Any Designated Manufacturing Facility shall be a third-party beneficiary..</p>
                                <div class=" "><a href="{{ route ('maanufacture') }}"
                                        class="btn btn-secondary text-dark rounded-pill bg-transparent">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testings card " data-aos="fade-in" data-aos-easing="ease-in-out"
                            data-aos-duration="3000">

                            <div style="box-shadow: 0px 0px 25px -10px rgba(124.00000000000001, 146.9999999999999, 255, 0.5); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;"
                                class="card-body">
                                <h5 class="card-title"><i aria-hidden="true"
                                        class="fas fa-assistive-listening-systems fa-2xl pe-3"
                                        style="color: rgb(255, 106, 0);"></i>Testing Facility</h5>
                                <p class="card-text">A power and electrical engineering company with a team of
                                    professional engineers. We test your products to ensure they meet the highest
                                    demands in safety, reliability, performance, and sustainability.</p>
                                <div class=""><a href="{{ route ('testings') }}"
                                        class="btn btn-secondary text-dark rounded-pill bg-transparent">Read More</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>

    </div>



    <section id="global">
        <div style="background-color: lightgray;">
            <div class="container">
                <div class="partner-sec">
                    <div data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1500">
                        <h5 class="mb-5 py-5">Our Global Partner</h5>
                    </div>

                    <div class="global row pb-5" data-aos="fade-in" data-aos-easing="ease" data-aos-duration="3000">
                        <div class="col-md-2 ms-5 pe-4">
                            <img src="https://electromechbd.net/wp-content/uploads/2023/03/mitshubishi-01-01-e1672130680670.png"
                                alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-2 pe-4">
                            <img src="https://electromechbd.net/wp-content/uploads/2023/03/partner_logo_2.png" alt=""
                                width="100%" height="100%">
                        </div>
                        <div class="col-md-2 pe-4">
                            <img src="https://electromechbd.net/wp-content/uploads/2023/03/partner_logo_3.png" alt=""
                                width="100%" height="100%">
                        </div>
                        <div class="col-md-2 pe-3">
                            <img src="https://electromechbd.net/wp-content/uploads/2023/03/partner_logo_4.png" alt=""
                                width="120%" height="100%">
                        </div>
                        <div class="col-md-2 ps-5 ms-5">
                            <img src="https://electromechbd.net/wp-content/uploads/2023/03/partner_logo_6.png" alt=""
                                width="120%" height="100%">
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </section>
    <div class="container">


        <div class="title text-uppercase" data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1500">
            <h5>Our satisfied client </h5>
        </div>
        <div class="regular pt-5 mt-5"data-aos="fade-in" data-aos-easing="ease" data-aos-duration="3000">
            <div class="carousel-item active">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/download.png" alt="">
                </div>
            </div>
            <div class="carousel-item ">
                <div class="">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture2-2.png" class="d-block "
                        alt="...">
                </div>
            </div>

            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture3-2.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture5-1.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture6-1.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture7-1.png"
                        class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture8.png"
                        class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture9.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture10.gif" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture11.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture12.jpg" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture13.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture14.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="{{ asset('common/images/Picture15.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture16.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture17.png" class="d-block "
                        alt="...">
                </div>
            </div>
            <div class="carousel-item ">
                <div class="w-100 h-100">
                    <img src="https://electromechbd.net/wp-content/uploads/2023/03/Picture18.png"
                        class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <!-- <div class="carousel-item">
                <div class="w-100 h-100">
                    <img src="./img/Picture1.jpg" class="d-block w-50 h-100" alt="...">
                </div>
            </div> -->
        </div>

    </div>


 @endsection