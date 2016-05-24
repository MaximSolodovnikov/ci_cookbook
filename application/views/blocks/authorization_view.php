<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?= base_url(); ?>"><img class="img-responsive" src="<?= base_url(); ?>images/logo.png" alt="logosite"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="btn btn-default" href="<?= base_url(); ?>index.php/login/logout" role="button">Выход</a></li>
                </ul>
            </div>
        </div>
    </nav>