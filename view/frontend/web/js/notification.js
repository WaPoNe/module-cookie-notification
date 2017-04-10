/**
 * WaPoNe
 *
 * @category   WaPoNe
 * @package    WaPoNe_CookieNotification
 * @copyright  Copyright (c) 2017 WaPoNe (http://www.fantetti.net)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

define([
    "jquery",
    "jquery/ui",
    "mage/cookies"
], function($){
    "use strict";

    $.widget('wapone.cookieNotification', {
        _create: function() {
            if ($.mage.cookies.get(this.options.cookieName)) {
                this.element.hide();
            } else {
                this.element.show();
            }
            $(this.options.cookieAllowButtonSelector).on('click', $.proxy(function() {
                var cookieExpires = new Date(new Date().getTime() + this.options.cookieLifetime * 1000);

                $.mage.cookies.set(this.options.cookieName, this.options.cookieValue, {expires: cookieExpires, path: this.options.cookiePath, domain: this.options.cookieDomain});
                if ($.mage.cookies.get(this.options.cookieName)) {
                    window.location.reload();
                } else {
                    window.location.href = this.options.cookieMoreLink;
                }
            }, this));

            $(this.options.cookieMoreButtonSelector).on('click', $.proxy(function() {
                if(this.options.cookieMoreLinkDestination == 1) {
                    window.location.href = this.options.cookieMoreLink;
                } else {
                    window.open(this.options.cookieMoreLink,'_blank');
                }
            }, this));
        }
    });

    return $.wapone.cookieNotification;
});
