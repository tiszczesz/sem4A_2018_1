window.onload = function () {
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


