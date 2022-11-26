import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const cart = new Vuex.Store({
  state: {
    cart: [],
    product: {},
  },

  getters: {
    chosenProduct: (state) => state.product,
    cartLength: (state) => state.cart.length,
    cartContent: (state) => state.cart,
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
  }
});

export default cart;