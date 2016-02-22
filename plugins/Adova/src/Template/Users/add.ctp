<div class="side-body">

    <div class="page-title">
        <span class="title">Users Add</span>
        <div class="description">Create New User</div>
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
                      <select class='form-control' name='role'>
                            <option value='1'>Admin</option>
                            <option value='2'>Director</option>
                            <option value='3'>Manager</option>
                            <option value='4'>Customer</option>
                      </select>

                    </div>
                    <?php //echo $this->Form->submit('Submit', ['class' => 'btn  btn-primary']); ?>
                    <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
</div>


