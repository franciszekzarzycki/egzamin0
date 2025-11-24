let wlaczone = false;
function funckja1(id){
    let el = document.getElementById(id);
    let p1 = document.getElementById('akapit');
    let odstep = document.createElement(p);
    odstep.textContent="-------------------------";
    if (wlaczone==false){

        el.style.class = "po_kliknieciu";
        id=document.createElement(p);
        id.textContent = id;
        
        p1.appendChild(p2);
        wlaczone=true;
    }
    else if(wlaczone==true){

        el.style.class = "";
        p1.removeChild(id);
        wlaczone=false;

    }

}