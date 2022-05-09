var app = new Vue({

    el:'#app',

    data: {
        albums: [],
    },

    created(){
       axios.get('http://localhost/ESERCIZI/php-ajax-dischi/api/databaseVue.php')
        .then((res) => {
            this.albums = res.data;
            console.log(this.albums)
        }) 
    },

})