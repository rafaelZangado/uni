<template>
    <div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://universaltecnologia.com.br/images/BANNER%20NITRO.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://universaltecnologia.com.br/images/BANNER%20NITRO.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://universaltecnologia.com.br/images/BANNER%20NITRO.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr>
    <CatalogoView/>
    <div class="container">
        <div class="row">
            <div class="col-9"><h3>Lançamento</h3></div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        ?????????
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to 
                                additional content. This content is a little bit longer.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">
                            descrição do filme que vou puxar do endpoint TMDB, vamos que vamos ! o importante é aprender mais e mais.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">
                            descrição do filme que vou puxar do endpoint TMDB, vamos que vamos ! o importante é aprender mais e mais.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">
                            descrição do filme que vou puxar do endpoint TMDB, vamos que vamos ! o importante é aprender mais e mais.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">
                            descrição do filme que vou puxar do endpoint TMDB, vamos que vamos ! o importante é aprender mais e mais.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">
                            descrição do filme que vou puxar do endpoint TMDB, vamos que vamos ! o importante é aprender mais e mais.
                        </p>
                    </div>
                    </div>
                </div>           
            </div>
        </div>
 
<br>
    <div class="card mb-13">
        <img src="https://s.zst.com.br/cms-assets/2021/03/free-fire-wallpaper-pc-1-.jpg" 
        style="height: 450px;"
        class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">aaaaa</h5>
                <p class="card-text">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.</p>
                <p class="card-text">
                    <small class="text-body-secondary">
                    zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
                    </small>
                </p>
            </div>
        </div>
    </div>
</template>
<script>
import CatalogoView from './CatalogoView.vue';
export default{
    name:'HomeView',
    components:{
        CatalogoView
    }
}
</script>
