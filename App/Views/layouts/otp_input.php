<?

use App\Validation\Validation;

$validate = new Validation;
?>

<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <form action="?url=LoginController/otpCheck" method="POST">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Quên mật khẩu</h3>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="otp">
                        <label for="floatingInput">Mã OTP</label>
                        <?
                        if (isset($_SESSION['final_success'])) {
                            echo '<p style="color: green;">' . $_SESSION['final_success']  . '</p>';
                        }
                        unset($_SESSION['final_success']);
                        if (isset($_SESSION['otp_err'])) {
                            echo '<p style="color: red;">' . $_SESSION['otp_err']  . '</p>';
                        }
                        unset($_SESSION['otp_err']);
                        ?>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="?url=LoginController/login" style="color:gray">Trở lại đăng nhập</a>
                    </div>
                    <input type="hidden" value="<?= $_SESSION['email'] ?>" name="email">
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Quên mật khẩu</button>
                    <p class="text-center mb-0">Bạn chưa có tài khoản? <a href="?url=LoginController/register">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
</div>