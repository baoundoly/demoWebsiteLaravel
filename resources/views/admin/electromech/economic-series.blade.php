@extends('admin.electromech.layout')
@section('content')
<section class="content">
     
           
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Low Voltage Component</a></li>
          <li class="breadcrumb-item active" aria-current="page">Economic Series MCCB (Fixed)</li>
        </ol>
      </nav>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-lg-6">
                <img src="https://electromechbd.net/wp-content/uploads/2023/03/economic.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="product-title  border-1 border-bottom border-secendary">
                    <h3>Economic Series MCCB (Fixed)</h3>
                    
                    <div class="text-justify mb-5 ">
                        Origin : Mitsubishi, Made in Japan.
                    </div>

                </div>
                <div>
                    Categories:<span class="product-text">
                        Molded Case circuit Breaker(MCCB)
                    </span>
                </div>
            </div>
        </div>
        <div class="description-section mt-5 col-lg-10">
            <h2>Description</h2>

            <h5>Thermal Magnetic with Fixed Settings</h5>
            <p>The molded case circuit breaker (MCCB) opens and closes a low voltage circuit,
                 and breaks the over current (an overload current or short circuit current)
                 automatically to protect wiring/conductors of the circuit. Wide assorted 
                 products which is most suitable for protections of an overload and a short circuit.
                These are most basic products for the protection of the low voltage circuit. 
                The WS-V series, Mitsubishi’s latest LVCB’s, prepares various variations
                including “F-style” of small size breakers and improves the usability of them.</p>
        </div>
    </div>



   @endsection