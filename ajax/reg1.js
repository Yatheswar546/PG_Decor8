let form = document.querySelector("form"),
SignupBtn = form.querySelector("input[type='submit']"),
error = form.querySelector(".error");
form.onsubmit = (e) =>{
    e.preventDefault();
}
SignupBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/reg1.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data  = xhr.response;
                if(data == "Successfully regsitered"){
                    error.classList.add("success");
                }
                error.innerHTML = data;
                error.style.display = 'block';
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}