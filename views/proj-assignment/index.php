<?php 

use yii\helpers\Html;
//$projectassignment

$this->title = "ProjectAssignment";
$this->params['breadcrumbs'][] = $this->title;
?>
<h1
<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create project assignment.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Project Assignment',['/proj-assignment/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        
        <th>Person ID</th>
        <th>Project ID</th>
    </tr>
    <?php foreach($projassignment as $projassignments) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($projassignments->person_id, [
                '/proj-assignment/view',
                'id'=>$projassignments->id]); ?>
        </td>    
        <td><?= $projassignments->project_id ?></td>     
    </tr>
    <?php endforeach; ?>
</table>
