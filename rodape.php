 <!-- Footer Section Begin -->
 <footer class="footer spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-6">
                 <div class="footer__about">
                     <div class="footer__about__logo">
                         <a href="./index.html"><img src="img/logo.png" alt=""></a>
                     </div>
                     <ul>
                         <li><?php echo $endereco_loja ?></li>
                         <li>Celular: <?php echo $whatsapp ?></li>
                         <li>E-mail: <?php echo $email ?></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                 <div class="footer__widget">
                     <h6>Principais Links</h6>
                     <ul>
                         <li><a href="contato.php">Contatos</a></li>
                         <li><a href="sobre.php">Sobre</a></li>
                         <li><a href="carrinho.php">Carrinho</a></li>
                         <li><a href="blog.php">Blog</a></li>
                         <li><a href="lista-produtos">Lista de Produtos</a></li>
                         <li><a href="categorias.php">Categorias</a></li>
                     </ul>

                 </div>
             </div>
             <div class="col-lg-4 col-md-12">
                 <div class="footer__widget">
                     <h6>Não possui cadastro?</h6>
                     <p>Insira seu e-mail para se cadastrar en nosso site!</p>
                     <form action="#">
                         <input type="email" placeholder="Insira seu e-mail" required>
                         <button type="submit" class="site-btn">Cadastrar</button>
                     </form>
                     <div class="footer__widget__social">
                         <div class="header__top__right__social">
                             <a target="_blank" title=" Ir para a página do facebook" href="http://www.facebook.com"><i class="fa fa-facebook text-info"></i></a>
                             <a href="http://instagram.com/dado_ou_informacao"><i class="fa fa-instagram text-danger"></i></a>
                             <a href="#"><i class="fa fa-linkedin"></i></a>
                             <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?> "><i class="fa fa-whatsapp text-success"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="footer__copyright">
                         <div class="footer__copyright__text">
                             <p>
                                 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                 Copyright &copy;<script>
                                     document.write(new Date().getFullYear());
                                 </script> Todos os produtos são demonstrativos | Loja Virtual <i class="fa fa-heart" aria-hidden="true"></i> by <a class="text-info" href="https://colorlib.com" target="_blank">Colorlib</a>
                                 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                             </p>
                         </div>
                         <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                     </div>
                 </div>
             </div>
         </div>
 </footer>
 <!-- Footer Section End -->
 <!-- Js Plugins -->
 <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.nice-select.min.js"></script>
 <script src="js/jquery-ui.min.js"></script>
 <script src="js/jquery.slicknav.js"></script>
 <script src="js/mixitup.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/main.js"></script>

 <!-- Mascara javascript-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
 <script src="js/mascara.js"></script>

 </body>