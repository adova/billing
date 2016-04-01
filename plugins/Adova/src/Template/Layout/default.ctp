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

</head>

<body class="flat-blue">
<div class="app-container">
    <div class="row content-container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-expand-toggle">
                        <i class="fa fa-bars icon"></i>
                    </button>
                    <ol class="breadcrumb navbar-breadcrumb">
                        <li class="active">Dashboard</li>
                    </ol>
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-th icon"></i>
                    </button>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-times icon"></i>
                    </button>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="title">
                                Notification <span class="badge pull-right">0</span>
                            </li>
                            <li class="message">
                                No new notification
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown danger">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                        <ul class="dropdown-menu danger  animated fadeInDown">
                            <li class="title">
                                Notification <span class="badge pull-right">4</span>
                            </li>
                            <li>
                                <ul class="list-group notifications">
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge success">1</span> <i class="fa fa-check icon"></i> new orders
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item message">
                                            view all
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Emily Hart <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="profile-img">
                                <?= $this->Html->image('profile/picjumbo.com_HNCK4153_resize.jpg', array('alt' => 'picjumbo.com_HNCK4153_resize.jpg', 'class'=>'profile-img' ));?>

                            </li>
                            <li>
                                <div class="profile-info">
                                    <h4 class="username">Emily Hart</h4>
                                    <p>emily_hart@email.com</p>
                                    <div class="btn-group margin-bottom-2x" role="group">
                                        <?= $this->Html->link('<i class="fa fa-user"></i> Profile',
                                            ['action' => 'profile'],
                                            ['class' => 'btn btn-default', 'escape' => false]
                                        ) ?>
                                        <?= $this->Html->link('<i class="fa fa-sign-out"></i> Logout',
                                            ['action' => 'logout'],
                                            ['class' => 'btn btn-default', 'escape' => false]
                                        ) ?>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Nav Menubar-->
        <?php
            echo $this->element('nav');
        ?>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body">
                <?= $this->fetch('content') ?>
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

</body>

</html>
