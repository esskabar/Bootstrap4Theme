'use strict';

(function ($) {

    $(document).ready(function () {

        var BrowserDetect = {
            init: function () {
                this.browser = this.searchString(this.dataBrowser) || "Other";
                this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
            },
            searchString: function (data) {
                for (var i = 0; i < data.length; i++) {
                    var dataString = data[i].string;
                    this.versionSearchString = data[i].subString;

                    if (dataString.indexOf(data[i].subString) !== -1) {
                        return data[i].identity;
                    }
                }
            },
            searchVersion: function (dataString) {
                var index = dataString.indexOf(this.versionSearchString);
                if (index === -1) {
                    return;
                }

                var rv = dataString.indexOf("rv:");
                if (this.versionSearchString === "Trident" && rv !== -1) {
                    return parseFloat(dataString.substring(rv + 3));
                } else {
                    return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
                }
            },

            dataBrowser: [
                {string: navigator.userAgent, subString: "Edge", identity: "MS Edge"},
                {string: navigator.userAgent, subString: "MSIE", identity: "Explorer"},
                {string: navigator.userAgent, subString: "Trident", identity: "Explorer"},
                {string: navigator.userAgent, subString: "Firefox", identity: "Firefox"},
                {string: navigator.userAgent, subString: "Opera", identity: "Opera"},
                {string: navigator.userAgent, subString: "OPR", identity: "Opera"},

                {string: navigator.userAgent, subString: "Chrome", identity: "Chrome"},
                {string: navigator.userAgent, subString: "Safari", identity: "Safari"}
            ]
        };

        BrowserDetect.init();
        //document.write("You are using <b>" + BrowserDetect.browser + "</b> with version <b>" + BrowserDetect.version + "</b>");

        var bv = BrowserDetect.browser;
        if (bv == "Chrome") {
            $("body").addClass("chrome");
        }
        else if (bv == "MS Edge") {
            $("body").addClass("edge");
        }
        else if (bv == "Explorer") {
            $("body").addClass("ie");
        }
        else if (bv == "Firefox") {
            $("body").addClass("Firefox");
        }




        var OSName="Unknown OS";
        if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
        if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
        if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
        if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";

        $("body").addClass(OSName);

    });


})(jQuery);