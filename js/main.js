  // search-box open close js code
  let navbar = document.querySelector("body");
  let searchBox = document.querySelector(".search-box i");
  // let searchBoxCancel = document.querySelector(".search-box .bx-x");
  
  searchBox.addEventListener("click", ()=>{
    if(searchBox.classList.contains("bxs-moon")){
      location.href = "./php/dark.php";
    }
    else{
      location.href = "./php/light.php";
    }
  });
  
  // sidebar open close js code
  let navLinks = document.querySelector(".nav-links");
  let navLinks1 = document.querySelector(".nav-links .sub-menu.one");
  let navLinks2 = document.querySelector(".nav-links .sub-menu.two");
  let menuOpenBtn = document.querySelector(".navbar .bx-menu");
  let menuCloseBtn = document.querySelector(".nav-links .bx-x");
  menuOpenBtn.onclick = function() {
  navLinks.style.left = "0";
  }
  menuCloseBtn.onclick = function() {
  navLinks.style.left = "-100%";
  }
  
  
  // sidebar submenu open close js code
  let htmlcssArrowone = document.querySelector(".htmlcss-arrow.one");
  htmlcssArrowone.onclick = function() {
   navLinks1.classList.toggle("show1");
  }
  let htmlcssArrowtwo = document.querySelector(".htmlcss-arrow.two");
  htmlcssArrowtwo.onclick = function() {
   navLinks2.classList.toggle("show1");
  }
  let moreArrow = document.querySelector(".more-arrow");
  moreArrow.onclick = function() {
   navLinks.classList.toggle("show2");
  }

  const toTop =  document.querySelector(".to-top");

  window.addEventListener("scroll", () =>{
      if(window.pageYOffset > 100){
        toTop.classList.add("active");
      }
      else{
        toTop.classList.remove("active");
      }
  })