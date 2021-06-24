<?php

namespace nathanwooten\Filter;

use nathanwooten\Filter\{

	FilterAbstract

};

use function nathanwooten\Filesystem\Functions\{

	has_extension

};

class FilterFile extends FilterAbstract
{

	public function __invoke( $value, $key = null, array $array = null, array $extra = null )
	{

		extract( $extra );

		if ( is_file( $value ) || has_extension( $value ) || ( isset( $directory ) && is_file( $directory . $value ) ) ) {
			return;
		}

		return $value;

	}

}
