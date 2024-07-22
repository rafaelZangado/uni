<template>
    <div class="container">
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">

                <div class="col">
                    <div class="p-3">
                        <router-link to="/gamer">
                            <img src="../assets/img/gamer.jpeg" 
                            class="card-img-top rounded-circle mx-auto mt-3 zoom-effect" 
                            alt="Imagem circular" 
                            style="width: 150px; height: 150px;">
                        </router-link>
                        <div class="card-body text-center">
                            <h5 class="card-title">Gamer</h5>                        
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="p-3">
                        <router-link to="/notebook">
                        <img src="../assets/img/notebook.jpeg" 
                        class="card-img-top rounded-circle mx-auto mt-3 zoom-effect" 
                        alt="Imagem circular" 
                        style="width: 150px; height: 150px;">
                    </router-link>
                        <div class="card-body text-center">
                            <h5 class="card-title">NoteBook</h5>                        
                        </div>
                    </div>
                </div>

                <div class="col">
                    <router-view to="">
                        <div class="p-3">
                            <router-link to="/computador">
                            <img src="../assets/img/computador.jpeg"  
                            class="card-img-top rounded-circle mx-auto mt-3 zoom-effect" 
                            alt="Imagem circular" 
                            style="width: 150px; height: 150px;">
                        </router-link>
                            <div class="card-body text-center">
                                <h5 class="card-title">Computador</h5>                        
                            </div>
                        </div>
                    </router-view>
                </div>

                <div class="col">
                    <div class="p-3">
                        <router-link to="/impressoras">
                            <img src="../assets/img/impressoras.jpeg"  
                            class="card-img-top rounded-circle mx-auto mt-3 zoom-effect" 
                            alt="Imagem circular" 
                            style="width: 150px; height: 150px;">
                        </router-link>
                        <div class="card-body text-center">
                            <h5 class="card-title">Impressoras</h5>                        
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="p-3">
                        <router-link to="/cadeira">
                        <img src="data:image/jpeg;base64,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"  
                        class="card-img-top rounded-circle mx-auto mt-3 zoom-effect" 
                        alt="Imagem circular" 
                        style="width: 150px; height: 150px;">
                    </router-link>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cadeira</h5>                        
                        </div>
                    </div>
                </div>  
                
                <div class="col">
                    <div class="p-3">
                        <router-link to="/console">
                        <img src="../assets/img/console.jpeg"  
                        class="card-img-top rounded-circle mx-auto mt-3 zoom-effect" 
                        alt="Imagem circular" 
                        style="width: 150px; height: 150px; border: 1px solid #ccc;">
                    </router-link>
                        <div class="card-body text-center">
                            <h5 class="card-title">Consoles</h5>                        
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        

        
    </div>
</template>
<script>
export default {
    name:'CatalogoView'
}
</script>
<style scoped>
/* Efeito de zoom */
.zoom-effect {
  transition: transform 0.3s ease-in-out;
}

.zoom-effect:hover {
  transform: scale(1.1);
}

/* Borda fina */
.card-img-top {
  border: 1px solid #ccc;
}
</style>
