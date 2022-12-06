<template>
  <div class="finish">
    <h1 class="finish__text">
      FINALIZAR COMPRAR
    </h1>

    <section class="finish__info">
      <section class="finish__info__section__first-column">
        <section class="finish__info__section id">
          <h1 class="finish__info__subtext">
            INDENTIFICAÇÃO
          </h1>

          <div class="finish__info__section__form">
            <Input
              v-for="(input, index) in ids"
              :key="input.id"
              :id="input.id"
              :label="input.label"
              :index="index"
              :setText="setId"
            />
          </div>
        </section>

        <section class="finish__info__section payment">
          <h1 class="finish__info__subtext">
            PAGAMENTO
          </h1>

          <div class="finish__info__section__form">
            <select v-model="selected" @change="showPayment = true" class="finish__info__section__form--select">
              <option value="">Selecione...</option>
              <option value="Cartão de Crédito">Cartão de Crédito</option>
              <option value="Boleto">Boleto</option>
              <option value="PIX">PIX</option>
            </select>
          </div>
        </section>
      </section>

      <section class="finish__info__section address">
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

      <section class="finish__info__section purchase">
      <h1 class="finish__info__subtext">
        RESUMO DA COMPRA
      </h1>

      <div class="finish__info__section__address" v-if="showIdConfirmation">
        <p>
          Dados Pessoais
        </p>
          {{ id.name }}
          <br>
          {{ id.email }}
      </div>

      <div class="finish__info__section__address" v-if="showPayment">
        <p>
          Forma de pagamento
        </p>
        {{ selected }}
      </div>

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

    <router-link class="finish__info__btn" :to="{ name:'Finish' }">
      <Button btnText="FINALIZAR"/>
    </router-link>
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
        ids: [
          {
            id: 1,
            label: 'Nome*',
          },
          {
            id: 2,
            label: 'E-mail*',
          },
        ],
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
        id: {
          name: '',
          email: '',
        },
        showIdConfirmation: false,
        showConfirmation: false,
        showPayment: false,
        selected: '',
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

      setId(text, index) {
        this.showIdConfirmation = true;

        if(index === 0) this.id.name = `Nome: ${text}`;
        if(index === 1) this.id.email = `E-mail: ${text}`;
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

      &__first-column {
        display: flex;
        flex-direction: column;
        gap: 2rem;

        .id {
          height: 350px;
        }

        .payment {
          grid-row: 2;
          height: 350px;
        }
      }

      &__form {
        p {
          margin: 0;
          font-size: 0.875rem;
          color: #a5a5a5;
        }

        &--select {
          width: 100%;
          height: 2rem;
          border-radius: 0.25rem;
          padding-left: 0.75rem;
          font-size: 0.875rem;
          border: 1px solid #a5a5a5;
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

    .address {
      overflow: auto;
    }
  }
}
</style>