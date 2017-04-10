<?php
/**
 * WaPoNe
 *
 * @category   WaPoNe
 * @package    WaPoNe_CookieNotification
 * @copyright  Copyright (c) 2017 WaPoNe (http://www.fantetti.net)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace WaPoNe\CookieNotification\Model\Config\Backend;

class LinkDestination implements \Magento\Framework\Option\ArrayInterface
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
