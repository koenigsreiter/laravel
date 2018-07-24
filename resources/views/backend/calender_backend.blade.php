@extends('backend.backend_layouts.backend_master')

@section('container')


    <div class="wrapper_headline_dash">
        <div class="headline_dashboard"><h1>Calender</h1></div>

    </div>

    <section class="calender">
        <div class="wrapper_calender">

        @foreach($appointments as $appointment)
            <div style="border: 2px solid black;" id="target-{{{ $appointment->id }}}-{{{ $appointment->dateTime }}}">
                <p>Kunde: {{{ $appointment->name }}}</p> 
                <p>E-Mail: {{{ $appointment->email }}}</p>
                <p>Datum: {{{ date('d.m.Y H:i:s', $appointment->dateTime) }}}</p>
                <button 
                    onclick="deny({{{ $appointment->id }}}, 'target-{{{ $appointment->id }}}-{{{ $appointment->dateTime }}}')">
                    Ablehnen
                </button>
                <button 
                    onclick="accept({{{ $appointment->id }}}, 'target-{{{ $appointment->id }}}-{{{ $appointment->dateTime }}}')">
                    Akzeptieren
                </button>
            </div>

        @endforeach
        </div>




    </section>
    <script>
        function accept(id, target) {
            $.post(`/api/appointment/${id}/accept`,  {}, (res) => {
                console.log(res);
                $(`#${target}`).remove();
            });
        }

        function deny(id, target) {
            $.post(`/api/appointment/${id}/deny`, {}, (res) => {
                console.log(res);
                $(`#${target}`).remove();
            })
        }
    </script>


@stop