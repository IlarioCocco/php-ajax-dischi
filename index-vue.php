<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- style css -->
    <title>php-ajax-dischi Version vue-php</title>
</head>

<body>
    <div id="root">
        <header>
            <div class="select">
                <img class="logo" src="./img/spotify-logo.png" alt="logo">
                <h3 class="spotify">spotify</h3>
                <div class="select">
                    <p class="selectMusic">Genere</p>
                    <select class="selectMusic" name="genre" v-model="genreSelected" @change="genreMusic">
                        <option value="">All</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Metal">Metal</option>
                        <option value="Jazz">Jazz</option>
                    </select>
                </div>
            </div>
        </header>

        <main>
            <div class="box">
                <div class="imaginiAlbum" v-for="(todo, index) in database" :key="index">
                    <img class="album" v-bind:src="todo.poster" alt="foto album">
                    <h3 class="titolo">{{todo.title}}</h3>
                    <p>{{todo.author}}</p>
                    <p>{{todo.year}}</p>
                    <p class="genre">{{todo.genre}}</p>
                </div>
            </div>
        </main>
    </div>

    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- /vue js -->
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- axios -->
    <!-- browser -->
    <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
    <!-- browser -->
    <!-- main js -->
    <script src="js/main.js"></script>
    <!-- main js -->
</body>

</html>