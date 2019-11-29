<?php

namespace PTTridi\Cekmutasi\Services;

use PTTridi\Cekmutasi\BaseClass;
use PTTridi\Cekmutasi\Support\Constant;

class Bank extends BaseClass
{
	private $config = [];

	public function __construct($configs = [])
	{
		parent::__construct();

		$this->config = $configs;
	}

	/**
	*	Search bank mutation
	*
	*	@param Array $options
	*
	*	@return Object PTTridi\Cekmutasi\BaseClass::request()
	*
	**/

	public function search($options = [])
	{
		return $this->request('/bank/search', Constant::HTTP_POST, [
			'search'	=> $options
		]);
	}
}