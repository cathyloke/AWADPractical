<h1>Users Data</h1>

<table border='1'>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>password</td>
        <td>Operation 1</td>
        <td>Operation 2</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td><a href='deleteUser/{{$user->id}}'>Delete</a></td>
        <td><a href='editUser/{{$user->id}}'>Edit</a></td>
    </tr>
    @endforeach
</table>

<span>
    {{$users->links()}}
</span>

<style>
    .w-5{
        display:none;
    }
</style>