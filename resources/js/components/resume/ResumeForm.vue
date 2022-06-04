<template>
    <div>
        <tabs>
            <tab title="Basics" icon="fa-solid fa-user-astronaut">
                <VueFormGenerator
                    v-bind:schema="schemas.basics"
                    v-bind:model="resume.content.basics"
                    v-bind:options="options"
                />
            </tab>
        </tabs>
    </div>
</template>

<script>
import { component as VueFormGenerator } from "vue-form-generator";
import "vue-form-generator/dist/vfg.css";
import basics from "./schema/basic";
import Tabs from "./tabs/Tabs.vue";
import Tab from "./tabs/Tab.vue";

export default {
    name: "ResumeForm",

    components: {
        VueFormGenerator,
        Tabs,
        Tab,
    },

    data() {
        return {
            resume: {
                title: "",
                content: {
                    basics: {},
                },
            },

            schemas: {
                basics,
            },

            options: {
                validateAfterLoad: true,
                validateAfterChanged: true,
                validateAsync: true,
            },
        };
    },
};
</script>

<style></style>
