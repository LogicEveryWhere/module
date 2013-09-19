<?php
/* @var $this BlogController */
/* @var $model TblBlog */

$this->breadcrumbs=array(
	'Tbl Blogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblBlog', 'url'=>array('index')),
	array('label'=>'Manage TblBlog', 'url'=>array('admin')),
);
?>

<h1>Create TblBlog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>