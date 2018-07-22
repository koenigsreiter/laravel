@extends('layouts.master')
@section('container')
    @include('partials.hero')
<main>
    <nav class="leistungen-detail-nav">



        <div class="wrapper-headline">

            <h1>Notfallmedizin</h1>

        </div>


    </nav>
<section>

    <div class="headline">
        <i class=" fa fa-heartbeat hell"></i> <h2 class="vorsorge_h2 mitte">Womit sich die Notfallmedizin<br> beschäftigt</h2>
    </div>

    <div class="wrapper-allgemein">
    <div class="image-allgemein">

        <img src="{{ asset('images/allgemein.png')}}">


    </div>
        <div class="content-allgemein">

            <div class="background">

                <picture class="background_logo">

                    <source media="(max-width: 320px)" srcset="{{ asset('images/backgroundklein.png')}}">


                    <img src="{{ asset('images/background.png')}}" height="700px">
                </picture>

            </div>
            <div class="content_p">
            <p>
                In the last five to six years the FTA satellite receiver has become an everyday household electronic device.
                People all over the world are buying free to air receivers because of their growing and always evolving
                features and capabilities. FTA receivers these days are gaining popularity all over. Starting initially in
                Europe, the craze spread globally shortly after. With FTA satellite
                TV being available in almost every country across the globe, FTA satellite is the wave of the TV future.

            </p>

            <p>
                Free to air satellite TV channels are free. You can connect your innovative and experimental ideas and
                technologies that keep them interesting all the time. Many new features FTA receiver owners have learned
                to love are 7 day EPG (electronic program guides), PVR functions (record, pause, and rewind live TV),
                DivX movie watching capabilities,
                and many more little features and add-ons that keep things very interative and enjoyable.

            </p>

            </div>
        </div>


    </div>



</section>
    @include('partials.google_maps')
</main>


    @stop