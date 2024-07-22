<template>
  <div class="container">
    <h1>Cadeira</h1>
    <CatalogoView/>
    <div class="mb-4">
      <input 
        type="text" 
        v-model="searchQuery" 
        @input="filtrarProdutos" 
        class="form-control" 
        placeholder="Pesquisar produtos..."
      />
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
      searchQuery: '' // Nova propriedade para armazenar a consulta de busca
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
        const resposta = await axios.get('produtos.json');
        const classes = await axios.get('classes.json');
        this.produtos = resposta.data.ArrayOfProduto.Produto;
        this.produtosClasse = classes.data.ArrayOfClasses.Classes;
        this.filtrarProdutos();
      } catch (error) {
        console.error('Erro ao carregar produtos:', error);
      }
    },
    filtrarProdutos() {
      const ordemClasse = '10019';
      const query = this.searchQuery.toLowerCase();

      this.produtosFiltrados = this.produtos.filter(
        produto => produto.Ordem_Classe === ordemClasse && 
                   produto.Nome.toLowerCase().includes(query)
      );
    },
    formatCurrency(value) {
      if (!value) return '';
      return parseFloat(value).toLocaleString('pt-BR', {
        style: 'currency',
        currency: 'BRL',
      });
    },
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
</style>
