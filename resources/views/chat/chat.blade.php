<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
@extends('layout.chat')
@section('content')
    @include('include.chat.header-auth')

    <div class="container">
        <div class="chat">
            <div class="chat_row">
                <div class="messages">
                    Write Something
                </div>
                <!-- End Chat -->

                <!-- Footer -->
                <div class="bottom">
                    <form method="post">
                        @csrf
                        <input class="add_user-item" type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
                        <input type="submit" value="Send" class="add_user-item" id="btn">
                    </form>
                </div>
                <!-- End Footer -->
            </div>
            <div class="user-data">
                <div class="user-nickname"> Nickname: lorem
                </div>
                <div class="user-ID"> ID: jfei32
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/chat.js') }}">
    </script>
@stop
