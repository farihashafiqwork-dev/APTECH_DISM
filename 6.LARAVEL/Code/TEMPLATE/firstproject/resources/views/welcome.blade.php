<h1>Our Home Page</h1>
{{"Laravel"}}
{{-- {{"<h1>MVC Framework</h1>"}} --}}
<br>
{!!"<h2>Laravel MVC based Framework</h2>"!!}
{!!"<script>alert('Hello world')</script>"!!}

@php
   $username = "Urooj Rehman" ;
@endphp

{{$username}}
{{-- <a href="/home"><button>Go to Home Page</button></a> --}}
<a href="{{route('home')}}"><button>Go to Home Page</button></a>