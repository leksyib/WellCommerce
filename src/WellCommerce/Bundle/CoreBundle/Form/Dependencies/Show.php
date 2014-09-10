<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CoreBundle\Form\Dependencies;

/**
 * Class Show
 *
 * @package WellCommerce\Bundle\CoreBundle\Form\Dependencies
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class Show extends AbstractDependency implements DependencyInterface
{
    public function getJavascriptType()
    {
        return 'SHOW';
    }

    public function renderJs()
    {
        return "new GFormDependency(GFormDependency.{$this->getJavascriptType()}, '{$this->getForm()->getName()}.{$this->getField()->getName()}', {$this->getCondition()->renderJs()})";
    }
}
