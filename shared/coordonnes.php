       
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
       <div class="member-contact-info">
                            <div class="single-contact">
                                <p> Les frais de ports ne sont pas inclus dans les prix.
                                    Pour toute commande contactez nous:</p>
                                <h6><a onclick="sendWhatsAppMessage()" ><i class="fab fa-whatsapp"></i></a> <t>Téléphone</h6>
                                <p>+33 6 35 95 36 66</p>
                            </div>
                            <div class="single-contact">
                                <h6>Email</h6>
                                <p>delicesdefatima@gmail.com</p>
                            </div>
                            <div class="single-contact">
                                <h6>Adresse</h6>
                                <p>60 rue Claude Monet - Carrières Sous Poissy 78955 - France</p>
                            </div>
                        </div>
</body>

</html>