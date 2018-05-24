<?php 

use yii\helpers\Html;
//$project

$this->title = "Projects";
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Create Project',['/projects/create'],
    ['class'=>'btn btn-primary btn-lg pull-right']); ?>

<h1><?= $this->title?></h1>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Project Name</th>
        <th>Status</th>
        <th>Last day to show in reports</th>
    </tr>

    <?php foreach($projects as $project) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($project->project_name, [
                '/projects/view',
                'id'=>$project->id]); ?>
        </td>
         <td><?= $project->status ?></td> 
          <td><?= $project->last_days_to_showing_reports ?></td>    
    </tr>
    <?php endforeach; ?>
</table>