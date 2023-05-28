<?php

declare(strict_types=1);

namespace StringBuilder;

final class StringBuilder implements \Stringable
{
    public function __construct(private string $content = '')
    {
    }

    public function __toString(): string
    {
        return $this->content;
    }
}
