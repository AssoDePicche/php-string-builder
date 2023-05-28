<?php

declare(strict_types=1);

namespace StringBuilder;

final class StringBuilder implements \JsonSerializable, \Serializable, \Stringable
{
    public function __construct(private string $content = '')
    {
    }

    public function __toString(): string
    {
        return $this->content;
    }

    public function serialize(): string
    {
        return $this->content;
    }

    public function unserialize(string $content): void
    {
        $this->content = $content;
    }

    public function jsonSerialize(): mixed
    {
        return $this->content;
    }
}
