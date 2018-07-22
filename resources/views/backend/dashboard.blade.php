@extends('backend.backend_layouts.backend_master')

@section('container')


    <div class="wrapper_headline_dash">
        <div class="headline_dashboard"><h1>Dashboard</h1></div>

    </div>

<section class="calender_week">

    <div class="wrapper_calender_week">

        <h3>Calender</h3>

        <hr class="hr_last">
        <!--kalenderansicht der nächsten woche -->




    </div>


</section>
    <section class="section_last">
        <div class="wrapper_last_patients">
            <h3>Last Patients</h3>

            <hr class="hr_last">
            <ul class="last_patients">

                <!--Letzten 5 neuen patienten anzeigen-->
                <li>Karl Bruckner</li>
                <li>Claudia Mayer</li>
                <li> Babsi Holzer</li>
                <li> Babsi Holzer</li>
                <li> Babsi Holzer</li>

            </ul>



        </div>


    </section>

    <section class="section_last">
        <div class="wrapper_last_messages">

            <!--anzeigen wie viele neue nachrichten-->
            <h3>You have <span> 3 </span>new Messages</h3>





        </div>





    </section>

    @stop