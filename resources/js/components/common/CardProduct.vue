<template>
    <div class="card-product">
        <div class="card-product__img" :style="{ 'background-image': `url(${productUrl})` }"/>
        <div class="card-product__info">
            <p class="card-product__info__name">
                {{ productName }}
            </p>
            <p class="card-product__info__price">
                R$ {{ productPrice }}
            </p>
        </div>
        <p class="card-product__brand">
            {{ brandName }}
        </p>
    </div>
</template>

<script>
    export default {
        name: "CardProduct",

        props: {
            productUrl: {
                type: String,
                default: require('../../../assets/img/glasses.jpg')
            },
            productName: {
                type: String,
                default: 'MASON SUNGLASSES'
            },
            productPrice: {
                type: String,
                default: '138,00'
            },
            brandName: {
                type: String,
                default: 'Green Marl'
            },
        }
    }
</script>

<style lang="scss" scoped>
.card-product {
    &__img {
        height: 400px;
        width: 300px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    &__info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 0.5rem;

        &__name {
            font-size: 0.75rem;
            font-weight: 700;
            margin-bottom: 0;
        }

        &__price {
            font-size: 0.75rem;
            margin-bottom: 0;
        }
    }

    &__brand {
        font-size: 0.75rem;
        color: #5e5a5a;
        font-weight: 500;
    }
}
</style>