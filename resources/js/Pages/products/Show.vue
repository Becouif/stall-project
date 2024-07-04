<script setup>
import MainLayout from "@/Layouts/MainLayout.vue"
import { Head } from '@inertiajs/vue3'

defineProps(['product']);
console.log
</script>

<template>
  <Head :title="product.name" />
  <MainLayout>
  </MainLayout>

  <div class="container mx-auto p-4">
    <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
      <div class="md:flex">
        <div class="md:flex-shrink-0">
          <img class="h-96 w-full object-cover md:h-full md:w-96" :src="product.image" alt="Product Image">
        </div>
        <div class="p-30 m-">
          <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ product.category }}</div>
          <h1 class="block mt-1 text-lg leading-tight font-medium text-black">{{ product.name }}</h1>
          <p class="mt-2 text-gray-500">{{ product.description }}</p>
          <div class="mt-4 flex items-center">
            <span class="text-2xl font-bold text-gray-900">₴{{ product.price }}</span>
            <button @click="buyNow(product.id)" class="ml-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Buy Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>



<style scoped>

</style>