<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->wallet}}</td>
    <td style="text-align: center;margin: 0 5px">
        @include('admin.users.operation',$user)
    </td>
</tr>