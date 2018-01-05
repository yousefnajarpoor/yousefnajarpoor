<style>
    .glyphicon{margin: 0 5px;}
</style>
<a href="{{  route('admin.users.delete',$user->id)  }}"><i class="glyphicon glyphicon-trash"></i></a>
<a href="{{  route('admin.users.edit',$user->id)  }}"><i class="glyphicon glyphicon-pencil"></i></a>