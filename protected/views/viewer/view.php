<?php
/* @var $this ViewerController */
/* @var $model Viewer */

$this->breadcrumbs=array(
	'Viewers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Viewer', 'url'=>array('index')),
	array('label'=>'Create Viewer', 'url'=>array('create')),
	array('label'=>'Update Viewer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Viewer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Viewer', 'url'=>array('admin')),
);
?>

<h1>View Viewer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
