<script setup>
import NavBar from '@/Layouts/NavBar.vue';
import { Head } from '@inertiajs/vue3'

defineProps(['cartItems']);
</script>

<template>

  <Head title="Cart" />

  <NavBar />

  <div class="container mx-auto p-4">
  <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="p-6">
      <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
      <table class="min-w-full bg-white">
        <thead>
          <tr >
            <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Product</th>
            <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Quantity</th>
            <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Price</th>
            <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Total</th>
            <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in cartItems" :key="product.id">
            <td class="py-2 px-4 border-b border-gray-200">
              <div class="flex items-center">
                <img class="w-16 h-16 object-cover rounded mr-4" src="https://via.placeholder.com/100" alt="Product Image">
                <span>{{ product.name }}</span>
              </div>
            </td>
            <td class="py-2 px-4 border-b border-gray-200">
              <input type="number" :value="product" min="1" class="w-16 border rounded py-1 px-2 text-center">
            </td>
            <td class="py-2 px-4 border-b border-gray-200">{{ product }}</td>
            <td class="py-2 px-4 border-b border-gray-200">₴100</td>
            <td class="py-2 px-4 border-b border-gray-200">
              <button class="text-red-500 hover:text-red-700">Remove</button>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="mt-6 flex justify-between items-center">
        <span class="text-xl font-bold">Total: ₴200</span>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Checkout
        </button>
      </div>
    </div>
  </div>
</div>
</template>