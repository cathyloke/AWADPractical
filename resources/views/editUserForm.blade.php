<h1>Edit User</h1>

<form action='editUser' method='post'>
    @csrf
    <input type='hidden' name='id' value='{{$user->id}}'>

    <input type='text' name='name' value='{{$user->name}}' placeholder='Type name here'>
    <br>
    <br>
    <input type='text' name='email' value='{{$user->email}}' placeholder='Type email here'>
    <br>
    <br>
    <input type='text' name='password' value='{{$user->password}}' placeholder='Type password here'>
    <br>
    <br>
    <button type='submit'>Edit</button>

</form>