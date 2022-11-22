<template>
    <div class="products">
        <ProductsList />
    </div>
</template>

<script>
import ProductsList from '../../components/productsComponents/ProductsList.vue'

export default {
  name: 'Products',

  components: {
    ProductsList,
  }
}
</script>
