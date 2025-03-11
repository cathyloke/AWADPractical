<h1>Users Header Component</h1>

<h3>This is the list of Users</h3>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <!-- <td>password</td>
        <td>Operation 1</td>
        <td>Operation 2</td> -->
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <!-- <td>{{$user->password}}</td>
        <td><a href='deleteUser/{{$user->id}}'>Delete</a></td>
        <td><a href='editUser/{{$user->id}}'>Edit</a></td> -->
    </tr>
    @endforeach
</table>


<style>
    .w-5{
        display:none;
    }
</style>