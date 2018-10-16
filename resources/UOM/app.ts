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

import importGlobals from "./utils/importGlobals";

importGlobals();

new Vue({
    router,
    store,
    el: "#app",
    render: h => h(Index)
});
