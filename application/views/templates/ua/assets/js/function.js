var NTNT = {};
NTNT.format_price = function (price) {
    // return price.toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    return price.toFixed(0).replace(/./g, function(c, i, a) {
        return i && ((a.length - i) % 3 === 0) ? '.' + c : c;
    });
}