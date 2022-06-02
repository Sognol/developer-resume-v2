<template>
  <div>
      <tabs>
          <tab title="User" icon="fa-solid fa-user-astronaut">
              <p>Usuario</p>
          </tab>
          <tab title="Formacion">
              <p>Formacion</p>
          </tab>
      </tabs>
  </div>
</template>

<script>
import Tabs from './tabs/Tabs.vue';
import Tab from './tabs/Tab.vue';
export default {
    name: 'ResumeForm',

    components: {
        Tabs,
        Tab,
    },
};
</script>

<style>

</style>
