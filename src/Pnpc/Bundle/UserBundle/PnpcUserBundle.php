<?php

namespace Pnpc\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PnpcUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
