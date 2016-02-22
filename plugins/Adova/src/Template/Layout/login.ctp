<!DOCTYPE html>
<html>

<head>
    <title>Flat Admin V.2 - Free Bootstrap Admin Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <?= $this->Html->css('lib/css/bootstrap.min') ?>
    <?= $this->Html->css('lib/css/font-awesome.min') ?>
    <?= $this->Html->css('lib/css/animate.min') ?>
    <?= $this->Html->css('lib/css/bootstrap-switch.min') ?>
    <?= $this->Html->css('lib/css/checkbox3.min') ?>
    <?= $this->Html->css('lib/css/jquery.dataTables.min') ?>
    <?= $this->Html->css('lib/css/dataTables.bootstrap') ?>
    <?= $this->Html->css('lib/css/select2.min') ?>
    <?= $this->Html->css('style') ?>
    <?= $this->Html->css('themes/flat-blue') ?>
    <!--    <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap-switch.min.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/checkbox3.min.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/select2.min.css">-->
    <!-- CSS App -->
    <!--   <link rel="stylesheet" type="text/css" href="../css/style.css">
       <link rel="stylesheet" type="text/css" href="../css/themes/flat-blue.css">-->
</head>

<body class="flat-blue login-page">
<div class="app-container">
    <div class="row content-container">

    </div>
    <!-- Main Content -->
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                    <div class="col-sm-12 text-center login-header">
                        <i class="login-logo fa fa-connectdevelop fa-5x"></i>
                        <h4 class="login-title">Flat Admin V2</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body">
                            <div class="progress hidden" id="login-progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                     role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 100%">
                                    Log In...
                                </div>
                            </div>
                            <form>
                                <div class="control">
                                    <input type="text" class="form-control" value="admin@gmail.com"/>
                                </div>
                                <div class="control">
                                    <input type="password" class="form-control" value="123456"/>
                                </div>
                                <div class="login-button text-center">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                            </form>
                        </div>
                        <div class="login-footer">
                            <span class="text-right"><a href="#" class="color-white">Forgot password?</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="app-footer">
    <div class="wrapper">
        <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
    </div>
</footer>
<div>
    <!-- Javascript Libs -->
    <?= $this->Html->script('lib/js/jquery.min') ?>
    <?= $this->Html->script('lib/js/bootstrap.min') ?>
    <?= $this->Html->script('lib/js/Chart.min') ?>
    <?= $this->Html->script('lib/js/bootstrap-switch.min') ?>
    <?= $this->Html->script('lib/js/jquery.matchHeight-min') ?>
    <?= $this->Html->script('lib/js/jquery.dataTables.min') ?>
    <?= $this->Html->script('lib/js/dataTables.bootstrap.min') ?>
    <?= $this->Html->script('lib/js/select2.full.min') ?>
    <?= $this->Html->script('lib/js/ace/ace') ?>
    <?= $this->Html->script('lib/js/ace/mode-html') ?>
    <?= $this->Html->script('lib/js/ace/theme-github') ?>
    <?= $this->Html->script('app') ?>
    <?= $this->Html->script('index') ?>

    <!-- <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
     <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="../lib/js/Chart.min.js"></script>
     <script type="text/javascript" src="../lib/js/bootstrap-switch.min.js"></script>
     <script type="text/javascript" src="../lib/js/jquery.matchHeight-min.js"></script>
     <script type="text/javascript" src="../lib/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" src="../lib/js/dataTables.bootstrap.min.js"></script>
     <script type="text/javascript" src="../lib/js/select2.full.min.js"></script>
     <script type="text/javascript" src="../lib/js/ace/ace.js"></script>
     <script type="text/javascript" src="../lib/js/ace/mode-html.js"></script>
     <script type="text/javascript" src="../lib/js/ace/theme-github.js"></script>-->
    <!-- Javascript -->
    <!--<script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>-->
</body>

</html>
