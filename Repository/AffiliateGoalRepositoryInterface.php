<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pentarim\SyliusAffiliateBundle\Repository;


use Doctrine\Common\Collections\Collection;
use Pentarim\SyliusAffiliateBundle\Model\AffiliateGoalInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

/**
 * @author Laszlo Horvath <pentarim@gmail.com>
 */
interface AffiliateGoalRepositoryInterface extends RepositoryInterface
{
    /**
     * Finds all active goals.
     *
     * @return Collection|AffiliateGoalInterface[]
     */
    public function findActive();
}