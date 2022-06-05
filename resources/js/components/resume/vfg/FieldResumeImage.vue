<template>
  <div class="d-sm-inline-flex w-100">
      <div>
          <img :src="image">
      </div>
      <div class="align-self-center ml-sm-3 mt-3 mt-sm-0 ">
          <input type="file" @change="onImageChange($event)">
      </div>
  </div>
</template>

<script>
export default {
    name: 'FieldResumeImage',

    data() {
        return {
            reader: new FileReader(),
            image: 'https://raw.githubusercontent.com/antoniosarosi/jsonresume-manager/master/storage/app/public/images/default.png'
        }
    },

    created() {
        this.reader.onload = (e) => {
            this.image = e.target.result;
        }
    },

    methods: {
        onImageChange(e) {
            this.reader.readAsDataURL(e.target.files[0]);
        }
    }
}
</script>

<style scoped>
    img {
        width: 110px;
        height: 110px;
        border-radius: 50%;
    }
</style>