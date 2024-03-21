@extends('admin.electromech.layout')
@section('content')
<section class="content">
     
           
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Switchgear</a></li>
          <li class="breadcrumb-item active" aria-current="page">Transformer</li>
        </ol>
      </nav>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-lg-6">
                <img src="https://electromechbd.net/wp-content/uploads/2023/03/TX.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="product-title  border-1 border-bottom border-secendary">
                    <h3>TRANSFORMER</h3>
                    <div class="product-btn mt-4 mb-5"><a class=""
                            href="https://electromechbd.net/wp-content/uploads/2022/08/Transformer-Catalog-23.pdf"><button
                                class="btn bg-danger border-danger text-light" type="button">Download
                                Catalog</button></a></div>
                    <div class="text-justify mb-5 ">
                        ELECTROMECH R&D Team is working for Green Transformer to preserve the environment by offering a
                        lower carbon footprint, limited pollution risk and optimized life cycle costs. ELECTROMECH Green
                        Transformer is the concept of 3E: Eco-friendly, Efficient and Economical. Objectives & key
                        benefits offered by the green transformers is the prevention of pollution and limiting pollution
                        risk during operation, installation and end of life. Noise reduction, increased safety and
                        reliability, high eco-efficient and low loss transformer. Thus, ELECTROMECH Transformer shall be
                        the Transformer of economic & engineering choice and your integrated partner for Go green
                        industry like Textile & RMG, Pharmaceuticals, Food & Beverage, Cement, Steel & Re-rolling, Jute
                        & Jute Spinners, Chemical, Ceramics, Ship Buildings, Paper & Board Mills, Commercial & Highrise
                        Towers and Utility & public sectors infrastructures.
                    </div>

                </div>
                <div>
                    Categories:<span class="product-text">
                        Transformer
                    </span>
                </div>
            </div>
        </div>
        <div class="description-section mt-5 col-lg-10">
            <h2>Description</h2>

            <p>ELECTROMECH, a leading company in Bangladesh in manufacturing world class Distribution and Power Transformers for 11 KV and 33 KV class as per customer requirement. The Transformers are designed, manufactured and tested in accordance with the latest national and international standard including IEC, ANSI/IEEE, BS, DIN, NEMA etc.</p>
        </div>
    </div>



   @endsection