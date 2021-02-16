<?php

declare(strict_types=1);

namespace VeeWee\Xml\Writer\Builder;

use Generator;
use XMLWriter;

interface BuilderInterface
{
    /**
     * @return Generator<bool>
     */
    public function __invoke(XMLWriter $writer): Generator;
}
