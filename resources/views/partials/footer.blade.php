<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <div id="section-contacto" class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <h3 class="center">CONTÁCTANOS</h3>
                    <form method="POST" action="{{ url('/form') }}" id="contactForm">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="text-sm">NOMBRE</label>
                                    <input type="text" class="form-control" name="name" id="name" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="text-sm">E-MAIL</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="text-sm">ASUNTO</label>
                                    <input type="text" class="form-control" name="subject" id="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="text-sm">COMENTARIOS</label>
                                    <textarea type="text" class="form-control" rows="4" name="message" id="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-left">
                                <button type="submit" class="btn btn-warning text-sm">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                    <div class="row" id="formSuccess">
                        <h1 class="text-center text-lg">Su mensaje ha sido enviado, muchas gracias!</h1>
                    </div>

                    <div class="row" id="formFail">
                        <h1 class="text-center text-lg">Error al enviar mensaje</h1>
                    </div>
                </div>
            </div>
        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col-sm-6 blah">
                <p>Artículos Elásticos Campeón</p>
                <p>Todos los derechos reservados &copy;</p>
                <div class="copyright-links"><a href="#">Aviso de Privacidad</a></div>
            </div>

            <div class="col-sm-6 tright blah">
                
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->