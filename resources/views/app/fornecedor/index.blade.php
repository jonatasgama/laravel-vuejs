<h3>Fornecedor</h3>

@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        <b>Fornecedor</b>: {{ $fornecedores[$i]['nome'] }}
        <br>
        <b>Status</b>: {{ $fornecedores[$i]['status'] }}
        <br>
        <b>CNPJ</b>: {{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não informado' }}
        <br>
        <b>Telefone</b>:({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <br>
        <hr>
        @php $i++ @endphp
    @endwhile
    {{--
    @switch($fornecedores[2]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG    
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Estado não informado
    @endswitch--}}

    {{--
    @isset($fornecedores[0]['cnpj'])
        <b>CNPJ</b>: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            <i>Vazio</i>
        @endempty
    @endisset
    <br>
    @if($fornecedores[0]['status'] == 'N')
        <b>Fornecedor Inativo</b>
    @endif
    <br> --}}
@endisset



{{-- o unless é a mesma coisa que a negação do if--}}
{{--
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless    
--}}