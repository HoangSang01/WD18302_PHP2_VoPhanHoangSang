<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['final_success'])) {
?>
    <script>
        swal("Hoàn tất", "Vô hiệu hoá người dùng thành công", "success");
    </script>
<?php
    unset($_SESSION['final_success']);
}
if (isset($_SESSION['final_err'])) {
?>
    <script>
        swal("Thất bại", "Không thể vô hiệu hoá quản trị viên, hãy thay đổi vai trò người dùng trước", "error");
    </script>
<?php
    unset($_SESSION['final_err']);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Danh sách người dùng</h6>
                <!-- <?
                        if (isset($_SESSION['final_err'])) {
                            echo '<div class="alert alert-danger" role="alert">';
                            unset($_SESSION['final_err']);
                            echo '</div>';
                        }
                        if (isset($_SESSION['final_success'])) {
                            echo '<div class="alert alert-success" role="alert"></div>.
                    ';
                            unset($_SESSION['final_success']);
                            echo '';
                        }
                        ?> -->

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tài khoản</th>
                                <th scope="col">Email</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Vai trò</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? foreach ($data as $value) :
                                extract($value) ?>
                                <tr>
                                    <th scope="row"><?= $user_id ?></th>
                                    <td><?= $username ?></td>
                                    <td><?= $email ?></td>
                                    <td><? if ($number) {
                                            echo $number;
                                        } else {
                                            echo '<p class="text-muted">Chưa cập nhật</p>';
                                        } ?></td>
                                    <td><? if ($full_name) {
                                            echo $full_name;
                                        } else {
                                            echo '<p class="text-muted">Chưa cập nhật</p>';
                                        } ?></td>
                                    <td><? if ($cityName) {
                                            echo $cityName;
                                        } else {
                                            echo '<p class="text-muted">Chưa cập nhật</p>';
                                        } ?></td>
                                    <td><? if ($role == 1) {
                                            echo $role_name;
                                        } else {
                                            echo '<p class="text-success">' . $role_name . '</p>';
                                        } ?></td>
                                    <td style="padding-top:0px;width:8%">
                                        <button onclick="return submitForm(<?= $user_id ?>)" style="float:right;" class="btn btn-square btn-outline-danger m-2"> <i class="fas fa-trash"></i></button>
                                        <a href="?url=UserController/profile&profile_id=<?= $user_id ?>"><button style="float:right;" type="submit" class="btn btn-square btn-outline-info m-2"><i class="fa fa-info-circle"></i></button></a>
                                    </td>
                                </tr>
                            <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function submitForm(user_id) {

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