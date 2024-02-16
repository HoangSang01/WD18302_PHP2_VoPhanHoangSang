<?php
// Kết nối CSDL và tạo các hàm để lấy dữ liệu

if (isset($_POST['province_id'])) {
    // Lấy dữ liệu huyện dựa trên tỉnh đã chọn
    $provinceId = $_POST['province_id'];
    // Thực hiện truy vấn lấy dữ liệu huyện
    // Sau đó trả về HTML options cho select box huyện
    $district_options = '<option value="">Chọn huyện</option>';
    // Duyệt dữ liệu huyện và hiển thị dưới dạng option
    echo json_encode(['district_options' => $district_options]);
} elseif (isset($_POST['district_id'])) {
    // Lấy dữ liệu xã dựa trên huyện đã chọn
    $districtId = $_POST['district_id'];
    // Thực hiện truy vấn lấy dữ liệu xã
    // Sau đó trả về HTML options cho select box xã
    $ward_options = '<option value="">Chọn xã</option>';
    // Duyệt dữ liệu xã và hiển thị dưới dạng option
    echo json_encode(['ward_options' => $ward_options]);
}
