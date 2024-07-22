<template>
    <div>
        <h1>Filme: {{ filme.original_title }}</h1>
        <p>{{ filme.overview }}</p>
        <img :src="`https://image.tmdb.org/t/p/w500${filme.poster_path}`" alt="Poster do Filme">
        <ul>
            <li v-for="genero in filme.genres" :key="genero.id">{{ genero.name }}</li>
        </ul>
        <p>Popularidade: {{ filme.popularity }}</p>
        <p>Data de lançamento: {{ filme.release_date }}</p>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name:'Filmes',
    data() {
        return {
            filme: {}
        };
    },
    mounted() {
        this.fetchFilme();
    },
    methods: {
        async fetchFilme() {
            try {
                const response = await axios.get('http://localhost/filmes/backend/');
                this.filme = response.data;
            } catch (error) {
                console.error('Erro ao buscar o filme:', error);
            }
        }
    }
};
</script>
