<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="counter">
          <h2>{{ counter }} / 40</h2>
        </div>
        <div class="col-md-12">
          <div class="examples-area">
            <span>{{ randomExample.text }}</span>
            =
            <input
              type="text"
              class="example-input"
              :class="{ 'border-success': right, 'border-danger': wrong }"
              v-model="userAnswer"
            />
            <div class="">
              <div class="">
                <button @click="check()" class="btn">Проверить</button
                ><button
                  class="btn"
                  @click="
                    getRandomExample();
                    counter++;
                  "
                >
                  Cледующий пример
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
      examples: [],
      randomExample: [],
      is_refresh: false,
      counter: 1,
      userAnswer: "",
      wrong: false,
      right: false,
    };
  },

  computed: {
    numPages() {
      return Math.ceil(this.examples.length / this.perPage);
    },
  },

  mounted() {
    this.update();
  },
  methods: {
    update: function () {
      this.is_refresh = false;
      axios.get("questions").then((response) => {
        this.examples = response.data;
        this.is_refresh = false;
        this.getRandomExample();
      });
    },

    getRandomExample() {
      this.randomExample = this.examples[
        Math.floor(Math.random() * this.examples.length)
      ];
    },

    check() {
      if (this.userAnswer === this.randomExample.answer) {
        console.log("правильно");
        this.right = true;
      } else {
        console.log("не правильно");
        this.wrong = true;
      }
    },

    next(change) {
      this.page = Math.max(1, Math.min(this.numPages, this.page + change));
    },
  },
};
</script>

<style scoped>
</style>
