<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script> <!-- axios -->

    <!-- <link rel="stylesheet" href="style.css"> --> <!-- css -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script> <!-- vue -->

</head>

<style>
    #app{
        text-align: center;
    }
    .container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 20px;
    }
    .box{
        border: 1px solid;
        width: 200px; min-height: 300px;
        padding: 30px;
    }
    img{
        display: block;
        height: 200px;
    }
</style>
<body>

<!-- stampa attraverso axios su API in PHP -->
<!-- Bonus: nella versione a API, aggiungere la possibilita' di filtrare per artista, facendo attenzione a filtrare i dati nella location piu' corretta-->

<div id="app">
    <h1>Album</h1>

    <div class="container">
    
        <!-- Bottoni -->
        <button v-for="button in database" 
                @click="filtro(button.author)">

                {{ button.author }}

        </button>
    
    </div>

    <div class="container">

        <!-- Albums -->
        <div class="box" v-for="album in filterAuthor">

            <img :src=" album.poster ">
            <h3> {{ album.title }} </h3>
            <p> {{ album.author }} </p>
            <p> {{ album.year }} <p>

        </div>

    </div>

</div>

<script src="script.js"></script> <!-- script -->
    
</body>
</html>