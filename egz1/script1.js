window.onload = function (){
    document.forms[0].onsubmit = function (){
        var nazwa = document.getElementById("nazwa");
        var cena = document.getElementById("cena");
        var nazwaOK = ValidateName(nazwa);
        var cenaOK = ValidatePrice(cena);
        return  nazwaOK && cenaOK;
    };
};
function ValidateName(elem){
    var value = elem.value;
    var next = elem.nextElementSibling;
    var wzorzec  = /^[a-zęąńłóśćźż]{2,}$/;
    if(wzorzec.test(value)){
        next.innerHTML = "";
        elem.style.border = "solid 1px grey";
        return true;
    }else{
        next.innerHTML = "Błędna nazwa";
        elem.style.border = "solid 1px red";
        return false;
    }
}
function ValidatePrice(elem){
    var value = parseFloat(elem.value);
    var next = elem.nextElementSibling;
    if(!isNaN(value) && value>0){
        next.innerHTML = "";
        elem.style.border = "solid 1px grey";
        return true;
    }else{
        next.innerHTML = "Błędna cena";
        elem.style.border = "solid 1px red";
        return false;
    }
}


