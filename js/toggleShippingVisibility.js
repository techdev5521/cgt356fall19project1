/**
 * Toggles shipping information based on input#shippingVisibility
 */

document.getElementById("shippingForm").style.visibility = "hidden";
document.getElementById("shippingButton").style.visibility = "hidden";
document.getElementById("billingButton").style.visibility = "visible";

function toggleShippingVisibility(){

    if(document.getElementById("shippingVisibility").checked === true){
        document.getElementById("shippingForm").style.visibility = "visible";
        document.getElementById("shippingButton").style.visibility = "visible";
        document.getElementById("billingButton").style.visibility = "hidden";
    }else{
        document.getElementById("shippingForm").style.visibility = "hidden";
        document.getElementById("shippingButton").style.visibility = "hidden";
        document.getElementById("billingButton").style.visibility = "visible";
    }
}