<!DOCTYPE html>
    <head>
        <title>Darren Stokes | 500 Error</title>
        <?php
            include('styles_and_scripts.html');
        ?>
    </head>
    <body>
        <?php
        include('banner.php');
        ?>
        <div class="content">
            <div class="wrapper">
                <div class="content-box">
                    <div class="content-inner">
                        <div class="lang lang-en">
                            <h3 class="section-heading">There's a problem with the server, please try again later</h1>
                        </div>
                        <div class="lang lang-es">
                            <h3 class="section-heading">Hay una problema con el ordenador, por favor intenta otra vez luego</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include('footer.php');
            echo "\n";
            include('cookie_notice.html')
        ?>
    </body>
</html>