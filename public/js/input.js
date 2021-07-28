$('input#zero').keyup(function(e){ 
    if(this.value.substring(0,1) == "0")
    {
       this.value = this.value.replace(/^0+/g, '');       	     
    }         
});