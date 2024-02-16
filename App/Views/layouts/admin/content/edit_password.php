<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6 mx-auto">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Thay đổi mật khẩu</h6>
            <form action="?url=UserController/editPassword">
                <div class="mb-3">
                    <label class="form-label">Mật khẩu cũ</label>
                    <input type="password" class="form-control" name="old_password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu mới</label>
                    <input type="password" class="form-control" name="new_password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="confirm_password">
                </div>
                <div class="clearfix">
                    <div class="float-end" role="status">
                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <button type="submit" name="edit" class="btn btn-outline-success m-2">Thay đổi mật khẩu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>