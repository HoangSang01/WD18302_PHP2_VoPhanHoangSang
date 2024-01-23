<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6 mx-auto">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Sửa tài khoản</h6>
            <form>
                <div class="mb-3">
                    <label class="form-label">Tài khoản</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="username" readonly value="yuukirito0107">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" id="password2" name="password2">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="number" name="number">
                </div>
                <h6 class="mb-4">Địa chỉ</h6>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                    <option selected>Xã</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                    <option selected>Huyện</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                    <option selected>Tỉnh</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Vai trò</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Người dùng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Quản trị viên
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Thay đổi thông tin</button>
            </form>
        </div>
    </div>
</div>