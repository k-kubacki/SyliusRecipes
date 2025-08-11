<?php

declare(strict_types=1);

namespace App\Repository;

use Sylius\B2BKit\Organization\Repository\AddressRepositoryTrait;
use Sylius\B2BKit\Repository\AddressRepositoryInterface;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\AddressRepository as BaseAddressRepository;

class AddressRepository extends BaseAddressRepository implements AddressRepositoryInterface
{
    use AddressRepositoryTrait;
}