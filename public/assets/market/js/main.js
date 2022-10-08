valid = true;
function closeMenu(){
    if(valid){
        document.querySelector('#menu').style.display = 'block';
        valid=false;
    }else{
        document.querySelector('#menu').style.display = 'none';
        valid= true;
        
    }
}