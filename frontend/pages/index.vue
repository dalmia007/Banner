<template>
  <v-row justify="center" align="center">
    <v-col
      v-for="banner in banners"
      :key="banner.id"
      class="d-flex child-flex"
      cols="12"
      md="4"
    >
      <a :href="banner.url">
        <v-img
          v-if="$vuetify.breakpoint.smAndDown"
          :src="banner.image_mobile"
          aspect-ratio="1"
          class="grey lighten-2"
        >
          <template #placeholder>
            <v-row class="fill-height ma-0" align="center" justify="center">
              <v-container color="grey"></v-container>
            </v-row>
          </template>
        </v-img>
        <v-img
          v-if="$vuetify.breakpoint.mdAndUp"
          :src="banner.image_desktop"
          aspect-ratio="1"
          class="grey lighten-2"
        >
          <template #placeholder>
            <v-row class="fill-height ma-0" align="center" justify="center">
              <v-container color="grey"></v-container>
            </v-row>
          </template>
        </v-img>
      </a>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'IndexPage',
  data() {
    return {
      banners: [],
    }
  },
  async fetch() {
    this.banners = await fetch('http://localhost:8000/api/banners').then(
      (res) => res.json()
    )
  },
}
</script>
