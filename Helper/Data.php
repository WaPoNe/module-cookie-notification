<?php
declare(strict_types=1);
/**
 * Cookie Notification
 *
 * @category   Content & Customizations
 * @package    WaPoNe_CookieNotification
 * @author     Michele Fantetti <michele@fantetti.net>
 * @copyright  Copyright (c) 2017-2020 WaPoNe (https://www.fantetti.net)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace WaPoNe\CookieNotification\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package WaPoNe\CookieNotification\Helper
 */
class Data extends AbstractHelper
{
    /**
     * @param $config_path
     * @return mixed
     */
    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue($config_path, ScopeInterface::SCOPE_STORE);
    }
}
