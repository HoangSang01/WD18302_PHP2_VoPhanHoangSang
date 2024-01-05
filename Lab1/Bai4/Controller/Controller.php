<?
include 'Model/Model.php';
include 'data.php';
$list_course = get_course();
$semester = (isset($_GET['semester'])) ? $_GET['semester'] : '';
$course_name = find_by_semester($semester);
$page_content = $course_name;

$email = "";
if (isset($_POST['users_btn'])){
    $email = $_POST['email'];
}
$users = get_user_by_email($email);
if (is_array($users)) {
    extract($users);
} else {
    $notice = "Không tìm thấy người dùng này";
}

include 'Views/view.php';
