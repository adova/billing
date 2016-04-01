<div class="page-title">
    <span class="title">Edit Information </span>
    <div class="description"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Edit User') ?></legend>
                    <div class='form-group'>
                        <?= $this->Form->input('first_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?= $this->Form->input('last_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?= $this->Form->input('email', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?= $this->Form->input('phone', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <?= $this->Form->input('address', ['class' => 'form-control']); ?>
                    </div>
                    <div class='form-group'>
                        <label for="role">Role</label>
                        <select class='form-control' name='role'>
                            <option value='1' <?php echo $user->role == 1 ? "selected" : '' ?> >Admin</option>
                            <option value='2' <?php echo $user->role == 2 ? "selected" : '' ?>  >Bill Collector</option>
                            <option value='3' <?php echo $user->role == 3 ? "selected" : '' ?>  >Customer</option>
                        </select>
                    </div>
                </fieldset>
                <?php //echo $this->Form->submit('Submit', ['class' => 'btn  btn-primary']); ?>
                <input  type="submit" class="btn  btn-primary" value="Submit">
                </form>

            </div>
        </div>
    </div>
</div>


</div>
</div>