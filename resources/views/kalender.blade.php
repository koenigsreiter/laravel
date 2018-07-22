@extends('layouts.master')

@section('container')
    @include('partials.hero')
    @include('partials.loghome')

    <main>

    <div class="wrapper-headline">
        <h1>Kalender</h1>

    </div>

<section class="kalender">
    <div class="wrapper_kalender">
        <div class="kalender_content">
            <form action="/kalender" method="post">
                <div class="form-group">
                    <label for="appointment_date"></label>
                    <input type="date" id="appointment_date" name="appointment_date" placeholder="Datum" required>
                </div>
                <div class="form-group">
                    <label for="appointment_time"></label>
                    <input type="time" id="appointment_time" name="appointment_time" placeholder="Uhrzeit" required>
                </div>
    
                <button type="submit">Termin buchen</button>
            </form>

        </div>
    </div>
</section>









</main>

    @stop