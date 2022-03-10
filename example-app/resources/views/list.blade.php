<h1>List</h1>
<table border="1">
  <tr>
      <td>Title</td>
      <td>Content</td>
  </tr>
@foreach($member as $members)

  <tr>
      <td>{{$members['title']}}</td>
      <td>{{$members['content']}}</td>
      <td><a href={{"delete/".$members["id"]}}>Delete</td>
      <td><a href={{"edit/".$members["id"]}}>Edit</td>
  </tr>

@endforeach
</table>
<div>
    {{$member->links()}}
</div>
<style>
    .w-5{
        display: none;
    }
</style>