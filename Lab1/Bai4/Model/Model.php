<? include 'Config/pdo.php'?>

<?
function get_course()
{
    include 'data.php';
    return array_values($course);
}

function find_by_semester($semester)
{
    include 'data.php';
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Môn học không hợp lệ');
}

function get_user_by_email($email)
{ {
        $db = new connect();
        $sql = "SELECT * FROM `users` WHERE email = '$email' ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }
}
