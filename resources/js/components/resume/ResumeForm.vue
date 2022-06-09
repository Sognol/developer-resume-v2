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

            <tab title="Education" icon="fa-brands fa-docker">
                <dynamic-form
                    title="Education"
                    :model="resume.content"
                    self="education"
                    :schema="schemas.education"
                    :subforms="subforms.education"
                />
            </tab>

            <tab title="Skills" icon="fa-solid fa-code-branch">
                <dynamic-form
                    title="Skill"
                    :model="resume.content"
                    self="skills"
                    :schema="schemas.skills"
                    :subforms="subforms.Skills"
                />
            </tab>

            <tab title="Awards" icon="fa-solid fa-award">
                <dynamic-form
                    title="Award"
                    :model="resume.content"
                    self="awards"
                    :schema="schemas.awards"
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
import education from "./schema/education";
import awards from "./schema/awards";
import skills from "./schema/skills";
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
                awards,
                education,
                skills,
                work,
            },

            subforms: {
                work: [
                    {
                        component: ListForm,
                        props: {
                            title: "Highlights",
                            self: "highlights",
                            placeholder:
                                "Best programmer of the first promotion of LLeego Academy",
                        },
                    },
                ],

                education: [
                    {
                        component: ListForm,
                        props: {
                            title: "Courses",
                            self: "courses",
                            placeholder: "Course to Dockerize applications",
                        },
                    },
                ],

                Skills: [
                    {
                        component: ListForm,
                        props: {
                            title: "Keywords",
                            self: "keywords",
                            placeholder: "Angular 12",
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
