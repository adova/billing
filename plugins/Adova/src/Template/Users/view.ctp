<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expandables'), ['controller' => 'Expandables', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expandable'), ['controller' => 'Expandables', 'action' => 'add']) ?> </li>
    </ul>
</nav> -->

<div class="row">
    <div class="col-xs-6">
        <div class="card">

            <div class="card-body">

                <h4><?= __('Basic Information') ?></h4>
                <table class="table">
                    <tr>
                        <th class="active"><?= __('First Name') ?></th>
                        <td>
                            <?php
                            if ($user->first_name) {
                                echo $user->first_name;
                            }else{
                                echo 'N/A';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Last Name') ?></th>
                        <td>
                            <?php
                            if ($user->last_name) {
                                echo $user->last_name;
                            }else{
                                echo 'N/A';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Email') ?></th>
                        <td>
                            <?php
                            if ($user->email) {
                                echo $user->email;
                            }else{
                                echo 'N/A';
                            }
                            ?>
                        </td>
                    </tr>
                    <th class="active"><?= __('Phone') ?></th>
                    <td>
                        <?php
                        if ($user->phone) {
                            echo $user->phone;
                        }else{
                            echo 'N/A';
                        }
                        ?>
                    </td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Address') ?></th>
                        <td>
                            <?php
                            if ($user->address) {
                                echo $user->address;
                            }else{
                                echo 'N/A';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Role') ?></th>
                        <td>
                            <?php
                            if($user->role == 1){
                                echo 'Admin';
                            }
                            else if($user->role == 2){
                                echo 'Bill Collector';
                            }
                            else if($user->role == 3){
                                echo 'User';
                            }
                            else{
                                echo 'N/A';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Status') ?></th>
                        <td>
                            <?php
                            if($user->status == true){
                                echo 'Active';
                            }
                            else if($user->status == false){
                                echo 'In-Active';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Created') ?></th>
                        <td>
                            <?php
                            if ($user->created) {
                                echo $user->created;
                            }else{
                                echo 'N/A';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Modified') ?></th>
                        <td>
                            <?php
                            if ($user->modified) {
                                echo $user->modified;
                            }else{
                                echo 'N/A';
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="card">
            <div class="card-body">
                <div class="related">
                    <h4><?= __('Extra Information') ?></h4>
                    <?php if (!empty($user->expandables)): ?>
                        <table class="table">
                            <?php foreach ($user->expandables as $expandables): ?>
                                <tr>
                                    <td class="active"><?= h($expandables->field_name) ?></td>
                                    <td>
                                        <?php foreach ($expandables['informations'] as $information): ?>
                                            <?php echo $information['value'] ?>
                                            <br>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>