<h1>Add User</h1>

<form action='addUser' method='post'>
    @csrf
    <input type='text' name='name' placeholder='Type name here'>
    <br>
    <br>
    <input type='text' name='email' placeholder='Type email here'>
    <br>
    <br>
    <input type='text' name='password' placeholder='Type password here'>
    <br>
    <br>
    <button type='submit'>Add</button>

</form>