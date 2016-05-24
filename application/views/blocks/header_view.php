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
                <a href="#"><img class="img-responsive" src="<?= base_url(); ?>images/logo.png" alt="logosite"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Регистрация</a></li>
                </ul>
                <form class="navbar-form navbar-right form-inline" method="post" action="<?= base_url(); ?>index.php/login">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword3">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="pswd">
                    </div>
                    <input type="submit" class="btn btn-default" name="enter" value="Вход">
                </form>
            </div>
        </div>
    </nav>