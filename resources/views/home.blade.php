
@extends('layouts.master')


@section('container')
    @include('partials.hero_home')
  <main class="kirk">


      <section>
        <div class="wrapper-kirk">
              <div class="content-kirk">
    
                 <h3 class="size">Dr.med.Fiona Kirk <br>Ärztin für Allgemeinmedizin</h3>
                 <p class="allgemein">
                     Praktischer Arzt, Notarzt, Arbeitsmedizin, Geriatrie, Schularzt, Palliativ Medizin,
                     komplementäre Krebsbegleittherapien,
                     Orthomolekulare Medizin,<br>
                     Sachverständiger Arzt gemäß §34 <br>Führerscheingesetz
                 </p>
    
              </div>
    
            <div class="photo-kirk">
                <img src="{{ asset('images/fiona_kirk.png')}}"  alt="hero" width="77" height="115">
                

            </div>
        </div>  
      </section>

<section class="special">

    <div class="wrapper-special">

        <ul class="special-icon">

            <li>
                <i class="fa fa-heart icon dunkel"></i>
                    <h4>Gesundheit</h4>
                <p>Computer Hardware Desktops And  And Handhelds Oh My</p>

            </li>
            <li>
                <i class="fa fa-flask icon hell"></i>
                <h4>Labor</h4>
                <p>Computer Hardware Desktops And  And Handhelds Oh My</p>

            </li>
            <li>
                <i class="fa fa-stethoscope icon dunkel"></i>
                <h4>Symptomanalyse</h4>
                <p>Computer Hardware Desktops And  And Handhelds Oh My</p>

            </li>
            <li>
                <i class="fab fa-viadeo icon hell"></i>
                <h4>Vital</h4>
                <p>Computer Hardware Desktops And  And Handhelds Oh My</p>


            </li>

        </ul>



    </div>

</section>

      <section class="patienten-info">
    
          <div class="wrapper-patienten">
              
              <div class="photo-patienten">
                  <img src="{{ asset('images/patienten.png')}}" width="205px" height="137px">
                  
                  
              </div>
              <div class="patienten-content">

                  <h2>Liebe Patienten und Patientinnen</h2>
                    <p>Herzlich Willkommen in unserer Ordination in<br> Krumau am Kamp.
                        <br>
                        <br>
                        Wir freuen uns auf Ihren Besuch in unserer <br>
                        Praxis und nehmen gerne Ihre telefonische<br>
                        Anfrage entgegen!</p>

              </div>
              
          </div>



      </section>

<section class="awards">
    <div class="awards-wrapper">

        <ul class="special-icon">

            <li>
                <i class="fa fa-user-md icon_2"></i>
                <h4  class="h4">qualifizierte Ärzt</h4>
                <p class="p">Für Ihr Wohl sorgen nur die Besten</p>

            </li>
            <li>
                <i class=" fa fa-hourglass-end icon_2"></i>
                <h4 class="h4">schnelle Besuche</h4>
                <p class="p">Wir sind stets bemüht Ihre Aufenthalte
                    so kurz wie möglich zu halten
                </p>
            </li>
            <li>
                <div class="icon_2"><i class="fa fa-archive"></i></div>
                <h4 class="h4">Patientengeschichte</h4>
                <p class="p">Um stets die best möglischte
                    Behandllung zu gewährleisten,
                    ist es wichitg alle Informationen
                    über Sie zu wissen</p>
            </li>
            <li>
                <div class="icon_2"><i class=" fa fa-plus-square"></i></div>
                <h4 class="h4">Hausapotheke</h4>
                <p class="p">In unserer Haus eigenen Apotheke
                    finden SIe ein große Auswahl an
                    Medikamenten</p>
            </li>


        </ul>


    </div>




</section>


<section class="small-contact">


    <div class="wrapper-small-contact">

        <i class="fa fa-envelope"></i>

        <h3>Treten Sie mit uns in Kontakt</h3>
        <ul class="daten-contact">

            <li class="li_daten"><i class="fa fa-phone"></i>Tel.: 02731 8224</li>
            <li class="li_daten"><i class="fa fa-map-marker"></i>
                    Hauptplatz 22<br>
                    3543 Krumau am Kamp </li>
            <li class="li_daten"><i class="fa fa-globe"></i>www.dr.fiona.kirk.at</li>

        </ul>



    </div>


</section>


  </main>
    @include('partials.google_maps')
@stop

