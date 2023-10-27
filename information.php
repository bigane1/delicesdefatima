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
<div class="col-lg-4 col-12">
    <div class="contact-us-sidebar mt-5 mt-lg-0">
        <div class="contact-info">
            <h2>CONTACT INFORMATION</h2>
            <div class="single-info">
                <div class="icon">
                    <i class="flaticon-email"></i>
                </div>
                <div class="text">
                    <span>Email</span>

                </div>
                <h5 style="font-size: 14px;">delicesdefatima@gmail.com</h5>
            </div>
            <div class="single-info">
                <div class="icon">
                    <i class="flaticon-phone-call-1"></i>
                </div>
                <div class="text">
                    <span>Appelez Nous</span>
                    <h6>+33 6 35 95 36 66  <a onclick="sendWhatsAppMessage()" ><i class="fab fa-whatsapp"></i></a>
                     </h6>
                     <!-- <h6><a onclick="sendWhatsAppMessage()" ><i class="fab fa-whatsapp"></i></a></h6> -->
                            
                  
                </div>
            </div>
            <div class="single-info">
                <div class="icon">
                    <i class="flaticon-pin"></i>
                </div>
                <div class="text">
                    <span>Adresse</span>

                </div>
                <h6>60 rue Claude Monet - Carrières Sous Poissy 78955 - France</h6>
            </div>
           <!-- <div class="single-info">
                <div class="icon">
                    <i class="flaticon-secure-shield"></i>
                </div>
                <div class="text">
                    <h6> Enlèvement gratuit ferraille </h6>

                </div>

            </div>-->

        </div>

    </div>
</div>
</body>

</html>