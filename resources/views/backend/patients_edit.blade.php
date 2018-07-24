@extends('backend.backend_layouts.backend_master')

@section('container')


    <div class="wrapper_headline_dash">
        <div class="headline_dashboard"><h1>Patients</h1></div>

    </div>



    <section class="patients">

        <div class="wrapper_patients">


            <!--richtigen patienten zu ordnen plus date auslesesn-->
            <form class="patient_edit" action="#" method="#">

                <div class="group">
                    <label for="patient_name">Name</label>
                    <input type="text" class="patient_input" id="patient_name" name="patient_name" value="{{{ $user->name }}}">


                </div>

                <div class="group">
                    <label for="patient_beschwerden">Beschwerden</label>
                    <input type="text"  class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="{{{ $user->complaints[0] }}}">
                    <input type="text"  class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="{{{ $user->complaints[1] }}}">
                    <input type="text"  class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="{{{ $user->complaints[2] }}}">
                    <input type="text"  class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="{{{ $user->complaints[3] }}}">
                    <input type="text"  class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="{{{ $user->complaints[4] }}}">
                </div>

                <div class="group">
                    <label for="termin">Termin</label>
                    @foreach($appointments as $appointment)
                        <input type="text" class="patient_input" name="termin" id="termin" 
                            value="{{{ date('d.m.Y H:i:s', $appointment->dateTime) }}}" >
                    @endforeach

                </div>
                <div class="group">
                    <input  class="btn_edit" type="submit" value="Update">
                    <input  class="btn_edit" type="submit" value="Delete">
                </div>
            </form>

        </div>


</div>
    </section>
    @stop