<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\States */

$this->title = 'Update State: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Active Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country->name, 'url' => ['viewstates', 'country_id' => $model->country->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="states-update">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body table-responsive">
					<div class="states-form">

						<?php $form = ActiveForm::begin(); ?>

						<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

						<div class="form-group">
							<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
						</div>

						<?php ActiveForm::end(); ?>

					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
    </div><!-- /.row -->
</div>
