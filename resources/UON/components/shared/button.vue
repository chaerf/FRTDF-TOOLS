<template>
  <button class="btn btn-default" @click="action">
    <slot/>
  </button>
</template>

<script lang="ts">
import Vue from "vue";
import Component from "vue-class-component";

@Component
export default class GlobalButton extends Vue {}
</script>
