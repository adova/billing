<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UI Design</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Adova Billing">
    <meta name="keywords" content="Billing ,Internet Service Provider">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <?= $this->Html->css('lib/css/bootstrap.min') ?>
    <!-- Font awesome CSS -->
    <?= $this->Html->css('lib/css/font-awesome.min') ?>



    <!-- Main CSS -->
    <?= $this->Html->css('auth') ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
</head>

<body>


<!-- UI # -->

<div class="ui-105">
    <!-- Combined Form Content -->
    <div class="ui-105-content">
        <?= $this->fetch('content') ?>
    </div>
</div>

<!-- Javascript files -->
<!-- jQuery -->
<?= $this->Html->script('lib/js/jquery.min') ?>
<!-- Bootstrap JS -->
<?= $this->Html->script('lib/js/bootstrap.min') ?>
<!-- Placeholder JS -->
<?= $this->Html->script('placeholder') ?>
<!-- Respond JS for IE8 -->
<?= $this->Html->script('respond.min') ?>
<!-- HTML5 Support for IE -->
<?= $this->Html->script('html5shiv') ?>
</body>
</html>