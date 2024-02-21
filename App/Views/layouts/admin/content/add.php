<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6 mx-auto">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Thêm tài khoản</h6>
            <form action="?url=UserController/add_user_action" method="POST">
                <label for="form-label">Thông tin bắt buộc</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="username">
                    <label for="floatingText">Tên đăng nhập</label>
                    <?
                    if (isset($_SESSION['username_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['username_err']  . '</p>';
                        unset($_SESSION['username_err']);
                    }
                    ?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email</label>
                    <?
                    if (isset($_SESSION['email_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['email_err']  . '</p>';
                        unset($_SESSION['email_err']);
                    }
                    ?>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Mật khẩu</label>
                    <?
                    if (isset($_SESSION['password_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['password_err']  . '</p>';
                        unset($_SESSION['password_err']);
                    }
                    ?>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password2">
                    <label for="floatingPassword">Nhập lại mật khẩu</label>
                    <?
                    if (isset($_SESSION['password2_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['password2_err']  . '</p>';
                        unset($_SESSION['password2_err']);
                    }
                    ?>
                </div>
                <hr>
                <label for="form-label">Thông tin thêm (Không bắt buộc)</label>
                <div class="mb-3">
                    <label class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="full_name" name="full_name">
                    <?
                    if (isset($_SESSION['full_name_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['full_name_err']  . '</p>';
                        unset($_SESSION['full_name_err']);
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="number" name="number">
                    <?
                    if (isset($_SESSION['number_err'])) {
                        echo '<p style="color: red;">' . $_SESSION['number_err']  . '</p>';
                        unset($_SESSION['number_err']);
                    }
                    ?>
                </div>
                <h6 class="mb-4">Địa chỉ</h6>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" id="city">
                    <option value="" selected>Chọn tỉnh/thành phố</option>
                </select>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" id="district">
                    <option value="" selected>Chọn quận/huyện</option>
                </select>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" id="ward">
                    <option value="" selected>Chọn phường/xã</option>
                </select>
                <input type="hidden" id="cityName" name="cityName" value="">
                <input type="hidden" id="districtName" name="districtName" value="">
                <input type="hidden" id="wardName" name="wardName" value="">
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Vai trò</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Người dùng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="2">
                            <label class="form-check-label" for="gridRadios2">
                                Quản trị viên
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="clearfix">
                    <div class="float-end" role="status">
                        <button type="submit" class="btn btn-outline-success m-2">Thêm người dùng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
        renderCity(result.data);
    });

    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Id);
        }
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.value != "") {
                const result = data.filter(n => n.Id === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Id);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Id === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
            }
        };
    }
</script>
<script>
    $('#city').change(function() {
        var cityName = $(this).find('option:selected').text();
        $('#cityName').val(cityName);
    });

    $('#district').change(function() {
        var districtName = $(this).find('option:selected').text();
        $('#districtName').val(districtName);
    });

    $('#ward').change(function() {
        var wardName = $(this).find('option:selected').text();
        $('#wardName').val(wardName);
    });
</script>