<template>
    <div class="card my-2">
        <div class="card-header">
            <h3>{{ title }}</h3>
        </div>

        <div class="card-body">
            <div v-for="(_, index) in model[self]" :key="index">
                <div class="d-flex mb-4 p-0">
                    <div class="col-10 p-0">
                        <input
                            type="text"
                            required
                            autofocus
                            class="form-control"
                            :placeholder="placeholder"
                            v-model="model[self][index]"
                        />
                    </div>
                    <div class="col-2">
                        <div class="d-flex justify-content-end">
                            <button
                                class="btn btn-danger"
                                @click="remove(index)"
                            >
                                Delete
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn btn-primary" @click="add()">Add New</button>
            </div>
        </div>
    </div>
</template>

<script>
import mixin from './mixinForm';
export default {
    name: 'ListForm',

    mixins: [mixin],

    data() {
        return {
            push: () => '',
        }
    }
}
</script>

<style></style>
