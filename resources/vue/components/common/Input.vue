<template>
  <div class="input">
    <p class="input__description">
      {{ label }}
    </p>
    <input
      :id="id"
      v-model="text"
      type="text"
      :placeholder="placeholder"
      @change="setText(text, index)"
    >
  </div>
</template>

<script>
export default {
  name: 'input',
  props: {
    label: {
      type: String,
      default: null,
      required: true,
    },
    id: {
      type: Number,
      default: null,
    },
    setText: {
      type: Function,
      default: null,
      required: true,
    },
    index: {
      type: Number,
      default: null,
      required: true,
    },
    placeholder: {
      type: String,
      default: null,
    },
  },
  data() {
    return {
      text: '',
    };
  }
};
</script>

<style lang="scss" scoped>
  .input {
    width: 100%;
    margin-bottom: 1rem;

    &__description {
      font-size: 0.875rem;
      margin-bottom: 5px;
      font-weight: 600;
      color: #a5a5a5;
    }

    input {
      width: 100%;
      height: 2rem;
      border-radius: 0.25rem;
      padding-left: 0.75rem;
      font-size: 0.875rem;
      border: 1px solid #a5a5a5;
    }
  }
</style>