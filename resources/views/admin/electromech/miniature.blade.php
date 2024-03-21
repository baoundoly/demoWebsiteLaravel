@extends('admin.electromech.layout')
@section('content')
<section class="content">
     
           
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Low Voltage Component</a></li>
          <li class="breadcrumb-item active" aria-current="page">Miniature Circuit Breaker (MCB)</li>
        </ol>
      </nav>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-lg-6">
                <img src="https://electromechbd.net/wp-content/uploads/2023/03/Main-1.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="product-title  border-1 border-bottom border-secendary">
                    <h3>Miniature Circuit Breaker (MCB)</h3>
                    
                    <div class="text-justify mb-5 ">
                        Origin : Mitsubishi, Made in Japan.
                    </div>

                </div>
                <div>
                    Categories:<span class="product-text">
                        Miniature Circuit Breaker (MCB)
                    </span>
                </div>
            </div>
        </div>
        <div class="description-section mt-5 col-lg-10">
            <h2>Description</h2>

            <h5>A circuit breaker is an automatically operated electrical switch designed to protect 
                an electrical circuit from damage caused by overload or short circuit. Its basic 
                function is to detect a fault condition and interrupt current flow.</h5>
       
        </div>
    </div>



   @endsection