<?php
/* @var $this MovieController */
/* @var $model Movie */

$this->breadcrumbs=array(
	'Movies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Movie', 'url'=>array('index')),
	array('label'=>'Manage Movie', 'url'=>array('admin')),
);
?>

<h1>Create Movie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>