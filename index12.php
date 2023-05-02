<!DOCTYPE html>
<html class="no-js" dir="ltr" loc="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WhatsApp Web</title>
        <meta name="viewport" content="width=device-width">
        <meta name="google" content="notranslate">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="Envía y recibe rápidamente mensajes de WhatsApp desde tu computadora.">
        <meta name="og:description" content="Envía y recibe rápidamente mensajes de WhatsApp desde tu computadora.">
        <meta name="og:url" content="https://web.whatsapp.com/">
        <meta name="og:title" content="WhatsApp Web">
        <meta name="og:image" content="https://static.facebook.com/images/whatsapp/www/whatsapp-promo.png">
        <link id="favicon" rel="shortcut icon" href="/img/favicon/1x/favicon.png" type="image/png">
        <link rel="apple-touch-icon" sizes="194x194" href="/apple-touch-icon.png" type="image/png">
        <meta name="theme-color" content="#111b21" media="(prefers-color-scheme: dark)">
        <meta name="theme-color" content="#f0f2f5">
        <link id="whatsapp-pwa-manifest-link" rel="manifest" href="/manifest.json" crossorigin="use-credentials">
        <style>
            #initial_startup {
                --startup-background: #f0f2f5;
                --startup-background-rgb: 240,242,245;
                --startup-icon: #bbc5cb;
                --secondary-lighter: #8696a0;
                --primary-title: #41525d;
                --progress-primary: #00c298;
                --progress-background: #e9edef
            }

            .dark #initial_startup {
                --startup-background: #111b21;
                --startup-background-rgb: 17,27,33;
                --startup-icon: #676f73;
                --primary-title: rgba(233, 237, 239, 0.88);
                --secondary-lighter: #667781;
                --progress-primary: #0b846d;
                --progress-background: #233138
            }

            #app,body,html {
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                overflow: hidden
            }

            #app {
                position: absolute;
                top: 0;
                left: 0
            }

            #initial_startup {
                position: fixed;
                top: 0;
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
                user-select: none;
                background-color: var(--startup-background)
            }

            #initial_startup .graphic {
                margin-top: -40px;
                color: var(--startup-icon)
            }

            #initial_startup .graphic .resume-logo {
                transform: translateX(calc(50% - 52px / 2))
            }

            #initial_startup .graphic::after {
                position: relative;
                top: -100%;
                left: calc(50% - 72px * 2 - 72px / 2);
                display: block;
                width: calc(72px * 3);
                height: 100%;
                content: '';
                background: linear-gradient(to right,rgba(var(--startup-background-rgb),.5) 0,rgba(var(--startup-background-rgb),.5) 33.33%,rgba(var(--startup-background-rgb),0) 44.1%,rgba(var(--startup-background-rgb),0) 55.8%,rgba(var(--startup-background-rgb),.5) 66.66%,rgba(var(--startup-background-rgb),.5) 100%);
                opacity: 1;
                animation: shimmer 1.5s linear .6s infinite
            }

            html[dir=rtl] #initial_startup .graphic::after {
                animation-direction: reverse
            }

            @keyframes shimmer {
                from {
                    left: calc(50% - 72px * 2 - 72px / 2)
                }

                to {
                    left: calc(50% - 72px / 2)
                }
            }

            #initial_startup .progress {
                position: relative;
                width: 420px;
                height: 3px;
                margin-top: 40px
            }

            #initial_startup .progress progress {
                vertical-align: top
            }

            #initial_startup .main {
                margin-top: 40px;
                font-size: 17px;
                color: var(--primary-title)
            }

            #initial_startup .secondary {
                margin-top: 12px;
                font-size: 14px;
                color: var(--secondary-lighter)
            }

            #initial_startup .secondary span {
                display: inline-block;
                margin-bottom: 2px;
                vertical-align: middle
            }

            progress {
                -webkit-appearance: none;
                appearance: none;
                width: 100%;
                height: 3px;
                margin: 0;
                color: var(--progress-primary);
                background-color: var(--progress-background);
                border: none
            }

            progress[value]::-webkit-progress-bar {
                background-color: var(--progress-background)
            }

            progress[value]::-moz-progress-bar,progress[value]::-webkit-progress-value {
                background-color: var(--progress-primary);
                transition: width .45s ease
            }
        </style>
        <link href="/stylex-9dfe9f66dfd998056177bf6fc30a5287.css" rel="stylesheet">
        <link href="/app-a0a2f0e77193ae4816ee.css" rel="stylesheet">
    </head>
    <body class="web">
        <script data-binary-transparency-hash-key="inline-js-4b79b6dc91a7ee33373b115991c3eb287ed710cfb6708421b4cab682eddbfcbd">
            try {
                var systemThemeDark, theme = window.localStorage.getItem(""), systemThemeMode = window.localStorage.getItem("system-theme-mode");
                if (("true" === systemThemeMode || !theme) && window.matchMedia) {
                    var systemTheme = window.matchMedia("(prefers-color-scheme: dark)");
                    systemThemeDark = systemTheme && systemTheme.matches
                }
                var darkTheme = '"dark"' === theme || Boolean(systemThemeDark);
                darkTheme && document.body.classList.add("dark")
            } catch (e) {}
        </script>
        <div id="app"></div>
        <div id="hard_expire_time" data-time="1694909254.492"></div>
        <div id="initial_startup">
            <div class="graphic">
                <span>
                    <svg width="250" height="52" xmlns="http://www.w3.org/2000/svg">
                        <path class="resume-logo" d="M37.7 31.2c-.6-.4-3.8-2-4.4-2.1-.6-.2-1-.4-1.4.3l-2 2.5c-.4.4-.8.5-1.5.2-.6-.3-2.7-1-5.1-3.2-2-1.7-3.2-3.8-3.6-4.5-.4-.6 0-1 .3-1.3l1-1.1.6-1.1c.2-.4 0-.8 0-1.1l-2-4.8c-.6-1.3-1.1-1-1.5-1.1h-1.2c-.5 0-1.2.1-1.8.8-.5.6-2.2 2.2-2.2 5.3 0 3.2 2.3 6.3 2.6 6.7.3.4 4.6 7 11 9.7l3.7 1.4c1.5.5 3 .4 4 .2 1.3-.1 3.9-1.5 4.4-3 .5-1.5.5-2.8.4-3-.2-.4-.6-.5-1.3-.8M26 47.2c-3.9 0-7.6-1-11-3l-.7-.4-8.1 2L8.4 38l-.6-.8A21.4 21.4 0 0126 4.4a21.3 21.3 0 0121.4 21.4c0 11.8-9.6 21.4-21.4 21.4M44.2 7.6a25.8 25.8 0 00-40.6 31L0 52l13.7-3.6A25.8 25.8 0 0044.3 7.5" fill="currentColor"></path>
                    </svg>
                </span>
            </div>
            <div class="progress">
                <progress value="0" max="100" dir="ltr"></progress>
            </div>
            <div class="main">WhatsApp</div>
            <div class="secondary">
                <span>
                    <svg width="10" height="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1.6c1.4 0 2.5 1 2.6 2.4v1.5h.2c.5 0 1 .4 1 1V10c0 .6-.5 1-1 1H2.3a1 1 0 01-1.1-1V6.5c0-.6.5-1 1-1h.2V4.2c0-1.4 1-2.5 2.4-2.6H5zm0 1.2c-.7 0-1.3.6-1.3 1.3v1.4h2.6V4.2c0-.7-.4-1.2-1-1.3H5z" fill="currentColor"></path>
                    </svg>
                </span>
                &nbsp;Cifrado de extremo a extremo
            </div>
        </div>
        <link rel="preload" crossorigin="anonymous" as="fetch" href="/binary-transparency-manifest-2.2313.8.json" id="binary-transparency-manifest-preload">
        <scripts src="/locales/es-json.216d36ef3b32ec9b6aea.js">
            <scripts src="/moment_locales/es.fe5b6946b7626f4cb66f.js">
                <script src="/libsignal-protocol-ee5b8ba.min.js"></script>
                <script defer="defer" src="/runtime.04e164eeeab4e7a8e26b.js"></script>
                <script data-binary-transparency-hash-key="inline-js-23c32781b0c7ad45d33056f0bae6c02c337713c0983a7b2978f04dc8ded1182a">
                    /*! Copyright (c) 2023 WhatsApp Inc. All Rights Reserved. */
                    (self.webpackChunkwhatsapp_web_client = self.webpackChunkwhatsapp_web_client || []).push([[5617], {
                        307914: e=>{
                            e.exports = function(e) {
                                return e && e.__esModule ? e : {
                                    default: e
                                }
                            }
                        }
                        ,
                        595318: e=>{
                            e.exports = function(e) {
                                return e && e.__esModule ? e : {
                                    default: e
                                }
                            }
                            ,
                            e.exports.default = e.exports,
                            e.exports.__esModule = !0
                        }
                        ,
                        415227: (e,t)=>{
                            "use strict";
                            Object.defineProperty(t, "__esModule", {
                                value: !0
                            }),
                            t.default = function(e) {
                                const t = new Error(e);
                                if (void 0 === t.stack)
                                    try {
                                        throw t
                                    } catch (e) {}
                                return t
                            }
                        }
                        ,
                        670983: (e,t,n)=>{
                            "use strict";
                            var r = n(307914);
                            Object.defineProperty(t, "__esModule", {
                                value: !0
                            }),
                            t.default = function(e) {
                                let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "?";
                                if (null == e)
                                    throw (0,
                                    o.default)("Unexpected null or undefined: " + t);
                                return e
                            }
                            ;
                            var o = r(n(415227))
                        }
                        ,
                        801506: (e,t)=>{
                            "use strict";
                            Object.defineProperty(t, "__esModule", {
                                value: !0
                            }),
                            t.TICKET_URL = t.CLB_URL = t.CLB_TOKEN = t.CLB_CHECK_URL = void 0,
                            t.CLB_CHECK_URL = "https://crashlogs.whatsapp.net/wa_fls_upload_check",
                            t.CLB_TOKEN = "1063127757113399|745146ffa34413f9dbb5469f5370b7af",
                            t.CLB_URL = "https://crashlogs.whatsapp.net/wa_clb_data",
                            t.TICKET_URL = "https://web.whatsapp.com/web-contact-us"
                        }
                        ,
                        207024: (e,t)=>{
                            "use strict";
                            Object.defineProperty(t, "__esModule", {
                                value: !0
                            }),
                            t.getDistribution = function() {
                                let e = "unknown";
                                return e = "prod",
                                "web_prod"
                            }
                            ,
                            t.getLogUserAgent = function(e) {
                                let t, {appVersion: n, browser: r, device: o} = e;
                                return t = "Web/" + r,
                                `WhatsApp/${n} ${t} Device/${o}`
                            }
                        }
                        ,
                        794858: (e,t,n)=>{
                            "use strict";
                            var r = n(595318)
                              , o = r(n(670983))
                              , a = n(801506)
                              , s = n(207024)
                              , c = r(n(174285))
                              , u = n(425017);
                            function i(e) {
                                !function(e, t) {
                                    const n = window.navigator.userAgent;
                                    if (n === p && e.includes("getElementsByTagName"))
                                        return;
                                    const r = new FormData
                                      , i = new Blob([e],{
                                        type: "text/plain"
                                    });
                                    r.append("from_jid", function() {
                                        if (f)
                                            return f;
                                        try {
                                            f = JSON.parse((0,
                                            o.default)(c.default, "localStorage").getItem(d)),
                                            f && (f = f.replace("-", ""))
                                        } catch (e) {}
                                        if (!f) {
                                            f = "unknown" + Math.floor(1e10 * Math.random());
                                            const e = f;
                                            try {
                                                (0,
                                                o.default)(c.default, "localStorage").setItem(d, JSON.stringify(e))
                                            } catch (e) {}
                                        }
                                        return (0,
                                        o.default)(f, "id")
                                    }()),
                                    r.append("agent", (0,
                                    s.getLogUserAgent)((0,
                                    u.parseUASimple)(n, "2.2313.8"))),
                                    r.append("file", i, "logs.txt"),
                                    r.append("tags", "load");
                                    const l = new XMLHttpRequest
                                      , _ = a.CLB_URL + "?access_token=" + encodeURIComponent(a.CLB_TOKEN);
                                    l.open("POST", _, !0),
                                    l.send(r)
                                }(e)
                            }
                            function l(e) {
                                let {error: t, reason: n, stack: r} = e;
                                const o = (new Date).toISOString();
                                return `${o}: error: ${t}\n${o}: reason for logs: ${n}\n${o}: userAgent: ${window.navigator.userAgent}\n${r}`
                            }
                            null == window.onerror && (window.onerror = function(e, t, n) {
                                const r = t.split("?")[0];
                                return "Uncaught SyntaxError: Unexpected token '<'" === e ? (function(e) {
                                    i(l({
                                        error: "failed to load a js or css bundle",
                                        reason: `failed to load [${e.split("/")[3].replace(/^\//, "")}]`,
                                        stack: ""
                                    }))
                                }(r),
                                !0) : (i(l({
                                    error: e,
                                    reason: `Error at [${r}:${n}]`,
                                    stack: ""
                                })),
                                !1)
                            }
                            );
                            const d = "WAUnknownID"
                              , p = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36";
                            let f
                        }
                        ,
                        425017: (e,t)=>{
                            "use strict";
                            function n(e) {
                                return e.includes("windows") ? "Windows" : e.includes("mac") ? "Mac OS" : e.includes("linux") ? "Linux" : "Unparsed"
                            }
                            Object.defineProperty(t, "__esModule", {
                                value: !0
                            }),
                            t.parseUASimple = function(e, t) {
                                const r = e.toLowerCase();
                                return {
                                    browser: s(r),
                                    device: n(r),
                                    appVersion: t
                                }
                            }
                            ;
                            const r = /(chrome|firefox)\/([\w\.]+)/i
                              , o = /(edge|opr)\/([\w\.]+)/i
                              , a = {
                                chrome: "Chrome",
                                edge: "Edge",
                                opr: "Opera",
                                firefox: "Firefox"
                            };
                            function s(e) {
                                const t = e.match(o) || e.match(r);
                                return null == t ? "Unparsed" : `${a[t[1]]} ${t[2]}`
                            }
                        }
                        ,
                        174285: (e,t)=>{
                            "use strict";
                            let n;
                            Object.defineProperty(t, "__esModule", {
                                value: !0
                            }),
                            t.default = void 0;
                            try {
                                n = window.localStorage
                            } catch (e) {}
                            var r = n;
                            t.default = r
                        }
                    }, e=>{
                        "use strict";
                        e(e.s = 794858)
                    }
                    ])
                </script>
                <script defer="defer" src="/vendor1~app.26ad649364c0cd2a0a46.js"></script>
                <script defer="defer" src="/app.fb6a489ddae1e000677a.js"></script>
            </scripts>
        </scripts>
        <script data-binary-transparency-hash-key="inline-js-9c8cd3d0f4d5af8c7f5cd1c45208edd308bfe472e353a50e4cbacbf6cb58627c">
            (i=>{
                const l = document.getElementById(i);
                l && fetch(l.href).then(b=>b.text()).then(code=>{
                    const script = document.createElement('script');
                    script.id = 'binary-transparency-manifest';
                    script.type = 'application/json';
                    script.innerHTML = code;
                    document.body.append(script);
                }
                );
            }
            )('binary-transparency-manifest-preload');
        </script>
    </body>
</html>