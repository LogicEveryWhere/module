<?php
/* @var $this BlogController */
/* @var $model TblBlog */

$this->breadcrumbs=array(
	'Tbl Blogs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblBlog', 'url'=>array('index')),
	array('label'=>'Create TblBlog', 'url'=>array('create')),
	array('label'=>'View TblBlog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblBlog', 'url'=>array('admin')),
);
?>

<h1>Update TblBlog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>