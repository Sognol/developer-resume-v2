<template>
    <div>
        <tabs>
            <tab title="Basics" icon="fa-solid fa-person-dots-from-line">
                <field-resume-image></field-resume-image>
                <VueFormGenerator
                    v-bind:schema="schemas.basics"
                    v-bind:model="resume.content.basics"
                    v-bind:options="options"
                />

                <VueFormGenerator
                    v-bind:schema="schemas.location"
                    v-bind:model="resume.content.basics.location"
                    v-bind:options="options"
                />
            </tab>
        </tabs>
    </div>
</template>

<script>
import { component as VueFormGenerator } from "vue-form-generator";
import "vue-form-generator/dist/vfg.css";
import basics from "./schema/basics/basics.js";
import location from "./schema/basics/location.js";
import Tabs from "./tabs/Tabs.vue";
import Tab from "./tabs/Tab.vue";
import FieldResumeImage from './vfg/FieldResumeImage.vue';

export default {
    name: "ResumeForm",

    components: {
        Tabs,
        Tab,
        VueFormGenerator,
        FieldResumeImage,
    },

    data() {
        return {
            resume: {
                title: "",
                content: {
                    basics: {
                        location: {},
                    },
                },
            },

            schemas: {
                basics,
                location,
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
