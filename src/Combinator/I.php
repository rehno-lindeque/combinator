<?php

declare(strict_types=1);

namespace loophp\combinator\Combinator;

use Closure;
use loophp\combinator\Combinator;

/**
 * @template NewAType
 */
final class I extends Combinator
{
    /**
     * @return Closure(NewAType): NewAType
     */
    public function __invoke(): Closure
    {
        return
            /**
             * @param NewAType $x
             *
             * @return NewAType
             */
            static fn (mixed $x): mixed => $x;
    }
}
