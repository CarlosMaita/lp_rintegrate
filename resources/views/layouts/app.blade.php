<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

        <!-- Scripts -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#dt-table').DataTable( {
                    language: {
                        lengthMenu: 'Mostrar  _MENU_ registros por pagina',
                        zeroRecords: 'No se ha encontrado items - Lo siento',
                        info: 'Página _PAGE_ de _PAGES_',
                        infoEmpty: 'Sin registros disponibles',
                        infoFiltered: '(Filtrado de _MAX_ registros totales)',
                        search: 'Buscar: ',
                        paginate: {
                            first:      "Primero",
                            last:       "Último",
                            next:       "Siguiente",
                            previous:    "Anterior"
                        },
                     },
                    }
                );
            } );
        </script>
        <style>
            select[name="dt-table_length"]{
                width: 60px;
            }
        </style>
    </body>
</html>
