<?php
#parse("PHP File Header.php")

namespace Dg2\Models;

class ${NAME} extends DgModel {

	protected \$table = '${NAME}s';
	
	protected \$casts = [
		'deleted' => 'boolean',
	];
	
}