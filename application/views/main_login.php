<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
            
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/plugins/fa/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/login.css');?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        
    </head>

    <body>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php if ($this->session->flashdata('msg')): ?>
                <div class="alert alert-danger">
                <center> 
                    <strong> 
                        <?=$this->session->flashdata('msg');?>
                   </strong>
                </center>
                 </div>
                    <?php endif; ?>
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" action="<?=base_url('login/auth');?>" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </body>

</html>