
<!-- Import main layout -->
<?= $this->extend('template\main')?>


<!-- Include the main content -->
<?= $this->section('content')?>
    <section class="card w-50 rounded-5 position-absolute top-50 start-50 translate-middle" style="box-shadow: 0 4px 12px -2px rgba(0,0,0,0.2);">
        <div class="card-body px-5 py-4">
            <h5 class="card-title text-center mb-5">Welcome to Talakayan!</h5>
            <form action="" class="w-75 mx-auto">
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size: 0.9em;">Email address</label>
                    <input type="email" class="form-control rounded-5 px-4 py-2" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label" style="font-size: 0.9em;">Password</label>
                    <input type="password" class="form-control rounded-5 px-4 py-2" id="password" aria-describedby="emailHelp">
                </div>
                <div class="mb-5">
                    <small>
                        <a href="#" class="link-underline link-underline-opacity-0">Forgot your password?</a>
                    </small>
                </div>
                <button class="btn btn-danger w-100 rounded-5 py-2 mb-3 fw-bold">LOGIN</button>
            </form>
            <p class="text-center fw-light">Don't have an account yet? <a href="/talakayan-online/account/new" class="link-underline link-underline-opacity-0 text-dark fw-bold">Sign up here</a>.</p>
        </div>
    </section>
<?= $this->endSection()?>