<template>
  <v-content>
    <v-container>Hello world</v-container>
  </v-content>
</template>

<script lang="ts">
import Vue from "vue";
import Component from "vue-class-component";
import ExampleComponent from "../components/ExampleComponent.vue";

@Component({
  components: {
    excomponent: ExampleComponent
  }
})
export default class Index extends Vue {}
</script>
