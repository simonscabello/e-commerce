<template>
    <header class="header">
        <section class="header__logo-container">
            <a href="/">
                <img
                    class="header__logo-container__img"
                    src="../../../assets/img/logo.png"
                >
            </a>
        </section>

        <nav class="header__list-container">
            <div class="header__list-container__links">
                <a href="/produtos">Produtos</a> | 
                <a href="/sobre">Sobre </a>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        name: 'headerComponent'
    }
</script>

<style lang="scss" scoped>
.header {
    background-color:#f8f8f8;
    color: #3a3a3a;

    &__logo-container{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;

        &__img {
            width: 175px;
        }
    }

    &__list-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-bottom: 0.5rem;

        &__links {
            a {
                text-decoration: none;
                color: #3a3a3a;
                font-weight: 500;
            }
        }
    }
}
</style>