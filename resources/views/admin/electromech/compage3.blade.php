@extends('admin.electromech.layout')
@section('content')
<section class="content">   
    <div class="container">
        <div class="project-going">
            <h5>Our completed Projects</h5>
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
                    {{-- <tr>
                        <td style="border-width:2px">Nannu Spinning Mills Ltd.</td>
                        <td style="border-width:2px">Complete busbar trunking system for lighting and power distribution
                            from 25A to 5000A</td>
                        <td style="border-width:2px">Rupgonj, Narayangonj.</td>
                    </tr> --}}
                    <tr>
                        <td style="border-width:2px">Reedisha Knittex Ltd.</td>
                        <td style="border-width:2px">Trolley busbar trunking system</td>
                        <td style="border-width:2px">Dhanua, Nayanpur, Sreepur , Gazipur.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Jaj Spining Mills Ltd. </td>
                        <td style="border-width:2px">2500A Complete busbar trunking system for power distribution</td>
                        <td style="border-width:2px">Nowpara,Madhabdi, Narshingdi.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Maksuda Spining Mills Ltd. </td>
                        <td style="border-width:2px">Complete busbar trunking system for lighting and power distribution
                            from 25A to 4000A</td>
                        <td style="border-width:2px">Madhobdi, Narshingdi.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Akij Textile Mills Ltd.</td>
                        <td style="border-width:2px">3200A Complete busbar trunking system for power distribution</td>
                        <td style="border-width:2px">Charkhanda, Manikgonj.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Yaseen Tex Ltd.</td>
                        <td style="border-width:2px"> 3200A Complete busbar trunking system for power distribution</td>
                        <td style="border-width:2px">Zirani Bazar, Kashimpur, Gazipur.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Pioneer Paper & Board Mills Ltd.</td>
                        <td style="border-width:2px">Complete busbar trunking system for power distribution from 800A to
                            4000A</td>
                        <td style="border-width:2px">Anarpura, Gozaria, Munshiganj, Dhaka.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Akij Textile Mills Ltd.</td>
                        <td style="border-width:2px">2500A Complete busbar trunking system for power distribution</td>
                        <td style="border-width:2px">Charkhanda, Manikgonj.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Akij Ceramics Ltd.</td>
                        <td style="border-width:2px"> 3200/2500/2000A Complete busbar trunking system for power
                            distribution</td>
                        <td style="border-width:2px">Trishal, Mymensingh.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Pearl Paper & Board Mills Ltd.</td>
                        <td style="border-width:2px">200A Trolley BBT</td>
                        <td style="border-width:2px">Dhamrai, Savar, Dhaka.</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Interfab Shirt Manufacturing Limited.</td>
                        <td style="border-width:2px">Complete busbar trunking system for lighting and power distribution
                            from 25A to 4000A.</td>
                        <td style="border-width:2px">Porabari, Salna, Gazipur, Bangladesh.</td>
                    </tr>

                    <tr>
                        <td style="border-width:2px">Standard Group Limited (Unit-2)</td>
                        <td style="border-width:2px">Complete busbar trunking system for lighting, Machine and Power
                            distribution from 25, 40, 63, 160, 1000 & 2000A.</td>
                        <td style="border-width:2px">Plot No: 10300, Beradyer Chala, P.O: Gilabarayd, Sreepur, Gazipur.
                        </td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">W.H Trims & Packaging Ltd.</td>
                        <td style="border-width:2px">Complete busbar trunking system for lighting and power distribution
                            from 25A to 1000A</td>
                        <td style="border-width:2px">Bashon Sorok, Gazipur</td>
                    </tr>
                    <tr>
                        <td style="border-width:2px">Aman Spinning Mills Ltd.</td>
                        <td style="border-width:2px"> Ltd. Complete busbar trunking system for lighting and power
                            distribution from 25A to 4000A</td>
                        <td style="border-width:2px">Ashulia, Savar, Dhaka</td>
                    </tr>


                </tbody>
                <tr>
                    <td colspan="3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link" href="{{ route('page2') }}">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route('completed') }}">1</a></li>
                            <li class="page-item "><a class="page-link" href="{{ route('page2') }}">2</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="{{ route('page3') }}">3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ route('completed') }}">Next</a></li>
                          </ul>
                    </td>
                </tr>
            </table>

            <!-- pagination -->

        </div>

    </div> 
    @endsection
    