try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");
    require("bootstrap");
} catch (e) {}

window.Vue = require("vue");
window.axios = require("axios");

import home_component from "./components/HomeComponent.vue";

if ($("#app").length) {
    window.vueApp = new Vue({
        el: "#app",
        components: {
            home_component
        }
    });
}

require("./script");
