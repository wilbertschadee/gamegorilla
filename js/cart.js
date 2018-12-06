function addToCart() {

   // var category = document.getElementById('category').value;
    var productid = document.getElementById('product').innerHTML;

    // console.log(productid);

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            //document.getElementById("phpOutput").innerHTML = this.responseText;
            console.log(this.responseText);
       
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");
        }
    };
    
    xmlhttp.open("GET", "php/cart.php?id=" + productid, true);
    xmlhttp.send();

}