<?php
/* @var $this yii\web\View */
$this->title = 'My Day';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Welcome <?php if(!Yii::$app->user->isGuest) { echo Yii::$app->user->identity->username; } ?>!</h3>

		<?php if(Yii::$app->user->isGuest) { ?>
        <p class="lead">Login to feed your all day activity.</p>
		<p><a class="btn btn-lg btn-success" href="<?php echo Yii::$app->homeUrl; ?>site/login">Login</a></p>
		<?php } ?>
		<h2><a href="<?php echo Yii::$app->homeUrl; ?>site/hello">Run AJAX Examples</a></h2>
		<p id="display_selected_action"></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Money</h2>

                <p>My Expenditure/Earnings today.</p>
				<?php if(!Yii::$app->user->isGuest) { ?><p><a href="javascript:void(0)" onClick="perform_action('view', 'expenses')">View</a>&nbsp;&nbsp;<a href="javascript:void(0)" onClick="perform_action('add', 'expenses')">Add</a></p><?php } ?>
            </div>
			<div class="col-lg-4">
                <h2>Work</h2>

                <p>My Daily Work.</p>
				<?php if(!Yii::$app->user->isGuest) { ?><p><a href="javascript:void(0)" onClick="perform_action('view', 'work')">View</a>&nbsp;&nbsp;<a href="javascript:void(0)" onClick="perform_action('add', 'work')">Add</a></p><?php } ?>
            </div>
            <div class="col-lg-4">
                <h2>Events</h2>

                <p>Any special event.</p>
				<?php if(!Yii::$app->user->isGuest) { ?><p><a href="javascript:void(0)" onClick="perform_action('view', 'event')">View</a>&nbsp;&nbsp;<a href="javascript:void(0)" onClick="perform_action('add', 'event')">Add</a></p><?php } ?>
            </div>
        </div>

    </div>
</div>
