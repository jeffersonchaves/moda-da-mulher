<?php require __DIR__ . "/header.php"; ?>

<main class="produto">


    <div class="container">

        <nav class="mt-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camiseta Manga Comprida</li>
            </ol>
        </nav>

        <!-- Imagem e descrição -->
        <div class="row">
            <div class="col-md-7">
                <img src="assets/images/produtos/details/foto-carrinho-camiseta-manga-comprida.jpg" class="w-100" alt="">
            </div>
            <div class="col-md-5">

                <h1>Camiseta de manga comprida</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, cum incidunt iste harum atque necessitatibus dolorem quasi autem! Aut id fugiat est culpa saepe voluptatum recusandae eveniet sit molestiae atque?</p>

                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <h5 class="preco mt-3">R$ 79,90</h5>
                <span>Em até 12x sem juros</span>

                <div class="comprar mt-4">

                    <form action="">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                        <button type="submit" class="btn btn-success w-100 mt-4">comprar</button>

                    </form>

                </div>

            </div>
        </div>
        <!-- /.imagem e descricao -->

        <div class="comentarios row">
            <div class="col">

                <div class="fb-comments" 
                    data-href="https://www.seusite.com/sua-pagina" 
                    data-width="100%" 
                    data-numposts="5">
                </div>

            </div>
        </div>
        
    </div>
</main>

<script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v19.0">
</script>

<?php require __DIR__ . "/footer.php"; ?>