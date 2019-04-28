initialize: function (config) {
    this.sample_attribute = ko.observable();
}
setShippingInformation: function () {
    var sample_attribute_value = $("#freight_collect_account_number").val();
    if (quote.shippingAddress().extensionAttributes == undefined) {
        quote.shippingAddress().extensionAttributes = {};
    }
    quote.shippingAddress().extensionAttributes.sample_attribute=sample_attribute_value;
};