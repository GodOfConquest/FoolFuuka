<?php

namespace Foolz\Foolfuuka\Theme\Foolfuuka\Partial;

class Appeal extends \Foolz\Theme\View
{
	public function toString()
	{
		$title = $this->getParamManager()->getParam('title');

		?>
			<div class="alert alert-success" style="margin:15% 30%;">
				<h4 class="alert-heading"><?= e($title) ?></h4>
				<br/>
				<?= \Form::open(); ?>
				<?= Form::hidden(\Config::get('security.csrf_token_key'), \Security::fetch_token()); ?>
				<?= __('Explain in short (max. 500 chars) why your ban should be lifted.') ?>
				<br/>
				<?= \Form::textarea('appeal', null, ['style' => 'width: 100%; height: 100px; margin: 10px 0']) ?>
				<?= \Form::submit(['name' => 'submit', 'value' => __('Submit'), 'class' => 'btn btn-inverse']) ?>
				<?= \Form::close(); ?>
			</div>
		<?php
	}
}
