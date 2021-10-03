@component('mail::message')
<p>Olá <strong>{{ $data->name }}</strong>!</p>
<p>Este é um e-mail automático da plataforma Harmonicus.</p>
<p>Para confirmar o seu e-mail no processo de cadastro, informe o código abaixo:</p>
<h1 class="blue">{{ $data->code }}</h1>
<p>At.<br />Harmonicus</p>
@endcomponent
