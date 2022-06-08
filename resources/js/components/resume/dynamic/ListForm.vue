<template>
    <div class="card my-2">
        <div class="card-header">
            <h3>{{ title }}</h3>
        </div>

        <div class="card-body">
            <div
                v-for="(input, i) in target[prop]"
                :key="i"
                class="d-flex mb-4 p-0"
            >
                <div class="col-10 p-0">
                    <input
                        type="text"
                        name="skills"
                        :placeholder="placeholder"
                        class="form-control"
                        v-model="target[prop][i]"
                    />
                </div>
                <div class="col-2">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-danger" @click="remove(i)">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn btn-primary" @click="add()">New List</button>
            </div>
        </div>
    </div>
</template>

<script>
import mixin from "./mixinForm";
export default {
    name: "ListForm",

    mixins: [mixin],

    props: {
        placeholder: {
            type: String,
            default: () => "",
        },
    },

    data() {
        return {
            push: () => "",
        };
    },
};
</script>

<style></style>
