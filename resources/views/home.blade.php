<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if ($nome === 'teste')
        <h1> Testes</h1>
    @else
        <h1> Home</h1>
    @endif

    @component('components.botao')
        @slot('cor')
            green
        @endslot
        Editar
    @endcomponent
    
    @component('components.botao')
        @slot('cor')
            red
        @endslot
            Deletar
    @endcomponent


    {!! $html !!}
</body>

</html>
