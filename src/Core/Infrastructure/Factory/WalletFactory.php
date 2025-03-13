<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Factory;

use App\Entity\Wallet;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * Class WalletFactory.
 * Creates Wallet entities for testing purposes.
 * Uses Zenstruck Foundry to generate persistent test data.
 */
final class WalletFactory extends PersistentProxyObjectFactory
{
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Wallet::class;
    }

    protected function defaults(): array|callable
    {
        return [
            'phoneNumber' => self::faker()->sentence(),
            'balance' => self::faker()->randomFloat(2, 0, 1000),
            'provider' => self::faker()->sentence(),
        ];
    }

    protected function initialize(): static
    {
        return $this;
    }
}
