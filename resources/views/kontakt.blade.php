@extends('layouts.master')
@section('container')
    @include('partials.hero')
<main>
    <div class="wrapper-headline">
        <h1>Kontakt</h1>

    </div>


    <section class=" kontakt small-contact">


        <div class="wrapper-small-contact">

            <i class="fa fa-envelope contact_env"></i>

            <h3>Wir sind während unserer Ordinationszeiten auch gerne telefonisch für sie da</h3>
            <ul class="daten-contact">

                <li class="li_daten"><i class="fa fa-phone"></i>Tel.: 02731 8224</li>
                <li class="li_daten"><i class="fa fa-map-marker"></i>
                    Hauptplatz 22<br>
                    3543 Krumau am Kamp </li>
                <li class="li_daten"><i class="fa fa-globe"></i>www.dr.fiona.kirk.at</li>

            </ul>



        </div>


    </section>


    @include('partials.google_maps')
</main>


    @stop