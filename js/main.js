const app = new Vue({
    el: '#root',
    data: {
        database: null,
        genreSelected: "",
    },
    created() {
        axios.get("http://localhost/php-ajax-dischi/api/index.php")
        .then((response) => {
            this.database = response.data;
        })
        .catch(function(error) {
            console.log(error);
        })
    },
    methods: {
            genreMusicSelected() {
                axios.get("http://localhost/php-ajax-dischi/api/index.php", {
                params: {
                    "genre": this.genreMusic
                }
            })
            .then((response) => {
                this.database = response.data;
            })
            .catch(function(error) {
                console.log(error);
            });
        }
    }    
});