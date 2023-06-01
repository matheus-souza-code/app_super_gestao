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


@isset($fornecedores)

    Forncedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'nao definido'}}
    
    
    <br>
    <br>
    Forncedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'nao definido'}}

@endisset

<br>
<br>
Forncedor: {{ $fornecedores[2]['nome'] }}
<br>
Status: {{ $fornecedores[2]['status'] }}
<br>
CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'nao definido'}}
<br>
Telefone: ({{ $fornecedores[2]['ddd'] }}) {{ $fornecedores[2]['telefone'] }}
<br>
@switch($fornecedores[2]['ddd'])
    @case(11)
        SP
        @break
    @case(48)
        SC
        @break
    @case(32)
        MG
        @break
    @default
        Estado nao identificado
@endswitch


{{-- @if (!($fornecedores[0]['status'] == 'S'))
    <h1>Falso</h1>    
@endif

@unless ($fornecedores[0]['status'] == 'S')
    <h3>Falso</h3>
@endunless --}}



