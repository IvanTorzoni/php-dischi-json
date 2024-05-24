// Creo lo script per fare la chiamata
const { createApp } = Vue;

createApp({
    data() {
        return {
          // Creo array di appoggio per i dischi
            arrayDischi:[],
        }
    },
    // Faccio la chiamata
    created(){
        axios
        .get("http://localhost/boolean/php-dischi-json/server.php")
        .then((resp) => {
        this.arrayDischi = resp.data.results;
        });
    },
    }).mount("#app");