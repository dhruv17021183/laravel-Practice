<h1>Update member</h1>

<form action="/edit" method="get">
    @csrf
    <input type="hidden" name="id" value="{{$blogpost['id']}}"
    <div>
        <input type="text" name="title" value="{{$blogpost['title']}}">
    </div>
    <div>
         <input type="text" name="content" value="{{$blogpost['content']}}">
    </div>
    <button type="submit">Update</button>
</form>
