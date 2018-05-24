<?php 

use yii\helpers\Html;
//$people

$this->title = "People";
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Create Person',['/person/create'],
    ['class'=>'btn btn-primary btn-lg pull-right']); ?>

<h1><?= $this->title?></h1>

<table class="table table-bordered table-hovered">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>General Info</th>
    </tr>
    <?php foreach($person as $people) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($people->firstname, [
                '/person/view',
                'id'=>$people->id]); ?>
        </td>
         <td><?= $people->lastname ?></td> 
          <td><?= $people->general_info ?></td>    
    </tr>
    <?php endforeach; ?>
</table>