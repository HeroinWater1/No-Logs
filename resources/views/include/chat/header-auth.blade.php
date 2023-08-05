<style>
    .header__subtitle {
        display: none;
    }
</style>
<div class="container">
    <div class="header">
        <div class="header__title">NoLogs</div>
        <div class="header__subtitle">anonymous</div>
        <div class="header__nickname">Nickname: {{ auth()->user()->nickname }}</div>
        <div class="header__id">ID: {{ auth()->user()->custom_id }}</div>
        <div class="header__logout"><a href="{{ route('chat.logout') }}">Log Out</a></div>
    </div>
</div>

