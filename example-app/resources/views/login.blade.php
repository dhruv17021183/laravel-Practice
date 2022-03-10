@if(session('user'))
<h3>Data Saved For {{session('user')}}</h3>
@endif
<form action="PostsController" method="post">
    @csrf
    <div>
        <input type="text" name="user">
    </div>
    <div>
         <input type="password" name="password">
    </div>
    <button type="submit" value="create">submit</button>
</form>
