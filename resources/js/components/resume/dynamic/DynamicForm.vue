<template>
    <div class="my-2">
        <div v-for="(form, i) in target[prop]" :key="i" class="row mb-3">
            <div class="col-sm">
                <div class="card">
                    <div
                        class="card-header d-sm-flex justify-content-sm-between"
                    >
                        <div>
                            <h3>
                                {{ title }}
                            </h3>
                        </div>
                        <div>
                            <button
                                class="btn btn-danger btn-block"
                                @click="remove(i)"
                            >
                                Delete <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">Form</div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="button" @click="add()">
            Add Profile
        </button>
    </div>
</template>

<script>
export default {
    name: "DynamicForm",

    props: {
        title: {
            type: String,
            required: true,
        },
        model: {
            type: Object,
            required: true,
        },
        self: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            target: this.model,
            prop: this.self,
        };
    },

    methods: {
        remove(i) {
            const { target, prop } = this.$data;
            if (target[prop]) {
                target[prop].splice(i,1);
            }
        },

        add() {
            const { target, prop } = this.$data;
            if (!target[prop]) {
                target[prop] = [];
            }

            target[prop].push({ test: "test1" });
        },
    },
};
</script>

<style></style>
