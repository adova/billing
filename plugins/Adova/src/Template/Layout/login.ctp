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

<body class="flat-blue login-page">
<div class="app-container">
    <?= $this->fetch('content') ?>
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
