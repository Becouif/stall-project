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
import { ref } from 'vue';
import ProductCard from './ProductCard.vue';

const products = ref([
  {
    name: 'Sample Product 1',
    description: 'This is a short description of the product.',
    image: 'https://via.placeholder.com/150',
    price: 29.99
  },
  {
    name: 'Sample Product 2',
    description: 'This is a short description of the product.',
    image: 'https://via.placeholder.com/150',
    price: 39.99
  },
  {
    name: 'Sample Product 3',
    description: 'This is a short description of the product.',
    image: 'https://via.placeholder.com/150',
    price: 49.99
  },
  {
    name: 'Sample Product 4',
    description: 'This is a short description of the product.',
    image: 'https://via.placeholder.com/150',
    price: 59.99
  },
  {
    name: 'Sample Product 5',
    description: 'This is a short description of the product.',
    image: 'https://via.placeholder.com/150',
    price: 69.99
  },
  {
    name: 'Sample Product 6',
    description: 'This is a short description of the product.',
    image: 'https://via.placeholder.com/150',
    price: 79.99
  }
]);
</script>

<style scoped>


</style>
