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
            counter: 1,
            userAnswer: "",
            wrong: false,
            right: false,
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
                console.log("правильно");
                this.right = true;
            } else {
                console.log("не правильно");
                this.wrong = true;
            }
        },
    },
};
</script>

<style scoped>
</style>
