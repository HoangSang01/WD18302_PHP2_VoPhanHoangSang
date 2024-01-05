<?
include 'Model/Model.php';
include 'data.php';
$list_course = get_course();
$semester = (isset($_GET['semester'])) ? $_GET['semester'] : '';
$course_name = find_by_semester($semester);
$page_content = $course_name;

include 'Views/view.php';
?>
