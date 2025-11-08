<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';

const header = ref("header");

</script>

<template>
  <AppLayout :title="header">
    <div class="text-black">
      Dashboard
    </div>
  </AppLayout>
</template>