<template>
  <div class="row">
    <a class="col-md-2 col-sm-2 text-center inicio-icono-container" href="">
      <span class="fa-stack fa-lg fa-4x inicio-icono">
        <i class="fa fa-square fa-stack-2x">
        </i>
        <i :class="['fa',icon,'fa-stack-1x','fa-inverse']">
        </i>
      </span>
      <h2 class="inicio-icono-etiqueta"><slot/></h2>
    </a>
  </div>
</template>

<script lang="ts">
import Vue from "vue";
import Component from "vue-class-component";

@Component({
  props: {
    icon: String
  }
})
export default class GlobalDashButton extends Vue {
  name = "DashButton";
}
</script>
  