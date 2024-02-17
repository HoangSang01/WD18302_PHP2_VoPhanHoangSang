<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Danh sách người dùng</h6>
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
                                    <td><? if ($province != 9999) {
                                            echo $province_name;
                                        } else {
                                            echo '<p class="text-muted">Chưa cập nhật</p>';
                                        } ?></td>
                                    <td><? if ($role == 1) {
                                            echo $role_name;
                                        } else {
                                            echo '<p class="text-success">' . $role_name . '</p>';
                                        } ?></td>
                                    <td style="padding-top:0px">
                                        <button style="float:right;" type="button" class="btn btn-square btn-outline-danger m-2"><i class="fas fa-trash"></i></button>
                                        <!-- <a href="/?url=UserController/edit"><button style="float:right;" type="button" class="btn btn-square btn-outline-warning m-2"><i class="fas fa-edit"></i></button></a> -->
                                        <input type="hidden" name="profile_id" value=<?= $user_id ?>>
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