let courses = document.getElementById('courses');
let courses_menu = document.getElementById('courses_menu');
let i = 0;
courses.addEventListener("mouseover", function(){
    if(i == 0){
        i +=1;
        courses.style.color="#ff2b01";
        courses_menu.style.display="block";
    } else if(i == 1){
        i -= 1;
        courses.style.color="black";
        courses_menu.style.display="none";
    }
}) 

let course2 = document.getElementById("dropbtn");
c = 0;

course2.addEventListener("click", function(){
    let dropdown_content = document.querySelector(".dropdown-content");
    if(c == 1){
        c = 0;
        console.log(c);
        dropdown_content.style.display = "none";
    } else{
        c = 1;
        console.log(c);
        dropdown_content.style.display = "block";
    }
})


 


// let updateCount = () => {
//     let value = parseInt(number.dataset.value);
//     let initialValue = 0;
//     let increaseCount = setInterval(() =>{
//         initialValue +=1;
//         if(initialValue > value){
//             number.textContent = `${value}`;
//             clearInterval(increaseCount);
//             return;
//         }
//         number.textContent = `${initialValue}`;
//     }, 5);
// };
// updateCount();

// let h3 = document.getElementById('h3');
// h3.addEventListener('mousemove', (e) => {
//     let x = e.offsetX;
//     let y = e.offsetY;
//     let h3height = h3.clientHeight;
//     let h3weight = h3.clientWidth;
//     let movex = (x - h3weight/2);
//     let movey = (y = h3height/5);
//     h3.style.transform = `translateX(${movex}px) translateY(${movey}px)`;
// })
// h3.addEventListener('mouseout', (e) => {
//     h3.style.transform = ``;

// })





