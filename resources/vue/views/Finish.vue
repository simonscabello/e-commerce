<template>
  <div class="finish">
    <h1>PEDIDO REALIZADO COM SUCESSO!</h1>
    <p>
      Retornar ao 
      <router-link :to="{ name: 'home' }">
        Início
      </router-link>
    </p>
  </div>
</template>

<script>
  export default {
    name: "Finish"
  }
</script>

<style lang="scss" scoped>
.finish {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 66vh;

  a {
    text-decoration: none;
  }
}
</style>