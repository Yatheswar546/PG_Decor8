  // search-box open close js code
  let navbar = document.querySelector("body");
  let searchBox = document.querySelector(".search-box i");
  // let searchBoxCancel = document.querySelector(".search-box .bx-x");
  
  searchBox.addEventListener("click", ()=>{
    if(searchBox.classList.contains("bxs-moon")){
      location.href = "../php/dark.php";
    }
    else{
      location.href = "../php/light.php";
    }
  });