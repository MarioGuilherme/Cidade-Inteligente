<div class="galeria">
    <div class="row">
        <div class="col-12 col-md-12">
            <h2>
                Galeria de Projetos
            </h2>
            <hr class="my-4">
        </div>
    </div>
    <div class="row justify-content-center">
        <?php
            if(!empty($projects)){
                foreach ($projects as $key) { require __DIR__ . "/card.php"; } 
            }else{
                echo(NOTHING_FOUND);
            }
        ?>
    </div>
</div>