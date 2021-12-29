<?php
    require __DIR__ . "/../Components/navbar.php";
    require __DIR__ . "/../Components/jumbotron.php";
?>

<div class="container justify-content-center">
    <div class="conteudo">
        <form class="form">
            <div class="row">
                <div class="col-12 col-md-12 title_criar">
                    <h3>
                        Criar projetos
                    </h3>
                    <hr>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>
                            Área do projeto
                        </label>
                        <select class="form-control" name="area">
                            <option value="1">
                                Industrial
                            </option>
                            <option value="2">
                                Rural
                            </option>
                            <option value="3">
                                Urbana
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="my-select">
                            Curso do projeto
                        </label>
                        <select id="my-select" class="form-control" name="course">
                            <option value="1">
                                Análise e Desenvolvimento de Sistemas
                            </option>
                            <option value="2">
                                Gestão Empresarial
                            </option>
                            <option value="3">
                                Gestão da Produção Indústrial
                            </option>
                            <option value="4">
                                Gestão da Qualidade
                            </option>
                            <option value="5">
                                Logística
                            </option>
                            <option value="6">
                                Sistema para Internet
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="my-textarea">
                            Título
                        </label>
                        <input class="form-control" type="text" name="title">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>
                            Data
                        </label>
                        <input class="form-control" type="date" name="date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label for="my-textarea">
                            Descrição
                        </label>
                        <textarea class="form-control" name="description_project" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 d-flex align-items-center justify-content-center flex-column text-center">
                    <div class="form-group">
                        <label>
                            Fotos ou vídeos incluídos
                        </label>
                        <input class="form-control-file" multiple="multiple" type="file" name="medias[]">
                    </div>
                    <div class="row medias-uploaded p-3 justify-content-center"></div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-12 col-md-12">
                <button class="btn btn-new-project btn-block" type="button">
                    Criar Projeto
                </button>
            </div>
        </div>
    </div>
</div>