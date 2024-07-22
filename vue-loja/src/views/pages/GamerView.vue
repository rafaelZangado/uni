<template>
    <div class="container">
      <h1>Gamer</h1>
      <CatalogoView/>
      <div class="mb-4">
        <input 
          type="text" 
          v-model="searchQuery" 
          @input="filtrarProdutos" 
          class="form-control" 
          placeholder="Pesquisar produtos por nome ou código..."
        />
      </div>
      <div class="mb-4">
        <button 
          @click="mostrarTodos" 
          class="btn btn-secondary me-2"
          :class="{ 'btn-loading': isLoading }"
        >
          Exibir Tudo
        </button>
        <button 
          @click="mostrarEstoqueMaiorQueZero" 
          class="btn btn-primary"
          :class="{ 'btn-loading': isLoading }"
        >
          Estoque > 0
        </button>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col" v-for="produto in produtosFiltrados" :key="produto.Codigo">
          <div class="card h-100">
            {{ produto.Codigo }}
            <img 
              src="" 
              class="card-img-top" 
              alt="Imagem do Produto" 
              style="max-height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ produto.Nome }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ formatCurrency(produto.Preco) }}</h6>
              <a href="#" class="btn btn-primary mt-auto">Adicionar ao Carrinho</a>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </template>
  <script>
  import axios from 'axios';
  import CatalogoView from "../CatalogoView.vue";
  
  export default {
    name: 'ProdutosView',
    data() {
      return {
        produtos: [],
        produtosClasse: [],
        produtosFiltrados: [],
        searchQuery: '', // Nova propriedade para armazenar a consulta de busca
        mostrarEstoque: false, // Nova propriedade para controlar o filtro de estoque
        isLoading: false // Nova propriedade para controlar o estado de carregamento
      };
    },
    created() {
      this.listaProdutos();
    },
    components: {
      CatalogoView,
    },
    methods: {
      async listaProdutos() {
        try {
          this.isLoading = true;
          const resposta = await axios.get('produtos.json');
          const classes = await axios.get('classes.json');
          this.produtos = resposta.data.ArrayOfProduto.Produto;
          this.produtosClasse = classes.data.ArrayOfClasses.Classes;
          this.filtrarProdutos();
        } catch (error) {
          console.error('Erro ao carregar produtos:', error);
        } finally {
          this.isLoading = false;
        }
      },
      filtrarProdutos() {
        const ordemClasse = '10041';
        const query = this.searchQuery.toLowerCase();
  
        this.produtosFiltrados = this.produtos.filter(produto => {
          const nomeMatch = produto.Nome.toLowerCase().includes(query);
          const codigoMatch = produto.Codigo.toLowerCase().includes(query);
          const estoqueMatch = !this.mostrarEstoque || parseFloat(produto.Estoque_Atual_Do_Produto) > 0;
          
          return produto.Ordem_Classe === ordemClasse && (nomeMatch || codigoMatch) && estoqueMatch;
        });
      },
      formatCurrency(value) {
        if (!value) return '';
        return parseFloat(value).toLocaleString('pt-BR', {
          style: 'currency',
          currency: 'BRL',
        });
      },
      mostrarTodos() {
        this.isLoading = true;
        this.mostrarEstoque = false;
        this.filtrarProdutos();
        setTimeout(() => this.isLoading = false, 500); // Simulação de carregamento
      },
      mostrarEstoqueMaiorQueZero() {
        this.isLoading = true;
        this.mostrarEstoque = true;
        this.filtrarProdutos();
        setTimeout(() => this.isLoading = false, 500); // Simulação de carregamento
      }
    }
  }
  </script>
  <style scoped>
  /* Estilos para a barra de pesquisa */
  input[type="text"] {
    margin-bottom: 20px;
    padding: 10px;
    font-size: 16px;
  }
  
  /* Efeito de zoom */
  .card-img-top {
    transition: transform 0.3s ease-in-out;
  }
  
  .card-img-top:hover {
    transform: scale(1.1);
  }
  
  /* Estilização dos cards */
  .card {
    border: 1px solid #ddd;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }
  
  .card-title {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
  }
  
  .card-subtitle {
    font-size: 1rem;
    margin-bottom: 1rem;
  }
  
  .btn {
    font-size: 1rem;
    padding: 0.5rem 1rem;
  }
  
  /* Estilos para os botões */
  .mb-4 .btn {
    margin-right: 10px;
  }
  
  /* Efeito de carregamento dos botões */
  .btn-loading {
    position: relative;
  }
  
  .btn-loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 20px;
    border: 2px solid transparent;
    border-top: 2px solid #fff;
    border-radius: 50%;
    animation: spin 0.5s linear infinite;
    transform: translate(-50%, -50%);
  }
  
  @keyframes spin {
    0% {
      transform: translate(-50%, -50%) rotate(0deg);
    }
    100% {
      transform: translate(-50%, -50%) rotate(360deg);
    }
  }
  </style>
  