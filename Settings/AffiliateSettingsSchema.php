<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pentarim\SyliusAffiliateBundle\Settings;

use Sylius\Bundle\SettingsBundle\Schema\SchemaInterface;
use Sylius\Bundle\SettingsBundle\Schema\SettingsBuilderInterface;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Affiliate settings schema.
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class AffiliateSettingsSchema implements SchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildSettings(SettingsBuilderInterface $builder)
    {
        $builder
            ->setDefaults(array(
                'enabled' => true,
                'enabled_multi_level' => true,
            ))
            ->setAllowedTypes(array(
                'enabled' => array('bool'),
                'enabled_multi_level' => array('bool'),
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('enabled', 'checkbox', array(
                'label' => 'sylius.form.settings.affiliate.enabled',
            ))
            ->add('enabled_multi_level', 'checkbox', array(
                'label' => 'sylius.form.settings.affiliate.enabled_multi_level',
            ))
        ;
    }
}
