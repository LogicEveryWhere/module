<?php

class NewsModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'news.models.*',
			'news.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}

class TblBlog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblBlog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_blog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('views', 'required'),
			array('cat_id, views', 'numerical', 'integerOnly'=>true),
			array('alias, title, seo_title', 'length', 'max'=>255),
			array('date, intro_text, full_text, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, alias, cat_id, date, intro_text, full_text, title, seo_title, description, views', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'alias' => 'Alias',
			'cat_id' => 'Cat',
			'date' => 'Date',
			'intro_text' => 'Intro Text',
			'full_text' => 'Full Text',
			'title' => 'Title',
			'seo_title' => 'Seo Title',
			'description' => 'Description',
			'views' => 'Views',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('intro_text',$this->intro_text,true);
		$criteria->compare('full_text',$this->full_text,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('views',$this->views);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}