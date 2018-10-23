/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

import "./bootstrap";
import Vue from "vue";
import Index from "./views/Index.vue";
import router from "./router";
import store from "./store";
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import "material-design-icons-iconfont/dist/material-design-icons.css";

import importGlobals from "./utils/importGlobals";

importGlobals();
Vue.use(Vuetify);
new Vue({
    router,
    store,
    el: "#app",
    render: h => h(Index)
});
