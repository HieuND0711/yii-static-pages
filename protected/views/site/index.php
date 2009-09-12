<?php $this->pageTitle = Yii::app()->name; ?>

<h1>
	Welcome, <?php echo Yii::app()->user->name; ?>!
</h1>

<p>
<?php echo CHtml::link("about", array('site/page/view/about')); ?>
