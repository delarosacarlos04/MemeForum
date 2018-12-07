//Function that will validate whether something is a NaN
//NaN = 'Not a Number'
const validateString = (x) => {
    if (isNaN(x)){
        return true;
    } 
    else{
        return false;
    }
}


//Ready functions to be exported
module.exports = {
    
    validateString
}
