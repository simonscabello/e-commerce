<template>
  <div class="finish">
    <h1 class="finish__text">
      FINALIZAR COMPRAR
    </h1>

    <section class="finish__info">
      <section class="finish__info__section">
      <h1 class="finish__info__subtext">
        INDENTIFICAÇÃO
      </h1>

      <div class="finish__info__section__form">
        <p>
          Mayara Pimenta
        </p>

        <p>
          mayaralrpimenta@gmail.com
        </p>
      </div>
    </section>

    <section class="finish__info__section">
      <h1 class="finish__info__subtext">
        ENDEREÇO
      </h1>

      <form action="submit" class="finish__info__section__form">
        <Input
          v-for="(input, index) in inputs"
          :key="input.id"
          :id="input.id"
          :label="input.label"
          :index="index"
          :setText="setText"
        />
      </form>
    </section>

    <section class="finish__info__section">
      <h1 class="finish__info__subtext">
        RESUMO DA COMPRA
      </h1>

      <div class="finish__info__section__address" v-if="showConfirmation">
        <p>
          Seu endereço está correto?
        </p>
          {{ address.street }} {{ address.number }} {{ address.details }}
          <br>
          {{ address.cep }}
          <br>
          {{ address.district }} {{ address.city }} {{ address.state }}
      </div>

      <div>
        <FinalCart />
      </div>
    </section>

    <a class="finish__info__btn">
      <Button btnText="FINALIZAR"/>
    </a>
    </section>
  </div>
</template>

<script>
  import Input from '../components/common/Input.vue'
  import FinalCart from '../components/cartComponents/FinalCart.vue'
  import Button from '../components/common/Button.vue'

  export default {
    name: 'Checkout',
    
    components: {
      Input,
      FinalCart,
      Button
    },

    data() {
      return {
        inputs: [
          {
            id: 1,
            label: 'Rua*',
          },
          {
            id: 2,
            label: 'Nº*',
          },
          {
            id: 3,
            label: 'Complemento',
          },
          {
            id: 4,
            label: 'CEP',
          },
          {
            id: 5,
            label: 'Bairro*',
          },
          {
            id: 6,
            label: 'Cidade*'
          },
          {
            id: 7,
            label: 'Estado*',
          },
        ],
        address: {
          street: '',
          number: '',
          details: '',
          cep: '',
          district: '',
          city: '',
          state: '',
        },
        showConfirmation: false,
      }
    },

    methods: {
      setText(text, index) {
        this.showConfirmation = true;

        if(index === 0) this.address.street = `${text}, `;
        if(index === 1) this.address.number = `Nº ${text}`;
        if(index === 2) this.address.details = `, (${text})`;
        if(index === 3) this.address.cep = text;
        if(index === 4) this.address.district = `${text}, `;
        if(index === 5) this.address.city = `${text} `;
        if(index === 6) this.address.state = `- ${text}.`;

      },
    }
  }
</script>

<style lang="scss" scoped>
.finish {
  margin: 2rem 3rem;

  &__text {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 2rem;
  }

  &__info {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 2rem;

    &__subtext {
      font-size: 1rem;
      font-weight: 700;
    }

    &__section {
      background-color: #f8f8f8;
      padding: 2rem;

      &__form {
        p {
          margin: 0;
          font-size: 0.875rem;
          color: #a5a5a5;
        }
      }

      &__address {
        color: #a5a5a5;
        font-size: 0.75rem;
        padding: 1rem;
        border: 1px solid;
        margin-bottom: 2rem;
        border-radius: 0.25rem;

        p {
          margin: 0;
          font-weight: 700;
        }
      }
    }

    &__btn {
      grid-column: 3;
      text-decoration: none;
    }
  }
}
</style>