<?php

declare(strict_types=1);

namespace App\Core\Domain\Event;

use App\Shared\Domain\Event\DomainEventInterface;

/** Event triggered when Wallet is modified */
class WalletEventDeleted implements DomainEventInterface
{
    public function __construct(
        public readonly \App\Core\Domain\ValueObject\WalletId $id,
        public readonly \DateTimeImmutable $occurredOn
    ) {
    }

    public function occurredOn(): \DateTimeImmutable
    {
        return $this->occurredOn;
    }
}
