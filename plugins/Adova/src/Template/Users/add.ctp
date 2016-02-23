 <div class="page-title" style="text-align: center;">
        <span class="title">Create New User</span>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->Form->create($user) ?>
                    <div class='form-group'>
                        <?php echo $this->Form->input('first_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo $this->Form->input('last_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo $this->Form->input('user', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo $this->Form->input('password', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo $this->Form->input('phone', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo $this->Form->input('address', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <label for="role">Role</label>
                        <select class='form-control' name='role'>
                            <option value='1'>Admin</option>
                            <option value='2'>Director</option>
                            <option value='3'>Manager</option>
                            <option value='4'>Customer</option>
                        </select>

                </div>
                <input type="submit" value="Submit" class="btn btn-sm btn-info">
            </div>
        </div>
    </div>
</div>



