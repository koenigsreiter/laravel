<header>

    <nav class="sidebar">
        <i id="toggle" class="fa fa-bars icon_dash"></i>

        <ul class="sidenav">
            <li class="dash_close">  <i class="fa fa-times icon_times"></i></li>

            <li><a href="{{ (URL::to('dashboard')) }}">Dashboard</a></li>
            <li><a href="{{ (URL::to('patients')) }}">Patients</a></li>
            <li><a href="{{ (URL::to('messagesback')) }}">Messages</a></li>
            <li><a href="{{ (URL::to('calender_backend')) }}">Calender</a></li>

        </ul>


    </nav>

</header>