<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>TaskList</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    <style type="text/css">
        .table {
            table-layout: fixed;
            overflow-wrap: break-word;
            word-wrap: break-word;
        }
        .table tr th:nth-child(1) {
            width: 10%;
        }
        .table tr th:nth-child(2) {
            width: 20%;
        }
    </style>
    
    </head>
    
    <body>
        @include('commons.navbar')
        
        <div class="container">
            @include('commons.error_tasks')
        
            @yield('content')
        </div>
    </body>
</html>