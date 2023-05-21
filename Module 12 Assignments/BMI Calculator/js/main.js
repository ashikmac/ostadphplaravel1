let btn = document.getElementById("calculateBtn") // variable for the button
let personWeight = document.getElementById("weightInput") // variable for weight
let personHeight = document.getElementById("heightInput") // variable for height
let result = document.getElementById("result") // variable for height
btn.addEventListener("click", function(e){ // eventlistener function
    //User clicked the button
    e.preventDefault() // block default form submission
    let pWeightValue = personWeight.value
    let pHeightValue = personHeight.value
    // conditions to check if values are blank or 0
    if((pWeightValue != 0 && pWeightValue != "") && (pHeightValue != 0 && pHeightValue != "")){
        // if they're blank or 0 the program will stop and throw an error
        let BMIformula = pWeightValue / (pHeightValue * pHeightValue)
        result.innerHTML = 'Your BMI is: <strong>' + BMIformula.toFixed(2) + '</strong>'
    }else{
        // show an error if any values are 0 or empty
        result.innerHTML = '<span style="color: red">Please enter correct values!</span>'
    }
})