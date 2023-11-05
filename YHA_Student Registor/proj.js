let img = document.querySelector('#img');
let p = 0;
img.addEventListener("click", function(){
    
    if(p == 0){
        img.classList.add('img_act');
        p = 1;
    } else{
        img.classList.remove('img_act');
        p = 0;
    }
})