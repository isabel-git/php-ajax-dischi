var app = new Vue({
    el: '#app',
    data: {
        database : [],
        filterAuthor: []
    },
    mounted () {
       
        this.filtro();
       
    },
    methods: {

        filtro(autore = 'all') {
            console.log(autore);
            
            if (autore === 'all') { //se autore e' uguale a 'all'

                axios
                .get('data.php') //faccio la chiamata axios
                
                .then((res) => {
                    
                    this.database = res.data;
                    this.filterAuthor = this.database;
                    
                });

            } else { //altrimenti

                this.filterAuthor = []; //ripulisco filterAuthor

                for (let index = 0; index < this.database.length; index++) {

                    if (autore === this.database[index].author) { //e se l'argomento autore e' uguale alla key author
                        
                        this.filterAuthor.push(this.database[index]); //lo pusho in filtroAuthor
                    }
                    
                }
            }

            
            
        }
    }
}); 

