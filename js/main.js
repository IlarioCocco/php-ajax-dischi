const app = new Vue({
    el: '#root',
    data: {
    },
    created() {
        axios.get("http://localhost/php-ajax-dischi/api/index.php")
        .then(function(response) {
            console.log(response);
        })
        .catch(function(error) {
            console.log(error);
        })
    }     
});