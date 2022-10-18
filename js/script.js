console.log('JS OK!');

const app = new Vue({
  el: '#app',
  data() {
    return {
      albums: [],
      filter: '',
    };
  },
  mounted() {
    this.getAlbums('');
  },
  methods: {
    getAlbums(genre) {
      axios
        .get('/php-dischi/api/albums.php?filter=' + genre)
        .then((response) => {
          console.log(response);
          if (response.status === 200) {
            this.albums = response.data;
          }
        })
        .catch((e) => console.log(e));
    },
  },
});
