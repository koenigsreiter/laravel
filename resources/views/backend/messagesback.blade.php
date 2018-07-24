@extends('backend.backend_layouts.backend_master')

@section('container')
    <div class="wrapper_headline_dash">
        <div class="headline_dashboard"><h1>Messages</h1></div>

    </div>
    <div class="container clearfix">
        <div class="people-list" id="people-list">

            <ul class="list">
            @foreach($users as $user) 
                <li class="clearfix">

                    <div class="about" 
                        onclick="startPolling('{{{ $user->id}}}-{{{ $user->name }}}', 
                                'target-{{{ $user->id }}}-{{{ preg_replace('/\s+/', '', $user->name) }}}',
                                '/api/messages/{{ $user->id }}')">
                        <div class="name">{{{ $user->name }}}</div>
                    </div>

                    <div class="chat">
                        <div class="chat-header clearfix">


                            <div class="chat-about">
                                <div class="chat-with">Chat with {{{ $user->name }}}</div>
                                <div class="chat-num-messages">already {{{ count($user->messages) }}} messages</div>
                            </div>

                        </div> <!-- end chat-header -->

                        <div class="chat-history">
                            <ul id="target-{{{ $user->id }}}-{{{ preg_replace('/\s+/', '', $user->name) }}}">
                                <li class="clearfix">
                                    <div class="message-data align-right">
                                        <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
                                         <i class="fa fa-circle me"></i>

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
                                        <i class="fa fa-circle me"></i>

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
                            <textarea name="message-to-send" id="{{{ $user->id}}}-{{{ preg_replace('/\s+/', '', $user->name) }}}" 
                                placeholder ="Type your message" rows="3"></textarea>


                            <button
                                onclick="sendMsg('{{{ $user->id}}}-{{{ preg_replace('/\s+/', '', $user->name) }}}', '/api/messages/{{{ $user->id }}}')"
                                >Send</button>

                        </div> <!-- end chat-message -->

                    </div> <!-- end chat -->
                    <script>

                    </script>

                </li>
            @endforeach

            </ul>
        </div>

    </div> <!-- end container -->
    <script>
        $(".chat").hide();
        var interval = null;
        const username = "{{{ Auth::user()->name }}}";

        function startPolling(id, target, apiRouteTarget) {
            if (interval != null) {
                clearInterval(interval);
                interval = null;
            } else {
                interval = setInterval((containerTarget, route) => {
                    $.getJSON(route, (result) => {
                        $(`#${containerTarget}`).empty();
                        $.each(result, (key, value) => {
                            if (value.user === username) {
                                $(`#${containerTarget}`).append(`
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
                                $(`#${containerTarget}`).append(`
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name"><i class="fa fa-circle online"></i> ${ value.user }</span>
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
                }, 2000, target, apiRouteTarget);
            }
        }

        function sendMsg(target, apiRouteTarget) {
            $.post(apiRouteTarget, {
                user: username,
                data: $(`#${target}`).val(),
                date: new Date(),
            }, (result) => {
                console.log(result);
                $(`#${target}`).val("");
            });
        }
    </script>




    @stop
