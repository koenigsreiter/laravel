@extends('layouts.master')

@section('container')
    @include('partials.hero')



    <main>
    <div class="wrapper-headline">
        <h1>Vitalwochenende</h1>

    </div>

    <section>
        <div class="headline">
            <i class="fab fa-viadeo vital"></i> <h2 class="vital_h2 thin">Alternative Behandlungen,<br>
                    mal etwas neues probieren ?</h2>
        </div>

        <div class="wrapper-vital">
        <ul class="ul_vital">

            <li>
                <picture>

                    <img src="{{ asset('images/vital1.png')}}" width="73px" height="99px" alt="wald">
                </picture>
            </li>
            <li>
                <picture>
                    <img src="{{ asset('images/vital2.png')}}" width="73px" height="99px" alt="essen">
                </picture>
            </li>
            <li>
                <picture>
                    <img src="{{ asset('images/vital3.png')}}" width="73px" height="99px" alt="yoga">
                </picture>
            </li>
            <li>
                <picture>
                    <img src="{{ asset('images/vital4.png')}}" width="73px" height="99px" alt="herzschlag">
                </picture>
            </li>

        </ul>


        </div>


    </section>
<section class="wrapper-content">

    <div class="content_vital">


        <p> Do you know what could beat the exciting feeling of having a new computer? Make your own PC!<br><br>

            Making your own computer from scratch is not only fun to do but cheaper as well. You can get to choose
            the parts you want to use on your PC. This gives you the control in balancing the price and the quality
            of your newly assembled PC.

            Before we show you the steps, here are the necessary parts of the computer that you need to buy:
            Do you know what could beat the exciting feeling of having a new computer? Make your own PC!
            <br><br>
            Making your own computer from scratch is not only fun to do but cheaper as well. You can get to
            choose the parts you want to use on your PC. This gives you the control in balancing the price and
            the quality of your newly assembled PC.
            <br><br>
            Before we show you the steps, here are the necessary parts of the computer that you need to buy:       </p>


    </div>
    <div class="image-vital">
        <picture>
            
            <img src="{{ asset('images/vital5.jpg')}}" width="212px" height="144px" alt="fit">
            
            
        </picture>

        
    </div>

    <div class="content_p">



        <p>Many people were hoping that if the Democrats won control of Congress they would reverse the online gambling ban,
            but experts doubt they will even try or that if they do that the will be successful.

            Once the bill was passed and signed into law by the president, it became much harder to reverse the law.
            The democrats would need to bring up the law and get it to a vote, then after the vote passed it needs to go to
            the president for his signature.
        </p>


        <p>The problem with this is that the current president is the one who signed the bill into law in the first place.

            to get the law reversed could ruin a congressman’s chances of ever getting elected to public office again for
            the rest of their lives.

            It is more likely that it will have to wait till the end of George Bushes term in office and then get an amendment
            to the law that reverses only gambling ban part of the law.
        </p>
    </div>

</section>


    <section class="join_vital">
        <div class="wrapper_join">

            <p class="thin">Sind Sie interessiert an unserem <br>
                Vitalwochenende,dann registrieren Sie sich bitte hier.</p>


            <div class="vital_registrieren">
            <a href="{{ (URL::to('auth')) }}">Registrieren</a>
            </div>




        </div>





    </section>

        @include('partials.google_maps')
</main>

    @stop