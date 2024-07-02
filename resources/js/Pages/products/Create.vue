<template>
  <section>
    <Head title="Create Product" />
    <MainLayout />

    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg">
      <form @submit.prevent="handleForm">
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
          <input
            type="text"
            id="name"
            v-model="form.name"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            placeholder="Product Name"
            required
          />
          <InputError :message="form.errors.name" class="mt-2" />
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
          <textarea
            id="description"
            v-model="form.description"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            placeholder="Product Description"
            rows="4"
            required
          ></textarea>
          <InputError :message="form.errors.description" class="mt-2" />
        </div>
        <div class="mb-4">
          <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
          <input
            type="file"
            id="image"
            @click="handleImageUpload"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required
          />
          <InputError :message="form.errors.image" class="mt-2" />
        </div>
        <div class="mb-4">
          <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
          <input
            type="number"
            id="price"
            v-model="form.price"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            placeholder="Product Price"
            min="0"
            step="0.01"
            required
          />
          <InputError :message="form.errors.price" class="mt-2" />
        </div>
        <div class="flex items-center justify-between">
          <button
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          >
            Submit
          </button>
        </div>
      </form>
    </div>

  </section>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue"
import { Head,useForm  } from "@inertiajs/vue3"
import InputError from "@/Components/InputError.vue"

const form = useForm({
  name: '',
  description: '',
  image: null,
  price: ''
})



const handleImageUpload = (event) => {
  console.log("handleimage function ")
  const file = event.target.files[0] || event.dataTransfer.files;
  form.value.image = file;
};

const handleForm = ()=>{
  form.post(route('product.store'),{onSuccess: ()=> form.reset()})
}
</script>
