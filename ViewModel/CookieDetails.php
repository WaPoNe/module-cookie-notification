<?php
declare(strict_types=1);

namespace WaPoNe\CookieNotification\ViewModel;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\StoreManagerInterface;
use WaPoNe\CookieNotification\Helper\Data;

/**
 * Class CookieDetails
 * @package WaPoNe\CookieNotification\ViewModel
 */
class CookieDetails implements ArgumentInterface
{
    /**
     * @var Data
     */
    private $_helper;
    /**
     * @var StoreManagerInterface
     */
    private $_storeManager;

    /**
     * CookieDetails constructor.
     *
     * @param StoreManagerInterface $storeManager
     * @param Data $helper
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        Data $helper
    )
    {

        $this->_helper = $helper;
        $this->_storeManager = $storeManager;
    }

    /**
     * Get module status
     *
     * @return mixed
     */
    public function getModuleActivation() {
        return $this->_helper->getConfig('cookienotification/functional/activation');
    }

    /**
     * Get cookie name
     *
     * @return string
     */
    public function getCookieName() {
        return "wapone_cookienotification";
    }

    /**
     * Get cookie life time
     *
     * @return mixed
     */
    public function getCookieLifetime() {
        return $this->_helper->getConfig('cookienotification/functional/lifetime');
    }

    /**
     * Get cookie path
     *
     * @return mixed|string
     */
    public function getCookiePath() {
        $cookiePath = $this->_helper->getConfig('cookienotification/functional/path')
            ? $this->_helper->getConfig('cookienotification/functional/path')
            : "/";
        return $cookiePath;
    }

    /**
     * Get cookie domain
     *
     * @return mixed
     */
    public function getCookieDomain() {
        return $this->_helper->getConfig('cookienotification/functional/domain');
    }

    /**
     * Get cookie message
     *
     * @return mixed
     */
    public function getCookieMessage() {
        return $this->_helper->getConfig('cookienotification/design/message');
    }

    /**
     * Get cookie message position (Top/Bottom)
     *
     * @return string
     */
    public function getCookiePosition() {
        switch ($this->_helper->getConfig('cookienotification/design/position')) {
            case 'top': return 'top: 0;';
            case 'bottom': return 'bottom: 0;';
            default : return 'top: 0;';
        }
    }

    /**
     * Get cookie message text color
     *
     * @return string
     */
    public function getCookieMessageTextColor() {
        return '#'.$this->_helper->getConfig('cookienotification/design/message_text_color');
    }

    /**
     * Get cookie message background color
     *
     * @return string
     */
    public function getCookieMessageBackgroundColor() {
        return '#'.$this->_helper->getConfig('cookienotification/design/message_background_color');
    }

    /**
     * Get 'More' button text
     *
     * @return mixed
     */
    public function getCookieMoreButtonText() {
        return $this->_helper->getConfig('cookienotification/design/btn_more_text');
    }

    /**
     * Get 'More' button text color
     *
     * @return string
     */
    public function getCookieMoreButtonTextColor() {
        return '#'.$this->_helper->getConfig('cookienotification/design/btn_more_text_color');
    }

    /**
     * Get 'More' button background color
     *
     * @return string
     */
    public function getCookieMoreButtonBackgroundColor() {
        return '#'.$this->_helper->getConfig('cookienotification/design/btn_more_background_color');
    }

    /**
     * Get 'More' button link destination (Same Frame / New Window)
     *
     * @return mixed
     */
    public function getCookieMoreButtonLinkDestination() {
        return $this->_helper->getConfig('cookienotification/design/btn_more_link_destination');
    }

    /**
     * Get 'More' button link
     *
     * @return string
     * @throws NoSuchEntityException
     */
    public function getCookieMoreButtonLink() {
        return $this->_storeManager->getStore()->getBaseUrl() . $this->_helper->getConfig('cookienotification/design/btn_more_link');
    }

    /**
     * Get 'Allow' button text
     *
     * @return mixed
     */
    public function getCookieAllowButtonText() {
        return $this->_helper->getConfig('cookienotification/design/btn_allow_text');
    }

    /**
     * Get 'Allow' button text color
     *
     * @return string
     */
    public function getCookieAllowButtonTextColor() {
        return '#'.$this->_helper->getConfig('cookienotification/design/btn_allow_text_color');
    }

    /**
     * Get 'Allow' button background color
     *
     * @return string
     */
    public function getCookieAllowButtonBackgroundColor() {
        return '#'.$this->_helper->getConfig('cookienotification/design/btn_allow_background_color');
    }
}
