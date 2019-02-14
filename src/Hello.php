<?php
declare(strict_types=1);

final class Hello
{
    private $hello;

    private function __construct(string $hello)
    {
        $this->ensureIsValidHello($hello);

        $this->hello= $hello;
    }

    public static function fromString(string $hello): self
    {
        return new self($hello);
    }

    public function __toString(): string
    {
        return $this->hello;
    }

    private function ensureIsValidHello(string $hello): void
    {
        if (!filter_var($hello, FILTER_VALIDATE_HELLO)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid word',
                    $hello
                )
            );
        }
    }
}