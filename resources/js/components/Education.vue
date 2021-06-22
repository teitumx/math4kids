<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="counter">
          <!--            Счётчик попыток-->
          <h2>{{ counter }} / {{ exampleCounter }}</h2>
        </div>
        <div class="col-md-12">
          <!--            Если счётчик меньше 40 показать примеры-->

          <div class="examples-area">
            <div v-if="examplesView === true">
              <span>{{ randomExample.text }}</span>
              =
              <input
                type="text"
                class="example-input"
                :class="{ 'border-success': right, 'border-danger': wrong }"
                v-model="userAnswer"
                v-on:keyup.enter="getRandomExample()"
                ref="answerInput"
              />
              <div class="">
                <button @click="check()" class="btn">Проверить</button>
                  <button
                  class="btn"
                  @click="getRandomExample();"
                >
                  Cледующий пример
                </button>
              </div>
            </div>

            <!--            Когда решены все 40 примеров-->
            <div class="examples-area" v-if="examplesView === false">
              <h1>Отлично!</h1>
              <p class="right-answer"></p>
              <p class="answers">
                Правильных ответов:
                <span class="right-answer">{{ rightCounter }}</span>
              </p>
              <p class="answers">
                Неправильных ответов:
                <span class="wrong-answer">{{ wrongCounter }}</span>
              </p>
              <p class="answers">
                Пропущенно примеров:
                <span>{{
                  exampleCounter - (rightCounter + wrongCounter)
                }}</span>
              </p>
              <!--              Показать фейерверк и ачивку если решены все 40 примеров-->
              <div v-if="exampleCounter - rightCounter < 2">
                <h1>
                  Круто! {{ exampleCounter }} правильных примеров! Получай приз!
                </h1>
                <img src="image/achive/40_right.png" />
                <fireworks></fireworks>
                <div>
                  <button class="btn">Забрать приз</button>
                  <button class="btn" @click="forcesUpdate()">
                    Начать заново
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import Fireworks from "./Fireworks.vue";
export default {
  data() {
    return {
      examples: [], //примеры из базы
      randomExample: [], //рандомный пример из массива examples
      counter: 0, // счётчик попыток
      userAnswer: "", // ответ пользователя
      wrong: false, // если ответ не правильный, то рамка красная
      right: false, // если ответ правильный, то рамка зеленая
      rightCounter: 0, // счётчик правильных ответов
      wrongCounter: 0, // счётчик не правильных ответов
      exampleCounter: null,
      examplesView: true,
    };
  },

  created() {
    this.update(); //загрузка примеров из базы данных при открытии страницы
  },

  mounted() {
    this.focusInput('answerInput');
  },

  methods: {
    // загрузка примеров из базы данных при открытии страницы
    update: function () {
      axios.get("questions").then((response) => {
        this.examples = response.data;
        this.exampleCounter = this.examples.length;
        this.getRandomExample();
      });
    },

    //получить случайный пример
    getRandomExample() {
        this.check();
      if (this.counter === this.exampleCounter) {
        this.examplesView = false;
      } else {
          let randomItem =  Math.floor(Math.random() * this.examples.length);
          this.randomExample = this.examples[randomItem];
          console.log(this.examples[randomItem]['answer']);//подсказка для презентации в консоли
          this.examples.splice(randomItem, 1);
          this.counter++;
      }
      this.userAnswer = "";
      this.right = false;
      this.wrong = false;
      this.focusInput('answerInput');
    },

    //проверить ответ пользователя
    check() {
      if (this.userAnswer === this.randomExample.answer) {
        this.right = true;
        this.rightCounter++;
      } else if (this.userAnswer === '') {
            this.wrong = true;
      } else {
            this.wrong = true;
            this.wrongCounter++;
        }
    },

    // перезагрузка страницы с примерами после вывода результатов
    forcesUpdate() {
      Object.assign(this.$data, this.$options.data.call(this));
      this.update();
    },

    focusInput: function ( inputRef ) {
      // $refs - это объект, который содержит DOM ссылки на инпуты
      this.$refs[inputRef].focus();
    },
  },
  computed: {},
};
</script>

<style scoped>
.right-answer {
  color: green;
  font-size: 25pt;
}

.wrong-answer {
  color: red;
  font-size: 25pt;
}

.answers {
  font-size: 25pt;
}
</style>
