const backArrow = document.querySelector("#back-arrow");
const forwardArrow = document.querySelector("#forward-arrow");
const testimonialSection = document.querySelector(".testimonials"); 
const reviewLocation = document.querySelector(".reviewLocation");

let testimonials = []; 

testimonials[0] = "Dawn's patient and calming demeanour combined with her extensive knowledge of the human body gained through decades of employment in the NHS has helped her work miracles where both pain and flexibility are concerned!";
testimonials[1] = "What a fabulous group of old people coming together to exercise"; 
testimonials[2] = "Test paragraph"; 
testimonials[3] = "Test paragraph"; 
testimonials[4] = "Test paragraph"; 

function createPara(){

    let i = Math.floor(Math.random () * testimonials.length); 
        console.log(i); 

    let newTest = document.createElement("p"); 
    newTest.textContent = `"` + testimonials[i] + `"`;

    reviewLocation.appendChild(newTest);

    forwardArrow.addEventListener("click", () =>{
        reviewLocation.removeChild(newTest); 
    })

    backArrow.addEventListener("click", () => {
        reviewLocation.removeChild(newTest);

})}

createPara();
    
forwardArrow.addEventListener("click", createPara);
backArrow.addEventListener("click", createPara); 


