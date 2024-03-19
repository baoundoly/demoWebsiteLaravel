@extends('admin.electromech.layout')
@section('content')
<section class="content">
    <div class="container">
        <div class="project-going">
            <h5>Our On Going Projects</h5>
            <table class="table table-striped table-bordered table-hover my-5">
                <tr class="search-option">
                    <th colspan="3">
                        <form action="" class="search-option float-end">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control " placeholder="Search">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>

                                <button type="button"
                                    class="seacrh-drop btn btn-transparent border border-secendary "
                                    data-bs-toggle="dropdown"><i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="ms-3">Search in</li>
                                    <li><a class="dropdown-item" href="#">

                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            Client Name
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">

                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            Project Type
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">

                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            Project Location
                                        </a></li>
                                </ul>

                            </div>
                        </form>
                       
                    </th>

                </tr>
                <!-- <th class="text-center" style="border-width:4px" width="5%">resize table borders</th> -->
                <th>Client Name</th>
                <th>Project Type</th>
                <th>Project Location</th>
            </thead>
                <tbody>
                    <tr >
                        <td  style="border-width:2px">Fariah Spinning Mills Ltd.</td>
                        <td  style="border-width:2px">12000A LT Switch-gear and Distribution Panel</td>
                        <td  style="border-width:2px">Borpa, Narayangonj</td>
                    </tr>
                    <tr>
                        <td  style="border-width:2px">Bashundhara Group</td>
                        <td  style="border-width:2px">5000KVA Complele 11/0.415 KV Sub-station</td>
                        <td  style="border-width:2px">Keranigonj, Dhaka</td>
                    </tr>
                    <tr>
                        <td  style="border-width:2px">Red Crescent Societies </td>
                    <td  style="border-width:2px">100 KW Diesel Generator Testing, Commissioning and Installation</td>
                <td  style="border-width:2px">Moghbazar, Dhaka</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Janata Jute Mills Ltd. </td>
                <td  style="border-width:2px">	Machine Automation Panel</td>
                <td  style="border-width:2px">Boalmari, Faridpur</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Megawatt Power Ltd.</td>
                <td  style="border-width:2px">Busbar Trunking System</td>
                <td  style="border-width:2px">	Savar, Mymansing and Chattogram (Hospitals)</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Knit Concern Ltd.</td>
                <td  style="border-width:2px">Busbar Trunking System</td>
                <td  style="border-width:2px">Godnail, Narayangonj</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Square Texcom Ltd.</td>
                <td  style="border-width:2px">Inverter Panel</td>
                <td  style="border-width:2px">Valuka, Mymansing</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Duncan Brothers (BD) Limited</td>
                <td  style="border-width:2px">Cable Tray</td>
                <td  style="border-width:2px">	Hobigonj, Sylhet</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Charm Ltd.</td>
                <td  style="border-width:2px">	Inverter Panel</td>
                <td  style="border-width:2px">	Mirpur-10, Dhaka-1216</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Malek Spinning Mills Ltd.</td>
                <td  style="border-width:2px">Complete 33/11KV 4MVA Sub Station with 4000A Bus Bar Trunking System .</td>
                <td  style="border-width:2px">Shofipur, Gazipur</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Knit Asia Ltd</td>
                <td  style="border-width:2px">Complete 33/11KV 4MVA Complete Sub Station.</td>
                <td  style="border-width:2px">Shofipur, Gazipur.</td>
            </tr>

            <tr>
                <td  style="border-width:2px">Dana Sweater Ltd</td>
                <td  style="border-width:2px">630KVA Sub Station</td>
                <td  style="border-width:2px">Kashimpur, Gazipur.</td>
            </tr>
            <tr>
                <td  style="border-width:2px">Akij Textile Mills Ltd, Spinning Unit-3</td>
                <td  style="border-width:2px">5000A Bus Bar Trunking System.</td>
                <td  style="border-width:2px">Glora, Manikgonj.</td>
            </tr>  
             <tr>
                <td  style="border-width:2px">Akij Textile Mills Ltd, Spinning Unit-4</td>
                <td  style="border-width:2px">4000A X 3, Bus Bar Trunking System</td>
                <td  style="border-width:2px">Glora, Manikgonj.</td>
            </tr>
           

                </tbody>





            </table>
        </div>

    </div>
</section>
@endsection