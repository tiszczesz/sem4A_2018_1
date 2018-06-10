window.onload = function () {
    document.getElementById("btnTest").disabled = !document.getElementById("upust").checked;
    document.forms[0].onsubmit = function () {
        document.getElementById("btnTest").disabled = !document.getElementById("upust").checked;
        return document.getElementById("upust").checked;
    };
    document.getElementById("upust").onclick = function (){
      document.getElementById("test2").disabled = !this.checked; 
      document.getElementById("btnTest").disabled = !document.getElementById("upust").checked;
    };
   document.getElementById("kalkulacja").onclick = function (){
      var ilosc = parseInt(document.getElementById("ilosc").value);
      if(isNaN(ilosc) || ilosc<0){
          document.getElementById("wynik").innerHTML = "Brak lub błędne dane";
            return ;
      }  
      var upust =  0;   
      if(document.getElementById("upust").checked){
           upust =  0.3;
      }           
     if(ilosc<=40){
         document.getElementById("wynik").innerHTML = "Twoje ogłoszenia będą kosztować: "
                   +((3-upust)*ilosc)+"PLN";         
     }else{
          document.getElementById("wynik").innerHTML = "Twoje ogłoszenia będą kosztować: "
                   +((2-upust)*ilosc)+"PLN"; 
     }
   }; 
};


