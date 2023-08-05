@extends('layout.chat')
@section('content')

    @include('include.chat.header-auth')
    <div class="container">
        <div class="list">
            {{--            <ul class="list__users">--}}
            {{--                <li class="list__user">--}}
            {{--                    <div>lorem id: 123das</div>--}}
            {{--                    <div class="list__user-btn">Send</div>--}}
            {{--                </li>--}}
            {{--                <li class="list__user">--}}
            {{--                    <div>lorem id: 123das</div>--}}
            {{--                    <div class="list__user-btn">Send</div>--}}
            {{--                </li>--}}
            {{--                <li class="list__user">--}}
            {{--                    <div>lorem id: 123das</div>--}}
            {{--                    <div class="list__user-btn">Send</div>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
            {{--          TODO:  В следующих обновлениях надо доделать --}}

            <div class="list__add-user">
                <form action="{{ route('chat.authorised.post')}}" class="add_user-items" method="post">
                    @csrf
                    @foreach ($errors->all() as $error)
                        <div class="error">{{ $error }}</div>
                    @endforeach
                    <input class="add_user-item" type="text" placeholder="ID: " maxlength="6" name="id">
                    <input class="add_user-item" type="submit" value="Find">
                </form>
            </div>
        </div>
    </div>
    </div>
@stop
