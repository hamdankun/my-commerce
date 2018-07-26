<?php

namespace App\FactoryData;

use App\FactoryData\MapFactory;

class MapFactory {

	protected $data;

	public function lists() {
		return collect($this->data);
	}

}