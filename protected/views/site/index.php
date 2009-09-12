<?php $this->pageTitle = Yii::app()->name; ?>

<h2>Static pages examples</h2>

<h3>Welcome, <?php echo Yii::app()->user->name; ?></h3>

<p>
<?php echo CHtml::link("about via 'site/page/view/about'", array('site/page/view/about')); ?>
<p>
<?php echo CHtml::link("about via 'view/about'", array('view/about')); ?>
<p>
<?php echo CHtml::link("view/more/info via 'view/more.info'", array('view/more.info')); ?>
<p>
<?php echo CHtml::link("view/more/info via 'view/more/info'", array('view/more/info')); ?>
