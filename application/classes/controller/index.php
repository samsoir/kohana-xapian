<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
		$this->response->body = '<h1>It works!</h1>';
	}

}