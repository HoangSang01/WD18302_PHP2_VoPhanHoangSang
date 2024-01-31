<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <form action="?url=LoginController/registerAction" method="POST">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i> Đăng ký</h3>
                        </a>
                        <!-- <h3>Đăng ký</h3> -->
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="username">
                        <label for="floatingText">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Mật khẩu</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Nhập lại mật khẩu</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="">Quên mật khẩu</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Đăng ký</button>
                    <p class="text-center mb-0">Bạn đã có tài khoản? <a href="?url=LoginController/login">Đăng nhập</a></p>
                </form>
            </div>
        </div>
    </div>
</div>