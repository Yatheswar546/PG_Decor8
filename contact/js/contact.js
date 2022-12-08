const form = document.querySelector("form"),
SignupBtn = form.querySelector(".form-group input[type='submit']"),
 error = form.querySelector(".error");
 
form.onsubmit = (e) =>{
    e.preventDefault();
}
SignupBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/send-email.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data  = xhr.response
                if(data == "success"){
                    data.classList.add('success');
                    error.textContent = data;
                    error.style.display = "block";
                }else{
                    error.textContent = data;
                    error.style.display = "block";
                    
                }
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}
