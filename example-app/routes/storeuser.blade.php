@if(session::has('user'))
<h3>Data Saved For {{session('user')}}</h3>
@endif
<form action="/store" method="post">
    @csrf
    <div>
        <input type="text" name="user">

    </div>
    <div>
         <input type="password" name="password">
    </div>
    <button type="submit" value="create">submit</button>
</form>
