/**
 * Cookie Notification
 *
 * @category   Content & Customizations
 * @package    WaPoNe_CookieNotification
 * @author     Michele Fantetti <michele@fantetti.net>
 * @copyright  Copyright (c) 2017-2020 WaPoNe (https://www.fantetti.net)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require([
    'jquery',
    'mage/translate',
    'jquery/validate'],
    function($){
        $.validator.addMethod(
            'validate-exadecimal-color-length', function (v) {
                return (v.length == 6);
            }, $.mage.__('Field must have length of 6'));
    }
);