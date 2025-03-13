<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

#[ORM\Entity]
#[ORM\Table(name: 'wallets')]
class Wallet{
	#[ORM\Column(type: 'datetime_immutable')]
	private \DateTimeImmutable $createdAt;
	#[ORM\Id]
	#[ORM\GeneratedValue(strategy: 'NONE')]
	#[ORM\Column(type: 'string', unique: true)]
	private string $id;

	public function __construct(

		#[ORM\Column(type: 'string', length: 20, unique: true)]
		public string $phoneNumber,

		#[ORM\Column(type: 'decimal', precision: 15, scale: 2)]
		public float $balance,

		#[ORM\Column(type: 'string', length: 50)]
		public string $provider,

	){
		$this->createdAt = new \DateTimeImmutable();
		$this->id = Uuid::uuid4()->toString();
	}

	public function getCreatedAt(): \DateTimeImmutable{
		return $this->createdAt;
	}

	public function getId(): string{
		return $this->id;
	}

}