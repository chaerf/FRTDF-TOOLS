<template>
  <button class="btn btn-default" @click="action">
    <slot/>
  </button>
</template>

<script lang="ts">
import Vue from 'vue';
export default Vue.extend({
  props: {
    action: {
      type: Function,
      default: () => {}
    }
  }
});
</script>
