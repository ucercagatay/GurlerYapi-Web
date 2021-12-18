<form method="post" action="{{route('logpost')}}">
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <button type="submit">GÖNDER</button>
</form>
