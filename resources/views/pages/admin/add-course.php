<div class="container py-3 my-3">
<div class="mt-4 row">
        <div class="col-12">
            <div class="card">
                <img src="./resources/assets/admin/img/header-blue-purple.jpg" alt="pattern-lines" class="top-0 rounded-2 position-absolute start-0 w-100 h-100">
                <div class="px-4 bg-cover card-body z-index-1">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <h3 class="text-white">Thêm khóa học</h3>
                            <p class="mb-4 text-white">Toàn bộ đánh giá của khóa học.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row min-vh-80 mt-5">
        <div class="col-12">
            <div class="multisteps-form">
                <div class="row">
                    <div class="mx-auto col-4 col-lg-3">
                        <div class="multisteps-form__progress card card-plain">
                            <div class="mb-3">
                                <button id="form-btn-1" class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle js-active" type="button" title="User Info">1</button>
                                <label for="form-btn-1">Thông tin khóa học</label>
                            </div>
                            <div class="mb-3">
                                <button id="form-btn-2" class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle" type="button" title="Address">2</button>
                                <label for="form-btn-2">Hình ảnh</label>
                            </div>
                            <div class="mb-3">
                                <button id="form-btn-3" class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle" type="button" title="Socials">3</button>
                                <label for="form-btn-3">Chứng chỉ</label>
                            </div>
                            <div class="mb-3">
                                <button id="form-btn-4" class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle" type="button" title="Socials">4</button>
                                <label for="form-btn-4">Thông tin khác</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-lg-9">
                        <form class="multisteps-form__form">

                            <div class="card-body card multisteps-form__panel js-active" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Thông tin chi tiết</h5>
                                <div class="multisteps-form__content">
                                    <div class="mt-3 row">
                                        <div class="col-12 col-sm-6">
                                            <label>Tên khóa học</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="Ví dụ: HTML5 & CSS 3" />
                                        </div>
                                        <div class="mt-3 col-12 col-sm-6 mt-sm-0">
                                            <label>Giảng Viên</label>
                                            <select class="form-control" name="choices-teacher" id="choices-teacher" multiple>
                                                <option value="Choice 1" selected>Nguyễn Văn A</option>
                                                <option value="Choice 2">Trần Văn C</option>
                                                <option value="Choice 3">Võ Yến D</option>
                                                <option value="Choice 4">Châu Văn E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="mt-4">Mô tả</label>
                                            <p class="text-xs form-text text-muted ms-1 d-inline">
                                                (không bắt buộc)
                                            </p>
                                            <div id="edit-deschiption" class="h-50">
                                                <p>Some initial <strong>bold</strong> text</p>
                                            </div>
                                        </div>
                                        <div class="mt-4 col-sm-6 mt-sm-0">
                                            <label class="mt-4">Giáo trình</label>
                                            <input type="text" class="form-control" placeholder="Thông tin giáo trình">
                                            <label>Chuyên nghành</label>
                                            <select class="form-control" name="choices-specialized" id="choices-specialized" multiple>
                                                <option value="Choice 1" selected>Lập trình Website</option>
                                                <option value="Choice 2">Marketing</option>
                                                <option value="Choice 3">Quản trị nhà hàng và khách sạn</option>
                                                <option value="Choice 4">Du lịch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4 button-row d-flex">
                                        <button class="mb-0 btn btn-dark ms-auto js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body card multisteps-form__panel" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Hình ảnh</h5>
                                <div class="multisteps-form__content">
                                    <div class="mt-3 row">
                                        <div class="col-12">
                                            <label>Ảnh khóa học</label>
                                            <div action="/file-upload" class="form-control dropzone" id="productImg"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4 button-row d-flex">
                                        <button class="mb-0 btn btn-white js-btn-prev" type="button" title="Prev">Trở lại</button>
                                        <button class="mb-0 btn btn-dark ms-auto js-btn-next" type="button" title="Next">Tiếp</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body card multisteps-form__panel" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Socials</h5>
                                <div class="multisteps-form__content">
                                    <div class="mt-3 row">
                                        <div class="col-12">
                                            <label>Ảnh khóa học</label>
                                            <div action="/file-upload" class="form-control dropzone" id="productImg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-4 button-row d-flex col-12">
                                        <button class="mb-0 btn btn-white js-btn-prev" type="button" title="Prev">Trở lại</button>
                                        <button class="mb-0 btn btn-dark ms-auto js-btn-next" type="button" title="Next">Tiếp</button>
                                    </div>
                                </div>
                            </div>

                    <div class="card-body card multisteps-form__panel" data-animation="FadeIn">
                        <h5 class="font-weight-bolder">Thông tin khác</h5>
                        <div class="mt-3 multisteps-form__content">
                            <div class="row">
                                <div class="col-3">
                                    <label>Thồ gian</label>
                                    <input class="multisteps-form__input form-control" type="text" placeholder="12 buổi" />
                                </div>
                                <div class="col-4">
                                    <label>Bài giảng</label>
                                    <input class="multisteps-form__input form-control" type="text" placeholder="22" />
                                </div>
                                <div class="col-5">
                                    <label>Câu đố</label>
                                    <input class="multisteps-form__input form-control" type="text" placeholder="15" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="mt-4 form-label">Số lần thi lại tối đa</label>
                                    <input class="multisteps-form__input form-control" type="text" placeholder="2" />
                                </div>
                            </div>
                            <div class="mt-4 button-row d-flex">
                            <button class="mb-0 btn btn-white js-btn-prev" type="button" title="Prev">Trở lại</button>
                                        <button class="mb-0 btn btn-dark ms-auto js-btn-next" type="button" title="Next">Tiếp</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>