const form = document.querySelector("#register form"),
SignupBtn = form.querySelector(".input input[type='submit']"),
error = form.querySelector(".error");

form.onsubmit = (e) =>{
    e.preventDefault();
}
SignupBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/register.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data  = xhr.response;
                error.textContent = data;
                error.style.display = "block";
                if(data == "Success"){
                    error.classList.add("success");
                }
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}