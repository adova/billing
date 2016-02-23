<!-- Main Content -->
    <div class="login-box">
        <div>
            <div class="login-form row">
                <div class="col-sm-12 text-center login-header">
                    <i class="login-logo fa fa-connectdevelop fa-4x"></i>
                    <h4 class="login-title">Flat Admin V2</h4>
                </div>
                <div class="col-sm-12">
                    <div class="login-body">
                        <div class="progress hidden" id="login-progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 100%">
                                Log In...
                            </div>
                        </div>
                        <?php echo $this->Form->create($user) ?>
                            <div class='form-group'>
                                <?php echo $this->Form->input('email', ['class' => 'form-control']); ?>
                            </div>
                            <div class='form-group'>
                                <?php echo $this->Form->input('password', ['class' => 'form-control']); ?>
                            </div>
                            <div class="login-button text-center">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="login-footer">
                        <span class="text-left"><a href="#" class="color-white">Sign Up</a></span>
                        <span class="text-right"><a href="#" class="color-white">Forgot password?</a></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="app-footer">
    <div class="wrapper">
        <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
    </div>
</footer>