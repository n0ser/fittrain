let calc_button = document.getElementsByClassName("admin-input")[0];

calc_button.onclick = function() {
    let w = document.getElementById("weight").value;
    let h = document.getElementById("height").value / 100;
    h2 = h * h;
    let result = Math.round(w / h2);
    document.getElementById("result").innerHTML = result;
    document.getElementById('result').removeAttribute('class');
    if(result <= 18.5) {
        document.getElementById('result').classList.toggle("small")
    }
    else if(18.5 < result && result <= 25 ){
        document.getElementById('result').classList.toggle("normal")
    }
    else if(25 < result && result <= 30  ){
        document.getElementById('result').classList.toggle("big")
    }
    else if(30 < result && result <= 35  ){
        document.getElementById('result').classList.toggle("XL")
    }
    else if(35 < result && result <= 40  ){
        document.getElementById('result').classList.toggle("XLL")
    }
    else if(result > 40 ){
        document.getElementById('result').classList.toggle("XLLL")
    }

}