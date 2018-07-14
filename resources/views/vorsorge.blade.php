@extends('layouts.master')

@section('container')
    @include('partials.hero')



    <main>
    <nav class="leistungen-detail-nav">



        <div class="wrapper-headline">

            <h1>Allgemeinmedizin</h1>

        </div>
        <div class="wrapper-nav">
            <div class="detail-nav">

                <div class="detail_down">
                <i class="fa fa-angle-double-down" id="down"></i>
                </div>
                <ul class="ul_detail">
                    <li><a href="#">Vorsorge und Begleitung<br>
                            bei chronischen Erkrankungen</a> </li>
                    <hr id="vorsorge_hr">

                    <li><a href="#">Kinder,<br>Mutterkindpassuntersuchungen</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">Impfungen</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">Homöopathie</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">Ultraschalluntersuchungen zur Abklärung<br>
                            akuter Beschwerden</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">Venenbehandlung<br>
                            Venenverödung</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">EKG & <br>
                            Lungenfunktion</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">Wundversorgung &kleine Chirurgie<br>
                            Radiofrequenz</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">Hausbesuche</a></li>
                    <hr id="vorsorge_hr">
                    <li><a href="#">physikalische Therapie mit  Heilmassage,<br>
                            Strom, Ultraschall</a></li>

                </ul>
            </div>
        </div>




    </nav>
    <section>

        <div class="headline">
            <i class="fa fa-heartbeat hell"></i> <h2  class="vorsorge_h2 mitte ">Vorsorge und Begleitung<br> bei chronischen Erkrankungen</h2>
        </div>

        <div class="wrapper-allgemein">
            <div class="image-allgemein">

                <img src="{{ asset('images/allgemein.png')}}">


            </div>


            <div class="content-allgemein">
                <div class="background">

                    <picture class="background_logo">

                        <source media="(max-width: 320px)" srcset="{{ asset('images/backgroundklein.png')}}">


                        <img src="{{ asset('images/background.png')}}">
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