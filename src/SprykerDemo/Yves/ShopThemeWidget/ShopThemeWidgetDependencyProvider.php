<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Yves\ShopThemeWidget;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;
use SprykerDemo\Client\ShopThemeStorage\ShopThemeStorageClientInterface;

class ShopThemeWidgetDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const CLIENT_SHOP_THEME_STORAGE = 'CLIENT_SHOP_THEME_STORAGE';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = $this->addShopThemeStorageClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addShopThemeStorageClient(Container $container): Container
    {
        $container[static::CLIENT_SHOP_THEME_STORAGE] = function (Container $container): ShopThemeStorageClientInterface {
            return $container->getLocator()->shopThemeStorage()->client();
        };

        return $container;
    }
}
