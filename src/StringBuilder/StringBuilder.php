<?php

declare(strict_types=1);

namespace StringBuilder;

final class StringBuilder implements \JsonSerializable, \Serializable, \Stringable
{
    public function __construct(private string $content = '')
    {
    }

    public function __serialize(): array
    {
        return [
            'content' => $this->content
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->content = $data['content'];
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

    public function trim(): self
    {
        $this->content = trim($this->content);

        return $this;
    }

    public function toLowerCase(): self
    {
        $this->content = strtolower($this->content);

        return $this;
    }

    public function toUpperCase(): self
    {
        $this->content = strtoupper($this->content);

        return $this;
    }
}
