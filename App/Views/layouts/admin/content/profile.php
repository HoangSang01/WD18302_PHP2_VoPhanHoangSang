<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6 mx-auto">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Thông tin tài khoản</h6>
            <div class="row">
                <div class="col-sm-4">
                    <b>Tên đăng nhập</b>
                </div>
                <div class="col-sm-5">
                    <p><?= $username ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <b>Mật khẩu</b>
                </div>
                <div class="col-sm-5">
                    <p>**********</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p><b>Lần đổi mật khẩu gần nhất</b></p>
                </div>
                <div class="col-sm-5">
                    <? if (isset($time)) {
                        echo $time;
                    } else {
                        echo '<p class="text-muted">Chưa cập nhật</p>';
                    } ?>
                </div>
            </div>
            <?
            if ($_GET['profile_id'] ==  $_SESSION['user_id'])
                echo '
            <div class="clearfix">
            <div class="float-end" role="status">
            <a href="?url=UserController/edit_password&profile_id=' . $user_id . '"><button type="button" class="btn btn-outline-warning m-2">Đổi mật khẩu</button></a>
            </div>
            </div>';
            if (isset($_SESSION['final_success'])) {
                echo '<div class="p-2 mb-2 bg-success text-white">' . $_SESSION['final_success'] . '</div>';
                unset($_SESSION['final_success']);
            }
            ?>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <b>Họ và tên</b>
                </div>
                <div class="col-sm-5">
                    <? if ($full_name) {
                        echo '<p>' . $full_name . '</p>';
                    } else {
                        echo '<p class="text-muted">Chưa cập nhật</p>';
                    } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <b>Số điện thoại</b>
                </div>
                <div class="col-sm-5">
                    <? if ($number) {
                        echo '<p>' . $number . '</p>';
                    } else {
                        echo '<p class="text-muted">Chưa cập nhật</p>';
                    } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <b>Email</b>
                </div>
                <div class="col-sm-5">
                    <p><?= $email ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <b>Địa chỉ</b>
                </div>
                <div class="col-sm-5">
                    <p>
                        <? if ($province != 9999) {
                            echo $ward_name . ', ' . $district_name . ', ' . $province_name;
                        } else {
                            echo '<p class="text-muted">Chưa cập nhật</p>';
                        } ?>
                    </p>
                </div>
            </div>
            <?
            if (!isset($_GET['hidden'])) {
                echo '<div class="clearfix">
                <div class="float-end" role="status">
                    <a href="?url=UserController/edit&profile_id=' . $user_id . '"><button class="btn btn-outline-warning m-2">Cập nhật thông tin</button></a>
                </div>
            </div>';
            };
            ?>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <b>Vai trò</b>
                </div>
                <div class="col-sm-5">
                    <p> <?= $role_name ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <b>Trạng thái tài khoản</b>
                </div>
                <div class="col-sm-5">
                    <p> <?= $status_name ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <b>Ngày đăng ký</b>
                </div>
                <div class="col-sm-5">
                    <p> <? $dateFromDatabase = $created_at;
                        $formattedDate = date('d/m/Y', strtotime($dateFromDatabase));
                        echo $formattedDate; ?></p>
                </div>
            </div>
            <?
            if (isset($_GET['hidden'])) {
            ?>
                <div class="clearfix">
                    <div class="float-end" role="status">
                        <button type="button" class="btn btn-outline-success m-2" onclick="return submitForm(<?= $user_id ?>)">Khôi phục tài khoản</button>
                    </div>
                </div>';
            <? } else {
            ?>
                <div class="clearfix">
                    <div class="float-end" role="status">
                        <button type="button" class="btn btn-outline-danger m-2" onclick="return submitForm2(<?= $user_id ?>)">Vô hiệu hoá tài khoản</button>
                    </div>
                </div>';
            <?
            };
            ?>

        </div>
    </div>
</div>
<script>
    function submitForm(user_id) {

        swal({
            title: 'Xác nhận khôi phục tài khoản',
            text: 'Tài khoản sẽ được khôi phục và lưu vào danh sách tài khoản hoạt động',
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = '?url=UserController/recovery&user_id=' + user_id;
            }
        });
    }

    function submitForm2(user_id) {

        swal({
            title: 'Xác nhận vô hiệu hoá tài khoản',
            text: 'Tài khoản sẽ bị ẩn khỏi hệ thống và lưu vào kho lưu trữ',
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = '?url=UserController/delete&user_id=' + user_id;
            }
        });
    }
</script>