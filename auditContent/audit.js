
// // for loop, while loop, and do while loops.

// for ( let i=0; i<5; i++) {
//     // console.log(i);
//     // document.body.innerHTML += '<p> Good morning :) </p>';
// }

// // for loop has the variable ( let variable be set,  add conditon, add action)

// let ii=0;
// while (ii<5) {
//     // console.log("while:" +ii);
//     ii++;
//     // can also do something like ii+10 if you want it to go up by ten each iteration.
// };

// let result = "";
// let iii = 0;
// do { 
//     iii ++;
//     result+=iii;
// }
// while ( iii<5)
// // console.log("do while:" +iii);

// // do while requires the while to have () if another while is present.  runs all iterations at once, then displays the result rather than each step.

// //------------------Loops with Arrays------------------
// const fruits = [
//     'Apple','Pear','Orange','Tangerine','Kiwi-fruit','Pomegranate','Peach'
// ];
// console.log(fruits);

// for (let i = 0; i<fruits.length; i++){
//     console.log(fruits[i]);
//     fruitStand.innerHTML = fruits.join("<br>"); 
// }

const shoppingList = [];

document.querySelector("#add").addEventListener("click", function() {
    // console.log("huzzah!");
    let item = document.querySelector("#item").value;
    shoppingList.push(item);
    console.log(shoppingList);
    document.querySelector("#item").value="";
    document.querySelector("#list").innerHTML = "";

    // looping through the array
    for (let i=0; i<shoppingList.length; i++){
        document.querySelector("#list").innerHTML += "<li>"+shoppingList[i]+"</li>";

    }
    document.querySelector("#total").innerHTML = shoppingList.length;
})
