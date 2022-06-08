<template>
    <div class="my-2">
        <div v-for="(form, i) in target[prop]" :key="i" class="row mb-3">
            <div class="col-sm">
                <div class="card">
                    <div
                        class="card-header d-sm-flex justify-content-sm-between"
                    >
                        <div>
                            <h3>{{ title }} {{ i }}</h3>
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

                    <div class="card-body">
                        <VueFormGenerator
                            v-bind:schema="schema"
                            v-bind:model="target[prop][i]"
                            v-bind:options="{
                                validateAfterLoad: true,
                                validateAfterChanged: true,
                                validateAsync: true,
                            }"
                        />
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="button" @click="add()">
            Add Profile
        </button>
    </div>
</template>

<script>
import mixin from "./mixinForm";
import { component as VueFormGenerator } from "vue-form-generator";

export default {
    name: "DynamicForm",

    mixins: [mixin],

    components: {
        VueFormGenerator,
    },

    props: {
        schema: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style></style>
