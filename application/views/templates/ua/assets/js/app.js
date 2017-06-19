Whl = {};
Object.extend = function(e, t) {
    for (var a in t) e[a] = t[a];
    return e
},
    function() {
        Object.extend(Object, {
            getClassName: function(e) {
                var t = Object.prototype.toString.call(e);
                return t.match(/^\[object\s(.*)\]$/)[1]
            },
            isUndefined: function(e) {
                return "undefined" == typeof e
            },
            isNumber: function(e) {
                return "Number" === Object.getClassName(e)
            },
            isString: function(e) {
                return "String" === Object.getClassName(e)
            },
            isArray: function(e) {
                return "Array" === Object.getClassName(e)
            },
            isFunction: function(e) {
                return "function" == typeof e
            },
            isObject: function(e) {
                return "object" == typeof e
            },
            getKeys: function(e) {
                var t = [];
                for (var a in e) t.push(a);
                return t
            },
            getValues: function(e) {
                var t = [];
                for (var a in e) t.push(e[a]);
                return t
            }
        })
    }(),
    function() {
        function e(e) {
            for (var t = [], a = 0; a < e.length; a++) t.push(e[a]);
            return t
        }
        Object.extend(Function.prototype, {
            bind: function(t) {
                if (arguments.length < 2 && Object.isUndefined(arguments[0])) return this;
                var a = this,
                    i = Array.prototype.slice.call(arguments, 1);
                return function() {
                    return a.apply(t, i.concat(e(arguments)))
                }
            },
            bindEvent: function(e) {
                var t = this,
                    a = Array.prototype.slice.call(arguments, 1);
                return function(i) {
                    var r = Array.prototype.slice.call(arguments, 1);
                    return a = a.concat(r), t.apply(e, a.concat([i || window.event]))
                }
            }
        })
    }(), Object.extend(String.prototype, {
    trim: function() {
        return this.replace(/^\s+/g, "").replace(/\s+$/g, "")
    },
    isEmail: function() {
        return -1 == this.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]{2,6}$/) ? !1 : !0
    },
    isUrl: function() {
        return -1 == this.search(/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?(\/)?/i) ? !1 : !0
    },
    autoUrl: function(e) {
        var t = this.replace(/[^0-9a-zA-Z]/g, " ");
        return t = t.replace(/\s\s+/g, " ").trim(), t = t.replace(/\s/g, e || "-")
    },
    autoUrl2: function(e) {
        var t = this.replace(/[^0-9a-zA-Z]/g, " ");
        return t = t.replace(/\s\s+/g, " ").trim(), t = t.replace(/\s/g, e || "-"), t.toLowerCase()
    },
    compare: function(e) {
        return this == e
    }
}), Number.compareFloat = function(e, t) {
    return e = parseFloat(e), t = parseFloat(t), e == t ? 0 : t > e ? -1 : 1
}, Date.compareDate = function(e, t, a) {
    a || (a = 0);
    var i = 1 == a ? 1 : 0,
        r = new Array;
    if (r[0] = /^\d{1,2}(\-|\/|\.|\s)\d{1,2}(\-|\/|\.|\s)\d+$/, r[1] = /^\d{1,2}(\-|\/|\.|\s)\d{1,2}(\-|\/|\.|\s)\d+$/, -1 == e.search(r[i]) || -1 == t.search(r[i])) throw "Invalid date";
    var o = -1 != e.indexOf("-") ? "-" : -1 != e.indexOf("/") ? "/" : -1 != e.indexOf(".") ? "." : -1 != e.indexOf(" ") ? " " : "",
        n = -1 != t.indexOf("-") ? "-" : -1 != t.indexOf("/") ? "/" : -1 != t.indexOf(".") ? "." : -1 != t.indexOf(" ") ? " " : "";
    if ("" == o || "" == n) throw "Invalid date";
    var s = e.split(o),
        l = t.split(n);
    if (3 != s.length || 3 != l.length) throw "Invalid date";
    if (1 == i) var u = s[2],
        d = l[2],
        c = s[0],
        h = l[0],
        p = s[1],
        m = l[1];
    else var u = s[2],
        d = l[2],
        c = s[1],
        h = l[1],
        p = s[0],
        m = l[0];
    var g = null;
    return g = Number.compareFloat(u, d), 0 != g ? g : (g = Number.compareFloat(c, h), 0 != g ? g : (g = Number.compareFloat(p, m), 0 != g ? g : 0))
}, Date.compareDate2 = function(e, t) {
    var a = /^\d{1,2}\s[A-Z][a-z]{2}\s[0-9]{4}$/;
    if (-1 == e.search(a) || -1 == t.search(a)) throw "Invalid Date";
    e = e.split(" "), t = t.split(" ");
    var i = {
        Jan: 1,
        Feb: 2,
        Mar: 3,
        Apr: 4,
        May: 5,
        Jun: 6,
        Jul: 7,
        Aug: 8,
        Sep: 9,
        Oct: 10,
        Nov: 11,
        Dec: 12
    };
    for (var r in i)
        if (r == e[1]) {
            e[1] = i[r];
            break
        }
    for (var r in i)
        if (r == t[1]) {
            t[1] = i[r];
            break
        }
    var o = null;
    return o = Number.compareFloat(e[2], t[2]), 0 != o ? o : (o = Number.compareFloat(e[1], t[1]), 0 != o ? o : (o = Number.compareFloat(e[0], t[0]), 0 != o ? o : 0))
}, Date.toDate = function(e) {
    var t = /^\d{1,2}\s[A-Z,a-z]{3}\s\d{2,4}$/,
        a = new Date;
    if (null == e.match(t)) return 0;
    e = e.split(" ");
    var i = {
            jan: 1,
            feb: 2,
            mar: 3,
            apr: 4,
            may: 5,
            jun: 6,
            jul: 7,
            aug: 8,
            sep: 9,
            oct: 10,
            nov: 11,
            dec: 12
        },
        r = !1;
    e[1] = e[1].toLowerCase();
    for (var o in i)
        if (o == e[1]) {
            a.setMonth(i[o]), r = !0;
            break
        }
    return r ? (e[2] = parseFloat(e[2]), a.setDate(e[0]), a.setYear(e[2] > 100 ? e[2] : e[2] + 2e3), a) : 0
}, Date.prototype.toDateStringExt = function() {
    var e = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    return 0 == this.valueOf() ? "" : this.getDate() + " " + e[this.getMonth()] + " " + this.getFullYear()
}, Date.prototype.toDateTimeString = function() {
    return 0 == this.valueOf() ? "" : this.toDateStringExt() + " " + this.getHours() + ":" + this.getMinutes() + ":" + this.getSeconds()
}, Whl.Combo = {}, Object.extend(Whl.Combo, {
    get: function(e) {
        var t = Object.isString(e) ? document.getElementById(e) : e;
        return Object.isObject(t) ? Object.isFunction(t.addItem) ? t : (Object.extend(t, {
            addItem: function(e) {
                return Object.isUndefined(e.selected) ? this.options.add(new Option(e.text, e.value)) : this.options.add(new Option(e.text, e.value, e.selected)), this
            },
            addItems2: function(e) {
                for (var t in e) {
                    var a = {};
                    for (var i in e[t]) {
                        a.text = e[t][i], a.value = i;
                        break
                    }
                    this.addItem(a)
                }
            },
            removeItem: function(e) {
                return this.options[e] = null, this
            },
            deselectAll: function() {
                for (var e = 0; e < this.options.length; e++) this.options[e].selected = !1;
                return this
            },
            selectAll: function() {
                for (var e = 0; e < this.options.length; e++) this.options[e].selected = !0;
                return this
            },
            removeAll: function() {
                return this.length = 0, this
            },
            hasItem: function() {
                return this.options.length > 0 ? !0 : !1
            },
            removeSelected: function() {
                for (var e = this.options.length - 1; e >= 0; e--) this.options[e].selected && this.removeItem(e);
                return this
            },
            getObjValue: function(e, t) {
                for (var a = e, t = t || !1, i = [], r = this.options.length - 1; r >= 0; r--) {
                    var o = this.options[r],
                        n = null;
                    a ? o.selected && (n = {
                            text: o.text,
                            value: o.value
                        }) : n = {
                        text: o.text,
                        value: o.value
                    }, null != n && (i.push(n), t && this.removeItem(r))
                }
                return i
            },
            addItems: function(e, t) {
                for (var a in e) {
                    var i = e[a];
                    if (Object.isUndefined(t)) this.addItem(i);
                    else {
                        for (var r = !1, o = 0, n = t.length; n > o; o++)
                            if (t[o] == i.value) {
                                r = !0;
                                break
                            }
                        r || this.addItem(i)
                    }
                }
                return this
            },
            addItemObj: function(e, t, a, i) {
                for (var r in e) {
                    var o = e[r],
                        n = {
                            text: "",
                            value: ""
                        };
                    for (var s in o) s == t ? n.text = o[s] : s == a && (n.value = o[s]);
                    this.addItem(n)
                }
                return this.setSelectedItems(i), this
            },
            getValues: function(e) {
                for (var t = e || !1, a = "", i = 0, r = this.options.length; r > i; i++) {
                    var o = this.options[i];
                    a += t ? (a ? "," : "") + o.value : (a ? "," : "") + o.value
                }
                return a
            },
            setSelectedItems: function(e) {
                if (Object.isArray(e))
                    for (var t in e)
                        for (var a = 0, i = this.options.length; i > a; a++)
                            if (e[t] == this.options[a].value) {
                                this.options[a].selected = !0;
                                break
                            }
                return this
            },
            getValue: function() {
                return this.options[this.selectedIndex].value
            }
        }), t) : null
    }
}), Whl.Combo.Double = function(e, t, a, i) {
    this._src = Whl.Combo.get(e), this._dest = Whl.Combo.get(t), this._data = null, this._url = null, this._opt = i || {}, this._opt.param = this._opt.param || {}, this._opt.excludeElm = this._opt.excludeElm || null, this._opt.paramId = this._opt.paramId || [], this._opt.defaultItems = this._opt.defaultItems || [], this._opt.callback = this._opt.callback || function() {}, Object.isObject(a) ? this._data = a : Object.isString(a) && (this._url = a), this._initialize()
}, Whl.Combo.Double.prototype = {
    _initialize: function() {
        null != this._url ? $(this._src).change(this.getData.bind(this, null)) : $(this._src).change(this.load2.bind(this))
    },
    _makeParam: function() {
        var e = "";
        for (var t in this._opt.param) e += (e ? "&" : "") + t + "=" + this._opt.param[t];
        for (var t in this._opt.paramId) e += (e ? "&" : "") + this._opt.paramId[t] + "=" + $("#" + this._opt.paramId[t]).val();
        return e
    },
    getData: function() {
        var e = this._makeParam();
        e += (e ? "&" : "") + Whl.getToken() + "&" + $.param($(this._src));
        var t = {
            type: "POST",
            url: this._url,
            dataType: "json",
            data: e,
            success: this.load.bind(this),
            error: function(e, t) {
                Whl.Dialog.error({
                    msg: t
                })
            }
        };
        $.ajax(t)
    },
    load: function(e) {
        if (this._dest.removeAll(), 0 < this._opt.defaultItems.length)
            for (var t in this._opt.defaultItems) this._dest.addItem(this._opt.defaultItems[t]);
        if (this._opt.excludeElm) {
            var a = Whl.Combo.get(this._opt.excludeElm).getValues(!0);
            this._dest.addItems(e, a.split(","))
        } else this._dest.addItems(e)
    },
    load2: function() {
        this._dest.removeAll();
        var e = $(this._src).val();
        if (0 < this._opt.defaultItems.length)
            for (var t in this._opt.defaultItems) this._dest.addItem(this._opt.defaultItems[t]);
        if (!Object.isUndefined(this._data[e])) {
            var a = this._data[e];
            this._dest.addItems2(a)
        }
        this._opt.callback.call(this)
    },
    setCallback: function(e) {
        this._opt.callback = e
    }
}, Whl.Dialog = {}, Object.extend(Whl.Dialog, {
    show: function(e) {
        var t = {
            title: "Loading",
            msg: "Loading data ... Please wait!.",
            id: "msg",
            icon: "ui-icon-info",
            contCss: "",
            container: "body",
            buttons: {},
            hideClose: !1,
            remove: !1,
            dlgOpt: {},
            callback: function() {}
        };
        !Object.isUndefined(e) && Object.isObject(e) && Object.extend(t, e);
        var a = '<div id="{id}_dlg" title=""><p id="{id}_cont" style="margin-top: 15px; border:0px"><span id="{id}_icon" class="ui-icon" style="float:left; margin:0px 7px 70px 0px;"></span><span id="{id}_text"></span></p></div>';
        a = a.replace(/{id}/g, t.id);
        var i = $(t.container + " #" + t.id + "_dlg");
        if (0 == i.size()) $(t.container).append(a);
        else if (1 < i.size()) throw "Invalid";
        a = $(t.container + " #" + t.id + "_dlg"), a.attr("title", t.title), "" != t.contCss && $(t.container + " #" + t.id + "_cont").addClass(t.contCss), $(t.container + " #" + t.id + "_icon").addClass(t.icon), $(t.container + " #" + t.id + "_text").html(t.msg);
        var r = {
            bgiframe: !0,
            autoOpen: !1,
            closeOnEscape: !1,
            width: 270,
            height: "auto",
            minHeight: 100,
            resizable: !0,
            modal: !0
        };
        r.close = function() {
            t.callback(), t.remove && $(this).dialog("destroy").remove()
        }, r.open = function() {
            var e = $(this).siblings().find("button");
            2 == e.length && $(e[1]).focus()
        }, Object.extend(r, {
            buttons: t.buttons
        }), Object.extend(r, t.dlgOpt), a.dialog(r), t.hideClose && a.parents(".ui-dialog").find(".ui-dialog-titlebar-close").hide(), a.dialog("open")
    },
    msg: function(e) {
        var t = {
            hideClose: !1,
            dlgOpt: {
                resizable: !1
            },
            buttons: {
                Close: function() {
                    $(this).dialog("close")
                }
            }
        };
        !Object.isUndefined(e) && Object.isObject(e) && Object.extend(t, e), this.show(t)
    },
    confirm: function(e) {
        var t = {
            icon: "ui-icon-info",
            contCss: "ui-state-highlight"
        };
        !Object.isUndefined(e) && Object.isObject(e) && Object.extend(t, e), this.show(t)
    },
    del: function(e, t) {
        var a = {
            title: "Delete data",
            msg: "Do you want to delete this item.?",
            id: "delete",
            buttons: {
                Cancel: function() {
                    $(this).dialog("close")
                },
                Ok: function() {
                    $(this).dialog("close"), e()
                }
            }
        };
        !Object.isUndefined(t) && Object.isObject(t) && Object.extend(a, t), this.confirm(a)
    },
    error: function(e) {
        e = e || {};
        var t = {
            title: "Error occurs",
            icon: "ui-icon-alert",
            contCss: "ui-state-error",
            id: "err",
            buttons: {
                Close: function() {
                    $(this).dialog("close")
                }
            },
            dlgOpt: {
                resizable: !1,
                maxWidth: 300,
                height: "auto",
                maxHeight: 300
            }
        };
        Whl.isErrReq(e.msg) && (e.msg = e.msg.substring(4)), Object.extend(t, e), this.show(t)
    },
    close: function(e, t) {
        var a = $("#" + e + "_dlg").dialog("close");
        Object.isUndefined(t) || a.remove()
    },
    closeMsg: function(e) {
        this.close("msg", e)
    }
}),
    function() {
        Object.extend(Whl, {
            openWin: function(e) {
                window.open(e, "")
            },
            validate: function(e, t, a, i) {
                var r = null,
                    o = !0;
                t = t || "form", "form" != t && (t = "#" + t);
                for (var n = 0, s = e.length; s > n; n++) {
                    var l = e[n],
                        u = !0,
                        d = $(t + " #" + l[0]),
                        c = null;
                    if (d.isExist() && !d.get(0).disabled) {
                        if (Object.isFunction(l[1])) u = l[1](), c = l[2];
                        else
                            for (var h in l[1]) {
                                var p = null;
                                if (Object.isArray(l[1][h]) ? (p = l[1][h], c = p[0]) : c = l[1][h], "blank" == h ? u = d.isBlank() : "email" == h ? u = d.isEmail() : "url" == h ? u = d.isUrl() : "domain" == h ? u = d.isDomain() : "isDate" == h ? u = 0 != Date.toDate(d.val()) : "gtDate" == h && p[1] ? u = d.gtDate(t + " #" + p[1]) : "gteqDate" == h && p[1] ? u = d.gtDate(t + " #" + p[1], !0) : "ltDate" == h && p[1] ? u = d.ltDate(t + " #" + p[1]) : "lteqDate" == h && p[1] ? u = d.ltDate(t + " #" + p[1], !0) : "ltDate2" == h && p[1] ? u = d.ltDate2(p[1]) : "eqString" == h && p[1] ? u = d.eqString(t + " #" + p[1]) : "gtNumber" == h && p[1] && (u = d.gtNumber(t + " #" + p[1])), !u) {
                                    null == r && (r = d);
                                    break
                                }
                            }
                        var m = a ? $("#" + a) : $(t + " #" + d.attr("id") + "Invalid");
                        if (u) m.html(""), m.removeClass("error").addClass("error-hide");
                        else if (m.html(c), m.removeClass("error-hide").addClass("error"), null == r && (r = d), o = u, null != i && !i) return r.focus(), !1
                    }
                }
                return o || null == r ? !0 : (r.focus(), !1)
            },
            validate_obj: function(e, t, a, i) {
                var r = null,
                    o = !0;
                t = t || "form", "form" != t && (t = "#" + t);
                for (var n = 0, s = e.length; s > n; n++) {
                    var l = e[n],
                        u = !0,
                        d = $(t + " #" + l[0]),
                        c = null;
                    if (d.isExist() && !d.get(0).disabled) {
                        if (Object.isFunction(l[1])) u = l[1](), c = l[2];
                        else
                            for (var h in l[1]) {
                                var p = null;
                                if (Object.isArray(l[1][h]) ? (p = l[1][h], c = p[0]) : c = l[1][h], "blank" == h ? u = d.isBlank() : "email" == h ? u = d.isEmail() : "url" == h ? u = d.isUrl() : "domain" == h ? u = d.isDomain() : "isDate" == h ? u = 0 != Date.toDate(d.val()) : "gtDate" == h && p[1] ? u = d.gtDate(t + " #" + p[1]) : "gteqDate" == h && p[1] ? u = d.gtDate(t + " #" + p[1], !0) : "ltDate" == h && p[1] ? u = d.ltDate(t + " #" + p[1]) : "lteqDate" == h && p[1] ? u = d.ltDate(t + " #" + p[1], !0) : "ltDate2" == h && p[1] ? u = d.ltDate2(p[1]) : "eqString" == h && p[1] ? u = d.eqString(t + " #" + p[1]) : "gtNumber" == h && p[1] && (u = d.gtNumber(t + " #" + p[1])), !u) {
                                    null == r && (r = d);
                                    break
                                }
                            }
                        var m = a ? $("#" + a) : $(t + " #" + d.attr("id") + "Invalid");
                        if (u) m.html(""), m.removeClass("error").addClass("error-hide");
                        else if (m.html(c), m.removeClass("error-hide").addClass("error"), null == r && (r = d), o = u, null != i && !i) return r.focus(), r
                    }
                }
                return o || null == r ? r : (r.focus(), r)
            },
            getToken: function() {
                return "token=" + $("#token").val()
            },
            isErrReq: function(e) {
                return -1 != e.indexOf("WRN:")
            },
            isJson: function(e) {
                return -1 != e.search(/^(\{(.*)\}|\[(.*)\])$/)
            },
            getCookie: function(e) {
                if (document.cookie.length > 0) {
                    var t = document.cookie.indexOf(e + "=");
                    if (-1 != t) {
                        t = t + e.length + 1;
                        var a = document.cookie.indexOf(";", t);
                        return -1 == a && (a = document.cookie.length), unescape(document.cookie.substring(t, a))
                    }
                }
                return null
            },
            setCookie: function(e, t, a) {
                a = "undefined" == typeof a ? 7 : a;
                var i = new Date;
                i.setTime(i.getTime() + 24 * a * 60 * 60 * 1e3);
                var r = "; expires=" + i.toGMTString();
                return document.cookie = e + "=" + t + r + "; path=/", this
            },
            rand: function(e) {
                return Math.round(Math.random() * e)
            },
            getMore: function() {
                $(".cont-more").each(function() {
                    var e = this.id.split("-");
                    $(this).click(function(t) {
                        t.preventDefault(), $("#" + e[1] + "-detail").removeClass("ui-hide").show(), $(this).remove()
                    })
                })
            },
            toggleContent: function(e) {
                e = $.extend({
                    controlHideClass: "point01",
                    controlShowClass: "point"
                }, e), $("[id^='toggle']").each(function() {
                    $(this).click(function(t) {
                        t.preventDefault();
                        var a = this.id,
                            i = a.substring("toggle-".length, a.length);
                        $(this).hasClass(e.controlShowClass) ? ($(this).removeClass(e.controlShowClass), $(this).addClass(e.controlHideClass), $("#" + i).hide()) : ($(this).removeClass(e.controlHideClass), $(this).addClass(e.controlShowClass), $("#" + i).show())
                    })
                })
            }
        })
    }(), Whl.UA = {}, Object.extend(Whl.UA, {
    initSearch: function() {
        var countryName;
        if (jQuery(".dest-query").autocomplete({
                minLength: 1,
                source: AUTOCOMPLETE.DESTLIST,
                select: function(e, t) {
                    return location = t.item.url, !1
                }
            }), jQuery(".tour-query").autocomplete({
                minLength: 1,
                source: AUTOCOMPLETE.TOURLIST,
                select: function(e, t) {
                    return location = t.item.url, !1
                }
            }), jQuery(".dest-query, .tour-query").each(function() {
                jQuery(this).autocomplete("instance")._renderItem = jQuery.proxy(function(e, t) {
                    var a = jQuery(this).val(),
                        i = "<b>$1</b>",
                        r = new RegExp("(" + a + ")", "ig"),
                        o = t.value;
                    return jQuery("<li>").append("<a>" + o.replace(r, i) + "</a>").appendTo(e)
                }, this)
            }), "undefined" == typeof IsEmbed || !IsEmbed) {
            new Whl.Combo.Double("s-country", "s-dest", window.countryDest, {
                defaultItems: [{
                    text: "-- Select --",
                    value: -1
                }],
                callback: function() {
                    -1 == this._src.getValue() && this._dest.removeAll().addItem({
                        text: "-- Select --",
                        value: -1
                    });
                    var e = Whl.Combo.get("s-trip");
                    e.removeAll().addItem({
                        text: "-- Select --",
                        value: -1
                    })
                }
            }), new Whl.Combo.Double("s-dest", "s-trip", window.destTrip, {
                defaultItems: [{
                    text: "-- Select --",
                    value: -1
                }],
                callback: function() {
                    -1 == this._src.getValue() && this._dest.removeAll().addItem({
                        text: "-- Select --",
                        value: -1
                    }), $("#s-trip").html($("#s-trip option").sort(function(e, t) {
                        return $(e).text() < $(t).text() ? -1 : 1
                    })), $("#s-trip").get(0).selectedIndex = 0
                }
            }), $("#search").submit(function() {
                this.submit()
            }), $("#s-submit").click(function(event) {
                if (countryName = $("#s-country option:selected").text(), Whl.setCookie("s-country", $("#s-country").val()), Whl.setCookie("s-dest", $("#s-dest").val()), Whl.setCookie("s-trip", $("#s-trip").val()), event.preventDefault(), parseInt($("#s-country").val()) <= 0) location.href = "/sightseeing-day-tours";
                else {
                    var destId = parseInt($("#s-dest").val()),
                        tripId = parseInt($("#s-trip").val());
                    if (destId > 0 && 0 >= tripId) $.ajax({
                        type: "POST",
                        url: "/country?act=getUrlDest",
                        data: "dest_id=" + $("#s-dest").val(),
                        success: function(_data) {
                            var base = $("#s-base"),
                                data = eval("(" + _data + ")");
                            $("#search").attr("action", (1 == base.size() ? base.val() : "/") + "destination/" + data.uname + "-tours"), $("#search #act").remove(), $("#search").submit()
                        }
                    });
                    else if (tripId > 0) $.ajax({
                        type: "POST",
                        url: "/country?act=getUrlTour",
                        data: "tour_id=" + $("#s-trip").val(),
                        success: function(_data) {
                            var base = $("#s-base"),
                                data = eval("(" + _data + ")");
                            $("#search").attr("action", (1 == base.size() ? base.val() : "/") + data.uname), $("#search #act").remove(), $("#search").submit()
                        }
                    });
                    else {
                        var base = $("#s-base");
                        $("#search").attr("action", (1 == base.size() ? base.val() : "/") + "country?cn=" + countryName), $("#search").append('<input type="hidden" name="act" id="act" value="default"/>'), $("#search").submit()
                    }
                }
            });
            var country = Whl.getCookie("s-country");
            null != country && "" != country && $("#s-country").val(country).change();
            var dest = Whl.getCookie("s-dest");
            null != dest && "" != dest && $("#s-dest").val(dest).change();
            var trip = Whl.getCookie("s-trip");
            null != trip && "" != trip && $("#s-trip").val(trip);
            var priceFrom = Whl.getCookie("s-price-from");
            null != priceFrom && "" != priceFrom && $("#s-price-from").val(priceFrom);
            var priceTo = Whl.getCookie("s-price-to");
            null != priceTo && "" != priceTo && $("#s-price-to").val(priceTo)
        }
    },
    initCurrency: function() {
        $("#currency").change(function() {
            var e = $("#frm-currency").serialize();
            jQuery.post("", e).always(function() {
                window.location.reload()
            })
        }), $("#currency2").change(function() {
            var e = $("#frm-currency2").serialize();
            jQuery.post("", e).always(function() {
                window.location.reload()
            })
        });
        var e = Whl.getCookie("currency");
        null != e && "" != e && $("#currency").val(e)
    },
    initData: function() {
        function e() {
            "- password -" == $("#agent-pass").val() && ($("#agent-pass").replaceWith('<input type="password" class="tb_ac02" value="" name="uxPassword" id="agent-pass" >'), $("#agent-pass").blur(function() {
                t()
            }), $("#agent-pass").focus())
        }

        function t() {
            "" == $("#agent-pass").val() && ($("#agent-pass").replaceWith('<input type="text" class="tb_ac02" value="- password -" name="uxPassword" id="agent-pass" >'), $("#agent-pass").click(function() {
                e()
            }))
        }
        var a = function() {
                if ("- ref. number -" == this.value) {
                    var e = document.createElement("input");
                    $(e).attr("name", $(this).attr("name")), $(e).attr("style", $(this).attr("style")), $(e).attr("class", $(this).attr("class")), $(this).replaceWith($(e)), $(e).blur(i).focus()
                }
            },
            i = function() {
                if ("" == this.value) {
                    var e = document.createElement("input");
                    $(e).attr("type", "text"), $(e).attr("value", "- ref. number -"), $(e).attr("name", $(this).attr("name")), $(e).attr("style", $(this).attr("style")), $(e).attr("class", $(this).attr("class")), $(this).replaceWith($(e)), $(e).focus(a)
                }
            };
        try {
            this.initCurrency(), this.initSearch()
        } catch (r) {}
        $("#username").focus(function() {
            "- email -" == this.value && (this.value = "")
        }).blur(function() {
            "" == this.value && (this.value = "- email -")
        }), $("#refno").focus(a), $("#news-email").focus(function() {
            "- your email -" == this.value && (this.value = "")
        }).blur(function() {
            "" == this.value && (this.value = "- your email -")
        }), $("#agent-name").focus(function() {
            "- email address -" == this.value && (this.value = "")
        }).blur(function() {
            "" == this.value && (this.value = "- email address -")
        }), $("#agent-pass").click(function() {
            e()
        }), $("#send-this-page").removeClass("ui-hide").dialog({
            bgiframe: !0,
            autoOpen: !1,
            width: 620,
            height: "auto",
            modal: !0,
            open: function() {
                $(this).parents(".ui-dialog-buttonpane button:eq(1)").css("display", "")
            },
            buttons: {
                Close: function() {
                    $(this).dialog("close")
                },
                Send: function() {
                    $("#frmSendPage").submit()
                }
            }
        }), $("#btnSendThisPage").click(function() {
            var e = encodeURIComponent(jQuery(this).attr("data-uri") || window.location.pathname),
                t = encodeURIComponent(jQuery(this).attr("data-name") || document.title),
                a = decodeURIComponent(jQuery(this).attr("data-sender-email") || ""),
                i = decodeURIComponent(jQuery(this).attr("data-sender-name") || ""),
                r = decodeURIComponent(jQuery(this).attr("data-message") || ""),
                o = decodeURIComponent(jQuery(this).attr("data-subject") || ""),
                n = decodeURIComponent(jQuery(this).attr("data-refno") || "0"),
                s = jQuery(this).attr("data-type") || 0,
                l = "/sendpage?uri=" + e + "&title=" + t;
            arguments[0].preventDefault(), $("#send-this-page").load(l, {}, function(e) {
                setTimeout(function() {
                    $("#s_email").val(a), $("#s_fullname").val(i), $("#message").val(r), $("#subject").val(o), $("#srefno").val(n)
                }, 0), $(this).html(e).dialog("open"), $("#sec_num").forceNumber(), $("#type").val(s);
                var t = function() {
                    var e = [];
                    return e.push(["s_fullname", {
                        blank: Message.errRequired
                    }]), e.push(["s_email", {
                        blank: Message.errRequired,
                        email: Message.errInvalid
                    }]), e.push(["r_fullname", {
                        blank: Message.errRequired
                    }]), e.push(["r_email", {
                        blank: Message.errRequired,
                        email: Message.errInvalid
                    }]), e.push(["sec_num", {
                        blank: Message.errRequired
                    }]), e.push(["message", {
                        blank: Message.errRequired
                    }]), Whl.validate(e)
                };
                $("#send-this-page").parents().find(".ui-dialog-buttonpane button:eq(1)").css("display", ""), $.browser.msie && $("#s_fullname,#s_email,#r_fullname,#r_email,#sec_num").keypress(function(e) {
                    13 == e.keyCode && $("#frmSendPage").submit()
                }), $("#frmSendPage").submit(function(e) {
                    if (e.preventDefault(), t()) {
                        Whl.Dialog.msg({
                            id: "send",
                            title: "Sending",
                            msg: "Please stand by while your email is being sent.",
                            hideClose: !1,
                            remove: !0
                        }), $(".ui-button-text-only").addClass("button button-wide"), $(".ui-dialog-titlebar-close").removeClass("ui-state-default"), $(".ui-dialog-titlebar-close").hover(function() {
                            $(this).removeClass("ui-state-hover")
                        });
                        var a = {
                            type: "POST",
                            url: "/sendpage?act=send",
                            dataType: "json",
                            data: $("#frmSendPage").serialize(),
                            success: function(e) {
                                "invalid" == e.data ? $("#sec_numInvalid").html(e.msg) : ($("#send-this-page").html(e.msg), $("#send-this-page").parents().find(".ui-dialog-buttonpane button:eq(1)").css("display", "none"), e.errCode || setTimeout(function() {
                                    $("#send-this-page").dialog("close")
                                }, 5e3)), setTimeout(function() {
                                    Whl.Dialog.close("send")
                                }, 500)
                            },
                            error: function(e, t) {
                                Whl.Dialog.error({
                                    title: "Error",
                                    msg: t,
                                    hideClose: !1,
                                    remove: !0
                                })
                            }
                        };
                        $.ajax(a)
                    }
                })
            })
        }), $("#subscribe-news").click(function(e) {
            e.preventDefault(), $("#news-email").val().isEmail() ? $("#frm-subscribe").submit() : Whl.Dialog.msg({
                title: Message.dlg.title2,
                msg: Message.errEmail,
                remove: !0,
                callback: function() {
                    $("#news-email").focus()
                }
            })
        }), $("#user-signin").click(function(e) {
            e.preventDefault(), $("#frm-traveller").submit()
        }), $("#agent-signin").click(function(e) {
            e.preventDefault(), "- email address -" != $("#agent-name").val() && "- password -" != $("#agent-pass").val() && $("#agent-signin-form").submit()
        })
    },
    sendThisPage: function() {
        var e = encodeURIComponent(window.location.pathname),
            t = encodeURIComponent(document.title);
        this.popUp("/sendpage?uri=" + e + "&page_title=" + t, 600, 590)
    },
    popUp: function(e, t, a) {
        var i = null;
        t = t ? t : 680, a = a ? a : 420;
        var r = (screen.width - t) / 2;
        null == i || i.closed ? i = window.open(e, "", "width=" + t + ",height=" + a + ",scrollbars,resizable,center,left=" + r) : i.location.href = e
    }
}), Whl.UA.Alm = function(e, t, a, i, r, o, n) {
    this._url = e, this._childPolicy = a, this._almData = t, this._startDate = i || null, r = parseInt(r) || 1, this._groupMin = Math.max(1, r), o = parseInt(o) || 1, this._groupMax = Math.max(1, o), this._tourType = parseInt(n) || 0;
    try {
        this._departures = Whl.Combo.get("departure-time").getObjValue(), this._currency = $($(".price-currency").get(0)).html(), this._promoCode = "", this._disabled = !0, this.initialize()
    } catch (s) {}
}, Whl.UA.Alm.prototype = {
    initialize: function() {
        var e = {
            dateFormat: "MM d, yy",
            minDate: new Date
        };
        e.beforeShowDay = this._beforeShowday.bind(this), e.onSelect = this._selectDate.bind(this), e.onChangeMonthYear = this._changeMonth.bind(this), this.calendar = $("#datepicker"), this.calendar.datepicker(e);
        for (var t = new Date, a = "", i = "", r = 1; 12 > r; r++) {
            if ("undefined" != typeof alm.allotment[t.getMonth() + r + "-" + t.getFullYear()]) {
                for (var o = alm.allotment[t.getMonth() + r + "-" + t.getFullYear()][0].depart[0].alm, n = 0 != this._tourType ? this._groupMin : 1, s = n, l = 0; o >= s; s++, l++) a += '<option value="' + s + '">' + s + "</option>", i += '<option value="' + l + '">' + l + "</option>";
                i += '<option value="' + l + '">' + l + "</option>", $("#no-adults").html(a), $("#no-children").html(i);
                break
            }
            11 == r && (a += '<option value="1">1</option>', i += '<option value="0">0</option>', $("#departure-time").attr("disabled", "disabled"), $("#no-children").attr("disabled", "disabled"), $("#no-adults").attr("disabled", "disabled"), $("#no-adults").html(a), $("#no-children").html(i))
        }
        this._selectedDate = null, this._viewFirstAvail(), $("#submitBooking").unbind("click"), $("#submitBooking").click(this.submitBooking.bindEvent(this));
        var u = null,
            d = this._groupMin,
            c = this._tourType;
        $("#departure-time").change(function() {
            $("input[name=departure-time]").val($(this).val()), u = $(this).val(), this.calendar = $("#datepicker");
            for (var e = this.calendar.datepicker("getDate").getDate(), t = this.calendar.datepicker("getDate").getMonth() + 1, a = this.calendar.datepicker("getDate").getFullYear(), i = t + "-" + a, r = alm.allotment[i], o = null, n = null, s = 0; s < r.length; s++)
                if (r[s].date.substr(r[s].date.indexOf(",") - 2, 2) == e) {
                    o = r[s];
                    break
                }
            for (var l = 0; l < o.depart.length; l++)
                if ($(this).val() == o.depart[l].id) {
                    n = o.depart[l].alm;
                    break
                }
            for (var h = "", p = "", m = 0 != c ? d : 1, g = parseInt($("#no-adults").val()) || m, v = parseInt($("#no-children").val()) || 0, f = m, b = 0, s = m, l = 0; n >= s; s++, l++) h += '<option value="' + s + '">' + s + "</option>", p += '<option value="' + l + '">' + l + "</option>", g == s && (f = s), v == l && (b = l);
            p += '<option value="' + l + '">' + l + "</option>", $("#no-adults").html(h), $("#no-children").html(p), $("#no-adults").val(f), $("#no-children").val(b)
        }), $("#tester-so").removeClass("ui-hide").dialog({
            bgiframe: !0,
            autoOpen: !1,
            width: 500,
            height: "auto",
            maxHeight: 350,
            modal: !0,
            resizable: !1,
            open: function() {
                $("#tester-so").parents(".ui-dialog-buttonpane button:eq(1)").focus(), $("#promo-code").val(this._promoCode)
            }.bind(this),
            close: function() {
                $("#promo-code").val("")
            },
            buttons: {
                Cancel: function() {
                    $(this).dialog("close")
                },
                Ok: this._checkPromoCode.bind(this)
            }
        }), $("#pcode-add").click(function(e) {
            e.preventDefault(), $("#pcode-msg").html(""), $("#tester-so").dialog("open")
        }), $("#pcode-remove").click(this._removePromoCode.bindEvent(this))
    },
    setData: function(e) {
        this._almData = e
    },
    submitBooking: function() {
        if (arguments[0].preventDefault(), this._validate()) {
            Whl.Dialog.msg({
                id: "book",
                title: Message.dlg.title3,
                msg: Message.alm.check,
                buttons: {}
            });
            var param = "departure_date=" + this._selectedDate.getDate() + "/" + (this._selectedDate.getMonth() + 1) + "/" + this._selectedDate.getFullYear();
            "" != this._promoCode && (param += "&promo_code=" + this._promoCode);
            var option = {
                type: "POST",
                url: this._url + "?act=checkAlm",
                dataType: "text",
                data: param,
                success: function(almData) {
                    if (Whl.isJson(almData))
                        if (almData = eval("(" + almData + ")"), Whl.Dialog.close("book"), almData.result) {
                            var frm = document.getElementById("frmBooking");
                            frm.departure_date.value = this._selectedDate.getDate() + "/" + (this._selectedDate.getMonth() + 1) + "/" + this._selectedDate.getFullYear(), frm.submit()
                        } else {
                            var err = Message[almData.promoCode[0]];
                            (603 == almData.promoCode[0] || 605 == almData.promoCode[0]) && (err = err.replace(/\{0\}/g, almData.promoCode[1][0]), err = err.replace(/\{1\}/g, almData.promoCode[1][1])), Whl.Dialog.error({
                                title: Message.dlg.title4,
                                msg: err,
                                remove: !0
                            })
                        }
                }.bind(this),
                error: function(e, t) {
                    Whl.Dialog.error({
                        msg: t
                    })
                }
            };
            $.ajax(option)
        }
    },
    _beforeShowday: function(e) {
        var t = e.getMonth() + 1 + "-" + e.getFullYear(),
            a = null,
            i = null,
            r = !1;
        if (!Object.isUndefined(this._almData[t])) {
            a = this._almData[t];
            for (var o in a) {
                var i = a[o],
                    n = new Date(i.date);
                if (e.getTime() == n.getTime()) {
                    r = !0;
                    break
                }
            }
        }
        return r ? [!0, "alm_" + e.getDate() + "-" + t + "_" + o] : [!1, "ui-state-disabled1"]
    },
    _selectDate: function(e) {
        var t = new Date(e),
            a = null;
        if ($("td[class*='alm_" + t.getDate() + "-" + (t.getMonth() + 1) + "-" + t.getFullYear() + "']").each(function() {
                var e = this.className.split(" ");
                if (0 < e.length) {
                    for (var t = 0; t < e.length; t++)
                        if (-1 != e[t].indexOf("alm")) {
                            a = e[t];
                            break
                        }
                } else a = this.className
            }), null != a) {
            a = a.split("_"), t = a[1].split("-"), this._viewPrice(this._almData[t[1] + "-" + t[2]][parseInt(a[2])]);
            for (var i = this._almData[t[1] + "-" + t[2]][parseInt(a[2])], r = $("#departure-time").val(), o = 0, n = 0; n < i.depart.length; n++)
                if (i.depart[n].id == r) {
                    o = i.depart[n].alm;
                    break
                }
            $("#departure-time").removeAttr("disabled"), $("#no-adults").removeAttr("disabled");
            for (var s = "", l = "", u = 0 != this._tourType ? this._groupMin : 1, d = parseInt($("#no-adults").val()) || u, c = parseInt($("#no-children").val()) || 0, h = u, p = 0, n = u, m = 0; o >= n; n++, m++) s += '<option value="' + n + '">' + n + "</option>", l += '<option value="' + m + '">' + m + "</option>", d == n && (h = n), c == m && (p = m);
            l += '<option value="' + m + '">' + m + "</option>", $("#no-adults").html(s), $("#no-children").html(l), $("#no-adults").val(h), $("#no-children").val(p)
        }
    },
    _changeMonth: function(e, t) {
        Object.isUndefined(this._almData[t + "-" + e]) && this._update("01/" + t + "/" + e)
    },
    _viewPrice: function(e) {
        var t = Whl.Combo.get("departure-time"),
            a = $("#departure-time").val(),
            i = !1;
        t.removeAll();
        for (var r in this._departures)
            for (var o in e.depart)
                if (e.depart[o].id == this._departures[r].value) {
                    t.addItem(this._departures[r]), a == this._departures[r].value && (i = !0);
                    break
                }
        i && $("#departure-time").val(a), $("input.depart").val($("select.depart").val());
        var n = $("#no-adults"),
            s = $("#no-children"),
            l = parseInt(n.val());
        n.unbind().change(this._viewPrice.bind(this, e)), s.unbind().change(this._viewPrice.bind(this, e));
        var u = parseFloat(e.adultPrice.replace(/[^0-9\.]/g, "")) * parseInt(n.val()),
            d = parseFloat(e.childPrice.replace(/[^0-9\.]/g, "")) * parseInt(s.val());
        $("#price-adults").html(parseFloat(u.toFixed(2))), 1 == this._childPolicy ? ($("#price-children").html(parseFloat(d.toFixed(2))), 0 == s.val() ? $("span.price-children").hide() : $("span.price-children").show(), l += parseInt(s.val())) : 0 == this._childPolicy ? ($("span.price-children").html("Not Allowed"), $("#no-children").attr("disabled", "disabled")) : 2 == this._childPolicy && $("span.price-children").html("Free of charge"), l >= 4 ? $(".makeitsocial-btn-div").addClass("importantShow") : $(".makeitsocial-btn-div").removeClass("importantShow"), this._selectedDate = new Date(e.date)
    },
    _viewFirstAvail: function() {
        var e = null;
        for (var t in this._almData) {
            e = this._almData[t];
            break
        }
        if (null === e) this._disable();
        else {
            var a = e[0];
            if (this._disabled && this._enable(), this._startDate)
                for (var i in e) {
                    var r = e[i];
                    if (r.date == this._startDate) {
                        a = r;
                        break
                    }
                }
            if (e = a, !this._selectedDate) {
                var o = e.date;
                this.calendar.datepicker("setDate", new Date(o)), o = o.split(","), o = o[0].split(" "), $("#first-avail-date").html(o[1] + " " + o[0]), this._selectedDate = new Date(e.date)
            }
            this._viewPrice(e)
        }
    },
    _disable: function() {
        $("#first-avail").html(Message.alm.unAvail), $("#first-avail-date").html(""), Whl.Combo.get("departure-time").removeAll().disabled = !0, $("#no-adults").attr("disabled", "disabled"), $("#no-children").attr("disabled", "disabled"), $(".price-currency").html(""), $("#price-adults").html(""), $("#price-children").html(""), this._disabled = !0, this._selectedDate = null
    },
    _enable: function() {
        $("#first-avail").html(Message.alm.firstAvail), $("#first-avail-date").html(""), $("#departure-time").removeAttr("disabled"), $("#no-adults").removeAttr("disabled"), this._childPolicy > 0 && $("#no-children").removeAttr("disabled"), $(".price-currency").html(this._currency), this._disabled = !1
    },
    _validate: function() {
        var e = !1,
            t = 0;
        if (null !== this._selectedDate) {
            var a = this._selectedDate.getMonth() + 1;
            if (a += "-" + this._selectedDate.getFullYear(), !Object.isUndefined(this._almData[a]))
                for (var i in this._almData[a]) {
                    var r = new Date(this._almData[a][i].date);
                    if (r.getTime() == this._selectedDate.getTime()) {
                        e = !0, t = this._almData[a][i];
                        break
                    }
                }
        }
        if (!e) return Whl.Dialog.msg({
            id: "validate",
            title: Message.dlg.title2,
            msg: Message.alm.departureDate
        }), !1;
        if (!$("#departure-time").val()) return Whl.Dialog.msg({
            id: "validate",
            title: Message.dlg.title2,
            msg: Message.alm.departureTime
        }), !1;
        for (var o in t.depart) {
            {
                t.depart[o]
            }
            if (t.depart[o].id == $("#departure-time").val()) {
                t = t.depart[o].alm;
                break
            }
        }
        if (t = parseInt(t), 0 == t) return Whl.Dialog.msg({
            id: "validate",
            title: Message.dlg.title2,
            msg: Message[209],
            remove: !0
        }), !1;
        if (t > -1) {
            var n = parseInt($("#no-adults").val()) || 0,
                s = parseInt($("#no-children").val()) || 0,
                l = n + s;
            if (l < this._groupMin) {
                var u = Message.alm.groupMin + this._groupMin;
                return Whl.Dialog.msg({
                    id: "validate",
                    title: Message.dlg.title4,
                    msg: u
                }), !1
            }
            if (l > t) return Whl.Dialog.msg({
                id: "validate",
                title: Message.dlg.title6,
                msg: Message.alm.dateAlt
            }), !1
        }
        return !0
    },
    _checkPromoCode: function() {
        var e = $("#promo-code");
        if ("" == e.val()) $("#pcode-msg").html(Message.alm.inValidCode), e.focus();
        else {
            $("#pcode-msg").html("");
            var t = null != this._selectedDate ? this._selectedDate : new Date;
            t = "01/" + (t.getMonth() + 1) + "/" + t.getFullYear(), this.setData({}), this._promoCode = e.val(), this._update(t)
        }
    },
    _removePromoCode: function() {
        arguments[0].preventDefault(), $("#pcode-text").html("").hide(), $("#pcode-remove").hide(), $("#pcode-add").show(), this._promoCode = "", $("#promo-code").val(""), $("#promo_code").val("");
        var e = null != this._selectedDate ? this._selectedDate : new Date;
        e = "01/" + (e.getMonth() + 1) + "/" + e.getFullYear(), this.setData({}), this._update(e)
    },
    _update: function(date, departDate) {
        var param = "date=" + date;
        departDate = departDate || null, "" != this._promoCode && (param += "&promo_code=" + this._promoCode), null != departDate && (param += "&departure_date=" + departDate.getDate() + "/" + (departDate.getMonth() + 1) + "/" + departDate.getFullYear());
        var option = {
            type: "POST",
            url: this._url,
            dataType: "text",
            data: param,
            success: function(almData) {
                if (Whl.isJson(almData)) {
                    if (almData = eval("(" + almData + ")"), almData.result) {
                        Object.extend(this._almData, almData.allotment);
                        try {
                            DP_jQuery.datepicker._adjustDate("#datepicker")
                        } catch (e) {
                            jQuery("#datepicker").datepicker("refresh")
                        }
                        if ("" != this._promoCode)
                            if (almData.promoCode[0]) {
                                $("#tester-so").dialog("isOpen") || $("#tester-so").dialog("open");
                                var err = Message[almData.promoCode[0]];
                                (603 == almData.promoCode[0] || 605 == almData.promoCode[0]) && (err = err.replace(/\{0\}/g, almData.promoCode[1][0]), err = err.replace(/\{1\}/g, almData.promoCode[1][1])), $("#pcode-msg").html(err), $("#promo-code").val(this._promoCode).focus(), this._promoCode = ""
                            } else $("#tester-so").dialog("close"), $("#promo_code").val(this._promoCode), $("#pcode-text").html(this._promoCode).removeClass("ui-hide").show(), $("#pcode-remove").removeClass("ui-hide").show(), $("#pcode-add").hide();
                        this._hasData() ? this._viewFirstAvail() : this._disable()
                    }
                } else Whl.Dialog.error({
                    msg: almData
                })
            }.bind(this),
            error: function(e, t) {
                Whl.Dialog.error({
                    msg: t
                })
            }
        };
        $.ajax(option)
    },
    _hasData: function() {
        var e = !1;
        for (var t in this._almData) {
            e = !0;
            break
        }
        return e
    }
}, Whl.UA.ImageRotator = function(e, t, a) {
    this._path = e, this._imgData = t, this._elmImg = $("#" + a), this.initialize()
}, Whl.UA.ImageRotator.prototype = {
    initialize: function() {
        if (0 != this._elmImg.length && 1 != this._imgData.length) {
            var e = this._preloadImages();
            e.length > 0 && setInterval(this.run.bind(this, e), 5e3)
        }
    },
    run: function(e) {
        var t = Whl.rand(this._imgData.length - 1);
        this._elmImg.attr("src", e[t].src)
    },
    _preloadImages: function() {
        var e = [],
            t = this;
        return $.each(this._imgData, function(a) {
            e[a] = new Image, Object.isString(this) ? e[a].src = this : Object.isObject(this) && (e[a].src = t._path + this.src || "", e[a].alt = this.alttext || "")
        }), e
    }
}, Whl.UA.AlmPopup = function(e, t, a) {
    this._url = e, this._childPolicy = a, this._almData = t;
    try {
        this._departures = Whl.Combo.get("departure-time-popup").getObjValue(), this._currency = $($(".price-currency-popup").get(0)).html(), this._promoCode = "", this._disabled = !0, this.initialize()
    } catch (i) {}
}, Whl.UA.AlmPopup.prototype = {
    initialize: function() {
        var e = {
            dateFormat: "MM d, yy",
            minDate: new Date
        };
        e.beforeShowDay = this._beforeShowday.bind(this), e.onSelect = this._selectDate.bind(this), e.onChangeMonthYear = this._changeMonth.bind(this), this.calendar = $("#datepicker-popup"), this.calendar.datepicker(e), this._selectedDate = null, this._viewFirstAvail(), $("#submitBooking-popup").unbind("click"), $("#submitBooking-popup").click(this.submitBooking.bindEvent(this)), $("#departure-time-popup").change(function() {
            $("input[name=departure-time-popup]").val($(this).val())
        })
    },
    submitBooking: function() {
        if (arguments[0].preventDefault(), this._validate()) {
            Whl.Dialog.msg({
                id: "book",
                title: Message.dlg.title3,
                msg: Message.alm.check,
                buttons: {}
            });
            var param = "departure_date=" + this._selectedDate.getDate() + "/" + (this._selectedDate.getMonth() + 1) + "/" + this._selectedDate.getFullYear();
            "" != this._promoCode && (param += "&promo_code=" + this._promoCode);
            var option = {
                type: "POST",
                url: this._url + "?act=checkAlm",
                dataType: "text",
                data: param,
                success: function(almData) {
                    if (Whl.isJson(almData))
                        if (almData = eval("(" + almData + ")"), Whl.Dialog.close("book"), almData.result) {
                            var frm = document.frmBookingPopup;
                            frm.departure_date_popup.value = this._selectedDate.getDate() + "/" + (this._selectedDate.getMonth() + 1) + "/" + this._selectedDate.getFullYear(), frm.submit()
                        } else {
                            var err = Message[almData.promoCode[0]];
                            (603 == almData.promoCode[0] || 605 == almData.promoCode[0]) && (err = err.replace(/\{0\}/g, almData.promoCode[1][0]), err = err.replace(/\{1\}/g, almData.promoCode[1][1])), Whl.Dialog.error({
                                title: Message.dlg.title4,
                                msg: err,
                                remove: !0
                            })
                        }
                }.bind(this),
                error: function(e, t) {
                    Whl.Dialog.error({
                        msg: t,
                        remove: !0
                    })
                }
            };
            $.ajax(option)
        }
    },
    _beforeShowday: function(e) {
        var t = e.getMonth() + 1 + "-" + e.getFullYear(),
            a = null,
            i = null,
            r = !1;
        if (!Object.isUndefined(this._almData[t])) {
            a = this._almData[t];
            for (var o in a) {
                var i = a[o],
                    n = new Date(i.date);
                if (e.getTime() == n.getTime()) {
                    r = !0;
                    break
                }
            }
        }
        return r ? [!0, "alm_" + e.getDate() + "-" + t + "_" + o] : [!1, "ui-state-disabled1"]
    },
    _selectDate: function(e) {
        var t = new Date(e),
            a = null;
        $("td[class*='alm_" + t.getDate() + "-" + (t.getMonth() + 1) + "-" + t.getFullYear() + "']").each(function() {
            var e = this.className.split(" ");
            if (0 < e.length) {
                for (var t = 0; t < e.length; t++)
                    if (-1 != e[t].indexOf("alm")) {
                        a = e[t];
                        break
                    }
            } else a = this.className
        }), null != a && (a = a.split("_"), t = a[1].split("-"), this._viewPrice(this._almData[t[1] + "-" + t[2]][parseInt(a[2])]))
    },
    _changeMonth: function(e, t) {
        Object.isUndefined(this._almData[t + "-" + e]) && this._update("01/" + t + "/" + e)
    },
    _viewPrice: function(e) {
        var t = Whl.Combo.get("departure-time-popup");
        t.removeAll();
        for (var a in this._departures)
            for (var i in e.depart)
                if (e.depart[i].id == this._departures[a].value) {
                    t.addItem(this._departures[a]);
                    break
                }
        1 == t.options.length ? ($("select.departpopup").hide(), $("span.departpopup").show().html(t.options[0].text)) : ($("select.departpopup").show(), $("span.departpopup").hide()), $("input.departpopup").val($("select.departpopup").val());
        var r = $("#no-adults-popup"),
            o = $("#no-children-popup"),
            n = parseInt(r.val());
        r.unbind().change(this._viewPrice.bind(this, e)), o.unbind().change(this._viewPrice.bind(this, e));
        var s = parseFloat(e.adultPrice.replace(/[^0-9\.]/g, "")) * parseInt(r.val()),
            l = parseFloat(e.childPrice.replace(/[^0-9\.]/g, "")) * parseInt(o.val());
        $("#price-adults-popup").html(s.toFixed(2)), 1 == this._childPolicy ? (0 == o.val() ? $("span.price-children-popup").hide() : ($("#price-children-popup").html(l.toFixed(2)), $("span.price-children-popup").show()), n += parseInt(o.val())) : 0 == this._childPolicy ? ($("span.price-children-popup").html("Not Allowed"), $("#no-children-popup").attr("disabled", "disabled")) : 2 == this._childPolicy && $("span.price-children-popup").html("Free of charge"), n >= 4 ? $(".makeitsocial-btn-div").addClass("importantShow") : $(".makeitsocial-btn-div").removeClass("importantShow"), this._selectedDate = new Date(e.date)
    },
    _viewFirstAvail: function() {
        var e = null;
        for (var t in this._almData) {
            e = this._almData[t];
            break
        }
        if (null === e) this._disable();
        else {
            if (this._disabled && this._enable(), e = e[0], !this._selectedDate) {
                var a = e.date;
                this.calendar.datepicker("setDate", new Date(a)), a = a.split(","), a = a[0].split(" "), $("#first-avail-date-popup").html(a[1] + " " + a[0]), this._selectedDate = new Date(e.date)
            }
            this._viewPrice(e)
        }
    },
    _disable: function() {
        $("#first-avail-popup").html(Message.alm.unAvail), $("#first-avail-date-popup").html(""), Whl.Combo.get("departure-time-popup").removeAll().disabled = !0, $("#no-adults-popup").attr("disabled", "disabled"), $("#no-children-popup").attr("disabled", "disabled"), $(".price-currency-popup").html(""), $("#price-adults-popup").html(""), $("#price-children-popup").html(""), this._disabled = !0, this._selectedDate = null
    },
    _enable: function() {
        $("#first-avail-popup").html(Message.alm.firstAvail), $("#first-avail-date-popup").html(""), $("#departure-time-popup").removeAttr("disabled"), $("#no-adults-popup").removeAttr("disabled"), this._childPolicy > 0 && $("#no-children-popup").removeAttr("disabled"), $(".price-currency-popup").html(this._currency), this._disabled = !1
    },
    _validate: function() {
        var e = !1,
            t = 0;
        if (null !== this._selectedDate) {
            var a = this._selectedDate.getMonth() + 1;
            if (a += "-" + this._selectedDate.getFullYear(), !Object.isUndefined(this._almData[a]))
                for (var i in this._almData[a]) {
                    var r = new Date(this._almData[a][i].date);
                    if (r.getTime() == this._selectedDate.getTime()) {
                        e = !0, t = this._almData[a][i];
                        break
                    }
                }
        }
        if (!e) return Whl.Dialog.msg({
            id: "validate",
            title: Message.dlg.title2,
            msg: Message.alm.departureDate,
            remove: !0
        }), !1;
        if (!$("#departure-time-popup").val()) return Whl.Dialog.msg({
            id: "validate",
            title: Message.dlg.title2,
            msg: Message.alm.departureTime,
            remove: !0
        }), !1;
        for (var o in t.depart) {
            {
                t.depart[o]
            }
            if (t.depart[o].id == $("#departure-time-popup").val()) {
                t = t.depart[o].alm;
                break
            }
        }
        if (t = parseInt(t), 0 == t) return Whl.Dialog.msg({
            id: "validate",
            title: Message.dlg.title2,
            msg: Message[209],
            remove: !0
        }), !1;
        if (t > -1) {
            var n = parseInt($("#no-adults-popup").val()),
                s = parseInt($("#no-children-popup").val());
            if (n + s > t) return Whl.Dialog.msg({
                id: "validate",
                title: Message.dlg.title6,
                msg: Message.alm.dateAlt,
                remove: !0
            }), !1
        }
        return !0
    },
    _update: function(date, departDate) {
        var param = "date=" + date;
        departDate = departDate || null, "" != this._promoCode && (param += "&promo_code=" + this._promoCode), null != departDate && (param += "&departure_date=" + departDate.getDate() + "/" + (departDate.getMonth() + 1) + "/" + departDate.getFullYear());
        var option = {
            type: "POST",
            url: this._url,
            dataType: "text",
            data: param,
            success: function(almData) {
                if (Whl.isJson(almData)) {
                    if (almData = eval("(" + almData + ")"), almData.result) {
                        if (Object.extend(this._almData, almData.allotment), DP_jQuery.datepicker._adjustDate("#datepicker-popup"), "" != this._promoCode)
                            if (almData.promoCode[0]) {
                                var err = Message[almData.promoCode[0]];
                                (603 == almData.promoCode[0] || 605 == almData.promoCode[0]) && (err = err.replace(/\{0\}/g, almData.promoCode[1][0]), err = err.replace(/\{1\}/g, almData.promoCode[1][1])), $("#promo-code_popup").val(this._promoCode).focus(), this._promoCode = ""
                            } else $("#promo_code_popup").val(this._promoCode);
                        this._hasData() ? this._viewFirstAvail() : this._disable()
                    }
                } else Whl.Dialog.error({
                    msg: almData,
                    remove: !0
                })
            }.bind(this),
            error: function(e, t) {
                Whl.Dialog.error({
                    msg: t,
                    remove: !0
                })
            }
        };
        $.ajax(option)
    },
    _hasData: function() {
        var e = !1;
        for (var t in this._almData) {
            e = !0;
            break
        }
        return e
    }
};