@extends('admin.electromech.layout')
@section('content')
<section class="content">
    <div class="container my-5 py-5">
        <div class="contact-first ">
            <div class="row shadow">
                <div class="con1 col-lg-3  col-md-3   h-100 border border-2 border-secendary w-25 text-center">
                    <i class="mt-5 fa-solid fa-phone-flip fa-2xl" style="color: orangered;"></i><br>
                    <p class="mt-3 mb-4">02226663880-81<br>
                        02226663880-81</p>
                </div>
                <div class="con2 col-lg-3 col-md-3  h-100 border border-2 border-secendary w-25 text-center">
                    <i class=" mt-5 fa-regular fa-envelope fa-2xl" style="color: orangered;"></i><br>
                    <p class="mt-3 mb-4">info@electromechbd.com<br>
                        info@electromechbd.net</p>
                </div>

                <div class="con3 col-lg-3 col-md-3  h-100 border border-2 border-secendary w-25 text-center">
                    <i class="mt-5 fa-sharp fa-solid fa-location-dot fa-2xl" style="color: orangered;"></i><br>
                    <p class="my-2">Office: ElectroMech Group, Wahid Masafi Center, 73 Purana Paltan Line (5th floor),
                        Dhaka-1000,
                        Bangladesh.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-8">
                <form action="" method="post" autocomplete="off">
                    <div class="mb-3 mt-3">

                        <label for="name">Your Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name">
                    </div>
                    <div class="mb-3">

                        <label for="email">Your Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3 mt-3">

                        <label for="number">Subject:</label>
                        <input type="text" class="form-control" id="number" name="number">
                    </div>


                    <div class="form-group col-6 mb-2 mt-3">
                        <label for="comments">Your Message(optional)</label>
                        <textarea class="form-control bg-transparent text-dark rounded-0 " data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Type Your Comments" id="comments" rows="4"
                            name="message"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>

                </form>


            </div>
            <div class="col-md-6 col-lg-6 col-8">
                <div class="map-area">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17361.271543698134!2d90.40834362856204!3d23.8272118563756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ee8835a871%3A0x4e04a5976d18e730!2sElectromech%20Engineering!5e0!3m2!1sen!2sbd!4v1709807076647!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

   
<!-- video-link-https://electromechbd.net/wp-content/uploads/2024/01/e9b64c7d-7429-43eb-a94f-7486ba7e7b34.mp4 -->