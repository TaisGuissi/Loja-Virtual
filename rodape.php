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
                         <input type="email" placeholder="Insira seu e-mail"required>
                         <button type="submit" class="site-btn">Cadastrar</button>
                     </form>
                     <div class="footer__widget__social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-instagram"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-pinterest"></i></a>
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
                             </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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