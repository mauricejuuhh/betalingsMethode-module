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
                type: 'ideal',
                component: 'Betalingsmethodecheck_Betalingsmethode/js/view/payment/method-renderer/ideal-method'
            }
        );
        return Component.extend({});
    }
);