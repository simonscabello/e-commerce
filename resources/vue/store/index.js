import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const cart = new Vuex.Store({
  state: {
    cart: [],
    product: {},
    finalPrices: '',
  },

  getters: {
    chosenProduct: (state) => state.product,
    cartLength: (state) => state.cart.length,
    cartContent: (state) => state.cart,
    finalCartPrices: (state) => state.finalPrices,
  },

  actions: {
    productSelected({ commit }, product) {
      commit('SET_PRODUCT', product);
    },

    setCart({ commit }, item) {
      commit('SET_CART', item);
    },

    updateCart({ state }, id) {
      const item = this.state.cart.findIndex(item => item.id === id);
      
      this.state.cart.splice(item, 1);
    },

    finalCartValue({ state, commit }) {
      const prices = this.state.cart.map( el => parseInt(el.price));

      const sumPrices = prices.reduce((partialSum, a) => partialSum + a, 0);

      commit('SET_FINAL_PRICES', sumPrices);
    }
  },

  mutations: {
    SET_PRODUCT(state, payload) {
      state.product = payload;
    },

    SET_CART(state, payload) {
      state.cart.push(payload);
    },

    UPDATE_CART(state, payload) {
      state.cart = payload;
    },

    SET_FINAL_PRICES(state, payload) {
      state.finalPrices = payload;
    }
  }
});

export default cart;