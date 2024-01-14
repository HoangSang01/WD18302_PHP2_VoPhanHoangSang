<?
require_once 'vendor/autoload.php';

use App\Core\Base;
use App\Core\Field;
use App\Core\Form;

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<div class="container">
    <h1>Tạo tài khoản</h1>
    <? $form = Form::begin('', 'post') ?>
    <div class="row">
        <? echo $form->field('firstname'); ?>
        <? echo $form->field('lastname'); ?>
        <? echo $form->field('email'); ?>
        <? echo $form->field('password')->passwordField(); ?>
        <? echo $form->field('confirmpassword')->passwordField(); ?>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        <?= Form::end(); ?>
    </div>
</div>

<?
$user = new Base();
$list = $user->get_User();
?>
<?
// xoá người dùng
if (isset($_POST['remove'])) {
    $user->remove_User($_POST['id']);
    echo '<script>window.location.href="index.php";</script>';
}
// thêm người dùng
if (isset($_POST['submit'])) {
    if ($_POST['email'] != '' && $_POST['firstname'] != '' && $_POST['lastname'] != '' && $_POST['password'] != '' && $_POST['confirmpassword'] != '') {
        $username = $_POST['firstname'] . $_POST['lastname'];
        $user->add_User($username, $_POST['password'], $_POST['email']);
        echo '<script>window.location.href="index.php";</script>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Nhập lại cho đủ đi nha!
      </div>';
    }
};
?>
<table>
    <tr>
        <th>Tài khoản</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>&nbsp</th>
    </tr>
    <? foreach ($list as $value) : ?>
        <tr>
            <? extract($value) ?>
            <td><?= $username ?></td>
            <td><?= $password ?></td>
            <td><?= $email ?></td>
            <td>
                <form method="post" action=""><input name="id" type="hidden" value="<?= $id ?>"><button name="remove" type="submit">Xoá</button></form>
            </td>
            </td>
        </tr>
    <? endforeach ?>
</table>
<?

?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>