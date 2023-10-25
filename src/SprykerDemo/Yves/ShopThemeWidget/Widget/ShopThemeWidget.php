<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Yves\ShopThemeWidget\Widget;

use Generated\Shared\Transfer\ShopThemeDataTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidget;

/**
 * @method \SprykerDemo\Yves\ShopThemeWidget\ShopThemeWidgetFactory getFactory()
 */
class ShopThemeWidget extends AbstractWidget
{
    public function __construct()
    {
        $this->addParameter('data', $this->getShopThemeData());
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'ShopThemeWidget';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@ShopThemeWidget/views/shop-theme-widget/shop-theme-widget.twig';
    }

    /**
     * @return array<string, mixed>
     */
    protected function getShopThemeData(): array
    {
        return $this->getFactory()->getShopThemeStorageClient()->getActiveShopThemeData()->toArray(true, true);
    }
}
