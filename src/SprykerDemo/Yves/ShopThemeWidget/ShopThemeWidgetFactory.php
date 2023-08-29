<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Yves\ShopThemeWidget;

use Spryker\Yves\Kernel\AbstractFactory;
use SprykerDemo\Client\ShopThemeStorage\ShopThemeStorageClientInterface;

class ShopThemeWidgetFactory extends AbstractFactory
{
    /**
     * @return \SprykerDemo\Client\ShopThemeStorage\ShopThemeStorageClientInterface
     */
    public function getShopThemeStorageClient(): ShopThemeStorageClientInterface
    {
        return $this->getProvidedDependency(ShopThemeWidgetDependencyProvider::CLIENT_SHOP_THEME_STORAGE);
    }
}
