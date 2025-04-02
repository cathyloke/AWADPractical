<h1>Sign Up</h1>

<!-- {{$errors}} -->
@if($errors->any())
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif

@if(session('user'))
<h1>Hello {{session('user')}}, you just signed up</h1>
@endif

<form action='signup' method='post'>
    @csrf
    <input type='text' name=name placeholder='Enter name'>
    <br>
    <span style='color:red'>
        @error('name'){{$message}}@enderror
    </span>
    <br>
    <input type='text' name=email placeholder='Enter email'>
    <br>
    <span style='color:red'>
        @error('email'){{$message}}@enderror
    </span>
    <br>
    <input type='text' name=password placeholder='Enter Password'>
    <br>
    <span style='color:red'>
        @error('password'){{$message}}@enderror
    </span>
    <br>
    <input type='password' name=confirm_password placeholder='Enter confirm_password'>
    <br>
    <span style='color:red'>
        @error('confirm_password'){{$message}}@enderror
    </span>
    <br>

    <button type='submit'>Sign Up</button>

</form>