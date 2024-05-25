@component('mail::message')
<h1 style="text-align:center">Demande de contact </h1>
<br>
<h2> Mail : {{$_POST['email']}}</h2>
<br>
<h1> Sujet : {{$_POST['sujet']}} </h1>


<p style="text-align: center">{{$_POST['message']}}</p>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

<br>
{{$_POST['name']}}
@endcomponent
