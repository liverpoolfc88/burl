<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Url;
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
            <p>150</p>
            <p>Barcha silkalar</p>
        </div>
        <div class="col-md-6">
            <p>33258</p>
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
        <td><a href="<?=$value->org_url?>"><?=mb_substr($value->org_url,0,20);echo(strlen($value->org_url)>20)?'...':'' ?></a> </td>
        <td> <?=date('d-m-Y',$value->gen)?></td>
        <td><?=$value->click?></td>
        <td><a href="<?=Url::base(true)."/".$value->short_link?>" target="_blank" data-id="<?=$value->id?>" class="href"><?=Url::base(true)."/".$value->short_link?></a></td>
        <td> <a href="<?=Url::to(['/url/view','id'=>$value->id]);?>"><span  aria-hidden="true"></span>Analitika</a></td>

    </tr>
    <?}?>

</table>


<?
$this->registerJs('
// a tegidagi href id si
    $(".href").click(function(e){
        e.preventDefault();
        var data = $(this).attr("data-id");
        var href  =$(this).attr("href");
        $.get("updateclick",{id: data},function(response){
            if(response.result=="success") {
//            consolga rezultat chiqarilmoqda
                window.open(href, "_blank");
            }
//            consolga rezultat chiqarilmoqda
            else console.log(response.result);
        });
        
    });

');

?>