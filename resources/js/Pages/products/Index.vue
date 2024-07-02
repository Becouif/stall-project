<script setup>
import MainLayout from "@/Layouts/MainLayout.vue"
import { Head } from "@inertiajs/vue3"
</script>

<template>
  <div>
    <Head title="product" />
    <MainLayout>
      <!-- my card  -->
      <br>
    </MainLayout>
    <!-- button to create products  -->
    <div class="flex justify-end">
      <a :href="route('product.create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        create product
    </a>

    </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white w-36">
      <img class="w-full" src="" alt="Product Image">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">product name</div>
        <p class="text-gray-700 text-base">product description</p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="text-gray-700 font-bold text-xl">$ price</span>
      </div>
      <div class="px-6 pb-4">
        <a href="" class="block">
          <button @click="buyNow" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Buy Now
          </button>
        </a>
      </div>
    </div>
  </div>
</template>
