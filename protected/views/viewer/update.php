<?php
/* @var $this ViewerController */
/* @var $model Viewer */

$this->breadcrumbs=array(
	'Viewers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Viewer', 'url'=>array('index')),
	array('label'=>'Create Viewer', 'url'=>array('create')),
	array('label'=>'View Viewer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Viewer', 'url'=>array('admin')),
);
?>

<h1>Update Viewer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>