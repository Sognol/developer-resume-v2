<template>
    <div>
        <tabs>
            <tab title="Basics" icon="fa-solid fa-chalkboard-user">
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

            <tab title="Profiles" icon="fa-solid fa-address-card">
                <dynamic-form
                    title="Profile"
                    :model="resume.content.basics"
                    self="profiles"
                    :schema="schemas.profiles"
                />
            </tab>

            <tab title="Work" icon="fa-solid fa-laptop-code">
                <dynamic-form
                    title="Work"
                    :model="resume.content"
                    self="work"
                    :schema="schemas.work"
                    :subforms="subforms.work"
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
import profiles from "./schema/basics/profiles";
import work from "./schema/work";
import Tabs from "./tabs/Tabs.vue";
import Tab from "./tabs/Tab.vue";
import DynamicForm from "./dynamic/DynamicForm.vue";
import ListForm from "./dynamic/ListForm.vue";
import FieldResumeImage from "./vfg/FieldResumeImage.vue";

export default {
    name: "ResumeForm",

    components: {
        Tabs,
        Tab,
        VueFormGenerator,
        FieldResumeImage,
        DynamicForm,
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
                profiles,
                work,
            },

            subforms: {
                work: [
                    {
                        component: ListForm,
                        props: {
                            title: "Highlights",
                            self: "highlights",
                            placeholder: "Best programmer of the first promotion of LLeego Academy",
                        },
                    },
                ],
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
