/*!
 * Cookie Bar component (https://github.com/kovarp/jquery.cookieBar)
 * Version 1.2.0
 *
 * Copyright 2018 Pavel Kovář - Frontend developer [www.pavelkovar.cz]
 * @license: MIT (https://github.com/kovarp/jquery.cookieBar/blob/master/LICENSE)
 */
if ("undefined" == typeof jQuery) throw new Error("Cookie Bar component requires jQuery");
! function(t) {
    var i, r, n = [];
    n.en = {
        message: "We use cookies to provide our services. By using this site, you accept this.",
        acceptText: "OK",
        infoText: "More information",
        privacyText: "Privacy protection"
    }, n.de = {
        message: "Zur Bereitstellung von Diensten verwenden wir Cookies. Durch die Nutzung dieser Website stimmen Sie zu.",
        acceptText: "OK",
        infoText: "Mehr Informationen",
        privacyText: "Datenschutz"
    }, n.cs = {
        message: "K poskytování služeb využíváme soubory cookie. Používáním tohoto webu s&nbsp;tím souhlasíte.",
        acceptText: "V pořádku",
        infoText: "Více informací",
        privacyText: "Ochrana soukromí"
    }, n.sk = {
        message: "Na poskytovanie služieb využívame súbory cookie. Používaním tohto webu s&nbsp;tým súhlasíte.",
        acceptText: "V poriadku",
        infoText: "Viac informácií",
        privacyText: "Ochrana súkromia"
    }, n.ru = {
        message: "Данный сайт использует для предоставления услуг, персонализации объявлений и анализа трафика печенье. Используя этот сайт, вы соглашаетесь.",
        acceptText: "Я согласен",
        infoText: "Больше информации",
        privacyText: "Конфиденциальность"
    };
    var c = {
        init: function(o) {
            i = "#cookie-bar";
            var e = {
                infoLink: "https://www.google.com/policies/technologies/cookies/",
                infoTarget: "_blank",
                wrapper: "body",
                expireDays: 365,
                style: "top",
                language: t("html").attr("lang") || "en",
                privacy: !1,
                privacyTarget: "_blank",
                privacyContent: null
            };
            r = t.extend(e, o), "accepted" !== c.getCookie("cookies-state") && c.displayBar(), t(document).on("click", i + " .cookie-bar__btn", function(o) {
                o.preventDefault(), c.setCookie("cookies-state", "accepted", r.expireDays), c.hideBar()
            }), t(document).on("click", '[data-toggle="cookieBarPrivacyPopup"]', function(o) {
                o.preventDefault(), c.showPopup()
            }), t(document).on("click", ".cookie-bar-cookies-popup, .cookie-bar-cookies-popup__dialog__close", function(o) {
                c.hidePopup()
            }), t(document).on("click", ".cookie-bar-cookies-popup__dialog", function(o) {
                o.stopPropagation()
            })
        },
        displayBar: function() {

			
			var o = '<button type="button" class="cookie-bar__btn">' + n.en.acceptText + "</button>",
                e = '<a href="' + r.infoLink + '" target="' + r.infoTarget + '" class="cookie-bar__link cookie-bar__link--cookies-info out_link">' + n[r.language].infoText + "</a>",
                i = "";
            r.privacy && ("link" === r.privacy ? i = '<a href="' + r.privacyContent + '" target="' + r.privacyTarget + '" class="cookie-bar__link cookie-bar__link--cookies-info">' + n[r.language].privacyText + "</a>" : "bs_modal" === r.privacy ? i = '<a href="' + r.privacyContent + '" data-toggle="modal" class="cookie-bar__link cookie-bar__link--cookies-info">' + n[r.language].privacyText + "</a>" : "popup" === r.privacy && (c.renderPopup(), i = '<a href="#" data-toggle="cookieBarPrivacyPopup" class="cookie-bar__link cookie-bar__link--cookies-info">' + n[r.language].privacyText + "</a>"));
            var a = '<div id="cookie-bar" class="cookie-bar cookie-bar--' + r.style + '"><div class="cookie-bar__inner"><span class="cookie-bar__message">' + n[r.language].message + '</span><span class="cookie-bar__buttons">' + o + e + i + "</span></div></div>";
            t(r.wrapper).prepend(a)
        },
        hideBar: function() {
            t(i).slideUp()
        },
        renderPopup: function() {
            var o = t('<div id="cookieBarPrivacyPopup" class="cookie-bar-cookies-popup cookie-bar-cookies-popup--hidden"><div class="cookie-bar-cookies-popup__dialog"><button type="button" class="cookie-bar-cookies-popup__dialog__close"></button></div></div>');
            t("body").append(o), t(".cookie-bar-cookies-popup__dialog", o).append(r.privacyContent)
        },
        showPopup: function() {
            t("#cookieBarPrivacyPopup").removeClass("cookie-bar-cookies-popup--hidden")
        },
        hidePopup: function() {
            t("#cookieBarPrivacyPopup").addClass("cookie-bar-cookies-popup--hidden")
        },
        addTranslation: function(o, e) {
            n[o] = e
        },
        setCookie: function(o, e, i) {
            var a = new Date;
            a.setTime(a.getTime() + 24 * i * 60 * 60 * 1e3);
            var t = "expires=" + a.toUTCString();
            document.cookie = o + "=" + e + ";" + t + ";path=/"
        },
        getCookie: function(o) {
            for (var e = o + "=", i = document.cookie.split(";"), a = 0; a < i.length; a++) {
                for (var t = i[a];
                    " " === t.charAt(0);) t = t.substring(1);
                if (0 === t.indexOf(e)) return t.substring(e.length, t.length)
            }
            return ""
        }
    };
    t.cookieBar = function(o) {
        return c[o] ? c[o].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof o && o ? void t.error("Method " + o + " does not exist on Cookie Bar component") : c.init.apply(this, arguments)
    }
}(jQuery);