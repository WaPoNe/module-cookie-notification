<?php
/**
 * WaPoNe
 *
 * @category   WaPoNe
 * @package    WaPoNe_CookieNotification
 * @copyright  Copyright (c) 2017 WaPoNe (http://www.fantetti.net)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace WaPoNe\CookieNotification\Block;

class CookieNotification extends \Magento\Framework\View\Element\Template
{
    protected $_dataHelper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \WaPoNe\CookieNotification\Helper\Data $dataHelper,
        array $data)
    {
        $this->_dataHelper = $dataHelper;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    // Module Activation
    public function getModuleActivation() {
        return $this->_dataHelper->getConfig('cookienotification/functional/activation');
    }

    // Cookie Name
    public function getCookieName() {
        return "wapone_cookienotification";
    }

    // Cookie Lifetime
    public function getCookieLifetime() {
        return $this->_dataHelper->getConfig('cookienotification/functional/lifetime');
    }

    // Cookie Path
    public function getCookiePath() {
        return $this->_dataHelper->getConfig('cookienotification/functional/path');
    }

    // Cookie Domain
    public function getCookieDomain() {
        return $this->_dataHelper->getConfig('cookienotification/functional/domain');
    }

    // Cookie Message
    public function getCookieMessage() {
        return $this->_dataHelper->getConfig('cookienotification/design/message');
    }

    // Cookie Message Position (Top / Bottom)
    public function getCookiePosition() {
        switch ($this->_dataHelper->getConfig('cookienotification/design/position')) {
            case 'top': return 'top: 0;';
            case 'bottom': return 'bottom: 0;';
            default : return 'top: 0;';
        }
    }

    // Cookie Message Text Color
    public function getCookieMessageTextColor() {
        return '#'.$this->_dataHelper->getConfig('cookienotification/design/message_text_color');
    }

    // Cookie Message Background Color
    public function getCookieMessageBackgroundColor() {
        return '#'.$this->_dataHelper->getConfig('cookienotification/design/message_background_color');
    }

    // 'More' Button Text
    public function getCookieMoreButtonText() {
        return $this->_dataHelper->getConfig('cookienotification/design/btn_more_text');
    }

    // 'More' Button Text Color
    public function getCookieMoreButtonTextColor() {
        return '#'.$this->_dataHelper->getConfig('cookienotification/design/btn_more_text_color');
    }

    // 'More' Button Background Color
    public function getCookieMoreButtonBackgroundColor() {
        return '#'.$this->_dataHelper->getConfig('cookienotification/design/btn_more_background_color');
    }

    // 'More' Button Link Destination (Same Frame / New Window)
    public function getCookieMoreButtonLinkDestination() {
        return $this->_dataHelper->getConfig('cookienotification/design/btn_more_link_destination');
    }

    // 'More' Button Link
    public function getCookieMoreButtonLink() {
        return $this->_dataHelper->getConfig('cookienotification/design/btn_more_link');
    }

    // 'Allow' Button Text
    public function getCookieAllowButtonText() {
        return $this->_dataHelper->getConfig('cookienotification/design/btn_allow_text');
    }

    // 'Allow' Button Text Color
    public function getCookieAllowButtonTextColor() {
        return '#'.$this->_dataHelper->getConfig('cookienotification/design/btn_allow_text_color');
    }

    // 'Allow' Button Background Color
    public function getCookieAllowButtonBackgroundColor() {
        return '#'.$this->_dataHelper->getConfig('cookienotification/design/btn_allow_background_color');
    }
}
