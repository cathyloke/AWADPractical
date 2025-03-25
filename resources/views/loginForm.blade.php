<h1>Login</h1>

<!-- {{$errors}} -->
@if($errors->any())
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif


<form action='login' method='post'>
    @csrf
    <input type='text' name=email placeholder='Enter Email'>
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

    <button type='submit'>Login</button>

</form>