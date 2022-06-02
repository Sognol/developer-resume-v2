<template>
    <b-tabs pills justified v-model="tab">
        <slot></slot>
        <div class="text-center">
            <b-button-group class="w-100">
                <b-button block class="m-0" variant="secondary" @click="tab--">
                    Previous
                </b-button>
                <b-button block class="m-0" variant="primary" @click="tab++">
                    Next
                </b-button>
            </b-button-group>
        </div>
    </b-tabs>
</template>

<script>
import { BTabs, BButton, BButtonGroup } from "bootstrap-vue";
export default {
    name: "Tabs",

    components: {
        BTabs,
        BButton,
        BButtonGroup,
    },

    data() {
        return {
            tab: 0,
        }
    }
};
</script>

<style></style>
