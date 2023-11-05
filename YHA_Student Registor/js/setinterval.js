const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } //else{
        //     entry.target.classList.remove('show');
        // }
    }) 
});

const hiddenElements1 = document.querySelectorAll('.hidden1');
hiddenElements1.forEach((el) => observer.observe(el));

const hiddenElements2 = document.querySelectorAll('.hidden2');
hiddenElements2.forEach((el) => observer.observe(el));

const hiddenElements3 = document.querySelectorAll('.hidden3');
hiddenElements3.forEach((el) => observer.observe(el));

let nums = document.querySelectorAll("#number");
let section = document.querySelector(".section");

let started = false;

window.onscroll = function () {
    if(window.scrollY >= section.offsetTop){
        if(!started){
            nums.forEach((num) => startCount(num));
        }
        started = true;
    }
};


function startCount(el){
    let goal = el.dataset.goal;
    let count = setInterval(() => {
        el.textContent ++;
        if(el.textContent == goal){
            clearInterval(count);
          }
    }, 20);
}
