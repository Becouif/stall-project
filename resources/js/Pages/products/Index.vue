<script setup>
import MainLayout from "@/Layouts/MainLayout.vue"
import { Head } from "@inertiajs/vue3"
defineProps(['products']);
</script>

<template>
  <div>
    <Head title="product" />
    <MainLayout>
      <!-- my card  -->
      <br>
    </MainLayout>

    <div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <a 
        v-for="product in products" 
        :key="product.id" 
        class="block"
        :href="route('product.show', product.id)"
      >
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white transition-transform transform hover:scale-105">
          <img class="w-full h-48 object-cover" :src="product.image" alt="Product Image">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ product.name }}</div>
            <p class="text-gray-700 text-base">{{ product.description }}</p>
          </div>
          <div class="px-6 pt-4 pb-2 flex justify-between items-center">
            <span class="text-gray-700 font-bold text-xl">₴{{ product.price }}</span>
            <button @click.stop="buyNow(product.id)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Buy Now
            </button>
          </div>
        </div>
      </a>
    </div>
  </div>







  </div>
</template>
