<template>
    <div class="container">
      <h1>Produtos</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col" v-for="produto in produtosFiltrados" :key="produto.Codigo">
                <div class="card">
                    {{ produto.Codigo }}
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ produto.Nome }}</h5>
                        <p class="card-text">
                            {{ produto.Preco }}
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
  export default {
    name: 'ProdutosView',
    data() {
      return {
        produtos: [],
        produtosClasse:[],
        produtosFiltrados: []

      }
    },
    created() {
      this.listaProdutos()
    },
    methods: {
      async listaProdutos() {
        try {
          const resposta = await axios.get('produtos.json')
          const classes = await axios.get('classes.json')
          this.produtos = resposta.data.ArrayOfProduto.Produto
          this.produtosClasse = classes.data.ArrayOfClasses.Classes
          this.filtrarProdutos();
        } catch (error) {
          console.error('Erro ao carregar produtos:', error)
        }
      },

      filtrarProdutos(){
        const ordermClasse = '10004';
        this.produtosFiltrados = this.produtos.filter(
          produto => produto.Ordem_Classe === ordermClasse,
        );
      }

    }
  }
  </script>
  
  <style scoped>
  /* Seu estilo aqui */
  </style>
  