@extends('admin.electromech.layout')
@section('content')
<section class="content">


    <div class="container">
        <div class="upper-body text-center">
            <img src="{{ asset('common/images/certificate.jpg') }}" alt="">
        </div>

        <div class="certificate row">
            <div class="certificate-body col-6 col-md-6 col-lg-6">
                <h5>EM Transformers Have
                    PASSED CPRI Tests</h5>
            </div>
            <div class="certificate-img col-6 col-md-6 col-lg-6">
                <img src="{{ asset('common/images/certificate2.jpg') }}" alt=""><br>
                <img src="{{ asset('common/images/certificate.jpg') }}" alt="" class="img-fluid mt-2">
            </div>
        </div>
        <div class="certificate-text">
            <h3>Certificate No: CPRlBLRSCLT0084 & CPRlBLRSCLT0085 dated February 14, 2022 ELECTROMECH’s Transformers
                specially 1110.4kV, 200KVA & 1110.4kV, 250kVA have been tested & passed in CPRI tests. Following tests
                have
                been carried Out:</h3>
            <ol class="mt-4" type="1">
                <li>Chopped wave Lightning Impulse test (LIC) on HV winding;</li>
                <li>Special Test on Ability to Withstand dynamic effects Of short circuit;</li>
                <li> Routine Tests before and after short circuit Of the followings:</li>
            </ol>
            <ul style="list-style-type: disc;">
                <li> Measurement of winding resistance;</li>
                <li> Measurement of Voltage ratio and check of phase displacement;</li>
                <li> Measurement of short circuit impedance and load loss;</li>
                <li>Measurement of no-load loss and Current;</li>
                <li>Measurement of dc insulation resistance between each winding to earth and between windings;</li>
                <li>Dielectric routine tests;</li>
                <li>Type Test Temperature rise; and</li>
                <li> Additional test to withstand short circuit.</li>
            </ul>
            <div class="certificate-bottom"> <h3>Type Tests Certificate has been issued by CPRl-India under STL Member exclusive guidelines for
                ELECTROMECH’s 11/0.415kV, 200kVA & 250kVA Transformer.</h3></div>
           
        </div>
    </div>
   @endsection