<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Khoa\Currency\Api;

/**
 * @api
 * @since 102.0.0
 */
interface TestInterface
{
    public function getIdentities();
    public function getDefaultValues();
    public function getValue();
}
