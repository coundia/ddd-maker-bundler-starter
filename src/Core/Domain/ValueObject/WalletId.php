<?php

declare(strict_types=1);

namespace App\Core\Domain\ValueObject;

class WalletId extends \App\Shared\Domain\ValueObject\ValueObject
{
    private function __construct(private mixed $id)
    {
    }

    public static function create(mixed $id): self
    {
        return new self($id);
    }

    public function value(): mixed
    {
        return $this->id;
    }

    public function dateValue(): ?\DateTimeInterface
    {
        if (null === $this->value()) {
            return null;
        }

        return new \DateTimeImmutable($this->value());
    }

    public function valueView(): mixed
    {
        if (null === $this->value()) {
            return null;
        }

        if ($this->value() instanceof \DateTimeInterface || $this->value() instanceof \DateTime || $this->value() instanceof \DateTimeImmutable) {
            return $this->value()->format('Y-m-d H:i:s');
        }

        if (is_array($this->value())) {
            return implode(', ', $this->value());
        }

        if (is_bool($this->value())) {
            return $this->value() ? 'Yes' : 'No';
        }

        if (is_object($this->value())) {
            return $this->value()->__toString();
        }

        return $this->value();
    }
}
