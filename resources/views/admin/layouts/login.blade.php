<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>GWI - Intranet</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition sidebar-mini">


    <!-- Main content -->

    <div id="login">
        <nav class="navbar text-center shadow-sm">
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Main Footer -->
    <footer class="text-center">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020
            Intranet Mirante.</strong>
    </footer>
    </div>
    <!-- ./wrapper -->

    <script type="text" src="js/app.js"></script>
</body>

</html>