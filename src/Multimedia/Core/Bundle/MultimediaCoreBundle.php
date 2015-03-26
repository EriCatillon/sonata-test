<?php

namespace Multimedia\Core\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MultimediaCoreBundle extends Bundle
{
	public function getParent()
	{
		return 'ApplicationSonataPageBundle';
	}
}
