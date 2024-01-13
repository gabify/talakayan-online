<!-- Import main layout -->
<?= $this->extend('template\main')?>


<!-- Include the main content -->
<?= $this->section('content')?>

    <section class="card w-50 rounded-5 position-absolute top-50 start-50 translate-middle" style="box-shadow: 0 4px 12px -2px rgba(0,0,0,0.2);">
        <div class="card-body px-5 py-4">
            <h5 class="card-title text-center mb-4">Welcome to Talakayan!</h5>
            <form action="/talakayan-online/account/new" method="POST" class="w-75 mx-auto">
                <?php if(isset($errors)):?>
                    <div class="alert alert-danger text-center" role="alert">
                        <i class="bi bi-exclamation-circle-fill"></i>
                        An error occured! Please try again!
                    </div>
                <?php endif;?>
                <?= csrf_field()?>
                <div class="mb-3">
                    <label for="username" class="form-label" style="font-size: 0.9em;">Username</label>
                    <input type="text" 
                            class="form-control rounded-5 px-4 py-2" 
                            id="username" 
                            name="username" 
                            aria-describedby="emailHelp"
                            value="<?= set_value('username')?>">
                    <?php if(isset($errors['username'])):?>
                        <small class="text-danger ms-3 fw-bold">
                            <?php echo '*'.$errors['username']?>
                        </small>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size: 0.9em;">Email address</label>
                    <input type="email" 
                            class="form-control rounded-5 px-4 py-2" 
                            id="email" 
                            name="email" 
                            aria-describedby="emailHelp"
                            value="<?= set_value('email')?>">
                        <?php if(isset($errors['email'])):?>
                            <small class="text-danger ms-3 fw-bold">
                                <?php echo '*'.$errors['email']?>
                            </small>
                        <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="font-size: 0.9em;">Password</label>
                    <input type="password" 
                            class="form-control rounded-5 px-4 py-2" 
                            id="password" 
                            name="password" 
                            aria-describedby="emailHelp">
                        <?php if(isset($errors['password'])):?>
                            <small class="text-danger ms-3 fw-bold">
                                <?php echo '*'.$errors['password']?>
                            </small>
                        <?php endif;?>
                </div>
                <div class="mb-4">
                    <label for="re-password" class="form-label" style="font-size: 0.9em;">Retype-Password</label>
                    <input type="password" 
                            class="form-control rounded-5 px-4 py-2" 
                            id="re-password" 
                            name="re_pass" 
                            aria-describedby="emailHelp">
                        <?php if(isset($errors['re_pass'])):?>
                            <small class="text-danger ms-3 fw-bold">
                                <?php echo '*'.$errors['re_pass']?>
                            </small>
                        <?php endif;?>
                </div>
                <button type="submit" name="register" class="btn btn-danger w-100 rounded-5 py-2 mb-3 fw-bold">REGISTER</button>
            </form>
            <p class="text-center fw-light">Already have an account? <a href="/talakayan-online/login" class="link-underline link-underline-opacity-0 text-dark fw-bold">Log in here</a>.</p>
            <div class="text-center">
                <small class="text-secondary">By continuing, you agree to Talakayan's 
                    <a href="" class="fw-bold text-dark link-dark link-underline link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Terms of Service & Privacy Policy</a>
                </small>
            </div>
        </div>
    </section>
<?= $this->endSection()?>