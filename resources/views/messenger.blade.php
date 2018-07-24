@extends('layouts.master')

@section('container')
    @include('partials.hero')
    @include('partials.loghome')



<main>

    <div class="wrapper-headline">
        <h1>Messenger</h1>

    </div>

    <div class="container_messenger">

        <div class="chat">

            <div class="chat-history">
                <ul id="chatList">
                    <li class="clearfix">
                        <div class="message-data align-right">
                            <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;


                        </div>
                        <div class="message other-message float-right">
                            Hi Vincent, how are you? How is the project coming along?
                        </div>
                    </li>

                    <li>
                        <div class="message-data">
                            <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                            <span class="message-data-time">10:12 AM, Today</span>
                        </div>
                        <div class="message my-message">
                            Are we meeting today? Project has been already finished and I have results to show you.
                        </div>
                    </li>

                    <li class="clearfix">
                        <div class="message-data align-right">
                            <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;


                        </div>
                        <div class="message other-message float-right">
                            Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
                        </div>
                    </li>

                    <li>
                        <div class="message-data">
                            <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                            <span class="message-data-time">10:20 AM, Today</span>
                        </div>
                        <div class="message my-message">
                            Actually everything was fine. I'm very excited to show this to our team.
                        </div>
                    </li>


                </ul>

            </div> <!-- end chat-history -->

            <div class="chat-message clearfix">
                <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                <button id="sendMsg">Senden</button>

            </div> <!-- end chat-message -->

        </div> <!-- end chat -->

    </div> <!-- end container -->

    <script>
    
        const username = "{{ Auth::user()->name }}";
        $("#sendMsg").click(() => {
            $.post("/api/messages/{{ Auth::id() }}", {
                user: username,
                data: $("#message-to-send").val(),
                date: new Date(),
            }, (result) => {
                console.log(result);
                $("#message-to-send").val("");
            });
        });

        setInterval(() => {
            $.getJSON("/api/messages/{{ Auth::id() }}", (result) => {
                $("#chatList").empty();
                $.each(result, (key, value) => {
                    if (value.user !== username) {
                        $("#chatList").append(`
                        <li class="clearfix">
                            <div class="message-data align-right">
                                <span class="message-data-time" >${ value.date }</span> &nbsp; &nbsp;
                            </div>
                            <div class="message other-message float-right">
                               ${ value.data }
                            </div>
                        </li>
                        `);
                    } else {
                        $("#chatList").append(`
                        <li>
                            <div class="message-data">
                                <span class="message-data-name"><i class="fa fa-circle online"></i> ${username}</span>
                                <span class="message-data-time">${ value.date }</span>
                            </div>
                            <div class="message my-message">
                                ${ value.data }
                            </div>
                        </li>
                        `);
                    }
                })
            })
        }, 2000);

    
    </script>


</main>

    @stop