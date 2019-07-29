<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium iusto veritatis odio cupiditate beatae aperiam aut eaque asperiores ipsam id non facilis recusandae nulla earum, commodi voluptatem expedita temporibus ullam!
</p><table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">second</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($questions as $key=> $task )
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$task->id}}</td>
      <td>{{$task->title}}</td>
      <td>{{$task->user_id}}</td>
    </tr>
@endforeach
  </tbody>
</table>