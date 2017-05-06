var NTNT = {};
NTNT.format_price = function (price) {
    return price.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
}