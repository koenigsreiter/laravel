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


               <div class="item4">
               <div class="name_patient">Alex Blum</div>
               <div>
                   <ul class="patients_beschwerden">
                       <li>Rückenschmerzen</li>
                       <li>Migräne</li>
                       <li>Erbrechen</li>

                   </ul>
               </div>

               <div class=" date"><p>17.7.2018 <br> - <br>20.7.2018</p></div>
                   <div><i class="fa fa-pencil-alt"></i></div>
                </div>
               <div class="item4">
                   <div>Alex Blum</div>
                   <div>
                       <ul>
                           <li>Rückenschmerzen</li>
                           <li>Migräne</li>
                           <li>Erbrechen</li>
                       </ul>
                   </div>
                   <div class=" date"><p>17.7.2018 <br> - <br>20.7.2018</p></div>
                   <div><i class="fa fa-pencil-alt"></i></div>
               </div>
               <div class="item4">
                   <div>Alex Blum</div>
                   <div>
                       <ul>
                           <li>Rückenschmerzen</li>
                           <li>Migräne</li>
                           <li>Erbrechen</li>
                       </ul>
                   </div>
                   <div class=" date"><p>17.7.2018 <br> - <br>20.7.2018</p></div>
                   <div><i class="fa fa-pencil-alt"></i></div>
               </div>
           </div>
        </div>



    </section>
    @stop