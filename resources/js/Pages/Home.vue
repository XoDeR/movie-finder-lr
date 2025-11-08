<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref } from 'vue';

const header = ref("header");

</script>

<template>
  <GuestLayout :title="header">
    <div class="text-black">
      Home
    </div>

  </GuestLayout>
</template>