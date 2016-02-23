<!-- Main Content -->
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title panel-default">
                    <div class="title">Sign Up</div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class='form-group'>
                        <?php echo $this->Form->input('first_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo $this->Form->input('last_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo $this->Form->input('email', ['class' => 'form-control']); ?>
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
                    <div class="checkbox">
                        <div class="checkbox3 checkbox-round">
                            <input type="checkbox" id="checkbox-1">
                            <label for="checkbox-1">
                                Remember me.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>