<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6 mx-auto">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Thay đổi mật khẩu</h6>
            <form action="?url=UserController/edit_password_action" method="post">
                <div class="mb-3">
                    <label for="oldPassword" class="form-label">Mật khẩu cũ</label>
                    <input type="password" class="form-control" name="oldPassword" id="oldPassword">
                    <?
                    if (isset($_SESSION['password_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['password_err'] . '</p>';
                        unset($_SESSION['password_err']);
                    }
                    ?>
                </div>
                <!-- <div class="clearfix">
                <div class="float-end" role="status">
                    <button class="btn btn-outline-success m-2" id="checkPassword">Kiểm tra mật khẩu</button>
                </div>
            </div> -->
                <!-- <div id="changePasswordForm" style="display:none;"> -->
                <div class="mb-3">
                    <label class="form-label">Mật khẩu mới</label>
                    <input type="password" class="form-control" name="newPassword" id="newPassword">
                    <?
                    if (isset($_SESSION['password2_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['password2_err'] . '</p>';
                        unset($_SESSION['password2_err']);
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="confirmPassword">
                    <?
                        if (isset($_SESSION['password3_err'])) {
                            echo '<p style="color: red;">' . $_SESSION['password3_err'] . '</p>';
                            unset($_SESSION['password3_err']);
                        }
                        ?>
                </div>
                <div class="clearfix">
                    <div class="float-end" role="status">
                        <input type="hidden" name="profile_id" value="<?= $_GET['profile_id'] ?>">
                        <button type="submit" class="btn btn-outline-success m-2">Thay đổi mật khẩu</button>
                    </div>
                </div>
                <!-- </div> -->
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#checkPassword").click(function() {
            var oldPassword = $("#oldPassword").val();
            $.ajax({
                url: 'check_pass.php',
                type: 'post',
                data: {
                    oldPassword: oldPassword
                },
                success: function(response) {
                    if (response == "success") {
                        $("#changePasswordForm").show();
                    } else {
                        alert("sai mật khẩu");
                    }
                }
            });
        });
    });
</script>