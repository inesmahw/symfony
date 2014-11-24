<?php

namespace ZIMZIM\CPBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ZIMZIMCPBundle extends Bundle
{
    public function getParent()
    {
        return 'ZIMZIMCategoryProductBundle';
    }
}
