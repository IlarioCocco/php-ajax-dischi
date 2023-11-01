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
            alert("OK FUNZIONA, DEBUG DI CONTROLLO");
            console.log(response.data);
        })
        .catch(function(error) {
            console.log(error);
            alert("errore");
        })
    },

    methods: {
            genreMusic() {
                axios.get("http://localhost/php-ajax-dischi/api/index.php", {
                params: {
                    "genre": this.genreSelected
                }
            })
            .then((response) => {
                this.database = response.data;
                alert("OK FUNZIONA, DEBUG DI CONTROLLO");
            })
            .catch(function(error) {
                console.log(error);
                //alert("errore");
            });
        }
    }    
});