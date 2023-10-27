
<!-- preloader -->
<!DOCTYPE html>
<html lang="en">
<head>
    <script  type="text/javascript">
   function     sendWhatsAppMessage() {
    const phoneNumber = '+33 6 35 95 36 66';
    const message = "Besoin d'informations sur un produit";
    const apiUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;
    window.open(apiUrl, '_blank');
  }
</script>
</head>
<body>
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
                    <span data-text-preloader="Délices" class="letters-loading">
                    Délices 
                    </span>
                    </br>
                    <span data-text-preloader="De Fatima" class="letters-loading">
                    De Fatima
                    </span>
        </div>
        <p class="text-center">Chargement</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<div class="offset-menu">
    <span id="offset-menu-close-btn"><i class="fal fa-plus"></i></span>
    <div class="offset-menu-wrapper text-white">
        <div class="offset-menu-header">
            <div>
                <a href="index.php"><img style="width: 135px;" src="assets/img/logo.png" alt="logo"></a>
                <div>Vous voulez manger Marocain?
                </div>
            </div>
        </div>
        <div class="offset-menu-section">
            <h3>A propos de nous</h3>
            <p>La cuisine traditionnelle marocaine 100% fait maison</p>
            <a href="contact.php" class="theme-btn  mt-30">Contact</a>
        </div>
        <div class="offset-menu-section">
            <h3>Information</h3>
            <ul>
                <li><span><i class="fal fa-map"></i></span>60 rue Claude Monet - Carrières Sous Poissy 78955</li>
                <li><span><i class="fal fa-phone" onclick="sendWhatsAppMessage()"></i></span>+33 6 35 95 36 66  <a onclick="sendWhatsAppMessage()" ><i class="fab fa-whatsapp"></i></a></li>
                  <li><span><i class="fal fa-envelope"></i></span>delicesdefatima@gmail.com</li>
            </ul>
        </div>
        <div class="offset-menu-footer">
            <div class="offset-menu-social-icon">
            <?php
                            include 'shared/social.php';
                            ?>
            </div>
        </div> <!-- /.offset-menu-footer -->
    </div> <!-- /.offset-menu-wrapper -->
</div> <!-- /.offset-menu -->

<!-- welcome content start from here -->
<header class="header-wrap header-1">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="index.php">
                <img style="width: 120px;" src="assets/img/logo.png" alt="logo">
            </a>
        </div>
        <div class="header-right-area d-flex">
            <div class="main-menu d-none d-xl-block">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                </li>
                <!-- <li><a href="produit.php">Produits</a></li> -->
                <!-- <li><a href="contact.php">Contact</a></li> -->
                </ul>
            </div>
            <div class="header-right-elements d-flex align-items-center justify-content-between">

                <a href="contact.php" class="theme-btn d-none d-sm-block">Contactez-nous</a>
                <a  onclick="sendWhatsAppMessage()" class="devis theme-btn d-none d-sm-block">+33 6 35 95 36 66  <i class="fab fa-whatsapp"></i></a>
                 <a href="#" class="side-menu-toggle d-none d-xl-block"><i class="fal fa-bars"></i></a>
                <div class="d-inline-block ms-4 d-xl-none">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger">
                            <i class="fal fa-bars"></i>
                        </div>
                        <!-- mobile menu - responsive menu  -->
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                <li><a href="index.php">Accueil</a></li>     
                                        <!-- <li><a href="potrie.php">Potrie</a></li>
                                        <li><a href="dinanderie.php">Dinanderie</a></li>
                                        <li><a href="maroquinerie.php">Maroquinerie</a></li>         
                                        
                                        <li><a href="vannerie.php">Vannerie</a></li>
                                        <li><a href="bijoux.php">Joaillerie & Orfèvrerie</a></li>
                                        <li><a href="tissage.php">Tissage des tapis</a></li>   -->
                                </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>                             
                                </ul>
                            </nav>
                            <div class="action-bar">
                                <a href="mailto:biganeway@gmail.com"><i
                                            class="fal fa-envelope"></i>delicesdefatima@gmail.com</a>
                                <a href="tel:123-456-7890"><i class="fal fa-phone"></i>+33 6 35 95 36 66</a>
                                 <a href="contact.php" class="d-btn theme-btn">Contactez nous</a>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="hero-social-elements d-none d-xxl-block">
    <div class="flp-text">
        <p>Suivez nous</p>
    </div>
    <div class="long-arrow"></div>
    <div class="social-link">
        <a href="https://www.facebook.com/profile.php?id=100086796085896" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/Enovwaybusiness/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</div>
</body>

</html>