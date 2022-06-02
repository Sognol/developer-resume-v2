<template>
    <b-tab title-link-class="p-2">
        <template v-slot:title>
            <div class="d-flex justify-content-center">
                <div>
                    <i :class="icon" style="font-size: 25px;"></i>
                </div>
                <div class="d-none d-md-block ml-2 font-weight-bold">
                    {{ title }}
                </div>
            </div>
        </template>
        <slot></slot>
    </b-tab>
</template>

<script>
import { BTab } from "bootstrap-vue";
export default {
    name: "Tab",

    props: {
        title: {
            type: String,
            require: true,
        },
        icon: {
            type: String,
            require: true,
        },
    },

    components: {
        BTab,
    },
};
</script>

<style></style>
