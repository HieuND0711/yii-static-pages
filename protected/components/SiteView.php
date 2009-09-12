<?php

class SiteView extends CViewAction {
	protected function resolveView($viewPath) {
		$viewPath = preg_replace('?/?', '.', $viewPath);
		parent::resolveView($viewPath);
	}
}
