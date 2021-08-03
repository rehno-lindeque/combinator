<?php

declare(strict_types=1);

namespace loophp\combinator\Combinator;

use Closure;
use loophp\combinator\Combinator;

/**
 * @template NewAType
 * @template NewBType
 */
final class A extends Combinator
{
    /**
     * @return Closure(callable(NewAType): NewBType): Closure(NewAType): NewBType
     */
    public function __invoke(): Closure
    {
        return
            /**
             * @param callable(NewAType): NewBType $f
             *
             * @return Closure(NewAType): NewBType
             */
            static fn (callable $f): Closure =>
                /**
                 * @param NewAType $x
                 *
                 * @return NewBType
                 */
                static fn (mixed $x): mixed => $f($x);
    }
}
