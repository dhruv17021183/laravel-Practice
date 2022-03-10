<h1>List</h1>
<table border="1">
  <tr>
      <td>Title</td>
      <td>Content</td>
  </tr>
@foreach($users as $item)

  <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->content}}</td>
    
  </tr>

@endforeach
</table>
