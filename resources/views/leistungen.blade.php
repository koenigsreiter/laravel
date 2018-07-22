@extends('layouts.master')
@section('container')
    @include('partials.hero')
<main>
    <div class="wrapper-headline">
    <h1>Leistungen</h1>

    </div>
    <section class="leistungen">

        <div class="wrapper-leistungen">

            <ul class="leistungen-icon">

                <li><i class=" fa fa-heartbeat "></i>
                    <div class="headline_leistungen">
                        <a href="{{ (URL::to('allgemeinmedizin')) }}">
                        <h3 class="h3_leistungen">Allgemeinmedizin </h3>
                        </a>
                    <i class="fa fa-plus grau " ></i>
                    </div>

                    <p>Die Grundversorgung aller Patienten mit<br>
                        körperlichen und seelischen Gesundheitsstörungen<br>
                        in der Akut- und Langzeitversorgung sowie wesentliche<br>
                        Bereiche der Prävention und Rehabilitation
                    </p>
                    <hr id="leistungen_hr">
                </li>

                <li><img src="{{ asset('images/lock.png')}}"><div class="headline_leistungen">
                        <a href="{{ (URL::to('privatleistungen')) }}"><h3 class="h3_leistungen">Privatleistungen <br>& <br>Ganzheitsmedizin</h3></a>
                        <i class="fa fa-plus grau " ></i></div>
                    <p class="p_leistungen">Leistungen die selbst zu bezahlen sind.<br>
                        Der Mensch wird als Einheit von Körper, Seele<br>
                        und Psyche angesehen, welche in ständiger
                        Wechselbeziehung zu sich und seiner Umwelt steht.
                    </p>
                    <hr id="leistungen_hr">
                </li>

                <li><i class=" fa fa-medkit "></i><div class="headline_leistungen">
                        <a href="{{ (URL::to('schularzt')) }}"><h3 class="h3_leistungen">Schularzt</h3></a>
                        <i class="fa fa-plus grau " ></i></div>
                    <p class="p_leistungen">Der Schularzt vertritt die speziellen gesundheitlichen
                        Interessen der Kinder und Jugendlichen iin der Schule
                    </p>
                    <hr id="leistungen_hr">
                </li>

                <li><i class=" fa fa-ambulance "></i><div class="headline_leistungen">
                        <a href="{{ (URL::to('notfallmedizin')) }}"><h3 class="h3_leistungen">Notfallmedizin</h3></a>
                    <i class="fa fa-plus grau " ></i></div>
                    <p class="p_leistungen">Erkennung drohender oder eingetretener
                        Notfallsituationen und die Behandlung von Notfällen
                        sowie die Wiederherstellung und Aufrechterhaltung
                        akut bedrohter Vitalfunktionen.
                    </p>
                    <hr id="leistungen_hr">
                </li>

                <li><i class=" fa fa-clipboard "></i><div class="headline_leistungen">
                        <a href="{{ (URL::to('arbeitsmedizin')) }}"><h3 class="h3_leistungen">Arbeitsmedizin</h3></a>
                        <i class="fa fa-plus grau " ></i></div>
                    <p class="p_leistungen">Fachgebiet der Medizin, das sich in Forschung, Lehre und
                        Praxis mit der Untersuchung, Bewertung, Begutachtung und
                        Beeinflussung der Wechselbeziehungen zwischen Anforderungen,
                        Bedingungen und Organisation der Arbeit sowie dem Menschen,
                        seiner Gesundheit, seiner Arbeits- und Beschäftigungsfähigkeit
                        und seinen Krankheiten befasst
                    </p>
                </li>

            </ul>

        </div>

    </section>
    @include('partials.google_maps')
</main>

@stop



