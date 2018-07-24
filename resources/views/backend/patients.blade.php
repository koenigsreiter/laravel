@extends('backend.backend_layouts.backend_master')

@section('container')


    <div class="wrapper_headline_dash">
        <div class="headline_dashboard"><h1>Patients</h1></div>

    </div>



    <section class="patients">

        <div class="wrapper_patients">

           <div class="grid_container">

               <div class="item1">Name</div>
               <div class="item2">Beschwerden</div>
               <div class="item3">Termine</div>
               <div class="item3">Edit</div>
               <div class="item3">Löschen</div>


                @foreach($users as $user)
                    <div class="item4">
                        <div class="name_patient">{{{ $user->name }}}</div>
                        <div>
                            <ul class="patients_beschwerden">
                                @foreach($user->complaints as $complaint)
                                    <li>{{{ $complaint }}}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class=" date">
                            <p>
                            @foreach(App\Appointment::where('id', '=', $user->id)->get() as $appointment)    
                                <span>{{{ date('d.m.Y', $appointment->dateTime) }}};</span>
                            @endforeach
                            </p>
                        </div>
                        <div><a class="fa fa-pencil-alt" href="/patients_edit/{{ $user->id }}"></a></div>
                        <div><a class="fa fa-trash-alt" href="/patient/{{ $user->id }}/delete"></a></div>
                    </div>
                @endforeach
           </div>
        </div>



    </section>
    @stop