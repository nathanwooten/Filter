<?php

namespace nathanwooten\Filter;

use nathanwooten\Filter\{

	Filter

};

abstract class FilterAbstract implements Filter
{

	public abstract function __invoke( $value, $key = null, array $array = null, array $extra = null );

}
