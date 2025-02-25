<x-header data="User" />


@foreach($usernames as $name)
   @if ($name == "Alice") 
   <h2>Hello {{ $name }}</h2>
   @elseif ($name == "Bob")
   <h2>Hello {{ $name }}</h2>
   @elseif ($name == "Carson")
   <h2>Bonjour, {{ $name }}</h2>
   @else
   <h2>Unknown user</h2>
   @endif
@endforeach