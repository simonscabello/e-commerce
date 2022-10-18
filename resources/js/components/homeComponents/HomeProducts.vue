<template>
    <div class="home-products">
        <div class="home-products__container">
            <div class="home-products__container__redirect">
                <p>
                    NOVIDADES
                </p>
                <Button btn-text="CONFIRA OS LANÇAMENTOS" />
            </div>
            <CardProduct
              v-for="product in products"
              :key="product.id"
              :product-name="product.name"
              :product-price="product.price"
              :brand-name="product.brand"
            />
        </div>
    </div>
</template>

<script>
    import CardProduct from '../common/CardProduct.vue'
    import Button from '../common/Button.vue'

    export default {
        name: "HomeProducts",

        components: {
            CardProduct,
            Button
        },

        data() {
            return {
                products: [
                    {
                        name: 'SUNGLASSES SYMPHONY',
                        price: '254,00',
                        brand: 'White',
                    },
                    {
                        name: 'MASON SUNGLASSES',
                        price: '158,00',
                        brand: 'Green Marl',
                    },
                    {
                        name: 'MASON SUNGLASSES',
                        price: '175,00',
                        brand: 'Green Marl',
                    },
                ]
            }
        },
    }
</script>

<style lang="scss" scoped>
.home-products {
    &__container {
        display: flex;
        align-items: center;
        gap: 1rem;
        justify-content: flex-end;
        margin-right: 1rem;

        &__redirect {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 500;
        }
    }
}
</style>