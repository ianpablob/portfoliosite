<!DOCTYPE html>
<html>
<head>
    <title>Ian Borges</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('css/style.css') }}" rel="stylesheet"/>
</head>

<body>  
    <div class="header-container">
        <header>
            <!-- Cabeçalho -->
        </header>
    </div>

    <!-- Conteúdo da página -->
    {{$slot}}

    <script src="{{ url('js/script.js') }}" defer></script>
</body>
</html>
