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
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Vai trò</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? foreach ($data as $value) :
                                extract($value) ?>
                                <tr>
                                    <th scope="row"><?= $id ?></th>
                                    <td><?= $username ?></td>
                                    <td><?= $email ?></td>
                                    <td>0907370341</td>
                                    <td>Hậu Giang</td>
                                    <td>Hoạt động</td>
                                    <td>Quản trị viên</td>
                                    <td style="padding-top:0px">
                                        <button style="float:right;" type="button" class="btn btn-square btn-outline-danger m-2"><i class="fas fa-trash"></i></button>
                                        <a href="/?url=UserController/edit"><button style="float:right;" type="button" class="btn btn-square btn-outline-warning m-2"><i class="fas fa-edit"></i></button></a>
                                        <button style="float:right;" type="button" class="btn btn-square btn-outline-info m-2"><i class="fa fa-info-circle"></i></button>
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