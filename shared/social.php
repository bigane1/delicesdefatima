       
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
<div class="social-profiles">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a onclick="sendWhatsAppMessage()" ><i class="fab fa-whatsapp"></i></a>
</div>
</html>