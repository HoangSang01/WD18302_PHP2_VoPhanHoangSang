<?
require_once 'vendor/autoload.php';

use App\Core\Base;
use App\Core\Field;
use App\Core\Form;

// $base = new Base();

// echo $base->getName().'<br>';

// $base->setName('js').'<br>';

// echo $base->getName().'<br>';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
    <h1>Tạo tài khoản</h1>
    <? $form = Form::begin('information.php', 'post') ?>
    <div class="row">
        <? echo $form->field('firstname'); ?>
        <? echo $form->field('lastname'); ?>
        <? echo $form->field('email'); ?>
        <? echo $form->field('password')->passwordField(); ?>
        <? echo $form->field('confirmpassword')->passwordField(); ?>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        <?= FORM::end(); ?>
    </div>
</div>