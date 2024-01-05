<title><?= $course_name ?></title>
<div class="container" style="margin:5%;">
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
        <div class="button" style="padding-top:1%">
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
</div>