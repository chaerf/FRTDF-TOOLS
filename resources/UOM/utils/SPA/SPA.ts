import Vue, { VueConstructor } from 'vue';
import Router, { RouterOptions } from 'vue-router';

import importGlobals from './importGlobals';
import GraphQLClient from '@/Tapir/utils/SPA/GraphQLClient';
import Vuex, { StoreOptions, Store } from 'vuex';

interface SPAOptions {
  rootComponent: VueConstructor;
  DOMSelector?: string;
  routerOptions?: RouterOptions;
  storeOptions?: StoreOptions<any>;
}

export default class SPA {
  private DOMSelector: string;
  private rootComponent: VueConstructor;
  private gqlClient: GraphQLClient;
  private router?: Router;
  private store?: Store<any>;

  constructor(options: SPAOptions) {
    this.rootComponent = options.rootComponent;
    this.DOMSelector = options.DOMSelector || '#app';

    const { routerOptions, storeOptions } = options;
    if (routerOptions) {
      this.router = new Router(routerOptions);
      Vue.use(Router);
    }

    if (storeOptions) {
      Vue.use(Vuex);
      this.store = new Store(storeOptions);
    }

    this.gqlClient = new GraphQLClient();
  }

  public load() {
    importGlobals();

    new Vue({
      apolloProvider: this.gqlClient.getProvider(),
      router: this.router,
      render: h => h(this.rootComponent),
      store: this.store
    }).$mount(this.DOMSelector);
  }

  public getRouter() {
    return this.router;
  }

  public getStore() {
    return this.store;
  }
}
