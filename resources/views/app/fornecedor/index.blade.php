<h1>Fornecedor</h1>


{{-- Comentario em codigo blade --}}

@php

@endphp

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10 )
    <h1> Temos alguns fornecedores </h1>
@elseif(count($fornecedores) > 10 )
    <h1> Temos muitos fornecedores</h1>
@else
    <h1> Nao temos fornecedores</h1>
@endif --}}

Forncedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>

@if (!($fornecedores[0]['status'] == 'S'))
    <h1>Falso</h1>    
@endif

@unless ($fornecedores[0]['status'] == 'S')
    <h3>Falso</h3>
@endunless



