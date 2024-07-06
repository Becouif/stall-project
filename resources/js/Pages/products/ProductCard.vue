<template>
  <div class="container mx-auto p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <ProductCard
        v-for="(product, index) in products"
        :key="index"
        :product="product"
      />
    </div>
  </div>
</template>

<script setup>

import ProductCard from './ProductCard.vue';


</script>

<style scoped>


</style>
