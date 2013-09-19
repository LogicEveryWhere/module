<?php
/* @var $this BlogController */
/* @var $model TblBlog */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblBlog', 'url'=>array('index')),
	array('label'=>'Create TblBlog', 'url'=>array('create')),
	array('label'=>'Update TblBlog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblBlog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblBlog', 'url'=>array('admin')),
);
?>

<h1>View TblBlog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alias',
		'cat_id',
		'date',
		'intro_text',
		'full_text',
		'title',
		'seo_title',
		'description',
		'views',
	),
)); ?>
