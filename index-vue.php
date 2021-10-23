<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vue-php</title>
</head>

<body>

    <div id="root">
        <h3>version Vue Js</h3>
        <ul>
            <li v-for="(todo, index) in database" :key="index">
                {{todo.genre}}
            </li>
        </ul>

    </div>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- axios -->
    <!-- browser -->
    <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
    <!-- browser -->
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- /vue js -->
    <script src="js/main.js"></script>
</body>

</html>