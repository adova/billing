<div class="page-title">
    <span class="title">Add Users</span>
    <div class="description">Add User Information</div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <table class="table" cellpadding="0" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= $this->Form->input('last_name') ?></th>
                        <th><?= $this->Form->input('email') ?></th>
                        <th><?= $this->Form->input('password') ?></th>
                        <th><?= $this->Form->input('phone') ?></th>
                        <th><?= $this->Form->input('address') ?></th>
                        <th>
                            <select name='role'>
                                <option value='1'>Admin</option>
                                <option value='2'>Manager</option>
                                <option value='3'>Customer</option>
                            </select>
                        </th>
                    </tr>
                    </thead>