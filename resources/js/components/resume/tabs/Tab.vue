<template>
    <BTab title-link-class="p-2">
        <template v-slot:title>
            <div class="d-flex justify-content-center">
                <div>
                    <i :class="icon"></i>
                </div>
                <div>
                    {{ title }}
                </div>
            </div>
        </template>
        <slot></slot>
    </BTab>
</template>

<script>
import { BTab } from "bootstrap-vue";
export default {
    name: "Tab",

    props: {
        title: {
            type: string,
            required: true,
        },

        icon: {
            type: string,
            required: true,
        },
    },

    components: {
        BTab,
    },
};
</script>

<style></style>
