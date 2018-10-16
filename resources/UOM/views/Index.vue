<template>
  <div>
    <h1>This is your index page</h1>
    <excomponent></excomponent>
  </div>
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