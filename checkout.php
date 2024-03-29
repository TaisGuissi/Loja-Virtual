<?php
include_once("cabecalho.php");
?>

<?php
include_once("cabecalho-busca.php");
?>

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                </h6>
            </div>
        </div>
        <div class="checkout__form bg-light">
            <h4>Confirmar Dados</h4>
            <form action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nome Completo<span>*</span></p>
                                    <input type="text" name="nome" id="nome">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>CPF<span>*</span></p>
                                    <input type="text" name="cpf" id="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>E-mail<span>*</span></p>
                                    <input type="text" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Celular<span>*</span></p>
                                    <input type="text" name="celular" id="celular">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Rua<span>*</span></p>
                                    <input type="text" name="rua" id="rua">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkout__input">
                                    <p>Número<span>*</span></p>
                                    <input type="text" name="numero" id="numero">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkout__input">
                                    <p>Bairro<span>*</span></p>
                                    <input type="text" name="bairro" id="bairro">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="checkout__input">
                                    <p>Complemento<span>*</span></p>
                                    <input type="text" name="complemento" id="complemento">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkout__input">
                                    <p>CEP<span>*</span></p>
                                    <input type="text" name="cep" id="cep">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="checkout__input">
                                    <p>Cidade<span>*</span></p>
                                    <input type="text" name="cidade" id="cidade">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkout__input">
                                    <p>Estado<span>*</span></p>
                                    <input type="text" name="estado" id="estado">
                                </div>
                            </div>
                        </div>

                        <div class="checkout__input__checkbox">
                            <label for="acc">
                                Create an account?
                                <input type="checkbox" id="acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <p>Create an account by entering the information below. If you are a returning customer
                            please login at the top of the page</p>
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="diff-acc">
                                Ship to a different address?
                                <input type="checkbox" id="diff-acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Sua Compra</h4>
                            <div class="checkout__order__products">Celular <span>Total</span></div>
                            <ul>
                                <li>Vegetable’s Package <span>$75.99</span></li>
                                <li>Fresh Vegetable <span>$151.99</span></li>
                                <li>Organic Bananas <span>$53.99</span></li>
                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                            <div class="checkout__order__total">Total <span>$750.99</span></div>

                            <!-- Button trigger modal -->
                            <button type="button" class="site-btn" data-toggle="modal" data-target="#modalPagamento">
                                FINALIZAR COMPRA
                            </button>


                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Checkout Section End -->
<!-- Modal -->
<div class="modal fade" id="modalPagamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<?php
include_once("rodape.php");
?>

</html>