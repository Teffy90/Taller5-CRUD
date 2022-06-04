var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 500,
    wrap: false
  })


  function validarClaves(){
    var password1= document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;
    if (password1 == password2) {
        alert ("Las dos claves son iguales");
        }
        else {
        alert("Las claves son distintas");
        return true;
        }
}
