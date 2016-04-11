@extends('app.app')
                    @section('title', 'About Us')
                    @section('content')

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="card">
                                    <div class="header">
                                        <h2 class="title">About Us</h2>
                                        {{--<p class="category">.....Tag line .....</p>--}}
                                    </div>
                                    <div class="content">

                    <p>Altech Poultry Breeders is a private Ugandan,
                        family owned and run business.
                        Established in 1992, it has since evolved into
                        a vertically integrated poultry producer.
                        Located in Matuga, about 15 miles North of Kampala.
                    </p>

                    <p>
                        Altech Poultry Breeders has five mutually dependent business divisions;
                    </p>

                    <ul>
                        <li>
                            Feed Mill
                        </li>

                        <li>
                            Parent Stock Farm
                        </li>

                        <li>
                            Hatchery
                        </li>

                        <li>
                            Broiler Farm
                        </li>

                        <li>
                            Processing Plant
                        </li>
                    </ul>

                    <p>
                        The Parent Stock farm produces hatching eggs for our Hatchery, which in
                        turn are used to produce day-old-chicks. The day-old-chicks are sold to
                        commercial farmers and some of the boilers are reared on our farm.
                    </p>

                    <p>
                        The Feed Mill, with maximum capacity of 5000 tones per month, produces feed
                        for the parent stock, broiler farms and the Regional farmers. The broiler
                        farms produce broilers for our processing plant. The parent stock farm uses
                        day-old-parents for world reknown breeders COBB EUROPE and we produce the
                        COBB 500 broilers. For layers we use the ISA brown layer from Hendrix Genetics
                        company. The feedmill uses 99% locally grown inputs from Ugandan farms
                    </p>
                </div>
            </div>

            <div class="card card-map">
                <div class="header">
                    <h4 class="title">Find us on the Map</h4>
                </div>
                <div class="map">
                    <div id="map"></div>
                </div>
            </div>

        </div>
    </div>

@endsection