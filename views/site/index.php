<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<section style="margin-top: 50px; margin-bottom: 200px">
    <div style="text-align: center;" class="col-md-6">
<!--        <h5 style="font-weight: bold;">Silkangizni kiriting:</h5>-->

        <?= $this->render('/url/_form', [
            'model' => $model,
        ]) ?>


    </div>
    <div style="text-align: center; font-size: 20px" class="col-md-6">
        <p >Statistika:</p>
        <div class="col-md-6">
<!--            --><?// $getCountId = 0;
//            foreach ($getClick as $key){
//                $getCountId += 1;
//            }
//            ?>
            <p><?=$count?></p>
            <p>Barcha silkalar</p>
        </div>
<!--        --><?//
//            foreach ($silka as $key => $value){
//                $cost+=$value->click;
//                }
//
//
//        ?>

        <div class="col-md-6">
            <p><?=$cost?></p>
            <p>Barcha o`tishlar</p>
        </div>
    </div>
</section>


<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>





<p>Add the border-bottom property to th and td for horizontal dividers:</p>

<table>
    <tr>
        <th>Kiritilgan link</th>
        <th>Hosil qilingan</th>
        <th>Klik</th>
        <th>Tayyor link</th>
        <th></th>
    </tr>

    <?
    foreach ($silka as $key => $value){
    ?>

    <tr>
<!--        <td><a class="k" href="--><?//=$value->org_url?><!--">--><?//=$value->org_url?><!--</a> </td>-->
        <td><a href="<?=$value->org_url?>"><?=mb_substr($value->org_url,0,20);echo(strlen($value->org_url)>20)?'...':'' ?></a> </td>
        <td> <?=date('d-m-Y',$value->gen)?></td>
        <td><?=$value->click?></td>
        <td><a href="<?=Url::base(true)."/".$value->short_link?>" target="_blank" data-id="<?=$value->id?>" class="href"><?=Url::base(true)."/".$value->short_link?></a></td>
        <td> <a href="<?=Url::to(['/url/view','id'=>$value->id]);?>"><span  aria-hidden="true"></span>Analitika</a></td>

    </tr>



    <?}?>
    <tr>
        <td > <div  >jkdsh sdhdshfdhsghjf dkhsgfkgfkhsdg kdgkg123</div> </td>
        <td>123</td>
        <td>123</td>
        <td>123</td>
    </tr>
</table>
<div class="col-sm-6 text-left">
    <?= LinkPager::widget([
        'pagination' => $pagination,
    ]);?>
</div>
    <p>


    </p>
<!--<style>-->
<!--tr td a  {-->
<!--white-space: nowrap;-->
<!--width: 10px;!important;-->
<!--overflow: hidden;-->
<!--text-overflow: ellipsis;-->
<!--border: 1px solid #000000;-->
<!--}-->
<!--</style>-->
