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

namespace WaPoNe\CookieNotification\Model\Config\Backend;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class LinkDestination
 * @package WaPoNe\CookieNotification\Model\Config\Backend
 */
class LinkDestination implements ArrayInterface
{
    public function toOptionArray()
    {
        $destination = array();

        $destination[] = [
            'value' => 1,
            'label' => __('Same Frame')
        ];
        $destination[] = [
            'value' => 2,
            'label' => __('New Window')
        ];

        return $destination;
    }
}
