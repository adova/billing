<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="icon fa fa-paper-plane"></div>
                    <div class="title">Flat Admin V.2</div>
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html">
                        <span class="glyphicon glyphicon-dashboard"></span><span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-element">
                        <span class="glyphicon glyphicon-user"></span><span class="title">Users</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-element" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li>
                                    <?php
                                    echo $this->Html->link(
                                        'List',
                                        [
                                            'controller'=>'users'
                                        ],
                                        array('class' => '', 'target' => '')
                                    );
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-element2">
                        <span class="glyphicon glyphicon-briefcase"></span><span class="title">Packages</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-element2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li>
                                    <?php
                                    echo $this->Html->link(
                                        'List',
                                        [
                                            'controller'=>'packages'
                                        ],
                                        array('class' => '', 'target' => '')
                                    );
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>
