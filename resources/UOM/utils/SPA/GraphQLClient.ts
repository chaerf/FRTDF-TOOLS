import Vue from 'vue';
import ApolloClient from 'apollo-boost';
import VueApollo from 'vue-apollo';

export default class GraphQLClient {
  private provider: VueApollo;

  public constructor() {
    this.provider = new VueApollo({
      defaultClient: new ApolloClient({
        uri: __GQL_IRI__
      })
    });
    Vue.use(VueApollo);
  }

  public getProvider() {
    return this.provider;
  }
}
