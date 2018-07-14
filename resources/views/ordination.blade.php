@extends('layouts.master')
@section('container')
    @include('partials.hero')

<main>

    <div class="wrapper-headline">
        <h1>Ordination</h1>

    </div>

    <div class="ordi-image">
        
        <picture>

            <source media ="()" srcset="#">
            <img  id="ordi_header" src="{{ asset('images/fotos_kirk/drkirk-12.jpg')}}" width="320px" height="179px">


        </picture>
        
        
    </div>
    <section class="ordi-gallery">

        <ul class="firstrow">
            <li><a href="{{ asset('images/fotos_kirk/drkirk-1.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle_16.png')}}" width="82px" height="53px" ></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-2.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 17.png')}}" width="82px" height="53px"></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-3.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 18.png')}}" width="82px" height="53px"></a></li>
            
        </ul>

        <ul class="secoundrow">

            <li><a href="{{ asset('images/fotos_kirk/drkirk-6.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 19.png')}}" width="82px" height="53px"></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-9.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 20.png')}}" width="170px" height="86px"></a></li>

        </ul>

        <ul class="thirdrow">

            <li class="groß"> <a href="{{ asset('images/fotos_kirk/drkirk-8.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 21.png')}}" width="82px" height="84px"></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-15.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 22.png')}}" width="82px" height="53px"></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-20.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 23.png')}}" width="82px" height="53px"></a></li>

        </ul>

        <ul class="forthrow">

            <li><a href="{{ asset('images/fotos_kirk/drkirk-23.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 24.png')}}" width="170px" height="86px" alt=""></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-25.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 25.png')}}"  width="82px" height="53px" alt=""></a></li>

        </ul>
        <ul class="fifthrow">

            <li ><a href="{{ asset('images/fotos_kirk/drkirk-31.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 26.png')}}" width="82px" height="53px" alt=""></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-36.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle_27.png')}}" width="82px" height="53px" alt=""></a></li>
            <li class="groß"><a href="{{ asset('images/fotos_kirk/drkirk-27.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 28.png')}}" width="80px" height="86px" alt=""></a></li>

        </ul>


        <ul class="sixthrow">

            <li><a href="{{ asset('images/fotos_kirk/drkirk-45.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 29.png')}}" width="82px" height="53px" alt=""></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-47.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 30.png')}}" width="82px" height="53px" alt=""></a></li>
            <li ><a href="{{ asset('images/fotos_kirk/drkirk-54.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 31.png')}}" width="82px" height="53px" alt=""></a></li>
        </ul>

        <ul class="seventhrow">

            <li><a href="{{ asset('images/fotos_kirk/drkirk-55.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 32.png')}}" width="82px" height="53px" alt=""></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-56.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 33.png')}}" width="170px" height="86px" alt=""></a></li>

        </ul>
        <ul class="sixthrow">

            <li class="groß"><a href="{{ asset('images/fotos_kirk/drkirk-48.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 1634.png')}}" width="80px" height="86px" alt=""></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-5.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 18.png')}}" width="82px" height="53px" alt=""></a></li>
            <li><a href="{{ asset('images/fotos_kirk/drkirk-48.jpg')}}"><img src="{{ asset('images/fotos_kirk/Rectangle 1634.png')}}" width="82px" height="53px" alt=""></a></li>
        </ul>


    </section>





    @include('partials.google_maps')

</main>

    @stop