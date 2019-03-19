//slice method
var intro = "my name is abdul mannan and my father name is talha rasheed";
console.log(intro.slice(0));
console.log(intro.slice(0 , 10));
console.log(intro.slice(18 , 27));
console.log(intro.slice( -20, -8));
console.log(intro.slice(-2));
//substr method
var car = "lamburgini";
console.log(car.substr(5 , 9));
console.log(car.substr(1));
//substring method
var str = "youtube";
console.log(str.substring(0 , 1));
console.log(str.substring(1 , 6));
console.log(str.substring(3 , 7));
console.log(str.substring(0 , 7));
//split method
var name = "i m talha and my father name is abdul rasheed";
var res = name.split(" ");
console.log(res);
console.log(res[8]);
var chars = name.split('');
console.log(chars);
console.log(chars[20]);
//replace method
console.log(name.replace("talha","adnan"))