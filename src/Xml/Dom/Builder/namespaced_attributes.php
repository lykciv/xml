<?php

declare(strict_types=1);

namespace VeeWee\Xml\Dom\Builder;

use DOMElement;
use function Psl\Iter\reduce_with_keys;

/**
 * @param array<string, string> $attributes
 * @return callable(DOMElement): DOMElement
 */
function namespaced_attributes(string $namespace, array $attributes): callable
{
    return static function (DOMElement $node) use ($namespace, $attributes): DOMElement {
        return reduce_with_keys(
            $attributes,
            static fn (DOMElement $node, string $name, string $value)
                => namespaced_attribute($namespace, $name, $value)($node),
            $node
        );
    };
}
