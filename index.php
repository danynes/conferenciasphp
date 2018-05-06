<?php include_once 'includes/templates/header.php';  ?>

    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
    </section>
    <!--seccion-->


    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
                <source src="videos/video.mp4" type="video/mp4">
                  <source src="videos/video.webm" type="video/webm">
                    <source src="videos/video.ogv" type="video/ogv">
              </video>
        </div>
        <!--contenedor-video-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code" aria-hidden="true"></i>Talleres</a>
                        <a href="#conferencias"><i class="far fa-comment" aria-hidden="true"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university" aria-hidden="true"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 Y JavaScript</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>16:00 hrs.</p>
                            <p><i class="fas fa-calendar-alt" aria-hidden="true"></i>10 de Dic.</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Nestor Suarez Madrigal</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Responsive Web Desing</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>20:00 hrs.</p>
                            <p><i class="fas fa-calendar-alt" aria-hidden="true"></i>10 de Dic.</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Dannia Romero Morales</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <!--cierre talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>como ser Freelancer</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>10:00 hrs.</p>
                            <p><i class="fas fa-calendar-alt" aria-hidden="true"></i>10 de Dic.</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>marco Suarez</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>tecnologia del futuro</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>20:00 hrs.</p>
                            <p><i class="fas fa-calendar-alt" aria-hidden="true"></i>10 de Dic.</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>leonardo morales</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>diseño para moviles</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>17:00 hrs.</p>
                            <p><i class="fas fa-calendar-alt" aria-hidden="true"></i>11 de Dic.</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Nestor Suarez Madrigal</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>aprende a Programar</h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i>10:00 hrs.</p>
                            <p><i class="fas fa-calendar-alt" aria-hidden="true"></i>11 de Dic.</p>
                            <p><i class="fas fa-user" aria-hidden="true"></i>Dannia Romero Morales</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                </div>
                <!-- programa evento-->
            </div>
            <!--conmtenedor-->
        </div>
        <!--contenido del programa-->
    </section>
    <!--seccion programa-->

    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="imagen invitado">
                    <p>Nestor suarez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="imagen invitado">
                    <p>Dannia suarez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="imagen invitado">
                    <p>obed suarez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="imagen invitado">
                    <p>nallely suarez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="imagen invitado">
                    <p>marco suarez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="imagen invitado">
                    <p>marquelia suarez</p>
                </div>
            </li>
        </ul>
    </section>
    <!--Cierre de invitados-->


    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p>Dias</li>
                <li>
                    <p class="numero"></p>Conferencias</li>
            </ul>
        </div>
    </div>
    <!-- cierre de parallaz  con el contador de dias -->


    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Todos los Dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--cierre de venta de pases-->

    <div id="mapa" class="mapa"> </div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en Html5</span></cite> </footer>
                </blockquote>
            </div>
            <!-- Fin del Testimonial-->

            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en Html5</span></cite> </footer>
                </blockquote>
            </div>
            <!-- Fin del Testimonial-->

            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en Html5</span></cite> </footer>
                </blockquote>
            </div>
            <!-- Fin del Testimonial-->
        </div>
    </section>


    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>registrate al newsletter</p>
            <h3>Cunduacan</h3>
            <a href="#" class="button transparente">Resgistro</a>
        </div>
        <!--CONTENIDO -->
    </div>
    <!--NEWSLETTER -->


    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>Dias</li>
                <li>
                    <p id="horas" class="numero"></p>Horas</li>
                <li>
                    <p id="minutos" class="numero"></p>Minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>Segundos</li>
            </ul>
        </div>
    </section>


<?php include_once 'includes/templates/footer.php'; ?>
