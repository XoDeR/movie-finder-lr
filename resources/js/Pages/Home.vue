<script setup>
//import AppLayout from '@/Layouts/AppLayout.vue';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref } from 'vue';

const header = ref("header");

</script>

<template>
  <GuestLayout :title="header">
    <!-- <AppLayout :title="header"> -->
    <div class="text-black">
      Home
    </div>

  </GuestLayout>
  <!-- </AppLayout> -->
</template>