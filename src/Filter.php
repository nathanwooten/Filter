<?php

namespace nathanwooten\Filter;

use nathanwooten\Filter\{

	FilterPackage

};

interface Filter extends FilterPackage
{

	public function __invoke( $value, $key = null, array $array = null, array $extra = null );

}