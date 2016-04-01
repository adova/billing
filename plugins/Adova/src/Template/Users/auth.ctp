<ul class="nav nav-tabs nav-justified">
    <li class="active link-one"><a href="#login-block" data-toggle="tab"><i class="fa fa-sign-in"></i>Sign In</a></li>
    <li class="link-two"><a href="#register-block" data-toggle="tab"><i class="fa fa-pencil"></i>Sign Up</a></li>
    <li class="link-three"><a href="#contact-block" data-toggle="tab"><i class="fa fa-envelope"></i>Contact</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane active fade in" id="login-block">
        <!-- Login Block Form -->
        <div class="login-block-form">
            <!-- Heading -->
            <h4>Sign In to your Account</h4>
            <!-- Border -->
            <div class="bor bg-green"></div>
            <!-- Form -->
            <?php echo $this->Form->create($user, ['class' => 'form', 'role' => 'form']) ?>
            <!-- Form Group -->
            <div class="form-group">

                <!-- Label -->
                <!--                    <label class="control-label">Email Address</label>-->
                <!-- Input -->
                <!--                    <input type="text" class="form-control" placeholder="Enter Username">-->
                <?php echo $this->Form->input('email', ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <!--                    <label class="control-label">Password</label>-->
                <!--                    <input type="password" class="form-control" placeholder="Enter Password">-->
                <?php echo $this->Form->input('password', ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember
                    </label>
                </div>
            </div>
            <div class="form-group">
                <!-- Button -->
                <button type="submit" name="signin" class="btn btn-red">Sign In</button>
                &nbsp;
                <button type="submit" name="reset" class="btn btn-lblue">Reset</button>
            </div>
            <div class="form-group">
                <a href="#" class="black">Forget Password ?</a>
            </div>
            </form>
        </div>
    </div>
    <div class="tab-pane fade" id="register-block">
        <div class="register-block-form">
            <!-- Heading -->
            <h4>Create the New Account</h4>
            <!-- Border -->
            <div class="bor bg-lblue"></div>
            <!-- Form -->
            <?php echo $this->Form->create('Users', ['class' => 'form', 'role' => 'form']) ?>
            <!-- Form Group -->
            <div class="form-group">
                <?php echo $this->Form->input('first_name', ['class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('last_name', ['class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('email', ['class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('password', ['class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('phone', ['class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('address', ['class' => 'form-control']); ?>
            </div>
            <div class="form-group">

                <div class="checkbox">
                    <div class="checkbox3 checkbox-round">
                        <input type="checkbox" id="checkbox-1">
                        <label for="checkbox-1">
                            Remember me.
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <!-- Buton -->
                <button type="submit" name="signup" class="btn btn-red">Submit</button>
                &nbsp;
                <button type="submit" name="reset" class="btn btn-lblue">Reset</button>
            </div>
            </form>
        </div>
    </div>
    <div class="tab-pane fade" id="contact-block">
        <!-- Contact Block Form -->

        <div class="contact-block-form">
            <h4>Contact Form</h4>
            <!-- Border -->
            <div class="bor bg-purple"></div>
            <!-- Form -->
            <?php echo $this->Form->create('Users', ['class' => 'form', 'role' => 'form']) ?>
            <!-- Form Group -->
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label class="control-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="comments" class="control-label">Comments</label>
                <textarea class="form-control" id="comments" rows="5" placeholder="Enter Comments"></textarea>
            </div>
            <div class="form-group">
                <!-- Buton -->
                <button type="submit" name="contact" class="btn btn-red">Submit</button>
                &nbsp;
                <button type="submit" name="reset" class="btn btn-lblue">Reset</button>
            </div>
            </form>
        </div>
    </div>
</div>
