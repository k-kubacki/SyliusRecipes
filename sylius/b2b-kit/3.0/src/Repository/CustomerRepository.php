<?php

declare(strict_types=1);

namespace App\Repository;

use Sylius\B2BKit\Organization\Repository\CustomerRepositoryTrait;
use Sylius\B2BKit\Repository\CustomerRepositoryInterface;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\CustomerRepository as BaseCustomerRepository;

class CustomerRepository extends BaseCustomerRepository implements CustomerRepositoryInterface
{
    use CustomerRepositoryTrait;
}