<template>
    <div class="my-2">
        <div v-for="(form, i) in model[self]" :key="i" class="row mb-3">
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
                            <button class="btn btn-danger btn-block">
                                Delete <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">Form</div>
                </div>
            </div>
        </div>
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
};
</script>

<style></style>
