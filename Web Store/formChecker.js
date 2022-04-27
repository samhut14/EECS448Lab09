function checker() {
    if(!flowerChecker()) return false;
    if(!userInfo()) return false;
    if(!shipping()) return false;

    return true;
}

function flowerChecker() {
    let orchid = document.querySelector("#orchids").value;
    if(orchid < 0) {
        alert ("Invalid number of Orchids!");
        return false;
    }

    let rose = document.querySelector("#roses").value;
    if(rose < 0) {
        alert ("Invalid number of Roses!");
        return false;
    }

    let tulip = document.querySelector("#tulips").value;
    if(tulip < 0) {
        alert ("Invalid number of Tulips!");
        return false;
    }

    return true;
}

function userInfo() {
    let password = document.querySelector("#password").value;
    if(password == "") {
        alert ("Invalid password!");
        return false;
    }

    return true;
}

function shipping() {
    let standard = document.querySelector("#standard").checked
    let express = document.querySelector("#express").checked
    let overnight = document.querySelector("#overnight").checked

    if(standard || express || overnight) return true;
    else {
        alert ("Shipping option not selected.")
        return false;
    }
}
