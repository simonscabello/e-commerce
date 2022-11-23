import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const cart = new Vuex.Store({
  state: {
    cart: []
  },

  getters: {
    cartLength: (state) => state.cart.length,
    cartContent: (state) => state.cart,
  },

  actions: {
    setCart({ commit }, item) {
      commit('SET_CART', item);
    },

    // updateCart(newCart:array) {
    //   this.cart = newCart;
    // }
  },

  mutations: {
    SET_CART(state, payload) {
      state.cart.push(payload);
    },
  }
});

export default cart;