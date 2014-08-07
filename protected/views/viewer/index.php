<?php
/* @var $this ViewerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Viewers',
);

$this->menu=array(
	array('label'=>'Create Viewer', 'url'=>array('create')),
	array('label'=>'Manage Viewer', 'url'=>array('admin')),
);
?>

<h1>Viewers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
