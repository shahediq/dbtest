<?php
/* @var $this ViewerController */
/* @var $model Viewer */

$this->breadcrumbs=array(
	'Viewers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Viewer', 'url'=>array('index')),
	array('label'=>'Manage Viewer', 'url'=>array('admin')),
);
?>

<h1>Create Viewer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>