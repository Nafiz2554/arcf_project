<!DOCTYPE html>
<html class="js cssgradients placeholder inlinesvg generatedcontent cssanimations flexbox csstransforms backgroundblendmode objectfit object-fit cssclippathsvg cssclippathinset cssclippathcircle cssclippathellipse cssclippathpolygon fonts-loaded" lang="en"
    dir="ltr">
<!--<![endif]-->

<head>
    <style>
        @keyframes beginBrowserAutofill {
            0% {}
            to {}
        }
        
        @keyframes endBrowserAutofill {
            0% {}
            to {}
        }
        
        .pac-container {
            background-color: #fff;
            position: absolute!important;
            z-index: 1000;
            border-radius: 2px;
            border-top: 1px solid #d9d9d9;
            font-family: Arial, sans-serif;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden
        }
        
        .pac-logo:after {
            content: "";
            padding: 1px 1px 1px 0;
            height: 18px;
            box-sizing: border-box;
            text-align: right;
            display: block;
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);
            background-position: right;
            background-repeat: no-repeat;
            background-size: 120px 14px
        }
        
        .hdpi.pac-logo:after {
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)
        }
        
        .pac-item {
            cursor: default;
            padding: 0 4px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            line-height: 30px;
            text-align: left;
            border-top: 1px solid #e6e6e6;
            font-size: 11px;
            color: #515151
        }
        
        .pac-item:hover {
            background-color: #fafafa
        }
        
        .pac-item-selected,
        .pac-item-selected:hover {
            background-color: #ebf2fe
        }
        
        .pac-matched {
            font-weight: 700
        }
        
        .pac-item-query {
            font-size: 13px;
            padding-right: 3px;
            color: #000
        }
        
        .pac-icon {
            width: 15px;
            height: 20px;
            margin-right: 7px;
            margin-top: 6px;
            display: inline-block;
            vertical-align: top;
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);
            background-size: 34px
        }
        
        .hdpi .pac-icon {
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)
        }
        
        .pac-icon-search {
            background-position: -1px -1px
        }
        
        .pac-item-selected .pac-icon-search {
            background-position: -18px -1px
        }
        
        .pac-icon-marker {
            background-position: -1px -161px
        }
        
        .pac-item-selected .pac-icon-marker {
            background-position: -18px -161px
        }
        
        .pac-placeholder {
            color: gray
        }
        
        .pac-target-input:-webkit-autofill {
            animation-name: beginBrowserAutofill
        }
        
        .pac-target-input:not(:-webkit-autofill) {
            animation-name: endBrowserAutofill
        }
    </style>
    <!-- Google Tag Manager -->
    <script type="text/javascript" src="https://bam.nr-data.net/1/NRJS-b7f93d6e9afef1935a5?a=1109265918&amp;v=1215.1253ab8&amp;to=dFpeQkdcWQoGRE1XV1lURFMaWlsCBk4%3D&amp;rst=4560&amp;ck=1&amp;ref=https://www.opensecrets.org/donate&amp;ap=128&amp;be=2786&amp;fe=3091&amp;dc=3087&amp;af=err,xhr,stn,ins,spa&amp;perf=%7B%22timing%22:%7B%22of%22:1643520979868,%22n%22:0,%22u%22:2090,%22ue%22:2091,%22f%22:14,%22dn%22:14,%22dne%22:14,%22c%22:14,%22ce%22:14,%22rq%22:66,%22rp%22:2058,%22rpe%22:2704,%22dl%22:2095,%22di%22:2743,%22ds%22:2753,%22de%22:2754,%22dc%22:2776,%22l%22:2776,%22le%22:2801%7D,%22navigation%22:%7B%7D%7D&amp;fp=2416&amp;fcp=2416&amp;jsonp=NREUM.setToken"></script>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/dPctOHA2ifhWm5WzFM_B5TjT/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-YOM1VjUkAnOtLKpWHvk6KSrYAoLEkaoPuep5VFiDATRna5swsN03dxDH51fiq3/H"></script>
    <script src="https://js-agent.newrelic.com/nr-spa-1215.min.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/gtm/js?id=GTM-M8WZQSV&amp;t=gtm4&amp;cid=1494275310.1643433436"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-RV71R575T7&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MKPRXNV"></script>
    <script type="text/javascript">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MKPRXNV');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <script type="text/javascript">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "NRJS-b7f93d6e9afef1935a5",
            "applicationID": "1109265918",
            "transactionName": "dFpeQkdcWQoGRE1XV1lURFMaWlsCBk4=",
            "queueTime": 0,
            "applicationTime": 128,
            "agent": ""
        }
    </script>
    <script type="text/javascript">
        (window.NREUM || (NREUM = {})).init = {
            privacy: {
                cookies_enabled: true
            },
            ajax: {
                deny_list: ["bam.nr-data.net"]
            },
            distributed_tracing: {
                enabled: true
            }
        };
        (window.NREUM || (NREUM = {})).loader_config = {
            agentID: "1109265966",
            accountID: "3172948",
            trustKey: "3172948",
            xpid: "VwcAU19XABABVVFbBQcCX1UJ",
            licenseKey: "NRJS-b7f93d6e9afef1935a5",
            applicationID: "1109265918"
        };
        window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var o = e[n] = {
                        exports: {}
                    };
                    t[n][0].call(o.exports, function(e) {
                        var o = t[n][1][e];
                        return r(o || e)
                    }, o, o.exports)
                }
                return e[n].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < n.length; o++) r(n[o]);
            return r
        }({
            1: [function(t, e, n) {
                function r(t) {
                    try {
                        s.console && console.log(t)
                    } catch (e) {}
                }
                var o, i = t("ee"),
                    a = t(32),
                    s = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (s.console = !0, o.indexOf("dev") !== -1 && (s.dev = !0), o.indexOf("nr_dev") !== -1 && (s.nrDev = !0))
                } catch (c) {}
                s.nrDev && i.on("internal-error", function(t) {
                    r(t.stack)
                }), s.dev && i.on("fn-err", function(t, e, n) {
                    r(n.stack)
                }), s.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(s, function(t, e) {
                    return t
                }).join(", ")))
            }, {}],
            2: [function(t, e, n) {
                function r(t, e, n, r, s) {
                    try {
                        l ? l -= 1 : o(s || new UncaughtException(t, e, n), !0)
                    } catch (f) {
                        try {
                            i("ierr", [f, c.now(), !0])
                        } catch (d) {}
                    }
                    return "function" == typeof u && u.apply(this, a(arguments))
                }

                function UncaughtException(t, e, n) {
                    this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
                }

                function o(t, e) {
                    var n = e ? null : c.now();
                    i("err", [t, n])
                }
                var i = t("handle"),
                    a = t(33),
                    s = t("ee"),
                    c = t("loader"),
                    f = t("gos"),
                    u = window.onerror,
                    d = !1,
                    p = "nr@seenError";
                if (!c.disabled) {
                    var l = 0;
                    c.features.err = !0, t(1), window.onerror = r;
                    try {
                        throw new Error
                    } catch (h) {
                        "stack" in h && (t(14), t(13), "addEventListener" in window && t(7), c.xhrWrappable && t(15), d = !0)
                    }
                    s.on("fn-start", function(t, e, n) {
                        d && (l += 1)
                    }), s.on("fn-err", function(t, e, n) {
                        d && !n[p] && (f(n, p, function() {
                            return !0
                        }), this.thrown = !0, o(n))
                    }), s.on("fn-end", function() {
                        d && !this.thrown && l > 0 && (l -= 1)
                    }), s.on("internal-error", function(t) {
                        i("ierr", [t, c.now(), !0])
                    })
                }
            }, {}],
            3: [function(t, e, n) {
                var r = t("loader");
                r.disabled || (r.features.ins = !0)
            }, {}],
            4: [function(t, e, n) {
                function r() {
                    U++, L = g.hash, this[u] = y.now()
                }

                function o() {
                    U--, g.hash !== L && i(0, !0);
                    var t = y.now();
                    this[h] = ~~this[h] + t - this[u], this[d] = t
                }

                function i(t, e) {
                    E.emit("newURL", ["" + g, e])
                }

                function a(t, e) {
                    t.on(e, function() {
                        this[e] = y.now()
                    })
                }
                var s = "-start",
                    c = "-end",
                    f = "-body",
                    u = "fn" + s,
                    d = "fn" + c,
                    p = "cb" + s,
                    l = "cb" + c,
                    h = "jsTime",
                    m = "fetch",
                    v = "addEventListener",
                    w = window,
                    g = w.location,
                    y = t("loader");
                if (w[v] && y.xhrWrappable && !y.disabled) {
                    var x = t(11),
                        b = t(12),
                        E = t(9),
                        R = t(7),
                        O = t(14),
                        T = t(8),
                        S = t(15),
                        P = t(10),
                        M = t("ee"),
                        C = M.get("tracer"),
                        N = t(23);
                    t(17), y.features.spa = !0;
                    var L, U = 0;
                    M.on(u, r), b.on(p, r), P.on(p, r), M.on(d, o), b.on(l, o), P.on(l, o), M.buffer([u, d, "xhr-resolved"]), R.buffer([u]), O.buffer(["setTimeout" + c, "clearTimeout" + s, u]), S.buffer([u, "new-xhr", "send-xhr" + s]), T.buffer([m + s, m + "-done", m + f + s, m + f + c]), E.buffer(["newURL"]), x.buffer([u]), b.buffer(["propagate", p, l, "executor-err", "resolve" + s]), C.buffer([u, "no-" + u]), P.buffer(["new-jsonp", "cb-start", "jsonp-error", "jsonp-end"]), a(T, m + s), a(T, m + "-done"), a(P, "new-jsonp"), a(P, "jsonp-end"), a(P, "cb-start"), E.on("pushState-end", i), E.on("replaceState-end", i), w[v]("hashchange", i, N(!0)), w[v]("load", i, N(!0)), w[v]("popstate", function() {
                        i(0, U > 1)
                    }, N(!0))
                }
            }, {}],
            5: [function(t, e, n) {
                function r() {
                    var t = new PerformanceObserver(function(t, e) {
                        var n = t.getEntries();
                        s(v, [n])
                    });
                    try {
                        t.observe({
                            entryTypes: ["resource"]
                        })
                    } catch (e) {}
                }

                function o(t) {
                    if (s(v, [window.performance.getEntriesByType(w)]), window.performance["c" + p]) try {
                        window.performance[h](m, o, !1)
                    } catch (t) {} else try {
                        window.performance[h]("webkit" + m, o, !1)
                    } catch (t) {}
                }

                function i(t) {}
                if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                    var a = t("ee"),
                        s = t("handle"),
                        c = t(14),
                        f = t(13),
                        u = t(6),
                        d = t(23),
                        p = "learResourceTimings",
                        l = "addEventListener",
                        h = "removeEventListener",
                        m = "resourcetimingbufferfull",
                        v = "bstResource",
                        w = "resource",
                        g = "-start",
                        y = "-end",
                        x = "fn" + g,
                        b = "fn" + y,
                        E = "bstTimer",
                        R = "pushState",
                        O = t("loader");
                    if (!O.disabled) {
                        O.features.stn = !0, t(9), "addEventListener" in window && t(7);
                        var T = NREUM.o.EV;
                        a.on(x, function(t, e) {
                            var n = t[0];
                            n instanceof T && (this.bstStart = O.now())
                        }), a.on(b, function(t, e) {
                            var n = t[0];
                            n instanceof T && s("bst", [n, e, this.bstStart, O.now()])
                        }), c.on(x, function(t, e, n) {
                            this.bstStart = O.now(), this.bstType = n
                        }), c.on(b, function(t, e) {
                            s(E, [e, this.bstStart, O.now(), this.bstType])
                        }), f.on(x, function() {
                            this.bstStart = O.now()
                        }), f.on(b, function(t, e) {
                            s(E, [e, this.bstStart, O.now(), "requestAnimationFrame"])
                        }), a.on(R + g, function(t) {
                            this.time = O.now(), this.startPath = location.pathname + location.hash
                        }), a.on(R + y, function(t) {
                            s("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                        }), u() ? (s(v, [window.performance.getEntriesByType("resource")]), r()) : l in window.performance && (window.performance["c" + p] ? window.performance[l](m, o, d(!1)) : window.performance[l]("webkit" + m, o, d(!1))), document[l]("scroll", i, d(!1)), document[l]("keypress", i, d(!1)), document[l]("click", i, d(!1))
                    }
                }
            }, {}],
            6: [function(t, e, n) {
                e.exports = function() {
                    return "PerformanceObserver" in window && "function" == typeof window.PerformanceObserver
                }
            }, {}],
            7: [function(t, e, n) {
                function r(t) {
                    for (var e = t; e && !e.hasOwnProperty(u);) e = Object.getPrototypeOf(e);
                    e && o(e)
                }

                function o(t) {
                    s.inPlace(t, [u, d], "-", i)
                }

                function i(t, e) {
                    return t[1]
                }
                var a = t("ee").get("events"),
                    s = t("wrap-function")(a, !0),
                    c = t("gos"),
                    f = XMLHttpRequest,
                    u = "addEventListener",
                    d = "removeEventListener";
                e.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function(t, e) {
                    var n = t[1];
                    if (null !== n && ("function" == typeof n || "object" == typeof n)) {
                        var r = c(n, "nr@wrapped", function() {
                            function t() {
                                if ("function" == typeof n.handleEvent) return n.handleEvent.apply(n, arguments)
                            }
                            var e = {
                                object: t,
                                "function": n
                            }[typeof n];
                            return e ? s(e, "fn-", null, e.name || "anonymous") : n
                        });
                        this.wrapped = t[1] = r
                    }
                }), a.on(d + "-start", function(t) {
                    t[1] = this.wrapped || t[1]
                })
            }, {}],
            8: [function(t, e, n) {
                function r(t, e, n) {
                    var r = t[e];
                    "function" == typeof r && (t[e] = function() {
                        var t = i(arguments),
                            e = {};
                        o.emit(n + "before-start", [t], e);
                        var a;
                        e[m] && e[m].dt && (a = e[m].dt);
                        var s = r.apply(this, t);
                        return o.emit(n + "start", [t, a], s), s.then(function(t) {
                            return o.emit(n + "end", [null, t], s), t
                        }, function(t) {
                            throw o.emit(n + "end", [t], s), t
                        })
                    })
                }
                var o = t("ee").get("fetch"),
                    i = t(33),
                    a = t(32);
                e.exports = o;
                var s = window,
                    c = "fetch-",
                    f = c + "body-",
                    u = ["arrayBuffer", "blob", "json", "text", "formData"],
                    d = s.Request,
                    p = s.Response,
                    l = s.fetch,
                    h = "prototype",
                    m = "nr@context";
                d && p && l && (a(u, function(t, e) {
                    r(d[h], e, f), r(p[h], e, f)
                }), r(s, "fetch", c), o.on(c + "end", function(t, e) {
                    var n = this;
                    if (e) {
                        var r = e.headers.get("content-length");
                        null !== r && (n.rxSize = r), o.emit(c + "done", [null, e], n)
                    } else o.emit(c + "done", [t], n)
                }))
            }, {}],
            9: [function(t, e, n) {
                var r = t("ee").get("history"),
                    o = t("wrap-function")(r);
                e.exports = r;
                var i = window.history && window.history.constructor && window.history.constructor.prototype,
                    a = window.history;
                i && i.pushState && i.replaceState && (a = i), o.inPlace(a, ["pushState", "replaceState"], "-")
            }, {}],
            10: [function(t, e, n) {
                function r(t) {
                    function e() {
                        f.emit("jsonp-end", [], l), t.removeEventListener("load", e, c(!1)), t.removeEventListener("error", n, c(!1))
                    }

                    function n() {
                        f.emit("jsonp-error", [], l), f.emit("jsonp-end", [], l), t.removeEventListener("load", e, c(!1)), t.removeEventListener("error", n, c(!1))
                    }
                    var r = t && "string" == typeof t.nodeName && "script" === t.nodeName.toLowerCase();
                    if (r) {
                        var o = "function" == typeof t.addEventListener;
                        if (o) {
                            var a = i(t.src);
                            if (a) {
                                var d = s(a),
                                    p = "function" == typeof d.parent[d.key];
                                if (p) {
                                    var l = {};
                                    u.inPlace(d.parent, [d.key], "cb-", l), t.addEventListener("load", e, c(!1)), t.addEventListener("error", n, c(!1)), f.emit("new-jsonp", [t.src], l)
                                }
                            }
                        }
                    }
                }

                function o() {
                    return "addEventListener" in window
                }

                function i(t) {
                    var e = t.match(d);
                    return e ? e[1] : null
                }

                function a(t, e) {
                    var n = t.match(l),
                        r = n[1],
                        o = n[3];
                    return o ? a(o, e[r]) : e[r]
                }

                function s(t) {
                    var e = t.match(p);
                    return e && e.length >= 3 ? {
                        key: e[2],
                        parent: a(e[1], window)
                    } : {
                        key: t,
                        parent: window
                    }
                }
                var c = t(23),
                    f = t("ee").get("jsonp"),
                    u = t("wrap-function")(f);
                if (e.exports = f, o()) {
                    var d = /[?&](?:callback|cb)=([^&#]+)/,
                        p = /(.*)\.([^.]+)/,
                        l = /^(\w+)(\.|$)(.*)$/,
                        h = ["appendChild", "insertBefore", "replaceChild"];
                    Node && Node.prototype && Node.prototype.appendChild ? u.inPlace(Node.prototype, h, "dom-") : (u.inPlace(HTMLElement.prototype, h, "dom-"), u.inPlace(HTMLHeadElement.prototype, h, "dom-"), u.inPlace(HTMLBodyElement.prototype, h, "dom-")), f.on("dom-start", function(t) {
                        r(t[0])
                    })
                }
            }, {}],
            11: [function(t, e, n) {
                var r = t("ee").get("mutation"),
                    o = t("wrap-function")(r),
                    i = NREUM.o.MO;
                e.exports = r, i && (window.MutationObserver = function(t) {
                    return this instanceof i ? new i(o(t, "fn-")) : i.apply(this, arguments)
                }, MutationObserver.prototype = i.prototype)
            }, {}],
            12: [function(t, e, n) {
                function r(t) {
                    var e = i.context(),
                        n = s(t, "executor-", e, null, !1),
                        r = new f(n);
                    return i.context(r).getCtx = function() {
                        return e
                    }, r
                }
                var o = t("wrap-function"),
                    i = t("ee").get("promise"),
                    a = t("ee").getOrSetContext,
                    s = o(i),
                    c = t(32),
                    f = NREUM.o.PR;
                e.exports = i, f && (window.Promise = r, ["all", "race"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(n) {
                        function r(t) {
                            return function() {
                                i.emit("propagate", [null, !o], a, !1, !1), o = o || !t
                            }
                        }
                        var o = !1;
                        c(n, function(e, n) {
                            Promise.resolve(n).then(r("all" === t), r(!1))
                        });
                        var a = e.apply(f, arguments),
                            s = f.resolve(a);
                        return s
                    }
                }), ["resolve", "reject"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(t) {
                        var n = e.apply(f, arguments);
                        return t !== n && i.emit("propagate", [t, !0], n, !1, !1), n
                    }
                }), f.prototype["catch"] = function(t) {
                    return this.then(null, t)
                }, f.prototype = Object.create(f.prototype, {
                    constructor: {
                        value: r
                    }
                }), c(Object.getOwnPropertyNames(f), function(t, e) {
                    try {
                        r[e] = f[e]
                    } catch (n) {}
                }), o.wrapInPlace(f.prototype, "then", function(t) {
                    return function() {
                        var e = this,
                            n = o.argsToArray.apply(this, arguments),
                            r = a(e);
                        r.promise = e, n[0] = s(n[0], "cb-", r, null, !1), n[1] = s(n[1], "cb-", r, null, !1);
                        var c = t.apply(this, n);
                        return r.nextPromise = c, i.emit("propagate", [e, !0], c, !1, !1), c
                    }
                }), i.on("executor-start", function(t) {
                    t[0] = s(t[0], "resolve-", this, null, !1), t[1] = s(t[1], "resolve-", this, null, !1)
                }), i.on("executor-err", function(t, e, n) {
                    t[1](n)
                }), i.on("cb-end", function(t, e, n) {
                    i.emit("propagate", [n, !0], this.nextPromise, !1, !1)
                }), i.on("propagate", function(t, e, n) {
                    this.getCtx && !e || (this.getCtx = function() {
                        if (t instanceof Promise) var e = i.context(t);
                        return e && e.getCtx ? e.getCtx() : this
                    })
                }), r.toString = function() {
                    return "" + f
                })
            }, {}],
            13: [function(t, e, n) {
                var r = t("ee").get("raf"),
                    o = t("wrap-function")(r),
                    i = "equestAnimationFrame";
                e.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function(t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}],
            14: [function(t, e, n) {
                function r(t, e, n) {
                    t[0] = a(t[0], "fn-", null, n)
                }

                function o(t, e, n) {
                    this.method = n, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-", this, n)
                }
                var i = t("ee").get("timer"),
                    a = t("wrap-function")(i),
                    s = "setTimeout",
                    c = "setInterval",
                    f = "clearTimeout",
                    u = "-start",
                    d = "-";
                e.exports = i, a.inPlace(window, [s, "setImmediate"], s + d), a.inPlace(window, [c], c + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(c + u, r), i.on(s + u, o)
            }, {}],
            15: [function(t, e, n) {
                function r(t, e) {
                    d.inPlace(e, ["onreadystatechange"], "fn-", s)
                }

                function o() {
                    var t = this,
                        e = u.context(t);
                    t.readyState > 3 && !e.resolved && (e.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, y, "fn-", s)
                }

                function i(t) {
                    x.push(t), m && (E ? E.then(a) : w ? w(a) : (R = -R, O.data = R))
                }

                function a() {
                    for (var t = 0; t < x.length; t++) r([], x[t]);
                    x.length && (x = [])
                }

                function s(t, e) {
                    return e
                }

                function c(t, e) {
                    for (var n in t) e[n] = t[n];
                    return e
                }
                t(7);
                var f = t("ee"),
                    u = f.get("xhr"),
                    d = t("wrap-function")(u),
                    p = t(23),
                    l = NREUM.o,
                    h = l.XHR,
                    m = l.MO,
                    v = l.PR,
                    w = l.SI,
                    g = "readystatechange",
                    y = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
                    x = [];
                e.exports = u;
                var b = window.XMLHttpRequest = function(t) {
                    var e = new h(t);
                    try {
                        u.emit("new-xhr", [e], e), e.addEventListener(g, o, p(!1))
                    } catch (n) {
                        try {
                            u.emit("internal-error", [n])
                        } catch (r) {}
                    }
                    return e
                };
                if (c(h, b), b.prototype = h.prototype, d.inPlace(b.prototype, ["open", "send"], "-xhr-", s), u.on("send-xhr-start", function(t, e) {
                        r(t, e), i(e)
                    }), u.on("open-xhr-start", r), m) {
                    var E = v && v.resolve();
                    if (!w && !v) {
                        var R = 1,
                            O = document.createTextNode(R);
                        new m(a).observe(O, {
                            characterData: !0
                        })
                    }
                } else f.on("fn-end", function(t) {
                    t[0] && t[0].type === g || a()
                })
            }, {}],
            16: [function(t, e, n) {
                function r(t) {
                    if (!s(t)) return null;
                    var e = window.NREUM;
                    if (!e.loader_config) return null;
                    var n = (e.loader_config.accountID || "").toString() || null,
                        r = (e.loader_config.agentID || "").toString() || null,
                        f = (e.loader_config.trustKey || "").toString() || null;
                    if (!n || !r) return null;
                    var h = l.generateSpanId(),
                        m = l.generateTraceId(),
                        v = Date.now(),
                        w = {
                            spanId: h,
                            traceId: m,
                            timestamp: v
                        };
                    return (t.sameOrigin || c(t) && p()) && (w.traceContextParentHeader = o(h, m), w.traceContextStateHeader = i(h, v, n, r, f)), (t.sameOrigin && !u() || !t.sameOrigin && c(t) && d()) && (w.newrelicHeader = a(h, m, v, n, r, f)), w
                }

                function o(t, e) {
                    return "00-" + e + "-" + t + "-01"
                }

                function i(t, e, n, r, o) {
                    var i = 0,
                        a = "",
                        s = 1,
                        c = "",
                        f = "";
                    return o + "@nr=" + i + "-" + s + "-" + n + "-" + r + "-" + t + "-" + a + "-" + c + "-" + f + "-" + e
                }

                function a(t, e, n, r, o, i) {
                    var a = "btoa" in window && "function" == typeof window.btoa;
                    if (!a) return null;
                    var s = {
                        v: [0, 1],
                        d: {
                            ty: "Browser",
                            ac: r,
                            ap: o,
                            id: t,
                            tr: e,
                            ti: n
                        }
                    };
                    return i && r !== i && (s.d.tk = i), btoa(JSON.stringify(s))
                }

                function s(t) {
                    return f() && c(t)
                }

                function c(t) {
                    var e = !1,
                        n = {};
                    if ("init" in NREUM && "distributed_tracing" in NREUM.init && (n = NREUM.init.distributed_tracing), t.sameOrigin) e = !0;
                    else if (n.allowed_origins instanceof Array)
                        for (var r = 0; r < n.allowed_origins.length; r++) {
                            var o = h(n.allowed_origins[r]);
                            if (t.hostname === o.hostname && t.protocol === o.protocol && t.port === o.port) {
                                e = !0;
                                break
                            }
                        }
                    return e
                }

                function f() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && !!NREUM.init.distributed_tracing.enabled
                }

                function u() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && !!NREUM.init.distributed_tracing.exclude_newrelic_header
                }

                function d() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && NREUM.init.distributed_tracing.cors_use_newrelic_header !== !1
                }

                function p() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && !!NREUM.init.distributed_tracing.cors_use_tracecontext_headers
                }
                var l = t(29),
                    h = t(18);
                e.exports = {
                    generateTracePayload: r,
                    shouldGenerateTrace: s
                }
            }, {}],
            17: [function(t, e, n) {
                function r(t) {
                    var e = this.params,
                        n = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < p; r++) t.removeEventListener(d[r], this.listener, !1);
                        return e.protocol && "data" === e.protocol ? void g("Ajax/DataUrl/Excluded") : void(e.aborted || (n.duration = a.now() - this.startTime, this.loadCaptureCalled || 4 !== t.readyState ? null == e.status && (e.status = 0) : i(this, t), n.cbTime = this.cbTime, s("xhr", [e, n, this.startTime, this.endTime, "xhr"], this)))
                    }
                }

                function o(t, e) {
                    var n = c(e),
                        r = t.params;
                    r.hostname = n.hostname, r.port = n.port, r.protocol = n.protocol, r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.parsedOrigin = n, t.sameOrigin = n.sameOrigin
                }

                function i(t, e) {
                    t.params.status = e.status;
                    var n = v(e, t.lastSize);
                    if (n && (t.metrics.rxSize = n), t.sameOrigin) {
                        var r = e.getResponseHeader("X-NewRelic-App-Data");
                        r && (t.params.cat = r.split(", ").pop())
                    }
                    t.loadCaptureCalled = !0
                }
                var a = t("loader");
                if (a.xhrWrappable && !a.disabled) {
                    var s = t("handle"),
                        c = t(18),
                        f = t(16).generateTracePayload,
                        u = t("ee"),
                        d = ["load", "error", "abort", "timeout"],
                        p = d.length,
                        l = t("id"),
                        h = t(24),
                        m = t(22),
                        v = t(19),
                        w = t(23),
                        g = t(25).recordSupportability,
                        y = NREUM.o.REQ,
                        x = window.XMLHttpRequest;
                    a.features.xhr = !0, t(15), t(8), u.on("new-xhr", function(t) {
                        var e = this;
                        e.totalCbs = 0, e.called = 0, e.cbTime = 0, e.end = r, e.ended = !1, e.xhrGuids = {}, e.lastSize = null, e.loadCaptureCalled = !1, e.params = this.params || {}, e.metrics = this.metrics || {}, t.addEventListener("load", function(n) {
                            i(e, t)
                        }, w(!1)), h && (h > 34 || h < 10) || t.addEventListener("progress", function(t) {
                            e.lastSize = t.loaded
                        }, w(!1))
                    }), u.on("open-xhr-start", function(t) {
                        this.params = {
                            method: t[0]
                        }, o(this, t[1]), this.metrics = {}
                    }), u.on("open-xhr-end", function(t, e) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid);
                        var n = f(this.parsedOrigin);
                        if (n) {
                            var r = !1;
                            n.newrelicHeader && (e.setRequestHeader("newrelic", n.newrelicHeader), r = !0), n.traceContextParentHeader && (e.setRequestHeader("traceparent", n.traceContextParentHeader), n.traceContextStateHeader && e.setRequestHeader("tracestate", n.traceContextStateHeader), r = !0), r && (this.dt = n)
                        }
                    }), u.on("send-xhr-start", function(t, e) {
                        var n = this.metrics,
                            r = t[0],
                            o = this;
                        if (n && r) {
                            var i = m(r);
                            i && (n.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function(t) {
                            try {
                                "abort" !== t.type || o.loadCaptureCalled || (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof e.onload)) && o.end(e)
                            } catch (n) {
                                try {
                                    u.emit("internal-error", [n])
                                } catch (r) {}
                            }
                        };
                        for (var s = 0; s < p; s++) e.addEventListener(d[s], this.listener, w(!1))
                    }), u.on("xhr-cb-time", function(t, e, n) {
                        this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
                    }), u.on("xhr-load-added", function(t, e) {
                        var n = "" + l(t) + !!e;
                        this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
                    }), u.on("xhr-load-removed", function(t, e) {
                        var n = "" + l(t) + !!e;
                        this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
                    }), u.on("xhr-resolved", function() {
                        this.endTime = a.now()
                    }), u.on("addEventListener-end", function(t, e) {
                        e instanceof x && "load" === t[0] && u.emit("xhr-load-added", [t[1], t[2]], e)
                    }), u.on("removeEventListener-end", function(t, e) {
                        e instanceof x && "load" === t[0] && u.emit("xhr-load-removed", [t[1], t[2]], e)
                    }), u.on("fn-start", function(t, e, n) {
                        e instanceof x && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
                    }), u.on("fn-end", function(t, e) {
                        this.xhrCbStart && u.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, e], e)
                    }), u.on("fetch-before-start", function(t) {
                        function e(t, e) {
                            var n = !1;
                            return e.newrelicHeader && (t.set("newrelic", e.newrelicHeader), n = !0), e.traceContextParentHeader && (t.set("traceparent", e.traceContextParentHeader), e.traceContextStateHeader && t.set("tracestate", e.traceContextStateHeader), n = !0), n
                        }
                        var n, r = t[1] || {};
                        "string" == typeof t[0] ? n = t[0] : t[0] && t[0].url ? n = t[0].url : window.URL && t[0] && t[0] instanceof URL && (n = t[0].href), n && (this.parsedOrigin = c(n), this.sameOrigin = this.parsedOrigin.sameOrigin);
                        var o = f(this.parsedOrigin);
                        if (o && (o.newrelicHeader || o.traceContextParentHeader))
                            if ("string" == typeof t[0] || window.URL && t[0] && t[0] instanceof URL) {
                                var i = {};
                                for (var a in r) i[a] = r[a];
                                i.headers = new Headers(r.headers || {}), e(i.headers, o) && (this.dt = o), t.length > 1 ? t[1] = i : t.push(i)
                            } else t[0] && t[0].headers && e(t[0].headers, o) && (this.dt = o)
                    }), u.on("fetch-start", function(t, e) {
                        this.params = {}, this.metrics = {}, this.startTime = a.now(), this.dt = e, t.length >= 1 && (this.target = t[0]), t.length >= 2 && (this.opts = t[1]);
                        var n, r = this.opts || {},
                            i = this.target;
                        if ("string" == typeof i ? n = i : "object" == typeof i && i instanceof y ? n = i.url : window.URL && "object" == typeof i && i instanceof URL && (n = i.href), o(this, n), "data" !== this.params.protocol) {
                            var s = ("" + (i && i instanceof y && i.method || r.method || "GET")).toUpperCase();
                            this.params.method = s, this.txSize = m(r.body) || 0
                        }
                    }), u.on("fetch-done", function(t, e) {
                        if (this.endTime = a.now(), this.params || (this.params = {}), "data" === this.params.protocol) return void g("Ajax/DataUrl/Excluded");
                        this.params.status = e ? e.status : 0;
                        var n;
                        "string" == typeof this.rxSize && this.rxSize.length > 0 && (n = +this.rxSize);
                        var r = {
                            txSize: this.txSize,
                            rxSize: n,
                            duration: a.now() - this.startTime
                        };
                        s("xhr", [this.params, r, this.startTime, this.endTime, "fetch"], this)
                    })
                }
            }, {}],
            18: [function(t, e, n) {
                var r = {};
                e.exports = function(t) {
                    if (t in r) return r[t];
                    if (0 === (t || "").indexOf("data:")) return {
                        protocol: "data"
                    };
                    var e = document.createElement("a"),
                        n = window.location,
                        o = {};
                    e.href = t, o.port = e.port;
                    var i = e.href.split("://");
                    !o.port && i[1] && (o.port = i[1].split("/")[0].split("@").pop().split(":")[1]), o.port && "0" !== o.port || (o.port = "https" === i[0] ? "443" : "80"), o.hostname = e.hostname || n.hostname, o.pathname = e.pathname, o.protocol = i[0], "/" !== o.pathname.charAt(0) && (o.pathname = "/" + o.pathname);
                    var a = !e.protocol || ":" === e.protocol || e.protocol === n.protocol,
                        s = e.hostname === document.domain && e.port === n.port;
                    return o.sameOrigin = a && (!e.hostname || s), "/" === o.pathname && (r[t] = o), o
                }
            }, {}],
            19: [function(t, e, n) {
                function r(t, e) {
                    var n = t.responseType;
                    return "json" === n && null !== e ? e : "arraybuffer" === n || "blob" === n || "json" === n ? o(t.response) : "text" === n || "" === n || void 0 === n ? o(t.responseText) : void 0
                }
                var o = t(22);
                e.exports = r
            }, {}],
            20: [function(t, e, n) {
                function r() {}

                function o(t, e, n, r) {
                    return function() {
                        return u.recordSupportability("API/" + e + "/called"), i(t + e, [f.now()].concat(s(arguments)), n ? null : this, r), n ? void 0 : this
                    }
                }
                var i = t("handle"),
                    a = t(32),
                    s = t(33),
                    c = t("ee").get("tracer"),
                    f = t("loader"),
                    u = t(25),
                    d = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = d);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    l = "api-",
                    h = l + "ixn-";
                a(p, function(t, e) {
                    d[e] = o(l, e, !0, "api")
                }), d.addPageAction = o(l, "addPageAction", !0), d.setCurrentRouteName = o(l, "routeName", !0), e.exports = newrelic, d.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(t, e) {
                        var n = {},
                            r = this,
                            o = "function" == typeof e;
                        return i(h + "tracer", [f.now(), t, n], r),
                            function() {
                                if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try {
                                    return e.apply(this, arguments)
                                } catch (t) {
                                    throw c.emit("fn-err", [arguments, this, t], n), t
                                } finally {
                                    c.emit("fn-end", [f.now()], n)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, e) {
                    m[e] = o(h, e)
                }), newrelic.noticeError = function(t, e) {
                    "string" == typeof t && (t = new Error(t)), u.recordSupportability("API/noticeError/called"), i("err", [t, f.now(), !1, e])
                }
            }, {}],
            21: [function(t, e, n) {
                function r(t) {
                    if (NREUM.init) {
                        for (var e = NREUM.init, n = t.split("."), r = 0; r < n.length - 1; r++)
                            if (e = e[n[r]], "object" != typeof e) return;
                        return e = e[n[n.length - 1]]
                    }
                }
                e.exports = {
                    getConfiguration: r
                }
            }, {}],
            22: [function(t, e, n) {
                e.exports = function(t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        } catch (e) {
                            return
                        }
                    }
                }
            }, {}],
            23: [function(t, e, n) {
                var r = !1;
                try {
                    var o = Object.defineProperty({}, "passive", {
                        get: function() {
                            r = !0
                        }
                    });
                    window.addEventListener("testPassive", null, o), window.removeEventListener("testPassive", null, o)
                } catch (i) {}
                e.exports = function(t) {
                    return r ? {
                        passive: !0,
                        capture: !!t
                    } : !!t
                }
            }, {}],
            24: [function(t, e, n) {
                var r = 0,
                    o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), e.exports = r
            }, {}],
            25: [function(t, e, n) {
                function r(t, e) {
                    var n = [a, t, {
                        name: t
                    }, e];
                    return i("storeMetric", n, null, "api"), n
                }

                function o(t, e) {
                    var n = [s, t, {
                        name: t
                    }, e];
                    return i("storeEventMetrics", n, null, "api"), n
                }
                var i = t("handle"),
                    a = "sm",
                    s = "cm";
                e.exports = {
                    constants: {
                        SUPPORTABILITY_METRIC: a,
                        CUSTOM_METRIC: s
                    },
                    recordSupportability: r,
                    recordCustom: o
                }
            }, {}],
            26: [function(t, e, n) {
                function r() {
                    return s.exists && performance.now ? Math.round(performance.now()) : (i = Math.max((new Date).getTime(), i)) - a
                }

                function o() {
                    return i
                }
                var i = (new Date).getTime(),
                    a = i,
                    s = t(34);
                e.exports = r, e.exports.offset = a, e.exports.getLastTimestamp = o
            }, {}],
            27: [function(t, e, n) {
                function r(t) {
                    return !(!t || !t.protocol || "file:" === t.protocol)
                }
                e.exports = r
            }, {}],
            28: [function(t, e, n) {
                function r(t, e) {
                    var n = t.getEntries();
                    n.forEach(function(t) {
                        "first-paint" === t.name ? l("timing", ["fp", Math.floor(t.startTime)]) : "first-contentful-paint" === t.name && l("timing", ["fcp", Math.floor(t.startTime)])
                    })
                }

                function o(t, e) {
                    var n = t.getEntries();
                    if (n.length > 0) {
                        var r = n[n.length - 1];
                        if (f && f < r.startTime) return;
                        var o = [r],
                            i = a({});
                        i && o.push(i), l("lcp", o)
                    }
                }

                function i(t) {
                    t.getEntries().forEach(function(t) {
                        t.hadRecentInput || l("cls", [t])
                    })
                }

                function a(t) {
                    var e = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
                    if (e) return e.type && (t["net-type"] = e.type), e.effectiveType && (t["net-etype"] = e.effectiveType), e.rtt && (t["net-rtt"] = e.rtt), e.downlink && (t["net-dlink"] = e.downlink), t
                }

                function s(t) {
                    if (t instanceof w && !y) {
                        var e = Math.round(t.timeStamp),
                            n = {
                                type: t.type
                            };
                        a(n), e <= h.now() ? n.fid = h.now() - e : e > h.offset && e <= Date.now() ? (e -= h.offset, n.fid = h.now() - e) : e = h.now(), y = !0, l("timing", ["fi", e, n])
                    }
                }

                function c(t) {
                    "hidden" === t && (f = h.now(), l("pageHide", [f]))
                }
                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var f, u, d, p, l = t("handle"),
                        h = t("loader"),
                        m = t(31),
                        v = t(23),
                        w = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                        u = new PerformanceObserver(r);
                        try {
                            u.observe({
                                entryTypes: ["paint"]
                            })
                        } catch (g) {}
                        d = new PerformanceObserver(o);
                        try {
                            d.observe({
                                entryTypes: ["largest-contentful-paint"]
                            })
                        } catch (g) {}
                        p = new PerformanceObserver(i);
                        try {
                            p.observe({
                                type: "layout-shift",
                                buffered: !0
                            })
                        } catch (g) {}
                    }
                    if ("addEventListener" in document) {
                        var y = !1,
                            x = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        x.forEach(function(t) {
                            document.addEventListener(t, s, v(!1))
                        })
                    }
                    m(c)
                }
            }, {}],
            29: [function(t, e, n) {
                function r() {
                    function t() {
                        return e ? 15 & e[n++] : 16 * Math.random() | 0
                    }
                    var e = null,
                        n = 0,
                        r = window.crypto || window.msCrypto;
                    r && r.getRandomValues && (e = r.getRandomValues(new Uint8Array(31)));
                    for (var o, i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx", a = "", s = 0; s < i.length; s++) o = i[s], "x" === o ? a += t().toString(16) : "y" === o ? (o = 3 & t() | 8, a += o.toString(16)) : a += o;
                    return a
                }

                function o() {
                    return a(16)
                }

                function i() {
                    return a(32)
                }

                function a(t) {
                    function e() {
                        return n ? 15 & n[r++] : 16 * Math.random() | 0
                    }
                    var n = null,
                        r = 0,
                        o = window.crypto || window.msCrypto;
                    o && o.getRandomValues && Uint8Array && (n = o.getRandomValues(new Uint8Array(31)));
                    for (var i = [], a = 0; a < t; a++) i.push(e().toString(16));
                    return i.join("")
                }
                e.exports = {
                    generateUuid: r,
                    generateSpanId: o,
                    generateTraceId: i
                }
            }, {}],
            30: [function(t, e, n) {
                function r(t, e) {
                    if (!o) return !1;
                    if (t !== o) return !1;
                    if (!e) return !0;
                    if (!i) return !1;
                    for (var n = i.split("."), r = e.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== n[a]) return !1;
                    return !0
                }
                var o = null,
                    i = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var s = navigator.userAgent,
                        c = s.match(a);
                    c && s.indexOf("Chrome") === -1 && s.indexOf("Chromium") === -1 && (o = "Safari", i = c[1])
                }
                e.exports = {
                    agent: o,
                    version: i,
                    match: r
                }
            }, {}],
            31: [function(t, e, n) {
                function r(t) {
                    function e() {
                        t(s && document[s] ? document[s] : document[i] ? "hidden" : "visible")
                    }
                    "addEventListener" in document && a && document.addEventListener(a, e, o(!1))
                }
                var o = t(23);
                e.exports = r;
                var i, a, s;
                "undefined" != typeof document.hidden ? (i = "hidden", a = "visibilitychange", s = "visibilityState") : "undefined" != typeof document.msHidden ? (i = "msHidden", a = "msvisibilitychange") : "undefined" != typeof document.webkitHidden && (i = "webkitHidden", a = "webkitvisibilitychange", s = "webkitVisibilityState")
            }, {}],
            32: [function(t, e, n) {
                function r(t, e) {
                    var n = [],
                        r = "",
                        i = 0;
                    for (r in t) o.call(t, r) && (n[i] = e(r, t[r]), i += 1);
                    return n
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            33: [function(t, e, n) {
                function r(t, e, n) {
                    e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                    for (var r = -1, o = n - e || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[e + r];
                    return i
                }
                e.exports = r
            }, {}],
            34: [function(t, e, n) {
                e.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(t, e, n) {
                function r() {}

                function o(t) {
                    function e(t) {
                        return t && t instanceof r ? t : t ? f(t, c, a) : a()
                    }

                    function n(n, r, o, i, a) {
                        if (a !== !1 && (a = !0), !l.aborted || i) {
                            t && a && t(n, r, o);
                            for (var s = e(o), c = m(n), f = c.length, u = 0; u < f; u++) c[u].apply(s, r);
                            var p = d[y[n]];
                            return p && p.push([x, n, r, s]), s
                        }
                    }

                    function i(t, e) {
                        g[t] = m(t).concat(e)
                    }

                    function h(t, e) {
                        var n = g[t];
                        if (n)
                            for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r, 1)
                    }

                    function m(t) {
                        return g[t] || []
                    }

                    function v(t) {
                        return p[t] = p[t] || o(n)
                    }

                    function w(t, e) {
                        l.aborted || u(t, function(t, n) {
                            e = e || "feature", y[n] = e, e in d || (d[e] = [])
                        })
                    }
                    var g = {},
                        y = {},
                        x = {
                            on: i,
                            addEventListener: i,
                            removeEventListener: h,
                            emit: n,
                            get: v,
                            listeners: m,
                            context: e,
                            buffer: w,
                            abort: s,
                            aborted: !1
                        };
                    return x
                }

                function i(t) {
                    return f(t, c, a)
                }

                function a() {
                    return new r
                }

                function s() {
                    (d.api || d.feature) && (l.aborted = !0, d = l.backlog = {})
                }
                var c = "nr@context",
                    f = t("gos"),
                    u = t(32),
                    d = {},
                    p = {},
                    l = e.exports = o();
                e.exports.getOrSetContext = i, l.backlog = d
            }, {}],
            gos: [function(t, e, n) {
                function r(t, e, n) {
                    if (o.call(t, e)) return t[e];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, e, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return t[e] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            handle: [function(t, e, n) {
                function r(t, e, n, r) {
                    o.buffer([t], r), o.emit(t, e, n)
                }
                var o = t("ee").get("handle");
                e.exports = r, r.ee = o
            }, {}],
            id: [function(t, e, n) {
                function r(t) {
                    var e = typeof t;
                    return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = t("gos");
                e.exports = r
            }, {}],
            loader: [function(t, e, n) {
                function r() {
                    if (!S++) {
                        var t = T.info = NREUM.info,
                            e = v.getElementsByTagName("script")[0];
                        if (setTimeout(f.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return f.abort();
                        c(R, function(e, n) {
                            t[e] || (t[e] = n)
                        });
                        var n = a();
                        s("mark", ["onload", n + T.offset], null, "api"), s("timing", ["load", n]);
                        var r = v.createElement("script");
                        0 === t.agent.indexOf("http://") || 0 === t.agent.indexOf("https://") ? r.src = t.agent : r.src = h + "://" + t.agent, e.parentNode.insertBefore(r, e)
                    }
                }

                function o() {
                    "complete" === v.readyState && i()
                }

                function i() {
                    s("mark", ["domContent", a() + T.offset], null, "api")
                }
                var a = t(26),
                    s = t("handle"),
                    c = t(32),
                    f = t("ee"),
                    u = t(30),
                    d = t(27),
                    p = t(21),
                    l = t(23),
                    h = p.getConfiguration("ssl") === !1 ? "http" : "https",
                    m = window,
                    v = m.document,
                    w = "addEventListener",
                    g = "attachEvent",
                    y = m.XMLHttpRequest,
                    x = y && y.prototype,
                    b = !d(m.location);
                NREUM.o = {
                    ST: setTimeout,
                    SI: m.setImmediate,
                    CT: clearTimeout,
                    XHR: y,
                    REQ: m.Request,
                    EV: m.Event,
                    PR: m.Promise,
                    MO: m.MutationObserver
                };
                var E = "" + location,
                    R = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-spa-1215.min.js"
                    },
                    O = y && x && x[w] && !/CriOS/.test(navigator.userAgent),
                    T = e.exports = {
                        offset: a.getLastTimestamp(),
                        now: a,
                        origin: E,
                        features: {},
                        xhrWrappable: O,
                        userAgent: u,
                        disabled: b
                    };
                if (!b) {
                    t(20), t(28), v[w] ? (v[w]("DOMContentLoaded", i, l(!1)), m[w]("load", r, l(!1))) : (v[g]("onreadystatechange", o), m[g]("onload", r)), s("mark", ["firstbyte", a.getLastTimestamp()], null, "api");
                    var S = 0
                }
            }, {}],
            "wrap-function": [function(t, e, n) {
                function r(t, e) {
                    function n(e, n, r, c, f) {
                        function nrWrapper() {
                            var i, a, u, p;
                            try {
                                a = this, i = d(arguments), u = "function" == typeof r ? r(i, a) : r || {}
                            } catch (l) {
                                o([l, "", [i, a, c], u], t)
                            }
                            s(n + "start", [i, a, c], u, f);
                            try {
                                return p = e.apply(a, i)
                            } catch (h) {
                                throw s(n + "err", [i, a, h], u, f), h
                            } finally {
                                s(n + "end", [i, a, p], u, f)
                            }
                        }
                        return a(e) ? e : (n || (n = ""), nrWrapper[p] = e, i(e, nrWrapper, t), nrWrapper)
                    }

                    function r(t, e, r, o, i) {
                        r || (r = "");
                        var s, c, f, u = "-" === r.charAt(0);
                        for (f = 0; f < e.length; f++) c = e[f], s = t[c], a(s) || (t[c] = n(s, u ? c + r : r, o, c, i))
                    }

                    function s(n, r, i, a) {
                        if (!h || e) {
                            var s = h;
                            h = !0;
                            try {
                                t.emit(n, r, i, e, a)
                            } catch (c) {
                                o([c, n, r, i], t)
                            }
                            h = s
                        }
                    }
                    return t || (t = u), n.inPlace = r, n.flag = p, n
                }

                function o(t, e) {
                    e || (e = u);
                    try {
                        e.emit("internal-error", t)
                    } catch (n) {}
                }

                function i(t, e, n) {
                    if (Object.defineProperty && Object.keys) try {
                        var r = Object.keys(t);
                        return r.forEach(function(n) {
                            Object.defineProperty(e, n, {
                                get: function() {
                                    return t[n]
                                },
                                set: function(e) {
                                    return t[n] = e, e
                                }
                            })
                        }), e
                    } catch (i) {
                        o([i], n)
                    }
                    for (var a in t) l.call(t, a) && (e[a] = t[a]);
                    return e
                }

                function a(t) {
                    return !(t && t instanceof Function && t.apply && !t[p])
                }

                function s(t, e) {
                    var n = e(t);
                    return n[p] = t, i(t, n, u), n
                }

                function c(t, e, n) {
                    var r = t[e];
                    t[e] = s(r, n)
                }

                function f() {
                    for (var t = arguments.length, e = new Array(t), n = 0; n < t; ++n) e[n] = arguments[n];
                    return e
                }
                var u = t("ee"),
                    d = t(33),
                    p = "nr@original",
                    l = Object.prototype.hasOwnProperty,
                    h = !1;
                e.exports = r, e.exports.wrapFunction = s, e.exports.wrapInPlace = c, e.exports.argsToArray = f
            }, {}]
        }, {}, ["loader", 2, 17, 5, 3, 4]);
    </script>
    <title>Donate • OpenSecrets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        svg:not(:root).svg-inline--fa {
            overflow: visible
        }
        
        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -.125em
        }
        
        .svg-inline--fa.fa-lg {
            vertical-align: -.225em
        }
        
        .svg-inline--fa.fa-w-1 {
            width: .0625em
        }
        
        .svg-inline--fa.fa-w-2 {
            width: .125em
        }
        
        .svg-inline--fa.fa-w-3 {
            width: .1875em
        }
        
        .svg-inline--fa.fa-w-4 {
            width: .25em
        }
        
        .svg-inline--fa.fa-w-5 {
            width: .3125em
        }
        
        .svg-inline--fa.fa-w-6 {
            width: .375em
        }
        
        .svg-inline--fa.fa-w-7 {
            width: .4375em
        }
        
        .svg-inline--fa.fa-w-8 {
            width: .5em
        }
        
        .svg-inline--fa.fa-w-9 {
            width: .5625em
        }
        
        .svg-inline--fa.fa-w-10 {
            width: .625em
        }
        
        .svg-inline--fa.fa-w-11 {
            width: .6875em
        }
        
        .svg-inline--fa.fa-w-12 {
            width: .75em
        }
        
        .svg-inline--fa.fa-w-13 {
            width: .8125em
        }
        
        .svg-inline--fa.fa-w-14 {
            width: .875em
        }
        
        .svg-inline--fa.fa-w-15 {
            width: .9375em
        }
        
        .svg-inline--fa.fa-w-16 {
            width: 1em
        }
        
        .svg-inline--fa.fa-w-17 {
            width: 1.0625em
        }
        
        .svg-inline--fa.fa-w-18 {
            width: 1.125em
        }
        
        .svg-inline--fa.fa-w-19 {
            width: 1.1875em
        }
        
        .svg-inline--fa.fa-w-20 {
            width: 1.25em
        }
        
        .svg-inline--fa.fa-pull-left {
            margin-right: .3em;
            width: auto
        }
        
        .svg-inline--fa.fa-pull-right {
            margin-left: .3em;
            width: auto
        }
        
        .svg-inline--fa.fa-border {
            height: 1.5em
        }
        
        .svg-inline--fa.fa-li {
            width: 2em
        }
        
        .svg-inline--fa.fa-fw {
            width: 1.25em
        }
        
        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }
        
        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -.125em;
            width: 1em
        }
        
        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center
        }
        
        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center
        }
        
        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center
        }
        
        .fa-layers-counter {
            background-color: #ff253a;
            border-radius: 1em;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            height: 1.5em;
            line-height: 1;
            max-width: 5em;
            min-width: 1.5em;
            overflow: hidden;
            padding: .25em;
            right: 0;
            text-overflow: ellipsis;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top right;
            transform-origin: top right
        }
        
        .fa-layers-bottom-right {
            bottom: 0;
            right: 0;
            top: auto;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right
        }
        
        .fa-layers-bottom-left {
            bottom: 0;
            left: 0;
            right: auto;
            top: auto;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left
        }
        
        .fa-layers-top-right {
            right: 0;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top right;
            transform-origin: top right
        }
        
        .fa-layers-top-left {
            left: 0;
            right: auto;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top left;
            transform-origin: top left
        }
        
        .fa-lg {
            font-size: 1.3333333333em;
            line-height: .75em;
            vertical-align: -.0667em
        }
        
        .fa-xs {
            font-size: .75em
        }
        
        .fa-sm {
            font-size: .875em
        }
        
        .fa-1x {
            font-size: 1em
        }
        
        .fa-2x {
            font-size: 2em
        }
        
        .fa-3x {
            font-size: 3em
        }
        
        .fa-4x {
            font-size: 4em
        }
        
        .fa-5x {
            font-size: 5em
        }
        
        .fa-6x {
            font-size: 6em
        }
        
        .fa-7x {
            font-size: 7em
        }
        
        .fa-8x {
            font-size: 8em
        }
        
        .fa-9x {
            font-size: 9em
        }
        
        .fa-10x {
            font-size: 10em
        }
        
        .fa-fw {
            text-align: center;
            width: 1.25em
        }
        
        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0
        }
        
        .fa-ul>li {
            position: relative
        }
        
        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit
        }
        
        .fa-border {
            border: solid .08em #eee;
            border-radius: .1em;
            padding: .2em .25em .15em
        }
        
        .fa-pull-left {
            float: left
        }
        
        .fa-pull-right {
            float: right
        }
        
        .fa.fa-pull-left,
        .fab.fa-pull-left,
        .fal.fa-pull-left,
        .far.fa-pull-left,
        .fas.fa-pull-left {
            margin-right: .3em
        }
        
        .fa.fa-pull-right,
        .fab.fa-pull-right,
        .fal.fa-pull-right,
        .far.fa-pull-right,
        .fas.fa-pull-right {
            margin-left: .3em
        }
        
        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear
        }
        
        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8)
        }
        
        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
        
        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
        
        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }
        
        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }
        
        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }
        
        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1)
        }
        
        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1)
        }
        
        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1)
        }
        
         :root .fa-flip-both,
         :root .fa-flip-horizontal,
         :root .fa-flip-vertical,
         :root .fa-rotate-180,
         :root .fa-rotate-270,
         :root .fa-rotate-90 {
            -webkit-filter: none;
            filter: none
        }
        
        .fa-stack {
            display: inline-block;
            height: 2em;
            position: relative;
            width: 2.5em
        }
        
        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }
        
        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em
        }
        
        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em
        }
        
        .fa-inverse {
            color: #fff
        }
        
        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }
        
        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }
        
        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1)
        }
        
        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: .4;
            opacity: var(--fa-secondary-opacity, .4)
        }
        
        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: .4;
            opacity: var(--fa-secondary-opacity, .4)
        }
        
        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1)
        }
        
        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: #000
        }
        
        .fad.fa-inverse {
            color: #fff
        }
    </style>
    <link rel="canonical" href="https://www.opensecrets.org/donate">
    <meta name="description" content="Make a donation to opensecrets.org">
    <meta property="og:site_name" content="OpenSecrets">
    <meta property="og:title" content="Donate">
    <meta property="og:description" content="Make a donation to opensecrets.org">
    <meta property="og:url" content="https://www.opensecrets.org/donate">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/logo2019-2-69ab7d41ab8dc6195363228b2092d7e6897a7997d79b549e0f6d2f5767ce947c.png">
    <meta property="fb:pages" content="13220831937">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Donate">
    <meta name="twitter:description" content="Make a donation to opensecrets.org">
    <meta name="twitter:image:src" content="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/logo2019-2-69ab7d41ab8dc6195363228b2092d7e6897a7997d79b549e0f6d2f5767ce947c.png">
    <meta name="twitter:image:alt" content="OpenSecrets.org">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:domain" content="https://opensecrets.org/">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "OpenSecrets",
            "url": "https://opensecrets.org/",
            "logo": "https://opensecrets.org/
            app - icon.png ",
            "sameAs": [
                "https://www.facebook.com/OpenSecrets/",
                "https://twitter.com/OpenSecretsDC"
            ]
        }
    </script>

    <meta name="apple-mobile-web-app-title" content="OpenSecrets">
    <link rel="apple-touch-icon" sizes="180x180" href="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/favicon/apple-touch-icon-45b7134f1e6972a5d954df6678ec3e593d75c5308c081398aebb2064895e0237.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/favicon/ouricon-32x32-c376e89f9d2207d6424f97cc3d42421507eaeb103bad82922551518ccb6a397e.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/favicon/ouricon-16x16-999fdf81d097b70d765d0e0e3d995ad078b55a443cc7aaa65a00b4ba41f7220b.png">
    <link rel="manifest" href="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/favicon/site-2d061a04ce30306f9da6b243e694723e48123e66f3273f5d6b1b010e072ce007.webmanifest">
    <link rel="mask-icon" href="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/favicon/safari-pinned-tab-5ee3ec020ee9668dfc36c23ef9ab31727ed5654d9bb8e5b4050ef7791e541fa4.svg" color="#000000">
    <link rel="shortcut icon" href="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/favicon/ouricon-1d3d64209c7ebde5a8c99e1ef7f265bf65e183d0fc3218b70b2a714dbb9becba.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/favicon/browserconfig-08d661c391c36e7ad9f52a5f8772eb727c73877054973785f80bc505e242779b.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="theme-color" content="#FIXME">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://opensecrets.org/news/feed">

    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="GhKSlsIvcadhQbFjURuo3KoBqZbGcsN6oK18pqXl4K4jIf6Z/uXwXCICjH0Z/N8yN1MH7JQMksotWcyDBiXk1Q==">
    <link rel="stylesheet" media="all" href="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/main-1740d9a094d718874111235401acc41f135e2b20ff9607fde07a32628eaaa222.css">
    <style>
        /* open-sans-regular - latin */
        
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans'), local('OpenSans'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-regular-9e1c0ecb639feb0cc5bb490a37aa3ef7d0dca46f1ae6ba3ca1e51ba4ca238e19.woff2') format('woff2'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-regular-50601a37eeb46a2d7d5ab7f81d80fa8aaa6738b7b0d5080151010d992f473b61.woff') format('woff');
        }
        /* open-sans-italic - latin */
        
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 400;
            src: local('Open Sans Italic'), local('OpenSans-Italic'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-italic-9d898847b5b25b75f0508d194220c4db2fb504d4deebb8ee35261b635d0113e7.woff2') format('woff2'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-italic-2855e1ab6196cae6a11135d0f28c6a5f9c8b25d9b8593456cf27e6c25c6cc405.woff') format('woff');
        }
        /* open-sans-700 - latin */
        
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: local('Open Sans Bold'), local('OpenSans-Bold'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-700-5dec4586182b7bfa13f3ab3a2befc4673be0dfbd3ab413c57ac5e26fc8b1d16b.woff2') format('woff2'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-700-5c08874f9e96d7d74a4d173884085f702d66fb3b622fb94f0e5de1787203c5f0.woff') format('woff');
        }
        /* open-sans-700italic - latin */
        
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 700;
            src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-700italic-fa6ebbc1e25e213fe7e3723984ab4b727b46624ea8c4ba00aa0f4ead6bbcef1f.woff2') format('woff2'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans/open-sans-v13-latin-700italic-9b4d5e4f1b0afd277825504236842029c719668887ce5cefae8c3ebe65fdba75.woff') format('woff');
        }
        /* open-sans-condensed-300 - latin */
        
        @font-face {
            font-family: 'Open Sans Condensed';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Cond Light'), local('OpenSans-CondensedLight'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans-condensed/open-sans-condensed-v10-latin-300-02b44629e34c9b1025051fa63e3dbe5b4c137d346ff288886792d634151d7ef4.woff2') format('woff2'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans-condensed/open-sans-condensed-v10-latin-300-5d4a7a3e0b7274d12cb99fd6699b98dff95240a07ec6caa31f11b87b2af8123f.woff') format('woff');
        }
        /* open-sans-condensed-300italic - latin */
        
        @font-face {
            font-family: 'Open Sans Condensed';
            font-style: italic;
            font-weight: 300;
            src: local('Open Sans Cond Light Italic'), local('OpenSans-CondensedLightItalic'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans-condensed/open-sans-condensed-v10-latin-300italic-8d885dc654291deb3eb9dc1791a15ce6aa37387ebb7145755461ca78addff053.woff2') format('woff2'), url('https://cdn1.opensecrets.org/rails-assets/production_v3/assets/open-sans-condensed/open-sans-condensed-v10-latin-300italic-08f8c061e07cf97ae2b6764d9f0861f9ed0920c64fbfcd4b36d6bc0b0236aaa6.woff') format('woff');
        }
    </style>
    <script type="text/javascript">
        /*! For license information please see preload-65c504052f8eb4ea6f9f.js.LICENSE.txt */ ! function(e) {
            var t = {};

            function n(o) {
                if (t[o]) return t[o].exports;
                var i = t[o] = {
                    i: o,
                    l: !1,
                    exports: {}
                };
                return e[o].call(i.exports, i, i.exports, n), i.l = !0, i.exports
            }
            n.m = e, n.c = t, n.d = function(e, t, o) {
                n.o(e, t) || Object.defineProperty(e, t, {
                    enumerable: !0,
                    get: o
                })
            }, n.r = function(e) {
                "undefined" !== typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, n.t = function(e, t) {
                if (1 & t && (e = n(e)), 8 & t) return e;
                if (4 & t && "object" === typeof e && e && e.__esModule) return e;
                var o = Object.create(null);
                if (n.r(o), Object.defineProperty(o, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & t && "string" != typeof e)
                    for (var i in e) n.d(o, i, function(t) {
                        return e[t]
                    }.bind(null, i));
                return o
            }, n.n = function(e) {
                var t = e && e.__esModule ? function() {
                    return e.default
                } : function() {
                    return e
                };
                return n.d(t, "a", t), t
            }, n.o = function(e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }, n.p = "https://cdn1.opensecrets.org/rails-assets/production_v3/packs/", n(n.s = 707)
        }({
            283: function(e, t, n) {
                function o(e) {
                    return (o = "function" === typeof Symbol && "symbol" === typeof Symbol.iterator ? function(e) {
                        return typeof e
                    } : function(e) {
                        return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                    })(e)
                }! function() {
                    "use strict";
                    var e, t = [];

                    function n() {
                        for (; t.length;) t[0](), t.shift()
                    }

                    function i(e) {
                        this.a = r, this.b = void 0, this.f = [];
                        var t = this;
                        try {
                            e((function(e) {
                                ! function e(t, n) {
                                    if (t.a == r) {
                                        if (n == t) throw new TypeError;
                                        var i = !1;
                                        try {
                                            var a = n && n.then;
                                            if (null != n && "object" == o(n) && "function" == typeof a) return void a.call(n, (function(n) {
                                                i || e(t, n), i = !0
                                            }), (function(e) {
                                                i || s(t, e), i = !0
                                            }))
                                        } catch (u) {
                                            return void(i || s(t, u))
                                        }
                                        t.a = 0, t.b = n, c(t)
                                    }
                                }(t, e)
                            }), (function(e) {
                                s(t, e)
                            }))
                        } catch (n) {
                            s(t, n)
                        }
                    }
                    e = function() {
                        setTimeout(n)
                    };
                    var r = 2;

                    function a(e) {
                        return new i((function(t) {
                            t(e)
                        }))
                    }

                    function s(e, t) {
                        if (e.a == r) {
                            if (t == e) throw new TypeError;
                            e.a = 1, e.b = t, c(e)
                        }
                    }

                    function c(n) {
                        ! function(n) {
                            t.push(n), 1 == t.length && e()
                        }((function() {
                            if (n.a != r)
                                for (; n.f.length;) {
                                    var e = (i = n.f.shift())[0],
                                        t = i[1],
                                        o = i[2],
                                        i = i[3];
                                    try {
                                        0 == n.a ? o("function" == typeof e ? e.call(void 0, n.b) : n.b) : 1 == n.a && ("function" == typeof t ? o(t.call(void 0, n.b)) : i(n.b))
                                    } catch (a) {
                                        i(a)
                                    }
                                }
                        }))
                    }
                    i.prototype.g = function(e) {
                        return this.c(void 0, e)
                    }, i.prototype.c = function(e, t) {
                        var n = this;
                        return new i((function(o, i) {
                            n.f.push([e, t, o, i]), c(n)
                        }))
                    }, window.Promise || (window.Promise = i, window.Promise.resolve = a, window.Promise.reject = function(e) {
                        return new i((function(t, n) {
                            n(e)
                        }))
                    }, window.Promise.race = function(e) {
                        return new i((function(t, n) {
                            for (var o = 0; o < e.length; o += 1) a(e[o]).c(t, n)
                        }))
                    }, window.Promise.all = function(e) {
                        return new i((function(t, n) {
                            function o(n) {
                                return function(o) {
                                    r[n] = o, (i += 1) == e.length && t(r)
                                }
                            }
                            var i = 0,
                                r = [];
                            0 == e.length && t(r);
                            for (var s = 0; s < e.length; s += 1) a(e[s]).c(o(s), n)
                        }))
                    }, window.Promise.prototype.then = i.prototype.c, window.Promise.prototype.catch = i.prototype.g)
                }(),
                function() {
                    function t(e, t) {
                        document.addEventListener ? e.addEventListener("scroll", t, !1) : e.attachEvent("scroll", t)
                    }

                    function n(e) {
                        this.a = document.createElement("div"), this.a.setAttribute("aria-hidden", "true"), this.a.appendChild(document.createTextNode(e)), this.b = document.createElement("span"), this.c = document.createElement("span"), this.h = document.createElement("span"), this.f = document.createElement("span"), this.g = -1, this.b.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;", this.c.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;", this.f.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;", this.h.style.cssText = "display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;", this.b.appendChild(this.h), this.c.appendChild(this.f), this.a.appendChild(this.b), this.a.appendChild(this.c)
                    }

                    function o(e, t) {
                        e.a.style.cssText = "max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font:" + t + ";"
                    }

                    function i(e) {
                        var t = e.a.offsetWidth,
                            n = t + 100;
                        return e.f.style.width = n + "px", e.c.scrollLeft = n, e.b.scrollLeft = e.b.scrollWidth + 100, e.g !== t && (e.g = t, !0)
                    }

                    function r(e, n) {
                        function o() {
                            var e = r;
                            i(e) && null !== e.a.parentNode && n(e.g)
                        }
                        var r = e;
                        t(e.b, o), t(e.c, o), i(e)
                    }

                    function a(e, t) {
                        var n = t || {};
                        this.family = e, this.style = n.style || "normal", this.weight = n.weight || "normal", this.stretch = n.stretch || "normal"
                    }
                    var s = null,
                        c = null,
                        u = null;

                    function d() {
                        if (null === c) {
                            var e = document.createElement("div");
                            try {
                                e.style.font = "condensed 100px sans-serif"
                            } catch (t) {}
                            c = "" !== e.style.font
                        }
                        return c
                    }

                    function l(e, t) {
                        return [e.style, e.weight, d() ? e.stretch : "", "100px", t].join(" ")
                    }
                    a.prototype.load = function(e, t) {
                        var i = this,
                            a = e || "BESbswy",
                            c = t || 3e3,
                            d = (new Date).getTime();
                        return new Promise((function(e, t) {
                            if (null === u && (u = !!window.FontFace), u) {
                                var f = new Promise((function(e, t) {
                                        ! function n() {
                                            (new Date).getTime() - d >= c ? t() : document.fonts.load(l(i, i.family), a).then((function(t) {
                                                1 <= t.length ? e() : setTimeout(n, 25)
                                            }), (function() {
                                                t()
                                            }))
                                        }()
                                    })),
                                    p = new Promise((function(e, t) {
                                        setTimeout(t, c)
                                    }));
                                Promise.race([p, f]).then((function() {
                                    e(i)
                                }), (function() {
                                    t(i)
                                }))
                            } else ! function(e) {
                                document.body ? e() : document.addEventListener ? document.addEventListener("DOMContentLoaded", (function t() {
                                    document.removeEventListener("DOMContentLoaded", t), e()
                                })) : document.attachEvent("onreadystatechange", (function t() {
                                    "interactive" != document.readyState && "complete" != document.readyState || (document.detachEvent("onreadystatechange", t), e())
                                }))
                            }((function() {
                                function u() {
                                    var t;
                                    (t = -1 != h && -1 != w || -1 != h && -1 != v || -1 != w && -1 != v) && ((t = h != w && h != v && w != v) || (null === s && (t = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), s = !!t && (536 > parseInt(t[1], 10) || 536 === parseInt(t[1], 10) && 11 >= parseInt(t[2], 10))), t = s && (h == y && w == y && v == y || h == g && w == g && v == g || h == b && w == b && v == b)), t = !t), t && (null !== x.parentNode && x.parentNode.removeChild(x), clearTimeout(S), e(i))
                                }
                                var f = new n(a),
                                    p = new n(a),
                                    m = new n(a),
                                    h = -1,
                                    w = -1,
                                    v = -1,
                                    y = -1,
                                    g = -1,
                                    b = -1,
                                    x = document.createElement("div"),
                                    S = 0;
                                x.dir = "ltr", o(f, l(i, "sans-serif")), o(p, l(i, "serif")), o(m, l(i, "monospace")), x.appendChild(f.a), x.appendChild(p.a), x.appendChild(m.a), document.body.appendChild(x), y = f.a.offsetWidth, g = p.a.offsetWidth, b = m.a.offsetWidth,
                                    function e() {
                                        if ((new Date).getTime() - d >= c) null !== x.parentNode && x.parentNode.removeChild(x), t(i);
                                        else {
                                            var n = document.hidden;
                                            !0 !== n && void 0 !== n || (h = f.a.offsetWidth, w = p.a.offsetWidth, v = m.a.offsetWidth, u()), S = setTimeout(e, 50)
                                        }
                                    }(), r(f, (function(e) {
                                        h = e, u()
                                    })), o(f, l(i, '"' + i.family + '",sans-serif')), r(p, (function(e) {
                                        w = e, u()
                                    })), o(p, l(i, '"' + i.family + '",serif')), r(m, (function(e) {
                                        v = e, u()
                                    })), o(m, l(i, '"' + i.family + '",monospace'))
                            }))
                        }))
                    }, e.exports = a
                }()
            },
            47: function(e, t) {
                function n(e) {
                    return (n = "function" === typeof Symbol && "symbol" === typeof Symbol.iterator ? function(e) {
                        return typeof e
                    } : function(e) {
                        return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                    })(e)
                }
                var o;
                o = function() {
                    return this
                }();
                try {
                    o = o || new Function("return this")()
                } catch (i) {
                    "object" === ("undefined" === typeof window ? "undefined" : n(window)) && (o = window)
                }
                e.exports = o
            },
            503: function(e, t) {
                ! function() {
                    if ("undefined" !== typeof window) try {
                        var e = new window.CustomEvent("test", {
                            cancelable: !0
                        });
                        if (e.preventDefault(), !0 !== e.defaultPrevented) throw new Error("Could not prevent default")
                    } catch (n) {
                        var t = function(e, t) {
                            var o, i;
                            return (t = t || {}).bubbles = !!t.bubbles, t.cancelable = !!t.cancelable, (o = document.createEvent("CustomEvent")).initCustomEvent(e, t.bubbles, t.cancelable, t.detail), i = o.preventDefault, o.preventDefault = function() {
                                i.call(this);
                                try {
                                    Object.defineProperty(this, "defaultPrevented", {
                                        get: function() {
                                            return !0
                                        }
                                    })
                                } catch (n) {
                                    this.defaultPrevented = !0
                                }
                            }, o
                        };
                        t.prototype = window.Event.prototype, window.CustomEvent = t
                    }
                }()
            },
            67: function(e, t) {
                e.exports = function(e) {
                    return e.webpackPolyfill || (e.deprecate = function() {}, e.paths = [], e.children || (e.children = []), Object.defineProperty(e, "loaded", {
                        enumerable: !0,
                        get: function() {
                            return e.l
                        }
                    }), Object.defineProperty(e, "id", {
                        enumerable: !0,
                        get: function() {
                            return e.i
                        }
                    }), e.webpackPolyfill = 1), e
                }
            },
            707: function(e, t, n) {
                "use strict";
                n.r(t),
                    function(e) {
                        n(708), n(709), n(710), n(711);
                        if (!("matchMedia" in window)) {
                            var t = function(e) {
                                    return e = (e || "true").replace(/^only\s+/, "").replace(/(device)-([\w.]+)/g, "$1.$2").replace(/([\w.]+)\s*:/g, "media.$1 ===").replace(/min-([\w.]+)\s*===/g, "$1 >=").replace(/max-([\w.]+)\s*===/g, "$1 <=").replace(/all|screen/g, "1").replace(/print/g, "0").replace(/,/g, "||").replace(/\band\b/g, "&&").replace(/dpi/g, "").replace(/(\d+)(cm|em|in|dppx|mm|pc|pt|px|rem)/g, (function(e, t, n) {
                                        return t * ("cm" === n ? 37.7952 : "em" === n || "rem" === n ? 16 : "in" === n || "dppx" === n ? 96 : "mm" === n ? 3.77952 : "pc" === n ? 16 : "pt" === n ? 96 / 72 : 1)
                                    })), new Function("media", "try{ return !!(%s) }catch(e){ return false }".replace("%s", e))({
                                        width: window.innerWidth,
                                        height: window.innerHeight,
                                        orientation: window.orientation || "landscape",
                                        device: {
                                            width: window.screen.width,
                                            height: window.screen.height,
                                            orientation: window.screen.orientation || window.orientation || "landscape"
                                        }
                                    })
                                },
                                o = function() {
                                    this.matches = !1, this.media = "invalid"
                                };
                            o.prototype.addListener = function(e) {
                                this.addListener.listeners.push(e)
                            }, o.prototype.removeListener = function(e) {
                                this.addListener.listeners.splice(this.addListener.listeners.indexof(e), 1)
                            }, window.matchMedia = function(n) {
                                var i = new o;
                                if (0 === arguments.length) throw new TypeError("Not enough arguments to matchMedia");
                                return i.media = String(n), i.matches = t(i.media), i.addListener.listeners = [], window.addEventListener("resize", (function() {
                                    var n = [].concat(i.addListener.listeners),
                                        o = t(i.media);
                                    if (o != i.matches) {
                                        i.matches = o;
                                        for (var r = 0, a = n.length; r < a; ++r) n[r].call(e, i)
                                    }
                                })), i
                            }
                        }! function() {
                            for (var e = 0, t = ["ms", "moz", "webkit", "o"], n = 0; n < t.length && !window.requestAnimationFrame; ++n) window.requestAnimationFrame = window[t[n] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[t[n] + "CancelAnimationFrame"] || window[t[n] + "CancelRequestAnimationFrame"];
                            window.requestAnimationFrame || (window.requestAnimationFrame = function(t, n) {
                                var o = (new Date).getTime(),
                                    i = Math.max(0, 16 - (o - e)),
                                    r = window.setTimeout((function() {
                                        t(o + i)
                                    }), i);
                                return e = o + i, r
                            }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(e) {
                                clearTimeout(e)
                            })
                        }()
                    }.call(this, n(47))
            },
            708: function(e, t) {
                ! function(e, t, n) {
                    function o(e, t) {
                        return typeof e === t
                    }

                    function i(e) {
                        var t = S.className,
                            n = g._config.classPrefix || "";
                        if (C && (t = t.baseVal), g._config.enableJSClass) {
                            var o = new RegExp("(^|\\s)" + n + "no-js(\\s|$)");
                            t = t.replace(o, "$1" + n + "js$2")
                        }
                        g._config.enableClasses && (t += " " + n + e.join(" " + n), C ? S.className.baseVal = t : S.className = t)
                    }

                    function r(e, t) {
                        if ("object" == typeof e)
                            for (var n in e) x(e, n) && r(n, e[n]);
                        else {
                            var o = (e = e.toLowerCase()).split("."),
                                a = g[o[0]];
                            if (2 == o.length && (a = a[o[1]]), "undefined" != typeof a) return g;
                            t = "function" == typeof t ? t() : t, 1 == o.length ? g[o[0]] = t : (!g[o[0]] || g[o[0]] instanceof Boolean || (g[o[0]] = new Boolean(g[o[0]])), g[o[0]][o[1]] = t), i([(t && 0 != t ? "" : "no-") + o.join("-")]), g._trigger(e, t)
                        }
                        return g
                    }

                    function a() {
                        return "function" != typeof t.createElement ? t.createElement(arguments[0]) : C ? t.createElementNS.call(t, "http://www.w3.org/2000/svg", arguments[0]) : t.createElement.apply(t, arguments)
                    }

                    function s(e, t) {
                        return !!~("" + e).indexOf(t)
                    }

                    function c(e) {
                        return e.replace(/([a-z])-([a-z])/g, (function(e, t, n) {
                            return t + n.toUpperCase()
                        })).replace(/^-/, "")
                    }

                    function u(e, n, o, i) {
                        var r, s, c, u, d = "modernizr",
                            l = a("div"),
                            f = function() {
                                var e = t.body;
                                return e || ((e = a(C ? "svg" : "body")).fake = !0), e
                            }();
                        if (parseInt(o, 10))
                            for (; o--;)(c = a("div")).id = i ? i[o] : d + (o + 1), l.appendChild(c);
                        return (r = a("style")).type = "text/css", r.id = "s" + d, (f.fake ? f : l).appendChild(r), f.appendChild(l), r.styleSheet ? r.styleSheet.cssText = e : r.appendChild(t.createTextNode(e)), l.id = d, f.fake && (f.style.background = "", f.style.overflow = "hidden", u = S.style.overflow, S.style.overflow = "hidden", S.appendChild(f)), s = n(l, e), f.fake ? (f.parentNode.removeChild(f), S.style.overflow = u, S.offsetHeight) : l.parentNode.removeChild(l), !!s
                    }

                    function d(e) {
                        return e.replace(/([A-Z])/g, (function(e, t) {
                            return "-" + t.toLowerCase()
                        })).replace(/^ms-/, "-ms-")
                    }

                    function l(t, o) {
                        var i = t.length;
                        if ("CSS" in e && "supports" in e.CSS) {
                            for (; i--;)
                                if (e.CSS.supports(d(t[i]), o)) return !0;
                            return !1
                        }
                        if ("CSSSupportsRule" in e) {
                            for (var r = []; i--;) r.push("(" + d(t[i]) + ":" + o + ")");
                            return u("@supports (" + (r = r.join(" or ")) + ") { #modernizr { position: absolute; } }", (function(e) {
                                return "absolute" == getComputedStyle(e, null).position
                            }))
                        }
                        return n
                    }

                    function f(e, t, i, r) {
                        function u() {
                            f && (delete L.style, delete L.modElem)
                        }
                        if (r = !o(r, "undefined") && r, !o(i, "undefined")) {
                            var d = l(e, i);
                            if (!o(d, "undefined")) return d
                        }
                        for (var f, p, m, w, v, y = ["modernizr", "tspan", "samp"]; !L.style && y.length;) f = !0, L.modElem = a(y.shift()), L.style = L.modElem.style;
                        for (m = e.length, p = 0; m > p; p++)
                            if (w = e[p], v = L.style[w], s(w, "-") && (w = c(w)), L.style[w] !== n) {
                                if (r || o(i, "undefined")) return u(), "pfx" != t || w;
                                try {
                                    L.style[w] = i
                                } catch (h) {}
                                if (L.style[w] != v) return u(), "pfx" != t || w
                            }
                        return u(), !1
                    }

                    function p(e, t) {
                        return function() {
                            return e.apply(t, arguments)
                        }
                    }

                    function m(e, t, n, i, r) {
                        var a = e.charAt(0).toUpperCase() + e.slice(1),
                            s = (e + " " + _.join(a + " ") + a).split(" ");
                        return o(t, "string") || o(t, "undefined") ? f(s, t, i, r) : function(e, t, n) {
                            var i;
                            for (var r in e)
                                if (e[r] in t) return !1 === n ? e[r] : o(i = t[e[r]], "function") ? p(i, n || t) : i;
                            return !1
                        }(s = (e + " " + P.join(a + " ") + a).split(" "), t, n)
                    }

                    function h(e, t, o) {
                        return m(e, n, n, t, o)
                    }
                    var w = [],
                        v = [],
                        y = {
                            _version: "3.3.1",
                            _config: {
                                classPrefix: "",
                                enableClasses: !0,
                                enableJSClass: !0,
                                usePrefixes: !0
                            },
                            _q: [],
                            on: function(e, t) {
                                var n = this;
                                setTimeout((function() {
                                    t(n[e])
                                }), 0)
                            },
                            addTest: function(e, t, n) {
                                v.push({
                                    name: e,
                                    fn: t,
                                    options: n
                                })
                            },
                            addAsyncTest: function(e) {
                                v.push({
                                    name: null,
                                    fn: e
                                })
                            }
                        },
                        g = function() {};
                    g.prototype = y, g = new g;
                    var b = y._config.usePrefixes ? " -webkit- -moz- -o- -ms- ".split(" ") : ["", ""];
                    y._prefixes = b;
                    var x, S = t.documentElement,
                        C = "svg" === S.nodeName.toLowerCase(),
                        E = "Moz O ms Webkit",
                        P = y._config.usePrefixes ? E.toLowerCase().split(" ") : [];
                    y._domPrefixes = P,
                        function() {
                            var e = {}.hasOwnProperty;
                            x = o(e, "undefined") || o(e.call, "undefined") ? function(e, t) {
                                return t in e && o(e.constructor.prototype[t], "undefined")
                            } : function(t, n) {
                                return e.call(t, n)
                            }
                        }(), y._l = {}, y.on = function(e, t) {
                            this._l[e] || (this._l[e] = []), this._l[e].push(t), g.hasOwnProperty(e) && setTimeout((function() {
                                g._trigger(e, g[e])
                            }), 0)
                        }, y._trigger = function(e, t) {
                            if (this._l[e]) {
                                var n = this._l[e];
                                setTimeout((function() {
                                    var e;
                                    for (e = 0; e < n.length; e++)(0, n[e])(t)
                                }), 0), delete this._l[e]
                            }
                        }, g._q.push((function() {
                            y.addTest = r
                        })), g.addTest("cssgradients", (function() {
                            for (var e, t = "background-image:", n = "", o = 0, i = b.length - 1; i > o; o++) e = 0 === o ? "to " : "", n += t + b[o] + "linear-gradient(" + e + "left top, #9f9, white);";
                            g._config.usePrefixes && (n += t + "-webkit-gradient(linear,left top,right bottom,from(#9f9),to(white));");
                            var r = a("a").style;
                            return r.cssText = n, ("" + r.backgroundImage).indexOf("gradient") > -1
                        })), g.addTest("placeholder", "placeholder" in a("input") && "placeholder" in a("textarea")), g.addTest("inlinesvg", (function() {
                            var e = a("div");
                            return e.innerHTML = "<svg/>", "http://www.w3.org/2000/svg" == ("undefined" != typeof SVGRect && e.firstChild && e.firstChild.namespaceURI)
                        })), (y.testStyles = u)('#modernizr{font:0/0 a}#modernizr:after{content:":)";visibility:hidden;font:7px/1 a}', (function(e) {
                            g.addTest("generatedcontent", e.offsetHeight >= 7)
                        }));
                    var T = {
                        elem: a("modernizr")
                    };
                    g._q.push((function() {
                        delete T.elem
                    }));
                    var L = {
                        style: T.elem.style
                    };
                    g._q.unshift((function() {
                        delete L.style
                    }));
                    var _ = (y.testProp = function(e, t, o) {
                        return f([e], n, t, o)
                    }, y._config.usePrefixes ? E.split(" ") : []);
                    y._cssomPrefixes = _;
                    var O = function(t) {
                        var o, i = b.length,
                            r = e.CSSRule;
                        if ("undefined" == typeof r) return n;
                        if (!t) return !1;
                        if ((o = (t = t.replace(/^@/, "")).replace(/-/g, "_").toUpperCase() + "_RULE") in r) return "@" + t;
                        for (var a = 0; i > a; a++) {
                            var s = b[a];
                            if (s.toUpperCase() + "_" + o in r) return "@-" + s.toLowerCase() + "-" + t
                        }
                        return !1
                    };
                    y.atRule = O, y.testAllProps = m, y.testAllProps = h, g.addTest("cssanimations", h("animationName", "a", !0)), g.addTest("flexbox", h("flexBasis", "1px", !0)), g.addTest("csstransforms", (function() {
                        return -1 === navigator.userAgent.indexOf("Android 2.") && h("transform", "scale(1)", !0)
                    }));
                    var k = y.prefixed = function(e, t, n) {
                        return 0 === e.indexOf("@") ? O(e) : (-1 != e.indexOf("-") && (e = c(e)), t ? m(e, t, n) : m(e, "pfx"))
                    };
                    g.addTest("backgroundblendmode", k("backgroundBlendMode", "text")), g.addTest("objectfit", !!k("objectFit"), {
                            aliases: ["object-fit"]
                        }),
                        function() {
                            var e, t, n, i, r, a;
                            for (var s in v)
                                if (v.hasOwnProperty(s)) {
                                    if (e = [], (t = v[s]).name && (e.push(t.name.toLowerCase()), t.options && t.options.aliases && t.options.aliases.length))
                                        for (n = 0; n < t.options.aliases.length; n++) e.push(t.options.aliases[n].toLowerCase());
                                    for (i = o(t.fn, "function") ? t.fn() : t.fn, r = 0; r < e.length; r++) 1 === (a = e[r].split(".")).length ? g[a[0]] = i : (!g[a[0]] || g[a[0]] instanceof Boolean || (g[a[0]] = new Boolean(g[a[0]])), g[a[0]][a[1]] = i), w.push((i ? "" : "no-") + a.join("-"))
                                }
                        }(), i(w), delete y.addTest, delete y.addAsyncTest;
                    for (var M = 0; M < g._q.length; M++) g._q[M]();
                    e.Modernizr = g
                }(window, document)
            },
            709: function(e, t) {
                ! function() {
                    for (var e, t, n, o = [{
                            name: "svg",
                            value: "url(#test)"
                        }, {
                            name: "inset",
                            value: "inset(10px 20px 30px 40px)"
                        }, {
                            name: "circle",
                            value: "circle(60px at center)"
                        }, {
                            name: "ellipse",
                            value: "ellipse(50% 50% at 50% 50%)"
                        }, {
                            name: "polygon",
                            value: "polygon(50% 0%, 0% 100%, 100% 100%)"
                        }], i = 0; i < o.length; i++) e = o[i].name, t = o[i].value, Modernizr.addTest("cssclippath" + e, (function() {
                        if ("CSS" in window && "supports" in window.CSS) {
                            for (var e = 0; e < Modernizr._prefixes.length; e++)
                                if (n = Modernizr._prefixes[e] + "clip-path", window.CSS.supports(n, t)) return !0;
                            return !1
                        }
                        return Modernizr.testStyles("#modernizr { " + Modernizr._prefixes.join("clip-path:" + t + "; ") + " }", (function(e, t) {
                            var n = getComputedStyle(e),
                                o = n.clipPath;
                            if (!o || "none" == o) {
                                o = !1;
                                for (var i = 0; i < Modernizr._domPrefixes.length; i++)
                                    if (test = Modernizr._domPrefixes[i] + "ClipPath", n[test] && "none" !== n[test]) {
                                        o = !0;
                                        break
                                    }
                            }
                            return Modernizr.testProp("clipPath") && o
                        }))
                    }))
                }(Modernizr)
            },
            710: function(e, t, n) {
                "use strict";
                n(503);
                var o = n(283),
                    i = n.n(o);
                try {
                    if ("sessionStorage" in window && !sessionStorage.fontsLoaded) {
                        var r = document.documentElement,
                            a = new i.a("Open Sans", {
                                weight: 400
                            }),
                            s = new i.a("Open Sans", {
                                weight: 400,
                                style: "italic"
                            }),
                            c = new i.a("Open Sans", {
                                weight: 700
                            }),
                            u = new i.a("Open Sans", {
                                weight: 700,
                                style: "italic"
                            }),
                            d = new i.a("Open Sans Condensed", {
                                weight: 300
                            }),
                            l = new i.a("Open Sans Condensed", {
                                weight: 300,
                                style: "italic"
                            });
                        Promise.all([a.load(), s.load(), c.load(), u.load(), d.load(), l.load()]).then((function() {
                            if (r.className += " fonts-loaded", sessionStorage.fontsLoaded = !0, -1 === r.className.indexOf("lte-ie8")) {
                                window.setTimeout((function() {
                                    var e = new CustomEvent("fonts-loaded");
                                    r.dispatchEvent(e)
                                }), 0)
                            }
                        })).catch((function() {
                            console.warn("Could not resolve Promise that webfonts loaded")
                        }))
                    } else {
                        (r = document.documentElement).className += " fonts-loaded"
                    }
                } catch (f) {}
            },
            711: function(e, t, n) {
                (function(e) {
                    var n, o, i, r;

                    function a(e) {
                        return (a = "function" === typeof Symbol && "symbol" === typeof Symbol.iterator ? function(e) {
                            return typeof e
                        } : function(e) {
                            return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                        })(e)
                    }
                    r = function() {
                        return function(e) {
                            var t = {};

                            function n(o) {
                                if (t[o]) return t[o].exports;
                                var i = t[o] = {
                                    exports: {},
                                    id: o,
                                    loaded: !1
                                };
                                return e[o].call(i.exports, i, i.exports, n), i.loaded = !0, i.exports
                            }
                            return n.m = e, n.c = t, n.p = "", n(0)
                        }([function(e, t) {
                            e.exports = function() {
                                "use strict";
                                var e, t = [],
                                    n = !1,
                                    o = null,
                                    i = ["button", "input", "select", "textarea"],
                                    r = g(),
                                    a = [16, 17, 18, 91, 93],
                                    s = {
                                        keydown: "keyboard",
                                        keyup: "keyboard",
                                        mousedown: "mouse",
                                        mousemove: "mouse",
                                        MSPointerDown: "pointer",
                                        MSPointerMove: "pointer",
                                        pointerdown: "pointer",
                                        pointermove: "pointer",
                                        touchstart: "touch"
                                    };
                                s[g()] = "mouse";
                                var c, u = [],
                                    d = {
                                        9: "tab",
                                        13: "enter",
                                        16: "shift",
                                        27: "esc",
                                        32: "space",
                                        37: "left",
                                        38: "up",
                                        39: "right",
                                        40: "down"
                                    },
                                    l = {
                                        2: "touch",
                                        3: "touch",
                                        4: "mouse"
                                    };

                                function f(e) {
                                    window.clearTimeout(c), m(e), n = !0, c = window.setTimeout((function() {
                                        n = !1
                                    }), 650)
                                }

                                function p(e) {
                                    n || m(e)
                                }

                                function m(n) {
                                    var r = w(n),
                                        c = s[n.type];
                                    if ("pointer" === c && (c = function(e) {
                                            return "number" === typeof e.pointerType ? l[e.pointerType] : "pen" === e.pointerType ? "touch" : e.pointerType
                                        }(n)), o !== c) {
                                        var u = document.activeElement.nodeName.toLowerCase();
                                        !e.hasAttribute("data-whatinput-formswitching") && !e.hasAttribute("data-whatinput-formtyping") && o && i.indexOf(u) > -1 || a.indexOf(r) > -1 || h(c)
                                    }
                                    "keyboard" === c && function(e) {
                                        -1 === t.indexOf(d[e]) && d[e] && t.push(d[e])
                                    }(r)
                                }

                                function h(t) {
                                    o = t, e.setAttribute("data-whatinput", o), -1 === u.indexOf(o) && u.push(o)
                                }

                                function w(e) {
                                    return e.keyCode ? e.keyCode : e.which
                                }

                                function v(e) {
                                    var n = w(e),
                                        o = t.indexOf(d[n]); - 1 !== o && t.splice(o, 1)
                                }

                                function y() {
                                    e = document.body, window.PointerEvent ? (e.addEventListener("pointerdown", p), e.addEventListener("pointermove", p)) : window.MSPointerEvent ? (e.addEventListener("MSPointerDown", p), e.addEventListener("MSPointerMove", p)) : (e.addEventListener("mousedown", p), e.addEventListener("mousemove", p), "ontouchstart" in window && e.addEventListener("touchstart", f)), e.addEventListener(r, p), e.addEventListener("keydown", f), e.addEventListener("keyup", f), document.addEventListener("keyup", v)
                                }

                                function g() {
                                    return r = "onwheel" in document.createElement("div") ? "wheel" : void 0 !== document.onmousewheel ? "mousewheel" : "DOMMouseScroll"
                                }
                                return "addEventListener" in window && Array.prototype.indexOf && (document.body ? y() : document.addEventListener("DOMContentLoaded", y)), {
                                    ask: function() {
                                        return o
                                    },
                                    keys: function() {
                                        return t
                                    },
                                    types: function() {
                                        return u
                                    },
                                    set: h
                                }
                            }()
                        }])
                    }, "object" === a(t) && "object" === a(e) ? e.exports = r() : (o = [], void 0 === (i = "function" === typeof(n = r) ? n.apply(t, o) : n) || (e.exports = i))
                }).call(this, n(67)(e))
            }
        });
        //# sourceMappingURL=https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/preload-65c504052f8eb4ea6f9f.js.map
    </script>

    <link href="/opensearch.xml" rel="search" title="OpenSecrets search" type="application/opensearchdescription+xml">
    <script async="" src="https://www.google.com/recaptcha/api.js" defer="" type="text/javascript"></script>

    <meta http-equiv="origin-trial" content="AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
    <meta http-equiv="origin-trial" content="Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial" content="A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial" content="AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial" content="A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
    <meta http-equiv="origin-trial" content="A8FHS1NmdCwGqD9DwOicnHHY+y27kdWfxKa0YHSGDfv0CSpDKRHTQdQmZVPDUdaFWUsxdgVxlwAd6o+dhJykPA0AAACWeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjQzMTU1MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9">
    <meta http-equiv="origin-trial" content="A8zdXi6dr1hwXEUjQrYiyYQGlU3557y5QWDnN0Lwgj9ePt66XMEvNkVWOEOWPd7TP9sBQ25X0Q15Lr1Nn4oGFQkAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjQzMTU1MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9">
    <meta http-equiv="origin-trial" content="A4/Htern2udN9w3yJK9QgWQxQFruxOXsXL7cW60DyCl0EZFGCSme/J33Q/WzF7bBkVvhEWDlcBiUyZaim5CpFQwAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjQzMTU1MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9">
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/7a/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/7a/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/7a/controls.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/7a/places_impl.js"></script>
    <script charset="utf-8" src="https://js.stripe.com/v3/fingerprinted/js/trusted-types-checker-c826c182cb44a4aac14dffd8d1a178d5.js"></script>
</head>


<body data-whatinput="mouse">

    <!-- Google Adsense Script -->
    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="text/javascript"></script>
    <!-- End Google Adsense Script -->


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKPRXNV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="SkipLinks">
        <ul>
            <li><a href="#nav#sticky-nav">Skip to Navigation</a></li>
            <li><a href="#main">Skip to Main Content</a></li>
            <li><a href="#footer">Skip to Footer</a></li>
        </ul>
    </div>












    <div class="Header hide-print" id="header" role="banner" aria-hidden="false">
        <div class="Header-wrap l-padding hide-wrap">

            <div class="Header-content l-wrap">
                <div class="UtilNav" role="navigation" aria-label="utility links">
                    <ul class="UtilNav-list">
                        <li class="UtilNav-item UtilNav-item--hide-narrow">
                            <a class="UtilNav-link" href="/about/">About</a>
                        </li>
                        <li class="UtilNav-item UtilNav-item--hide-narrow">
                            <a class="UtilNav-link" href="/resources/">Resources</a>
                        </li>
                        <!--Newsletter signup -->
                        <li class="UtilNav-item UtilNav-item--hide-narrow">
                            <a href="#" class="UtilNav-link js-nav-signup" data-no-jump="">
                                <svg viewBox="0 0 24 24" width="17px" height="17px">
                <title>Email</title>
                <path d="M12,13.5,0,4.5A1.45,1.45,0,0,1,.44,3.44,1.44,1.44,0,0,1,1.5,3h21A1.5,1.5,0,0,1,24,4.5Zm0,2.7,12-9V19.5A1.5,1.5,0,0,1,22.5,21H1.5a1.44,1.44,0,0,1-1.06-.44A1.45,1.45,0,0,1,0,19.5V7.2Z"></path>
              </svg>
                                <span>Sign Up</span>
                            </a>
                        </li>
                        <!-- li class="UtilNav-item">
            <a class="UtilNav-link UtilNav-link--account" href="#">My OpenSecrets</a>
          </li>
          <li class="UtilNav-item">
            <a class="UtilNav-link" href="#">Log out</a>
          </li -->
                        <!-- <li class="UtilNav-item">
            <a class="UtilNav-link" href="#">Log in</a>
          </li -->
                    </ul>
                </div>
                <div class="Header-logo">
                    <a class="Header-logo-link" href="/" title="OpenSecrets.org">
                        <picture>
                            <!--[if IE 9]>
              <video style="display: none;"><![endif]-->
                            <source srcset="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/logo-b221b431f72bfede7bac961256409b5cd38a9d0a2e88117f3d34f49d8cee5b97.svg" media="(min-width: 640px)">
                            <!--[if IE 9]></video>
            <![endif]-->
                            <img srcset="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/logo-horz-6545522c095dde9612e657e369e91dc39de6f1a4ce7a62293e81a5dea5fb91e4.svg" width="220" height="76" alt="OpenSecrets homepage">
                        </picture>
                    </a>
                </div>
                <div class="Header-group">
                    <div class="Header-search">

                        <div class="SearchBox" role="search" style="">
                            <form class="SearchBox-form" action="/search" method="get">
                                <div class="SearchBox-group">
                                    <input class="SearchBox-input" id="SearchBox-input-header" name="q" type="search" placeholder="Search" value="" aria-label="Site search">
                                    <button class="SearchBox-submit" id="SearchBox-submit-header" type="submit" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 28" preserveAspectRatio="xMidYMid meet" focusable="false" class="SearchBox-submit-icon" height="17" width="17" role="img" aria-hidden="true">
  <path d="M18 13q0-2.9-2.06-4.95T11 6 6.05 8.06 4 13t2.05 4.95T11 20t4.95-2.06T18 13zm8 13q0 .8-.6 1.4T24 28q-.84 0-1.4-.6l-5.37-5.34Q14.43 24 11 24q-2.23 0-4.27-.87T3.2 20.8.88 17.26 0 13t.87-4.27T3.2 5.2t3.53-2.33T11 2t4.27.87T18.8 5.2t2.33 3.53T22 13q0 3.44-1.94 6.23l5.36 5.36q.58.57.58 1.4z"></path>
</svg>
      </button>
                                </div>

                            </form>
                        </div>

                    </div>
                    <div class="Header-buttons">
                        <a class="Header-buttons-donate" href="/donate?utm_campaign=donate&amp;utm_medium=header&amp;utm_source=%2Fdonate">Donate</a>
                        <a class="Header-buttons-nav js-nav-toggle" id="nav" href="#nav" data-no-jump="" role="button">
                            <span class="Header-buttons-nav-icon" aria-hidden="true"></span>
                            <span class="Header-buttons-nav-text">Menu</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Nav l-padding" role="navigation">
            <div class="Nav-wrap l-wrap">
                <div class="Nav-search">

                    <div class="SearchBox" role="search" style="">
                        <form class="SearchBox-form" action="/search" method="get">
                            <div class="SearchBox-group">
                                <input class="SearchBox-input" id="SearchBox-input-nav" name="q" type="search" placeholder="Search" value="" aria-label="Site search">
                                <button class="SearchBox-submit" id="SearchBox-submit-nav" type="submit" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 28" preserveAspectRatio="xMidYMid meet" focusable="false" class="SearchBox-submit-icon" height="17" width="17" role="img" aria-hidden="true">
  <path d="M18 13q0-2.9-2.06-4.95T11 6 6.05 8.06 4 13t2.05 4.95T11 20t4.95-2.06T18 13zm8 13q0 .8-.6 1.4T24 28q-.84 0-1.4-.6l-5.37-5.34Q14.43 24 11 24q-2.23 0-4.27-.87T3.2 20.8.88 17.26 0 13t.87-4.27T3.2 5.2t3.53-2.33T11 2t4.27.87T18.8 5.2t2.33 3.53T22 13q0 3.44-1.94 6.23l5.36 5.36q.58.57.58 1.4z"></path>
</svg>
      </button>
                            </div>

                        </form>
                    </div>

                </div>
                <div class="Nav-menu" style="height: 248px;">
                    <ul class="Nav-list js-nav-tabs" role="tablist">
                        <li class="Nav-item" role="presentation">
                            <a class="Nav-item-link js-nav-item-toggle is-active" href="#" aria-controls="nav-content-view2_0" aria-selected="true" role="tab" tabindex="-1">Politicians &amp; Elections</a>
                            <div class="Nav-item-content" aria-hidden="false" id="nav-content-view2_0" role="tabpanel">
                                <div class="l-padding">
                                    <div class="l-wrap">
                                        <ul class="Nav-sublist Nav-sublist--has-quickLink">
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/elections/">Overview&nbsp;<span aria-hidden="true">›</span></a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/2020-presidential-race">Presidential ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/races">Congressional Elections ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/members-of-congress">Congress ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/cong-cmtes">Congressional Committees ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/jfc/">Joint Fundraising Committees&nbsp;<span aria-hidden="true">›</span></a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/personal-finances">Personal Finances ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/gender-race-and-politics">Gender, Race and Money in Politics ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/outsidespending/">Outside Spending&nbsp;<span aria-hidden="true">›</span></a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/dark-money">Dark Money ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/campaign-expenditures">Expenditures ›</a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/political-ads/">Political Ads&nbsp;<span aria-hidden="true">›</span></a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/parties/">Political Parties&nbsp;<span aria-hidden="true">›</span></a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/elections-overview">Elections Overview&nbsp;<span aria-hidden="true">›</span></a>
                                            </li>
                                            <li class="Nav-subitem">
                                                <a class="Nav-subitem-link" href="/states/">Get Local!&nbsp;<span aria-hidden="true">›</span></a>
                                            </li>
                                        </ul>
                                        <div class="Nav-quickLinks">
                                            <p class="Nav-quickLinks-heading" id="quickLinks">Quick Links</p>
                                            <ul class="Nav-quickLinks-list" aria-labelledby="quickLinks">
                                                <li class="Nav-quickLinks-item">
                                                    <a class="Nav-quickLinks-link" href="/biden">Biden Administration ›</a>
                                                </li>
                                                <li class="Nav-quickLinks-item">
                                                    <a class="Nav-quickLinks-link" href="/donor-lookup">Donor Lookup ›</a>
                                                </li>
                                                <li class="Nav-quickLinks-item">
                                                    <a class="Nav-quickLinks-link" href="/featured-datasets">Featured Data Sets ›</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="Nav-item" role="presentation">
                            <a class="Nav-item-link js-nav-item-toggle" href="#" aria-controls="nav-content-view2_1" aria-selected="false" role="tab">Influence &amp; Lobbying</a>
                            <div class="Nav-item-content" aria-hidden="true" id="nav-content-view2_1" role="tabpanel">
                                <div class="l-padding">
                                    <div class="l-wrap">
                                        <ul class="Nav-sublist">
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/influence/">Overview&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/industries/">Interest Groups&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/federal-lobbying/">Lobbying&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/fara/">Foreign Lobby Watch&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/revolving/">Revolving Door&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/orgs/">Organizations&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/political-action-committees-pacs/">PACs&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/527s/">527s&nbsp;<span aria-hidden="true">›</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="Nav-item" role="presentation">
                            <a class="Nav-item-link js-nav-item-toggle" href="#" aria-controls="nav-content-view2_2" aria-selected="false" role="tab">News &amp; Analysis</a>
                            <div class="Nav-item-content" aria-hidden="true" id="nav-content-view2_2" role="tabpanel">
                                <div class="l-padding">
                                    <div class="l-wrap">
                                        <ul class="Nav-sublist">
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/news/newsanalysis.php">All News &amp; Analysis&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/news/">OpenSecrets News&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="http://politicalpartytime.org/" target="_blank">Political Party Time&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/news/reports/">Reports&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/news/inthenews.php">Media Citations&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/news/category/about-opensecrets/press-releases/">OpenSecrets Press Releases&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/news/issues/">Issue Profiles&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/news/disclosure.php">Campaign Finance Links&nbsp;<span aria-hidden="true">›</span></a></li>
                                            <li class="Nav-subitem"><a class="Nav-subitem-link" href="/newsletter/signup-form">Newsletter Sign-up&nbsp;<span aria-hidden="true">›</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="Nav-list Nav--hide-wide">
                        <li class="Nav-item">
                            <a class="Nav-item-link" href="/action-center/">Act Now</a>
                        </li>
                        <li class="Nav-item">
                            <a class="Nav-item-link" href="/about/">About</a>
                        </li>
                        <li class="Nav-item">
                            <a class="Nav-item-link" href="/resources/">Resources</a>
                        </li>
                    </ul>
                    <p class="Nav-item Nav--hide-narrow"><a class="Nav-item-link" href="/action-center/">Act Now&nbsp;<span aria-hidden="true">›</span></a></p>
                </div>
            </div>
        </div>

    </div>

    <div class="Header Header-sticky hide-print" id="header-sticky" role="banner" aria-hidden="true">
        <div class="Header-wrap l-padding">

            <div class="Header-content l-wrap">
                <div class="Header-logo-sticky">
                    <a class="Header-logo-link-sticky" href="/" title="OpenSecrets.org">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 213.78 214" focusable="false" height="56" width="114" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true">
  <path d="M128.44,44.15h-.21l-1,0a12.14,12.14,0,0,0,0,24.28h.18l.68,0h0c33.85.44,61.38,27.65,61.38,60.64,0,33.45-27.91,60.67-62.23,60.67S65,162.51,65,129.06c0-.17,0-.35,0-.52l0-.71a12.14,12.14,0,1,0-24.27-.53v.41c0,.45,0,.9,0,1.35,0,46.84,38.81,84.94,86.51,84.94s86.51-38.1,86.51-84.94c0-46.2-38.28-84.3-85.34-84.91"></path>
  <path d="M86.43,24.27l.93,0A12.14,12.14,0,0,0,87.61,0h-.19l-1,0A86.82,86.82,0,0,0,26,24.22a83.79,83.79,0,0,0-26,59A12.13,12.13,0,0,0,11.88,95.57h.26A12.14,12.14,0,0,0,24.27,83.69C25,50.93,52.85,24.27,86.43,24.27"></path>
</svg>
                    </a>
                </div>
                <div class="Header-group Header-group-sticky">
                    <div class="Header-search-sticky">

                        <div class="SearchBox" role="search" style="">
                            <form class="SearchBox-form" action="/search" method="get">
                                <div class="SearchBox-group">
                                    <input class="SearchBox-input" id="SearchBox-input-header-sticky" name="q" type="search" placeholder="Search" value="" aria-label="Site search">
                                    <button class="SearchBox-submit" id="SearchBox-submit-header-sticky" type="submit" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 28" preserveAspectRatio="xMidYMid meet" focusable="false" class="SearchBox-submit-icon" height="17" width="17" role="img" aria-hidden="true">
  <path d="M18 13q0-2.9-2.06-4.95T11 6 6.05 8.06 4 13t2.05 4.95T11 20t4.95-2.06T18 13zm8 13q0 .8-.6 1.4T24 28q-.84 0-1.4-.6l-5.37-5.34Q14.43 24 11 24q-2.23 0-4.27-.87T3.2 20.8.88 17.26 0 13t.87-4.27T3.2 5.2t3.53-2.33T11 2t4.27.87T18.8 5.2t2.33 3.53T22 13q0 3.44-1.94 6.23l5.36 5.36q.58.57.58 1.4z"></path>
</svg>
      </button>
                                </div>

                            </form>
                        </div>

                    </div>
                    <div class="Header-buttons Header-buttons-sticky">
                        <a class="Header-buttons-nav Header-buttons-nav-sticky js-nav-toggle" id="sticky-nav" href="#nav" data-no-jump="" aria-label="Menu" role="button">
                            <span class="Header-buttons-nav-icon Header-buttons-nav-icon-sticky" aria-hidden="true"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" preserveAspectRatio="xMidYMid meet" focusable="false" class="Header-buttons-nav-close-sticky" height="36" width="36" role="img" aria-hidden="true">
  <path d="M10 9l-1 1-4-4-4 4-1-1 4-4-4-4 1-1 4 4 4-4 1 1-4 4 4 4z"></path>
</svg>
                        </a>
                        <a class="Header-buttons-donate Header-buttons-donate-sticky" href="/donate?utm_campaign=donate&amp;utm_medium=header-sticky&amp;utm_source=%2Fdonate">Donate</a>
                        <a class="Header-buttons-newsletter Header-buttons-newsletter-sticky .js-nav-signup" href="#" data-no-jump="">
                            <title>Email</title>
                            <svg viewBox="0 0 24 24" width="17px" height="17px" fill="white">
              <path d="M12,13.5,0,4.5A1.45,1.45,0,0,1,.44,3.44,1.44,1.44,0,0,1,1.5,3h21A1.5,1.5,0,0,1,24,4.5Zm0,2.7,12-9V19.5A1.5,1.5,0,0,1,22.5,21H1.5a1.44,1.44,0,0,1-1.06-.44A1.45,1.45,0,0,1,0,19.5V7.2Z"></path>
            </svg>
                            <span class="Header-buttons-nav-text"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="Main  " id="main" role="main">
        <div class="Main-wrap l-padding u-mt4 u-mb4">
            <div class="l-wrap">
                <div class="l-primary-secondary-reverse">
                    <div class="l-primary">
                        <div class="u-richtext non-mobile u-mb2">
                            <h1>Help Us Shine a Light on Money in Politics!</h1>
                            <p>Your donation will help support OpenSecrets' data research and investigative reporting. This vital work is not easy to produce. We need your support to keep this information public, accessible and free. </p>

                        </div>
                        <script src="https://js.stripe.com/v3/" type="text/javascript"></script>

                        <form class="StripeForm u-form js-StripeForm js-addressAutocomplete js-validate" action="/donate/charge" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="E8iaYR1+IIbXGk8mkTKD7shirWYXSiMXzD8+6POV2Jg4Bl+tR72WVwrHEZAorQ/QCYuVc9Z9oGq11ttKZ+26XQ==">
                            <input type="hidden" name="stripe_token">
                            <input type="hidden" name="utm_campaign" value="donate">
                            <input type="hidden" name="utm_medium" value="footer">
                            <input type="hidden" name="utm_source" value="/">
                            <input type="hidden" name="referer" value="https://www.opensecrets.org/">
                            <div class="u-mt4 u-mb4 options">
                                <div class="title-instruction">
                                    <h2>Gift Amount</h2>
                                    <span class="StripeForm-small-instruction" style="color:red; margin-top: 0; margin-left: 16px;"><strong>(This is not a donation to a candidate or PAC)</strong></span>
                                </div>
                                <ul class="StripeForm-amounts u-mt2">
                                    <li class="StripeForm-amounts-item">
                                        <input class="StripeForm-amounts-input" type="radio" id="amount-35" value="35" name="amount-selector" data-hj-whitelist="">
                                        <label class="StripeForm-amounts-label" for="amount-35">$35</label>
                                    </li>
                                    <li class="StripeForm-amounts-item">
                                        <input class="StripeForm-amounts-input" type="radio" id="amount-50" value="50" name="amount-selector" data-hj-whitelist="">
                                        <label class="StripeForm-amounts-label" for="amount-50">$50</label>
                                    </li>
                                    <li class="StripeForm-amounts-item">
                                        <input class="StripeForm-amounts-input" type="radio" id="amount-100" value="100" name="amount-selector" checked="" data-hj-whitelist="">
                                        <label class="StripeForm-amounts-label" for="amount-100">$100</label>
                                    </li>
                                    <li class="StripeForm-amounts-item">
                                        <input class="StripeForm-amounts-input" type="radio" id="amount-250" value="250" name="amount-selector" data-hj-whitelist="">
                                        <label class="StripeForm-amounts-label" for="amount-250">$250</label>
                                    </li>
                                    <li class="StripeForm-amounts-item">
                                        <input class="StripeForm-amounts-input" type="radio" id="amount-other" value="other" name="amount-selector" checked="" data-hj-whitelist="">
                                        <label class="StripeForm-amounts-label" for="amount-other">Other</label>
                                    </li>
                                </ul>
                                <div class="StripeForm-row" id="amount-other-input" style="display: block;">
                                    <label class="StripeForm-label" for="amount">Amount</label>
                                    <div class="StripeForm-input-wrapper">
                                        <span>$&nbsp;</span>
                                        <input class="StripeForm-input -short" id="amount" name="amount" value="100" type="text" data-validate="number-currency" aria-required="true" data-hj-whitelist="">
                                        <span class="is-hidden" data-validate="error" data-validate-error-for="amount" role="alert">Please enter a valid amount of at least $0.50</span>
                                    </div>
                                </div>
                                <div class="StripeForm-row">
                                    <label id="schedule-label" class="StripeForm-label">Donation Schedule </label>
                                    <div class="StripeForm-select-wrapper">
                                        <select class="StripeForm-select" name="schedule">
                    <option value="0">One-Time</option>
                    <option value="1">Monthly</option>
                    <option value="3">Quarterly</option>
                    <option value="12">Annually</option>
                </select>
                                        <span class="StripeForm-small-instruction">Please consider making this donation monthly <span style="vertical-align: middle;" data-tooltip="{&quot;content&quot;:&quot;<div class=\&quot;u-richtext\&quot;><p><b>As a Recurring Donor…</b></p><ul><li>You will enjoy a safe, convenient and easy way to support our work.</li><li>Your gift will be transferred automatically each period from your credit or debit card.</li><li>Your contribution will go further, since it saves time and reduces administrative expenses.</li><li>You will receive fewer fundraising solicitations by mail and email.</li><li>You can increase, decrease, suspend or stop your participation at any time.</li></ul></div>&quot;}" id="glossary-view2" role="button" tabindex="0" aria-controls="tooltip-view2" aria-describedby="tooltip-view2" aria-expanded="false" aria-haspopup="true" class="js-init"><span aria-hidden="true">?</span>
                                        <span class="u-screenreader">more info</span><span id="tooltip-view2" class="Tooltip" aria-hidden="true" aria-expanded="false" role="alert" data-align="center"><div class="u-richtext"><p><b>As a Recurring Donor…</b></p><ul><li>You will enjoy a safe, convenient and easy way to support our work.</li><li>Your gift will be transferred automatically each period from your credit or debit card.</li><li>Your contribution will go further, since it saves time and reduces administrative expenses.</li><li>You will receive fewer fundraising solicitations by mail and email.</li><li>You can increase, decrease, suspend or stop your participation at any time.</li></ul></div></span></span>
                                        </span>

                                    </div>
                                </div>

                            </div>



                            <div id="alternative-payment-box" style="text-align: center; position: relative;">
                                <div class="dynamic-checkout">
                                    <h2 class="dynamic-checkout__title">
                                        Express checkout
                                    </h2>

                                    <div class="dynamic-checkout__content">
                                        <div id="paypal-button-standin" class="paypal-button-standin paypal-button paypal-button-number-0 paypal-button-layout-vertical paypal-button-shape-rect paypal-button-number-multiple paypal-button-color-gold paypal-logo-color-blue">
                                            <img alt="PayPal Logo" class="paypal-logo paypal-logo-pp paypal-logo-color-blue" style="visibility: visible;" src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/donate/paypal-button-p-bc10e7b46c9e134795b1414b52052521c9a38f739a50bd73d64d28dff27d1a11.svg"
                                                data-original="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/donate/paypal-button-p-bc10e7b46c9e134795b1414b52052521c9a38f739a50bd73d64d28dff27d1a11.svg">
                                            <span class="paypal-button-text paypal-button-space"> </span>
                                            <img alt="Donate with PayPal" class="paypal-logo paypal-logo-paypal paypal-logo-color-blue" style="visibility: visible;" src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/donate/paypal-button-paypal-fff4e3ca8e0108fd133a93848e1813e38c215461af08273a7ca6eab56d745bd4.svg"
                                                data-original="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/donate/paypal-button-paypal-fff4e3ca8e0108fd133a93848e1813e38c215461af08273a7ca6eab56d745bd4.svg">
                                            <div class="paypal-button-spinner"></div>
                                        </div>

                                        <div id="payment-request-button" style="display: none; position: relative;">
                                            <!-- A Stripe Element will be inserted here. -->

                                        </div>
                                    </div>
                                    <h3 class="dynamic-checkout__endcap">
                                        Or pay with a credit card below
                                    </h3>
                                </div>
                            </div>

                            <div class="u-mt4 u-mb4 lower-form">
                                <h2>Personal Information <span class="StripeForm-title-instruction">(all fields required)</span></h2>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label" for="first_name">First name</label>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input" id="first_name" value="" name="first_name" type="text" data-validate="notempty" aria-required="true" data-hj-whitelist="">
                                        <span class="is-hidden" data-validate="error" data-validate-error-for="first_name" role="alert">Please enter your first name</span>
                                    </div>
                                </div>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label">Last name</label>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input" id="last_name" value="" type="text" name="last_name" data-validate="notempty" aria-required="true" data-hj-whitelist="">
                                        <span class="is-hidden" data-validate="error" data-validate-error-for="last_name" role="alert">Please enter your last name</span>
                                    </div>
                                </div>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label">Address</label>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input pac-target-input" name="address" value="" type="text" placeholder="" data-hj-whitelist="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label">Address 2</label>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input" name="address2" type="text" data-hj-whitelist="">
                                    </div>
                                </div>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label">City</label>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input" name="city" value="" type="text" data-hj-whitelist="">
                                    </div>
                                </div>

                                <div class="StripeForm-row" id="state-block">
                                    <label class="StripeForm-label">State</label>
                                    <div class="StripeForm-select-wrapper">
                                        <select class="StripeForm-select" name="state" required="">
                    <option value="" selected="selected">Select a state</option>
                    <option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="GU">Guam</option>
<option value="VI">Virgin Islands</option>
<option value="AS">American Samoa</option>
<option value="PR">Puerto Rico</option>
<option value="MP">Northern Mariana Islands</option>
                </select>
                                    </div>
                                </div>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label">Country</label>
                                    <div class="StripeForm-select-wrapper">
                                        <select class="StripeForm-select" name="country" required="">
            <option value="">Select country</option>
            <option value="US" selected="">United States</option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia, Plurinational State of</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, the Democratic Republic of the</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Côte d'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curaçao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and McDonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Réunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin (French part)</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten (Dutch part)</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela, Bolivarian Republic of</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.S.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
        </select>
                                    </div>
                                </div>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label" for="email">Email</label>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input" id="email" value="" name="email" type="email" data-validate="email" aria-required="true">
                                        <span class="StripeForm-error is-hidden" data-validate="error" data-validate-error-for="email" role="alert">Please enter a valid email address</span>
                                    </div>
                                </div>

                                <div class="StripeForm-row">
                                    <label class="StripeForm-label" for="phone">Phone</label>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input" id="phone" value="" name="phone" type="tel" data-validate="phone" data-hj-whitelist="">
                                        <span class="is-hidden" data-validate="error" data-validate-error-for="phone" role="alert">Please enter a valid phone number</span>
                                    </div>
                                </div>
                                <div class="StripeForm-row">
                                    <div class="StripeForm-label">
                                        <label for="employer">Employer</label>
                                        <span data-tooltip="{&quot;content&quot;:&quot;Please enter your employer. After you submit your donation, we’ll check to see if your employer will match your gift.&quot;}" id="glossary-view3" role="button" tabindex="0" aria-controls="tooltip-view3" aria-describedby="tooltip-view3"
                                            aria-expanded="false" aria-haspopup="true" class="js-init"><span aria-hidden="true" style="font-style: italic; vertical-align: super; font-size: 0.76471em;">i</span>
                                        <span class="u-screenreader">more info</span><span id="tooltip-view3" class="Tooltip" aria-hidden="true" aria-expanded="false" role="alert" data-align="left">Please enter your employer. After you submit your donation, we’ll check to see if your employer will match your gift.</span></span>

                                    </div>
                                    <div class="StripeForm-input-wrapper">
                                        <input class="StripeForm-input" value="" id="employer" name="employer" type="text" data-hj-whitelist="">
                                    </div>
                                </div>
                            </div>

                            <div class="u-mt4 u-mb2">
                                <h2>Payment Information</h2>

                                <div class="StripeForm-row-input">
                                    <label class="StripeForm-label-input">Card Info</label>
                                    <div class="StripeForm-input-wrapper-input">
                                        <div class="StripeForm-input StripeElement StripeElement--empty" name="card">
                                            <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe name="__privateStripeFrame36724" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/elements-inner-card-a5f062d43f1a0b57a5631091c244b6eb.html#wait=false&amp;mids[guid]=NA&amp;mids[muid]=af8cce52-9762-4a6d-a2a1-9e3c8f928f0d45f7ce&amp;mids[sid]=ba930e57-3858-4413-899f-95a4792b69a8ca8b09&amp;rtl=false&amp;componentName=card&amp;keyMode=live&amp;apiKey=pk_live_30R8wSaEdNiaVDm8A6kiq9xj&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;controllerId=__privateStripeController36713"
                                                    title="Secure card payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; height: 16.8px;"></iframe>
                                                <input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div>
                                        </div>
                                        <span class="is-hidden" data-validate="error" data-validate-error-for="card" role="alert">Please enter a valid zip code</span>
                                    </div>
                                </div>
                            </div>


                            <div class="u-clearfix">
                                <button id="submit-button" class="Button u-float-right" type="submit" data-validate="submit" style="margin-right: 50px;">Complete $100 Donation</button>
                            </div>

                            <span class="StripeForm-small-instruction u-right" style="margin-right: 50px;">Have questions? Call <a href="tel:+12023540101">(202) 354-0101</a> or email us at <a href="mailto:development@crp.org">development@crp.org</a>
    </span>
                        </form>

                        <form id="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="display: none;">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="return" value="https://www.opensecrets.org/donate/paypal-thank-you?utm_source=/&amp;utm_medium=footer&amp;utm_campaign=donate">
                            <input type="hidden" name="hosted_button_id" value="VS6HH9RNPA3SY">
                            <input type="hidden" name="custom" value="utm_campaign=donate-split-utm_medium=footer-split-utm_source=/-split-referer=https://www.opensecrets.org/">
                        </form>
                    </div>
                    <div class="l-secondary-reverse">
                        <div class="u-richtext u-mt4 u-mb4">
                            <p>OpenSecrets is a 501(c)(3) non-profit. Donations are tax exempt. Our Federal Tax ID: 52-1275227</p>
                            <h4>Other Ways to Give:</h4>
                            <ul>
                                <li>Employer match</li>
                                <li>Allocate stock</li>
                                <li>Planned giving</li>
                                <li>By Mail:</li>
                                <div style="padding: .5rem 0; font-size: .875rem;">
                                    <span>OpenSecrets</span><br>
                                    <span>1300 L Street NW, Suite 200</span><br>
                                    <span>Washington, DC 20005</span><br>
                                </div>
                            </ul>
                        </div>
                        <div class="u-richtext u-mb4 u-center">
                            <div>
                                <a target="_blank" href="https://www.dafdirect.org/DAFDirect/daflink?_dafdirect_settings=NTIxMjc1MjI3XzIxMTFfNzI1ZjhhOGItMTEwMC00YzMyLWFkNDktYWY0NWFiNzgwMDJl&amp;designatedText=d2hlcmUgaXQncyBuZWVkZWQgbW9zdA==&amp;amountValue= ">
                                    <img src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/donate/daf-direct-6acce63809313269bce6086ff6837d254e9bfad0c280446e0694c60de91621fc.png">
                                </a>
                            </div>
                            <div>
                                <a target="_blank" href="https://www.guidestar.org/profile/52-1275227">
                                    <img src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/donate/guidestar_logo-1a5a1e98a70445854ddbf59cbc1576eb6464189c85c89ad9557e79ba85c959c2.png">
                                </a>
                            </div>
                            <div>
                                <a target="_blank" href="http://www.charitynavigator.org/index.cfm?bay=search.summary&amp;orgid=7703">
                                    <img src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/donate/4star234x60-649c1458d84c3def5f29b25c7be58e737d6afe7673964b8cd5824fd81e6d6ff6.gif">
                                </a>
                            </div>
                            <p>OpenSecrets is a top-rated nonprofit, receiving a 4-star rating for the 8th consecutive year for demonstrating strong financial health and commitment to accountability and transparency. When you donate to OpenSecrets, you help
                                journalists, advocates, educators and citizens connect the dots between money and its influence on politics and policy.</p>
                        </div>
                        <div class="u-richtext u-mb4 u-center">
                            <p>Call <a href="tel:+12023540101">(202) 354-0101</a> or email <a href="mailto:jbarrett@crp.org">jbarrett@crp.org</a> with any questions.</p>
                        </div>
                        <hr class="u-striped-rule u-mt2">
                        <h4 style="margin-top: 1rem;">Donor Privacy Policy:</h4>
                        <span><a href="https://www.opensecrets.org/about/donor-policy.php">Click here</a> to see our donor privacy policy.</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="StayConnected l-padding">
        <div class="l-wrap">
            <div class="hide-when-floating-newsletter-ask">
                <h2 class="StayConnected-title f-strata-title">Count Cash &amp; Make&nbsp;Change</h2>
                <div class="StayConnected-description">
                    <p>Sign up for our newsletter to track money’s influence on U.S. elections and <span class="u-nowrap">public policy.</span></p>
                </div>
            </div>

            <div class="StayConnected-row">
                <div class="hide-when-floating-newsletter-ask">
                    <div class="StayConnected-primary">
                        <div class="MailChimp">
                            <form data-remote="true" data-mailchimp-form="true" class="MailChimp-form u-form js-validate " id="mc-embedded-subscribe-form-footer" name="mc-embedded-subscribe-form-footer" novalidate="">
                                <div class="MailChimp-inputWrap">
                                    <label for="mce-EMAIL-footer" class="MailChimp-label u-vh" aria-label="Your email address (required)">
        <span class="MailChimp-error is-hidden" style="" data-validate="error" data-validate-error-for="mce-EMAIL-footer" role="alert">Please enter a valid email address</span>
      </label>
                                    <input class="MailChimp-input required email" type="email" value="" name="email" id="mce-EMAIL-footer" placeholder="Email address" autocomplete="home email" data-validate="email" aria-required="true" data-mailchimp-input="true">
                                </div>
                                <div style="position: absolute; left: -5000px;">
                                    <label for="mc-honeypot-footer">Do not fill this out if you are a person</label>
                                    <input id="mc-honeypot-footer" type="text" name="" tabindex="-1" value="b_c1b60338569400d5adfc3ea6e_9e9ebdd5e9">
                                </div>
                                <button class="MailChimp-submit Button Button--red" name="subscribe" id="mc-embedded-subscribe-footer" data-validate="submit" data-mailchimp-submit="true" style=";">
      Sign Up
    </button>
                            </form>
                            <div id="newsletter_signup_spinner" data-mailchimp-spinner="true" class="lds-css ng-scope" style="display: none;">
                                <div class="lds-spinner" style="width:100%;height:100%">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <style type="text/css">
                                    @keyframes lds-spinner {
                                        0% {
                                            opacity: 1;
                                        }
                                        100% {
                                            opacity: 0;
                                        }
                                    }
                                    
                                    @-webkit-keyframes lds-spinner {
                                        0% {
                                            opacity: 1;
                                        }
                                        100% {
                                            opacity: 0;
                                        }
                                    }
                                    
                                    .lds-spinner {
                                        position: relative;
                                        margin: auto;
                                    }
                                    
                                    .lds-spinner div {
                                        left: 50%;
                                        top: 50%;
                                        position: absolute;
                                        -webkit-animation: lds-spinner linear 1s infinite;
                                        animation: lds-spinner linear 1s infinite;
                                        background: #141414;
                                        width: 12px;
                                        height: 24px;
                                        border-radius: 40%;
                                        -webkit-transform-origin: 6px 52px;
                                        transform-origin: 6px 52px;
                                    }
                                    
                                    .lds-spinner div:nth-child(1) {
                                        -webkit-transform: rotate(0deg);
                                        transform: rotate(0deg);
                                        -webkit-animation-delay: -0.916666666666667s;
                                        animation-delay: -0.916666666666667s;
                                    }
                                    
                                    .lds-spinner div:nth-child(2) {
                                        -webkit-transform: rotate(30deg);
                                        transform: rotate(30deg);
                                        -webkit-animation-delay: -0.833333333333333s;
                                        animation-delay: -0.833333333333333s;
                                    }
                                    
                                    .lds-spinner div:nth-child(3) {
                                        -webkit-transform: rotate(60deg);
                                        transform: rotate(60deg);
                                        -webkit-animation-delay: -0.75s;
                                        animation-delay: -0.75s;
                                    }
                                    
                                    .lds-spinner div:nth-child(4) {
                                        -webkit-transform: rotate(90deg);
                                        transform: rotate(90deg);
                                        -webkit-animation-delay: -0.666666666666667s;
                                        animation-delay: -0.666666666666667s;
                                    }
                                    
                                    .lds-spinner div:nth-child(5) {
                                        -webkit-transform: rotate(120deg);
                                        transform: rotate(120deg);
                                        -webkit-animation-delay: -0.583333333333333s;
                                        animation-delay: -0.583333333333333s;
                                    }
                                    
                                    .lds-spinner div:nth-child(6) {
                                        -webkit-transform: rotate(150deg);
                                        transform: rotate(150deg);
                                        -webkit-animation-delay: -0.5s;
                                        animation-delay: -0.5s;
                                    }
                                    
                                    .lds-spinner div:nth-child(7) {
                                        -webkit-transform: rotate(180deg);
                                        transform: rotate(180deg);
                                        -webkit-animation-delay: -0.416666666666667s;
                                        animation-delay: -0.416666666666667s;
                                    }
                                    
                                    .lds-spinner div:nth-child(8) {
                                        -webkit-transform: rotate(210deg);
                                        transform: rotate(210deg);
                                        -webkit-animation-delay: -0.333333333333333s;
                                        animation-delay: -0.333333333333333s;
                                    }
                                    
                                    .lds-spinner div:nth-child(9) {
                                        -webkit-transform: rotate(240deg);
                                        transform: rotate(240deg);
                                        -webkit-animation-delay: -0.25s;
                                        animation-delay: -0.25s;
                                    }
                                    
                                    .lds-spinner div:nth-child(10) {
                                        -webkit-transform: rotate(270deg);
                                        transform: rotate(270deg);
                                        -webkit-animation-delay: -0.166666666666667s;
                                        animation-delay: -0.166666666666667s;
                                    }
                                    
                                    .lds-spinner div:nth-child(11) {
                                        -webkit-transform: rotate(300deg);
                                        transform: rotate(300deg);
                                        -webkit-animation-delay: -0.083333333333333s;
                                        animation-delay: -0.083333333333333s;
                                    }
                                    
                                    .lds-spinner div:nth-child(12) {
                                        -webkit-transform: rotate(330deg);
                                        transform: rotate(330deg);
                                        -webkit-animation-delay: 0s;
                                        animation-delay: 0s;
                                    }
                                    
                                    .lds-spinner {
                                        width: 100px !important;
                                        height: 100px !important;
                                        -webkit-transform: translate(-50px, -50px) scale(0.5) translate(50px, 50px);
                                        transform: translate(-50px, -50px) scale(0.5) translate(50px, 50px);
                                    }
                                </style>
                            </div>
                            <div style="margin-top:10px; color:#6591cc; font-size: 16px;" id="mce-message-footer" data-mailchimp-message="true"></div>
                        </div>

                    </div>
                </div>

                <div class="StayConnected-secondary">
                    <ul class="StayConnected-social">
                        <li class="StayConnected-social-item">
                            <a class="StayConnected-social-link LinkIcon" href="https://twitter.com/opensecretsdc">
                                <span class="LinkIcon-icon c-red"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182 148" preserveAspectRatio="xMidYMid meet" focusable="false" height="17" width="21" role="img" aria-hidden="true">
  <path d="M181.9 17.6c-5.1 7.5-11.3 13.9-18.6 19.2.1 1.1.1 2.8.1 5 0 10-1.5 20-4.4 30-3 10-7.4 19.6-13.3 28.8s-13 17.3-21.2 24.2-18.2 12.6-29.8 16.9C83 146 70.5 148.1 57.3 148c-20.8-.1-39.9-5.7-57.3-16.8 2.7.3 5.7.4 9 .4 17.3 0 32.8-5.3 46.4-16-8.1-.1-15.4-2.6-21.8-7.4-6.4-4.8-10.8-10.9-13.2-18.5 2.6.4 4.9.6 7 .6 3.3 0 6.6-.4 9.8-1.3-8.6-1.8-15.7-6.1-21.4-13-5.7-6.9-8.5-14.8-8.5-23.7V52c5.2 3 10.8 4.5 16.9 4.7-5.1-3.4-9.1-7.9-12.1-13.3S7.6 32.1 7.7 25.7c0-6.8 1.7-13.1 5-18.9 9.4 11.5 20.7 20.7 34 27.6s27.6 10.7 42.9 11.5c-.5-2.9-.7-5.7-.7-8.5 0-10.3 3.6-19.1 10.9-26.4s16-10.9 26.3-11c10.8 0 20 3.9 27.4 11.8 8.4-1.7 16.3-4.7 23.7-9.1-3 8.9-8.5 15.7-16.5 20.6 7.1-.8 14.3-2.7 21.4-5.8l-.2.1z"></path>
</svg></span>
                                <span class="LinkIcon-text">Follow us on Twitter</span>
                            </a>
                        </li>
                        <li class="StayConnected-social-item">
                            <a class="StayConnected-social-link LinkIcon" href="https://facebook.com/opensecrets">
                                <span class="LinkIcon-icon c-red"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 52" preserveAspectRatio="xMidYMid meet" focusable="false" height="25" width="13" role="img" aria-hidden="true">
  <path d="M27 .4v8.3h-4.9c-1.8 0-3 .4-3.6 1.1s-.9 1.9-.9 3.4V19h9.2l-1.2 9.3h-7.9V52H8V28.3H0V19h8v-6.8c0-3.9 1.1-6.9 3.3-9s5-3.2 8.6-3.2c3 0 5.4.1 7.1.4z"></path>
</svg></span>
                                <span class="LinkIcon-text">Follow us on Facebook</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>



    <div class="Footer hide-print" id="footer" role="contentinfo">
        <div class="Footer-primary l-padding">
            <div class="Footer-primary-wrap l-wrap">
                <div class="Footer-contact vcard" itemscope="" itemtype="http://schema.org/Organization">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 213.78 214" focusable="false" class="Footer-logo" height="56" width="114" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true">
  <path d="M128.44,44.15h-.21l-1,0a12.14,12.14,0,0,0,0,24.28h.18l.68,0h0c33.85.44,61.38,27.65,61.38,60.64,0,33.45-27.91,60.67-62.23,60.67S65,162.51,65,129.06c0-.17,0-.35,0-.52l0-.71a12.14,12.14,0,1,0-24.27-.53v.41c0,.45,0,.9,0,1.35,0,46.84,38.81,84.94,86.51,84.94s86.51-38.1,86.51-84.94c0-46.2-38.28-84.3-85.34-84.91"></path>
  <path d="M86.43,24.27l.93,0A12.14,12.14,0,0,0,87.61,0h-.19l-1,0A86.82,86.82,0,0,0,26,24.22a83.79,83.79,0,0,0-26,59A12.13,12.13,0,0,0,11.88,95.57h.26A12.14,12.14,0,0,0,24.27,83.69C25,50.93,52.85,24.27,86.43,24.27"></path>
</svg>
                    <p class="org u-hide" itemprop="name">OpenSecrets</p>
                    <p class="status u-hide" itemprop="status">A 501(c)(3) tax-exempt, charitable organization</p>
                    <p class="adr" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                        <span class="street-address" itemprop="streetAddress">1300 L St NW, Suite 200 </span><br>
                        <span class="locality" itemprop="addressLocality">Washington</span>,
                        <span class="region" itemprop="addressRegion">DC</span>
                        <span class="postal-code" itemprop="postalCode">20005</span>
                    </p>
                    <p class="tel" itemprop="telephone">
                        <span class="type">tel<span class="u-screenreader">elphone</span></span>
                        <span class="value">(202) 857-0044</span>
                    </p>
                    <p class="tel" itemprop="faxNumber">
                        <span class="type">info</span>
                        <span class="value"><a href="mailto:info@crp.org" class="Footer-col-link">info@crp.org</a></span>
                    </p>
                </div>
                <div class="Footer-sitemap Footer-col">
                    <ul>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/elections/">Politicians &amp; Elections</a></li>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/influence/">Influence &amp; Lobbying</a></li>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/news/">News &amp; Analysis</a></li>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/resources/">Resources</a></li>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/about/">About Us</a></li>
                    </ul>
                </div>
                <div class="Footer-quickLinks Footer-col">
                    <ul>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/action-center/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182 178" preserveAspectRatio="xMidYMid meet" focusable="false" height="18" width="18" role="img" aria-hidden="true">
  <path d="M56.3 120.8c-8.2-2.1-15.3-2.6-20.2-2.6h-2c-1.6.2-3.2.3-4.8.3-1.7 0-3.4-.1-5.1-.3l14.2 53.1c1.3 4.8 6.2 7.6 11 6.3l19.3-5.2c4.8-1.3 7.7-6.6 6.3-11-4.1-13.3-13.6-18.7-18.7-40.6zM121.3 44.5c-1.8 3.2-3.3 7-4.5 11.1-1.6 5.7-2.4 12-2.4 18.2 0 6.2.8 12.5 2.4 18.2 1.2 4.1 2.7 7.9 4.5 11.1 9.7-5.3 16.4-16.4 16.4-29.3s-6.7-24-16.4-29.3z"></path>
  <path d="M130.7 0C117.3 0 105 7.5 95.9 19.7 66.4 39.4 29.3 41.3 29.3 41.3 13.1 41.3 0 55.8 0 73.9s13.1 32.6 29.3 32.6c1.3 0 2.6-.1 3.8-.3 10.6-.4 41.1.8 65.3 25 8.8 10.3 20.1 16.5 32.3 16.5 28.3 0 51.3-33.1 51.3-73.9S159 0 130.7 0zm17.6 113.1c-2.9 4.1-6.1 7.3-9.4 9.4-2.7 1.7-5.4 2.5-8.1 2.5s-5.4-.8-8.1-2.5c-3.3-2-6.6-5.3-9.4-9.4-7-10-11-24.3-11-39.3s4-29.2 11-39.3c2.9-4.1 6.1-7.3 9.4-9.4 2.7-1.7 5.4-2.5 8.1-2.5s5.4.8 8.1 2.5c3.3 2 6.6 5.3 9.4 9.4 7 10 11 24.3 11 39.3s-4.1 29.3-11 39.3z"></path>
</svg>Take Action</a></li>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/donate/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 36" preserveAspectRatio="xMidYMid meet" focusable="false" height="15" width="18" role="img" aria-hidden="true">
  <path d="M34.5.4c-5.6-1.6-11.6 1.5-13.3 7 0 .2-.2.2-.2.2s-.2 0-.2-.2c-1.6-5.6-7.7-8.7-13.3-7s-9 7.5-7 12.9C4.3 23.9 21 36 21 36s16.7-12.1 20.5-22.6c1.8-5.6-1.6-11.3-7-13z"></path>
</svg>Donate</a></li>
                        <li class="Footer-col-item"><a class="Footer-col-link" href="/contracts/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 101" preserveAspectRatio="xMidYMid meet" focusable="false" height="16" width="18" role="img" aria-hidden="true">
  <path class="st0" d="M112.9 6.8l-87 2.5L22.6 0H0l4.7 9.3H14l13.2 39.4c-3.3 2.8-5.3 7-5.3 11.7 0 8.4 6.9 15.3 15.3 15.3H113V63.9H37.1c-2.1 0-3.7-1.6-3.7-3.7 0-1.5 1-2.9 2.4-3.5L113 40.8v-34h-.1z"></path>
  <circle class="st0" cx="45.4" cy="89.7" r="11.3"></circle>
  <circle class="st0" cx="101.5" cy="89.7" r="11.3"></circle>
</svg>Buy Custom Data</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Footer-secondary l-padding">
            <div class="Footer-secondary-wrap l-wrap">
                <div class="Footer-legal">
                    <p>Except for the Revolving Door section, content on this site is licensed under a Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License by OpenSecrets.org. To request permission for commercial use, <a href="mailto:commercial@crp.org?subject=Commercial%20inquiry">please contact&nbsp;us</a>.</p>
                </div>
            </div>
        </div>
    </div>



    <!--[if gt IE 9]><!-->
    <script async="async" src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/rails_php_and_wordpress-fef4b514a2ca1a52830f.js" defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async" src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/application-a40b845e52742de3695a.js" defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async" src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/donate-4cc47061f44046acd221.js" defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async" src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/marketing-54a896eb81a1aed009d8.js" defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async" src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/preferences-348a89b9938e235d2326.js" defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async" src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/statistics-f7ede5e12f5ec4b39734.js" defer="defer" crossorigin="true" type="text/javascript"></script>

    <!--[if IE 9]>
      <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/rails_php_and_wordpress-fef4b514a2ca1a52830f.js" crossorigin="true"></script>
      <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/application-a40b845e52742de3695a.js" crossorigin="true"></script>
      <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/marketing-54a896eb81a1aed009d8.js" crossorigin="true"></script>
      <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/preferences-348a89b9938e235d2326.js" crossorigin="true"></script>
      <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/statistics-f7ede5e12f5ec4b39734.js" crossorigin="true"></script>
    <![endif]-->

    <div id="debugging-div" data-agent="" data-development="false" data-environment="production"></div>



    <script type="text/javascript" id="" src="//rum-static.pingdom.net/pa-5f6b593a8e83fa0015000bc5.js"></script><iframe name="__privateStripeMetricsController3670" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/m-outer-08a1fefa46cfc8cc94fc477ddcdb0555.html#url=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;title=Donate%20%E2%80%A2%20OpenSecrets&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2F&amp;muid=af8cce52-9762-4a6d-a2a1-9e3c8f928f0d45f7ce&amp;sid=ba930e57-3858-4413-899f-95a4792b69a8ca8b09&amp;version=6&amp;preview=false"
        aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?callback=__google_maps_api_provider_initializator__&amp;key=AIzaSyDL5ydIVcGixXz03_px29cUfKukb7znqf8&amp;libraries=places&amp;v=3.31"></script><iframe name="__privateStripeController3671" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/controller-84fb1bf8b6682ad5b35ea5af166fb5bf.html#apiKey=pk_live_30R8wSaEdNiaVDm8A6kiq9xj&amp;stripeJsId=e323b3d2-4e8a-4d8c-968f-78b9ba7a916b&amp;stripeJsLoadTime=1643520982942&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;controllerId=__privateStripeController3671"
        aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
    <iframe name="__privateStripeFrame3676" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" sandbox="allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin" referrerpolicy="origin" src="https://js.stripe.com/v3/payment-request-inner-google-pay-78d944df280fbd53595f66d68c262a86.html#authentication[apiKey]=pk_live_30R8wSaEdNiaVDm8A6kiq9xj&amp;mids[guid]=NA&amp;mids[muid]=af8cce52-9762-4a6d-a2a1-9e3c8f928f0d45f7ce&amp;mids[sid]=ba930e57-3858-4413-899f-95a4792b69a8ca8b09&amp;origin=https%3A%2F%2Fwww.opensecrets.org&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;controllerId=__privateStripeController3671"
        aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
    <iframe name="__privateStripeFrame3678" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/payment-request-inner-browser-f5a90a44a032cd3c4a09041588a31c41.html#authentication[apiKey]=pk_live_30R8wSaEdNiaVDm8A6kiq9xj&amp;mids[guid]=NA&amp;mids[muid]=af8cce52-9762-4a6d-a2a1-9e3c8f928f0d45f7ce&amp;mids[sid]=ba930e57-3858-4413-899f-95a4792b69a8ca8b09&amp;origin=https%3A%2F%2Fwww.opensecrets.org&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;controllerId=__privateStripeController3671"
        aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
    <iframe name="__privateStripeController36713" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/controller-84fb1bf8b6682ad5b35ea5af166fb5bf.html#apiKey=pk_live_30R8wSaEdNiaVDm8A6kiq9xj&amp;stripeJsId=e323b3d2-4e8a-4d8c-968f-78b9ba7a916b&amp;stripeJsLoadTime=1643520982941&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;controllerId=__privateStripeController36713"
        aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
    <iframe name="__privateStripeFrame36718" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" sandbox="allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin" referrerpolicy="origin" src="https://js.stripe.com/v3/payment-request-inner-google-pay-78d944df280fbd53595f66d68c262a86.html#authentication[apiKey]=pk_live_30R8wSaEdNiaVDm8A6kiq9xj&amp;mids[guid]=NA&amp;mids[muid]=af8cce52-9762-4a6d-a2a1-9e3c8f928f0d45f7ce&amp;mids[sid]=ba930e57-3858-4413-899f-95a4792b69a8ca8b09&amp;origin=https%3A%2F%2Fwww.opensecrets.org&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;controllerId=__privateStripeController36713"
        aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
    <iframe name="__privateStripeFrame36720" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/payment-request-inner-browser-f5a90a44a032cd3c4a09041588a31c41.html#authentication[apiKey]=pk_live_30R8wSaEdNiaVDm8A6kiq9xj&amp;mids[guid]=NA&amp;mids[muid]=af8cce52-9762-4a6d-a2a1-9e3c8f928f0d45f7ce&amp;mids[sid]=ba930e57-3858-4413-899f-95a4792b69a8ca8b09&amp;origin=https%3A%2F%2Fwww.opensecrets.org&amp;referrer=https%3A%2F%2Fwww.opensecrets.org%2Fdonate%3Futm_campaign%3Ddonate%26utm_medium%3Dfooter%26utm_source%3D%252F%26amount-footer%3Dother&amp;controllerId=__privateStripeController36713"
        aria-hidden="true" tabindex="-1" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
    <div class="pac-container pac-logo" style="display: none; width: 479px; position: absolute; left: 468px; top: 1001px;"></div>
</body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20220126/r20190131/zrt_lookup.html" style="display: none;"></iframe>

</html>