<h3>Add Data </h3>

<form action="/add" method="get">
    @csrf
    <div>
        <input type="text" name="title">
    </div>
    <div>
         <input type="text" name="content">
    </div>
    <button type="submit">Add</button>
</form>
