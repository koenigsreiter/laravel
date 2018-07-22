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
                    <input type="text" class="patient_input" id="patient_name" name="patient_name" value="Alex Blum">


                </div>

                <div class="group">
                    <label for="patient_beschwerden">Beschwerden</label>
                    <input type="text"  class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="Rückenschmerzen">
                    <input type="text" class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="Migräne">
                    <input type="text" class="patient_input" id="patient_beschwerden" name="patient_beschwerde" value="Erbrechen">


                </div>

                <div class="group">
                    <label for="termin">Termin</label>
                    <input type="text" class="patient_input"    name="termin" id="termin" value="17.7.2018- 20.7.2018" >


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