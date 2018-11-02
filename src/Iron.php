<?php

namespace Iron;

use Iron\Traits\CarbonWrapping;
use Iron\Traits\Constructors;
use Iron\Traits\FinalTransformers;

class Iron
{
    use FinalTransformers;
    use Constructors;
    use CarbonWrapping;

    private $dateTime;
}
