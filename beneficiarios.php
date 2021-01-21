<main >
        <section class="menu">
            <header class="jumbotron j px-auto py-1 mb-0" >
                <nav class="row justify-content-center">
                    <img src="img/logo_favela.jpeg" >                    
                    <a class="menu_img r col-sm-1 bg-warning" href="index.php"></a>
                </nav>
                <nav class="row">   
                    <a class="col-sm-1 btn text-white btn-md b" role="button" href="index.php">Voltar</a>
                </nav> 
                
                
            </header>
        </section>
        <main class=" "  style="display: inline-flex;" >
        <?php foreach ($vendedores as $vendedor) { ?>
            <div class="card w-50 mx-auto mt-4">
                <div class="card-header text-primary">
                <img class="card-img-top " style="width: 14rem;" src="<?= $vendedor ['img'] ?>" alt="Card image cap">
                    <?= $vendedor ['name'] ?>
                </div>

                <div class="card-body">
                    <ol>
                    <li>Idade</li>
                    <li>Contato</li>
                    <li>Material necessario?</li>
                    </ol>

                </div>

                <div class="card-footer  d-flex align-items-center justify-content-end text-info">
                    <a class="btn btn-success" href="https://wa.me/<?= $vendedor['telphone']?>" >
                        <!-- Telefone -->
                        <i class = "fab fa-whatsapp" style="font-size:24px"> </i>                        
                    </a>
                </div>
            </div>
        <?php } ?>

    </main>