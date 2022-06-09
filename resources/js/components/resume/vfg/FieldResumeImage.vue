<template>
    <div class="d-sm-inline-flex w-100">
        <div>
            <img :src="image" />
        </div>
        <div class="align-self-center ml-sm-3 mt-3 mt-sm-0">
            <input type="file" @change="onImageChange($event)" />
        </div>
    </div>
</template>

<script>
import { abstractField } from "vue-form-generator";
export default {
    name: "FieldResumeImage",

    mixins: [abstractField],

    data() {
        return {
            reader: new FileReader(),
            image: "https://cdn0.iconfinder.com/data/icons/cyber-crime-or-threats-blue-set/120/hacker_cyber_crime-512.png",
        };
    },

    created() {
        this.reader.onload = (e) => {
            const blob = e.target.result;
            this.image = blob;
            console.log(this.model);
            console.log(this.schema);
            this.model[this.schema.model] = blob;
            //resume.content.basic.picture = blob; content.basic es model | schema.model es picture
        };
    },

    methods: {
        onImageChange(e) {
            console.log(e.target.files[0]);
            this.reader.readAsDataURL(e.target.files[0]);
        },
    },
};
</script>

<style scoped>
img {
    width: 110px;
    height: 110px;
    border-radius: 50%;
}
</style>
