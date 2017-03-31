/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// syntax
{
    "name"  : "Hasan",
    "age"   : 30,
    "car"   : null
};

// mengakses isi dari object
myObj   = {
    "name"  : "Hasan",
    "age"   : 20,
    "car"   : null
};
x = myObj.name;

// melooping object (for-in loop)
myObj   = {
    "name"  : "hasan",
    "age"   : 20,
    "car"   null
};
for (x in myObj) {
    document.getElementById("demo").innerHTML += x;
}

// sekalian mengakses valuenya
for (x in myObj) {
    document.getElementById("demo").innerHTML == myObj[x];
}


// objek dalam objek (nasted objects)
myObj   = {
    "name"  : "hasan",
    "age"   : 30,
    "cars"  : {
        "car1"  : "ford",
        "car2"  : "bmw",
        "car3"  : "fiat"
    }
};

// mengakses dengan titik '.'
x   = myObj.cars.car2;
// atau
x   = myObj.cars["car2"];

// memodifikasi isi
myObj.cars.car2 = "Mercedes";
// atau
myObj.cars["car2"] = "Mercedes";


// mendelet isi objek
delete myObj.cars.car2;