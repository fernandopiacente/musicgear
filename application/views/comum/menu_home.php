<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#main-content">
                HOME
            </a>

            <div class="dropdown navbar-brand">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">GEARS</a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>gears">Gear</a></li>
                    <li><a href="<?php echo base_url(); ?>estilos">Estilo</a></li>
                </ul>
            </div>
            
            <?php $to = base_url()."ouvir"; ?>
            <a class="navbar-brand" href="<?php echo $to; ?>">
                <i class="fa fa-play-circle"></i>  
                <span class="light">Ouvir</span> agora!
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#main-content"></a>
                </li>
                <li class="page-scroll">
                    <a href="#sobre">Sobre</a>
                </li>
                <li class="page-scroll">
                    <a href="#criar">Criar</a>
                </li>

                <li class="page-scroll">
                    <a href="#compartilhar">Compartilhar</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>