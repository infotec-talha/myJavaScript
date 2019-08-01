var city0 = "Atlanta";
var city1 = "Baltimore";
var city2 = "Chicago";
var city3 = "Denver";
var city4 = "Los Angeles";
var city5 = "Seattle";
console.log("Welcome to",city2);
var mix = [36,"talha","adnan","rasheed"];
console.log(mix[0],mix[2],mix[1],mix[3]);
///assign value to empty array.
var pets = [];
pets[0] = "dog";
pets[1] = "cat";
pets[2] = "bird";
pets[3] = "lizard";
pets[4] = "fish";
pets[5] = "gerbil";
pets[6] = "snake";
pets.pop();//remove last element from array.
pets.push("horse","parot");//adding last element,s in an array.
pets.shift();//removing first element from an array.
pets.unshift("pigon","hen");//adding element,s in start of an array.
//pets.splice(2, 2, "pig", "duck", "emu");//while removing "cat" and "bird" add "pig", "duck", "emu" b4 lizard.
pets.splice(2, 2,);//without adding new element remove elements from specific position.
//pets.splice(2, 0, "pig", "duck", "emu");//without removing element adding new element.
console.log(JSON.stringify(pets,null,2));
var noPets = pets.slice(2,4);//this method copy element from array from any position u want and return into a new array.
console.log(noPets);
var months = ['Jan', 'March', 'April', 'Jul'];
months.splice(1, 0, 'Feb');
// inserts at 1st index position
console.log(months);
months.splice(4, 0, 'May');
console.log(months);
months.splice(5, 1, "June" );
console.log(months);
var cities = ["Atlanta", "Baltimore", "Chicago", "Denver", "Los Angeles", "Seattle"];
console.log("Welcome to",cities[2]);
console.log(cities[cities.length - 1]);//access last element from array
console.log(cities[0]);//access first element from array
console.log(cities[4]);//access 4th element from array
console.log(cities[2]);//access 2nd element from array
console.log(cities[cities.length - 2]);//access 2nd last element from array
var mammals = new Array("cat","dog","human","whale","seal",50, new Array("ement1"), {prop1:"value1",prop2:"prop2Value"});
console.log("===Stringifyin Mamlas===");
console.log(JSON.stringify(mammals,null,2));

console.log("===mamals loop===");

for (var i = 0; i < mammals. length; i++) {
    console.log(mammals[i]);
}