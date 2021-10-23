const app = new Vue({
    el: '#root',
    data: {
        database: null
    },
    created() {
        axios.get("http://localhost/php-ajax-dischi/api/index.php")
        .then((response) => {
            this.database = response.data;
        })
        .catch(function(error) {
            console.log(error);
        })
    }     
});