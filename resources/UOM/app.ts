/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

import "./bootstrap";
import Vue from "vue";
import ExampleComponent from "./components/ExampleComponent.vue";
import router from "./router";
import store from "./store";

Vue.component("example", ExampleComponent);

new Vue({
    router,
    store,

    el: "#app"
});
