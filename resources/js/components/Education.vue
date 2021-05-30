<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="counter">
                    <h2>{{ counter }} / 40</h2>
                </div>
                <div class="col-md-12">
                    <div class="examples-area" v-if="counter < 40">
                        <span>{{ randomExample.text }}</span>
                        =
                        <input
                            type="text"
                            class="example-input"
                            :class="{ 'border-success': right, 'border-danger': wrong }"
                            v-model="userAnswer"
                        />
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
                    <div class="examples-area" v-else>
                        <h1>Отлично!</h1>
                        <span
                        >Правильных ответов:
              <p class="right-answer">{{ rightCounter }}</p></span
                        >
                        <span
                        >Неправильных ответов:
              <p class="wrong-answer">{{ wrongCounter }}</p></span
                        >
                        <span
                        >Пропущенно примеров:
              {{ 40 - (rightCounter + wrongCounter) }}</span
                        >
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
            counter: 1,
            userAnswer: "",
            wrong: false,
            right: false,
            rightCounter: 0,
            wrongCounter: 0,
        };
    },

    mounted() {
        this.update();
    },
    methods: {
        update: function () {
            axios.get("questions").then((response) => {
                this.examples = response.data;
                this.getRandomExample();
            });
        },

        getRandomExample() {
            this.randomExample = this.examples[
                Math.floor(Math.random() * this.examples.length)
                ];
            this.userAnswer = "";
            this.right = false;
            this.wrong = false;
        },

        check() {
            if (this.userAnswer === this.randomExample.answer) {
                this.right = true;
                this.rightCounter++;
            } else {
                this.wrong = true;
                this.wrongCounter++;
            }
        },
    },
};
</script>

<style scoped>
.right-answer {
    color: green;
}

.wrong-answer {
    color: red;
}
</style>
