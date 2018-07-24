@extends('layouts.master')
@section('container')
    @include('partials.hero')
    @include('partials.loghome')


<main>

    <div class="wrapper-headline">
        <h1>Profil</h1>

    </div>


    <section class="profil">
    <form method="POST" action="#" autocomplete="off">

        {{ csrf_field() }}

        <div class="form-group">

            <input type="text" class="form-control" id="fname" name="vorname" placeholder="Vorname" required 
                    value="{{ explode(' ', Auth::user()->name)[0] }}">


        </div>


        <div class="form-group">
            <label for="lname"></label>
            <input type="text" class="form-control" id="lname" name="nachname" placeholder="Nachname" required 
                    value="{{ explode(' ', Auth::user()->name)[1] }}">

        </div>

        <div class="form-group">
            <label for="email"></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required
                    value="{{ Auth::user()->email }}">

        </div>
        <div class="form-group">
            <label for="password"></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Passwort" required>

        </div>

        <div class="form-group_adress">

            <div class="form-group">
                <label for="adresse"></label>
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required
                    value="{{ Auth::user()->street }}">

            </div>
            <div class="form-group">
                <label for="ort"></label>
                <input type="text" class="form-control" id="ort" name="ort" placeholder="Ort" required
                    value="{{ Auth::user()->city }}">

            </div>

            <div class="form-group">
                <label for="plz"></label>
                <input type="text" class="form-control" id="plz" name="plz" placeholder="PLZ" required
                    value="{{ Auth::user()->zipCode }}">

            </div>

        </div>

        <div class="form-group">
            <label for="beschwerden"></label>
            <input class="beschwerden" name="beschwerden" type="text"  placeholder="Beschwerde 1">
            <input class="beschwerden" name="beschwerden" type="text" placeholder="Beschwerde 2">
            <input class="beschwerden" name="beschwerden" type="text" placeholder="Beschwerde 3">
            <input class="beschwerden" name="beschwerden" type="text" placeholder="Beschwerde 4">

        </div>
        <div class="button_reg">
        <button type="submit" class="btn_reg">Bearbeiten</button>
        </div>
    </form>


    </section>
    <div class="profil_wrapper">
    <div class="headline_profil">
        <h2>Gebuchte Termine</h2>

    </div>
    </div>
    <section>
    @foreach($appointments as $appointment)
        <ul class="wrapper_reg">
            <li>Datum {{{ date('d.m.Y', $appointment->dateTime) }}}<hr class="hr_profil"></li>

            <li>Uhrzeit {{{ date('H:i', $appointment->dateTime) }}}<hr class="hr_profil"></li>
            <li>Behandlung <hr class="hr_profil"></li>

        </ul>
    @endforeach
    </section>
</main>


    @stop