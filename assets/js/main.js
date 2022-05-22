var app = new Vue({

    el:'#app',

    data: {
        albums: [],
        genres: [],
        selectedGenre: "",
    },

    created(){
       axios.get('http://localhost/ESERCIZI/php-ajax-dischi/api/databaseVue.php')
        .then((res) => {
            this.albums = res.data;

            // creare un array dei generi (non duplicati) per la select( filtraggio generi )
            this.albums.forEach( (elm )  => {
                if( !this.genres.includes(elm.genre) ){
                    this.genres.push(elm.genre);
                }
            });

        }) 
    },

    methods: {
        // nuova chiamata Api ma sulla base del genere selezionato
        selectGenre(){
            axios.get(`http://localhost/ESERCIZI/php-ajax-dischi/api/databaseVue.php?genre=${this.selectedGenre}`)
        .then((res) => {
            this.albums = res.data;

        }) 
        }
    }

})