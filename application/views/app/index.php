<div class="col-md-10" style="margin-left:160px;">
    <section id="main-content" class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ">
                        <h3 class="brand-heading">MUSIC GEAR</h3>
                        <p>
                            <strong class="intro-text">Deixe suas engrenagens se encontrarem.</strong><br />
                            Cada sentimento é uma engrenagem que se encaixa em uma série de atitudes.<br />
                            A música funciona como um impulso vital e a vida é como um quebra-cabeças,<br />
                            cada peça vai em seu lugar, assim como uma engrenagem numa máquina.<br />
                            Mas, diferente das máquinas, nós temos sentimentos e eles devem ser ouvidos.<br />
                            <strong><a href="<?php echo base_url(); ?>ouvir">Ouça seus sentimentos</a></strong>
                            e permita que suas engrenagens encontrem seu lugar.
                        </p>
                        <p>
                            <strong><a href="http://fb.com/emersondemetrio" id="me-info">Created by me.</a> </strong>
                        </p>
                    </div>
                </div>
            </section>

            <section id="criar" class="container content-section text-center">
                <div class="row">
                    <div class="col-md-10">
                        <h2>Crie uma GEAR</h2>
                        <form id="criar_gear" method="post" action="<?php echo base_url()."gear/add"; ?>">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h4 class="no-margin">Link do youtube</h4>
                                    <br />
                                    <input name="url" required class="form-control" 
                                    placeholder="youtube.com/watch?v=XaKr98ktoxU">
                                </div>
                                <div class="col-md-4">
                                    <br />
                                    <h4 class="no-margin">Sentimento</h4>
                                    <br />
                                    <input name="tag" required class="form-control" placeholder="Medo, Alegria">
                                </div>
                                <div class="col-md-4">
                                    <br />
                                    <h4 class="no-margin">Estilo</h4>
                                    <br />
                                    <input name="estilo" required class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <br />
                                    <h4 class="no-margin">Seu nome</h4>
                                    <br />
                                    <input name="sender" required class="form-control">
                                </div>
                                <div class="col-md-offset-4 col-md-4 col-md-offset-4">
                                    <br />
                                    <button class="btn btn-default" type="submit">Criar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section id="compartilhar" class="content-section text-center">
                <div class="download-section">
                    <div class="container">
                        <div class="col-lg-8" style="margin:0 auto;">
                            <h2>#Compartilhe! <?php echo $numero; ?>+ músicas!</h2>
                            <p>Mostre aos seus amigos.</p>
                            <div class="col-md-12">
                                <div class="fb-share-button" data-href="http://www.inf.ufsc.br/~emersondemetrio/musicgear" data-type="button_count"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section id="contato" class="content-section text-center">
                <div class="download-section">
                    <div class="container">
                        <div class="col-lg-8" style="margin:0 auto;">
                            <h2>#Compartilhe! <?php echo $numero; ?>+ músicas!</h2>
                            <p>Mostre aos seus amigos.</p>
                            <div class="col-md-12">
                                <div class="fb-share-button" data-href="http://www.inf.ufsc.br/~emersondemetrio/musicgear" data-type="button_count"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <style type="text/css">
        .no-margin{margin: 0 !important;}
        #me-info{
            color:rgba(238, 238, 238, 0.22);
            text-decoration: underline;
        }
        #me-info:hover{
            color: #28C3AB;
        }
        </style>

    </div>