var prefix = 'card';
// console.log(prefix);
// console.log(element);
for(var i = 1; i<5; i++) {
    var element = document.getElementById(`card${i}`);
  if(typeof(element) != 'undefined' && element != null && i % 2 === 0) {
    document.getElementById(`${prefix + i}`).style.backgroundColor = '#E08E45';
    // console.log(i);
  } else if (typeof(element) != 'undefined' && element != null && i % 3 === 0){
    document.getElementById(`${prefix + i}`).style.backgroundColor = '#BDF7B7';
    //   console.log(i);
  } else if (typeof(element) != 'undefined' && element != null) {
    document.getElementById(`${prefix + i}`).style.backgroundColor = '#3943B7';
    //   console.log(i);
  } // else{
//     //   console.log(i);
//   }
} 

// console.log("test");

// g = 1;
// for (var p = 1; p<5; p++){
//     if (p % i === 1){
//         console.log("Yes!");
//     }
// }