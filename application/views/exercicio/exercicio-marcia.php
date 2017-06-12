



<section id="exercicio">
    <div class="container" >

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">EXERCÍCIO <?php echo $exercicio['exer_id'] ?></h3>
                </div>
                <div class="panel-body">
                    <div class="well col-xs-10">
                        <h3 class=""><?php echo $exercicio['exer_desc'] ?></h3>
                    </div>            

                    <div class="col-xs-2" >
                        <button type="button" class="btn btn-info buttonExercicio" data-toggle="modal" data-target="#ModalDica">Dica</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Universo</h3>
                </div>
                <div class="panel-body">


                    <div class="col-xs-10">

                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2s.gif' ?>" alt="">

                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3s.gif' ?>" alt="">

                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4s.gif' ?>" alt="">

                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5s.gif' ?>" alt="">

                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6c.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6d.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6h.gif' ?>" alt="">
                        <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6s.gif' ?>" alt="">


                    </div>


                    <div class="col-xs-2" >
                        <button type="button" class="btn btn-info " data-toggle="modal" data-target="#ModalUniverso">Universo</button>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Construção da solução</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-8" style="padding: 10px;">

                        <h3 class="">Reservado para resolução de estágio</h3>
                        <button type="button" class="btn btn-default buttonNvExercicio">Novo Estágio</button>
                    </div>
                </div>

            </div>
        </div>




    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="ModalDica" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dica</h4>
            </div>
            <div class="modal-body">
                <p><?php echo $exercicio['exer_dica'] ?></p>
            </div>       
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal">Fechar</button>
        </div>
    </div>
</div>

<div id="ModalTutorial" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Tutorial</h3>
            </div>
            <div class="modal-body">
                <h4>Como resolver um exercício?</h4>
                <div class="container-fluid">
                    <div class="row">
                        <div class="content-section-a">  
                            <div class="title-tutorial-item"><b>Exercício</b></div>
                            <div class="col-sm-2 hidden-xs">
                                <div class="tutorial-item-image">
                                    <img class="img-circle img-responsive" src="<?= base_url()?>user_guide/img/tutorial/lapis.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    Primeiro, analise o exercício. Atente-se ao seu Universo (conjunto de elementos), e que ele está pedindo para ser encontrado.
                                    Você conseguirá assim pensar quais são as restrições que precisam ser consideradas para chegar ao resultado do exercício.
                                    Se for necessário, clique em "Ver Universo" para ver todo o conjunto de elementos.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-b"> 
                            <div class="title-tutorial-item"><b>Dica</b></div>
                            <div class="col-sm-10 ">
                                <p>
                                    Receba uma pista para resolver o exercício clicando no botão "Dica".
                                </p>
                            </div>
                            <div class="col-sm-2  hidden-xs">
                                <div class="tutorial-item-image">
                                    <img class="img-circle img-responsive" src="<?= base_url()?>user_guide/img/tutorial/lampada.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-a"> 
                            <div class="title-tutorial-item"><b>Estágios</b></div>
                            <div class="col-sm-2  hidden-xs">
                                <div class="tutorial-item-image">
                                    <img class="img-circle img-responsive" src="<?= base_url()?>user_guide/img/tutorial/estagios.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    O iCombH5 aplica a metodologia "dividir para conquistar" para a resolução de exercícios.
                                    Isso significa que você terá que identificar cada restrição do exercício, e construir um estágio para resolvê-lo.
                                    No final, você irá ter uma lista de estágios construídos e deverá uni-los para chegar a uma solução final (resposta).
                                    Mas atenção! Poderá haver exercícios que, com apenas um estágio, chegue-se a solução final.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-b"> 
                            <div class="title-tutorial-item"><b>Como criar estágios?</b></div>
                            <div class="col-sm-10">
                                <p>
                                    Clicando em "Novo Estágio". Uma vez clicado, um "formulário" se abrirá, e através dele dele você encontrará
                                    os elementos que atendem as restrições do exercício. Após preencher o formulário, você precisará validá-lo,
                                    para certificar-se que o montou corretamente.
                                    Estando validado, você o verá na "Lista de Estágios", e poderá excluí-lo caso deseje.
                                    Você conseguirá também visualizar os subconjuntos do Universo, que atendem as restrições de cada estágio.
                                </p>
                            </div>
                            <div class="col-sm-2  hidden-xs">
                                <div class="tutorial-item-image">
                                    <img src="<?= base_url()?>user_guide/img/tutorial/interrogacao.png" class="img-responsive img-circle" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-section-a"> 
                            <div class="title-tutorial-item"><b>Terminar o exercício</b></div>
                            <div class="col-sm-2 hidden-xs">
                                <div class="tutorial-item-image">
                                    <img src="<?= base_url()?>user_guide/img/tutorial/exclamacao.png" class="img-responsive img-circle" alt="">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    Tendo construído todos os estágios, você precisa  indicar a maneira como os estágios se relacionam: multiplicando ou somando.
                                    Feito isso, você deverá clicar em "Terminar" para submeter sua resposta para a correção. Na seguinte tela,
                                    você verá a resposta do exercício, o registros da sua construção de estágio e o tempo que você levou para realizar a tarefa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalFormulas" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Fórmulas</h3>
            </div>
            <div class="modal-body">
                <?php foreach ($formula as $row): ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url($row['form_img']) ?>" alt="">
                        </div>
                        <div class="col-md-1" id="text-formula">
                            <p><?= $row['form_expr'] ?></p>
                        </div>
                        <div class="col-md-2" id="text-formula">
                            <p><?= $row['form_nome'] ?></p>
                        </div>
                        <div class="col-md-5">
                            <p><?= $row['form_expl'] ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
            <div class="modal-  ">
                <button class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="ModalUniverso" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Universo</h3>
            </div>
            <div class="modal-body">

                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2c.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2d.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2h.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '2s.gif' ?>" alt="">

                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3c.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3d.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3h.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '3s.gif' ?>" alt="">

                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4c.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4d.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4h.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '4s.gif' ?>" alt="">

                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5c.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5d.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5h.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '5s.gif' ?>" alt="">

                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6c.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6d.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6h.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '6s.gif' ?>" alt="">        

                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '7c.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '7d.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '7h.gif' ?>" alt="">
                <img src="<?= base_url() . 'user_guide/universo/baralho/original-imagens/' . '7s.gif' ?>" alt="">
            </div>
            <div class="modal-  ">
                <button class="btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


