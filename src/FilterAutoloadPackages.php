<?php

namespace nathanwooten\Filter;

class FilterAutoloadPackages extends FilterAbstract
{

	public function __invoke( $value, $key = null, array $array = null, array $extra = null )
	{

		if ( in_array( $value, [ 'Filesystem' ] ) ) {
			return $value;
		}

	}

}
