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

use Magento\Cms\Model\ResourceModel\Page\CollectionFactory;
use Magento\Framework\Option\ArrayInterface;

/**
 * Class CMSPageList
 * @package WaPoNe\CookieNotification\Model\Config\Backend
 */
class CMSPageList implements ArrayInterface
{
    protected $_pageCollectionFactory;

    /**
     * CMSPageList constructor.
     *
     * @param CollectionFactory $pageCollectionFactory
     */
    public function __construct(
        CollectionFactory $pageCollectionFactory
    )
    {
        $this->_pageCollectionFactory = $pageCollectionFactory;
    }

    public function toOptionArray()
    {
        $arr = $this->_toArray();
        $ret = [];

        foreach ($arr as $key => $value)
        {
            $ret[] = [
                'value' => $key,
                'label' => $value
            ];
        }

        return $ret;
    }

    /**
     * List of all CMS pages
     *
     * @return array
     */
    private function _toArray()
    {
        $pages = $this->_pageCollectionFactory->create();
        $pageList = array();

        foreach ($pages as $page)
        {
            // identifier => url-alias
            $pageList[$page->getIdentifier()] = __($page->getTitle());
        }

        return $pageList;
    }
}
