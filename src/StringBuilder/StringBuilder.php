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

    public function replace(array|string $search, array|string $replace): self
    {
        $this->content = str_replace($search, $replace, $this->content);

        return $this;
    }

    public function reverse(): self
    {
        $this->content = strrev($this->content);

        return $this;
    }

    public function append(mixed $content): self
    {
        $this->content .= $content;

        return $this;
    }

    public function charAt(int $index): string
    {
        return $this->content[$index];
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

    public function indexOf(string $string): int
    {
        for ($index = 0; $index < strlen($this->content); ++$index) {
            if ($this->content[$index] === $string) {
                return $index;
            }
        }

        return -1;
    }

    public static function fromString(string $string): self
    {
        return new self(strval($string));
    }
}
