<nav class="navbar">
    <div class="container">
        <div class="navbar-inicio">
            <a href="<?php bloginfo('url'); ?>" title="voltar a página inicial">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-branco.png" alt="logomarca">
            </a>
            <button class="toggle">
                <img src="<?php bloginfo('template_url'); ?>/assets/icons/hamburguer.svg" alt="icone menu">
            </button>
        </div>
        <ul class="navbar-list">
            <li class="navbar-item">
                <a class="navbar-link" href="<?php echo home_url('/'); ?>" title="home">
                    Home
                </a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="<?php echo home_url('/sobre-nos'); ?>" title="sobre nós">
                    Sobre nós
                </a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="<?php echo home_url('/solucoes'); ?>" title="soluções">
                    Soluções
                </a>
                <div class="navbar-dropdown">
                    <div class="navbar-dropdown-titulo">
                        <h1>Nossas soluções</h1>
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/seta-pra-cima.svg" alt="icone subir">
                    </div>
                    <div class="navbar-dropdown-conteudo">
                        <div class="navbar-dropdown-topico">
                            <span class="navbar-dropdown-divisor">Divisão de conformidade legal</span>
                            <ul class="navbar-dropdown-list">
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/solucoes-nr#nr10'); ?>" title="serviços de nr 10">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Serviços de NR 10
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/solucoes-nr#nr33'); ?>" title="serviços de nr 33">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Serviços de NR 33
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/solucoes-nr#nr35'); ?>" title="serviços de nr 35">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Serviços de NR 35
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/solucoes-nr#nr37'); ?>" title="serviços de nr 37">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Serviços de NR 37
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-dropdown-topico">
                            <span class="navbar-dropdown-divisor">Divisão de engenharia</span>
                            <ul class="navbar-dropdown-list">
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/engenharia-clinica'); ?>" title="engenharia clínica">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Engenharia clínica
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/engenharia-naval'); ?>" title="engenharia naval">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Engenharia naval
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/engenharia-eletrica'); ?>" title="engenharia elétrica">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Engenharia elétrica
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-dropdown-topico">
                            <span class="navbar-dropdown-divisor">Divisão de ensaios e calibração</span>
                            <ul class="navbar-dropdown-list">
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/calibracao#pressao'); ?>" title="pressão">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Pressão
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/calibracao#temeperatura-e-umidade'); ?>" title="temperatura e umidade">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Temperatura e umidade
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/calibracao#eletrica-instrumentacao'); ?>" title="elétrica - instrumentação">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Elétrica - Instrumentação
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/engenharia-eletrica/#dieletrico'); ?>" title="elétrica - instrumentação">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Elétrica - Isolação dielétrica
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/engenharia-clinica/'); ?>" title="elétrica - instrumentação">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Instrumentos hospitalares
                                    </a>
                                </li>
                                <li class="navbar-dropdown-item">
                                    <a class="navbar-dropdown-link" href="<?php echo home_url('/calibracao#massa'); ?>" title="massa">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/dropdown.svg" alt="icone dropdown item">Massa
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="<?php echo home_url('/category/noticias'); ?>" title="notícias">
                    Notícias
                </a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="<?php echo home_url('/contatos'); ?>" title="contato">
                    Contato
                </a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="https://drive1.measureoffshore.com.br/index.php/login" target="_blank" title="área do cliente">
                    Área do cliente
                </a>
            </li>
        </ul>
    </div>
</nav>