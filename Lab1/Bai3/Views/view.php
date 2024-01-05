<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title><?= $course_name ?></title>
<div class="container" style="margin:5%;padding-left:10%;padding-right:10%">
    <img style="width:200px" src="https://insacmau.com/wp-content/uploads/2023/02/logo-fpt-polytechnic-1024x348.png" alt="">
    <form action="" method="get">
        <div class="name">
            <h2><?php
                echo $course_name;
                ?></h2>
        </div>
        <div class="list">
            <select name="semester">
                <option value="">Chọn môn học</option>
                <?php foreach ($course as $key => $value) : ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="button" style="padding-top:1%;">
            <input type="submit" name="button">
        </div>
    </form>
    <div class="users">
        <form action="" method="POST">
            <input type="text" name="email" id="" placeholder="Nhập email...">
            <input type="submit" name="users_btn">
        </form>
        <? if (isset($username)) {
            echo $lastname . " " . $firstname;
        } ?>
    </div>
    <h2>Danh sách người dùng</h2>
    <table>
        <tr>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>&nbsp</th>
        </tr>
        <? foreach ($list as $value) : ?>
            <tr>
                <? extract($value) ?>
                <td><? echo $lastname . " " . $firstname; ?></td>
                <td><?= $email ?></td>
                <td><?= $adress ?></td>
                <td><?= $number ?></td>
                <td style="text-align:center"><i class="fa fa-edit" style="font-size:24px"></i><i class="fa fa-trash-o" style="font-size:24px"></i></td>
            </tr>
        <? endforeach ?>
    </table>
</div>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

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