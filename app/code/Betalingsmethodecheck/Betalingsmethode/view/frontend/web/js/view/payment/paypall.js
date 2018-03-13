define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'paypall',
                component: 'Betalingsmethodecheck_Betalingsmethode/js/view/payment/method-renderer/paypall-method'
            }
        );
        return Component.extend({});
    }
);