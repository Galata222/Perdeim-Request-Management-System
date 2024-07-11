
  function validate(){
    var content = document.getElementById("jobposition").value;
    var password=document.getElementById("password").value;
    if(content=="Employee" && password=="Employee123"){
      window.open("Employee_Request_page.html","_blank");
    }
   else if(content=="Departement Head" && password=="Departement123" ){
      window.open("Dept_approve.html","_blank");
    }
    else if(content=="Accountant" && password=="Accountant123"){
      window.open("finance_approval.html","_blank");
    }
   else if(content=="College Dean" && password=="College123"){
      window.open("College_approval.html","_blank");
    }
    else if(content=="Vice President" && password=="President123"){
      window.open("Vpresident_approval.html","_blank");
    }
    else{
      alert("Unsuccessful\n Please check your email, password or job position");
    }
  }
//javascript for the slideshow
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



