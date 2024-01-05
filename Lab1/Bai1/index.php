<?
// Tạo mảng
$course = [
    's1' => 'Toán',
    's2' => 'Lý',
    's3' => 'Ngoại Ngữ'
];

// Model
function get_course()
{
    global $course;
    return array_values($course);
}

function find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Môn học không hợp lệ');
}

// Controller
$list_course = get_course();
$semester = (isset($_GET['semester'])) ? $_GET['semester'] : '';
$course_name = find_by_semester($semester);
$page_content = $course_name;
?>

<!-- View -->
<title><?= $course_name ?></title>
<div class="container" style="margin:5%;">
    <form action="" method="get">
        <div class="name" style="margin:1%">
            <?php
            echo $course_name;
            ?>
        </div>
        <div class="list">
            <select name="semester">
                <option value="">Chọn môn học</option>
                <?php foreach ($course as $key => $value) : ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="button" style="padding-top:1%">
            <input type="submit" name="button">
        </div>
    </form>
</div>