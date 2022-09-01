<?php
    include '../access.php';
function foot() { ob_start() ; ?>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
        <p class="m-0 text-center text-white">Chinatown Citizenship 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    </body>
</html>
<?php return ob_get_clean(); } 

function head($num) { ob_start(); ?>
    <html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166619564-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166619564-1');
        </script>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>US History <?php echo $num ?></title>
        <link rel="icon" href="../images/favicon.png">

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="../css/custom.css" rel="stylesheet">

        <!-- Flashcard JS -->
        <script src="../source.js"></script>
        <script type="text/javascript" src="../apicalls.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    </head>

    <body id="page-top">

    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../index.html">Chinatown Citizenship</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="../english.html">English</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link active" href="../ushistory.html">US History</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../other.html">Other Resources</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../contact.html">Contact Us</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

<?php return ob_get_clean(); } ?>
