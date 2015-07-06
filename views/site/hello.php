<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is a test page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
	
	<br><br><pre>AJAX Examples</pre>
	<?php
	echo Html::a('Click me', ['site/simpleajax'], [
        'id' => 'ajax_link_01',
        'data-on-done' => 'simpleDone',
    ]
	);
	echo Html::tag('div', '...', ['id' => 'ajax_result_01']);
	$this->registerJs("$('#ajax_link_01').click(handleAjaxLink);", \yii\web\View::POS_READY);
	
	echo '<br><br>';
	
	echo Html::beginForm('', 'post', ['id' => 'link_form']);
	
	echo "<div>" . Html::label('Name', 'name') . " "
		. Html::textInput('name', null, ['id' => 'name']) . "</div>";
	 
	echo "<div>" . Html::label('E-mail', 'email') . " "
		. Html::input('email', 'email', null, ['id' => 'email']) . "</div>";
	 
	echo Html::a('Click me', ['site/formajax'], [
			'id' => 'ajax_link_02',
			'data-on-done' => 'linkFormDone',
			'data-form-id' => 'link_form',
		]
	);
	 
	echo Html::endForm();
	 
	echo Html::tag('pre', '...', ['id' => 'ajax_result_02']);
	$this->registerJs("$('#ajax_link_02').click(handleAjaxLink);", \yii\web\View::POS_READY);
	?>
</div>
