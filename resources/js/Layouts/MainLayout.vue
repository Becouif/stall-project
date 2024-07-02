<script setup>
import { ref } from 'vue';

const isMenuOpen = ref(false);

function toggleMenu() {
  isMenuOpen.value = !isMenuOpen.value;
}
</script>


<template>
  <section id="navbar">
    <nav class="bg-gray-800 p-4">
      <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-bold">
          MyWebsite
        </a>
        <div class="hidden md:flex space-x-4">
          <a href="#" class="text-gray-300 hover:text-white">Home</a>
          <a :href="route('product.index')" class="text-gray-300 hover:text-white">Products</a>
          <a href="#" class="text-gray-300 hover:text-white">Cart</a>
          <a href="#" class="text-gray-300 hover:text-white">Contact</a>
        </div>
        <div class="md:hidden">
          <button @click="toggleMenu" class="text-gray-300 hover:text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </div>
      <div v-show="isMenuOpen" class="md:hidden">
        <a href="#" class="block text-gray-300 hover:text-white px-4 py-2">Home</a>
        <a href="#" class="block text-gray-300 hover:text-white px-4 py-2">Products</a>
        <a href="#" class="block text-gray-300 hover:text-white px-4 py-2">Cart</a>
        <a href="#" class="block text-gray-300 hover:text-white px-4 py-2">Contact</a>
      </div>
    </nav>
    <!-- end of nav bar  -->

                <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                      <slot name="header" />
                  </div>
            </header>

</section>
</template>