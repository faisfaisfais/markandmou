//Pengiriman lewat WA
document.getElementById("whatsappForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission
  
  // Get input values
  var nama = document.getElementsByName("nama")[0].value;
  var pesan = document.getElementsByName("pesan")[0].value;
  var nomorWa = "6285325223747"; // Nomor WhatsApp tujuan
  
  // Format pesan untuk WhatsApp
  var whatsappMessage = "Halo " + nama + ",\n\n" + pesan;

  // Encode pesan
  var encodedMessage = encodeURIComponent(whatsappMessage);

  var whatsappUrl = "https://api.whatsapp.com/send?phone=" + nomorWa + "&text=" + encodedMessage;

  // Open WhatsApp URL in a new tab
  window.open(whatsappUrl, '_blank');
});
