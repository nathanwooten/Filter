<?php

namespace nathanwooten\Filter;

use nathanwooten\Filter\{

	FilterAbstract

}

class FilterDot extends FilterAbstract
{

	public function __invoke( $value, $key = null, array $array = null, array $extra = null );

		if ( '.' === $value ) {
			return;
		}

		return $value;

	}

}
