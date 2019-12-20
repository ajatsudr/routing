<?php

namespace Modules\View;

class HomeView {
	
	private $template;
	private $helper;
	
	public function output(\Modules\Model\HomeModel $model) {
		
		$this->template = new \Modules\Library\Template();
		$this->helper = new \Modules\Library\Helper();
		
		$this->template->assign('baseurl', $this->helper->baseurl);
		$this->template->render('home');
	}
}