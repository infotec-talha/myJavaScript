//one way of creating objecs
var car = {color:"black",engine:"automatic", run: function(){console.log("Car is running")}};
console.log(typeof car);
// accessing properties of object
console.log(car.color);
console.log(car.engine);
// adding a fucntion to object
 var vehicle = {color:"green",run: function (){console.log("Vehicle is running")}};
 // using object functions
 vehicle.run();// will print running
 //acessing  obects properties
 console.log(vehicle.color);// should print green since we se the color property to be green in line 8
 var cat = new Object();
 console.log(cat);
 var animal = new Object(); // Create an instance of the object
 animal.name = "monkey"; // Assign properties to the object
 animal.color = "brown";
animal.display = consoleObject;
function consoleObject(){
    console.log("The animal is a " + animal.name);
    console.log("It is  " + animal.color);
    }
animal.display();
animal.color = "black";
animal.display();
/////////////

//var animal = {name:"monkey",color:"brown"};
//animal.display = consoleObject; // Function name is assigned as a property of the object
function consoleObject(){
    console.log("The animal is a " + animal.name);
    console.log("It is  " + animal.color);
    }
    animal.display();
    animal.name = "dog";  
    animal.display();

//consoleObject();
//animal.consoleObject(); //this does not work because consoleobject function is not animal's function.
vehicle.run();
car.run();

function objectPass(obj){

    console.log(obj);
console.log(obj.color);
}

objectPass(car);
objectPass(vehicle);
//we can also access the object properties with bracket .

console.log("=====================");
function createObjectEx1(){                                  
var myCar = new Object();
myCar['make'] = 'Ford';
myCar['model'] = 'Mustang';
myCar['year'] = 1969;
console.log(myCar.make,myCar.model,myCar.year);
}
createObjectEx1();
/////////////////////////////
function createObjectEx2(){
var myObj = new Object(),
    str = 'myString', 
    rand = Math.random(),
    obj = new Object();
    obj.prop1 = "ghi";
    obj.prop2 = "lmn";
myObj.type              = 'Dot syntax';
myObj['date created']   = 'String with space';
myObj[str]              = 'String value';
myObj['randNum']             =  rand;

myObj['child']              = obj;
console.log(JSON.stringify(myObj, null, 4));
}
createObjectEx2();
/////////////
function createObjectEx3(){
var propertyName = 'make';
myCar[propertyName] = 'Ford';
propertyName = 'model';
myCar[propertyName] = 'Mustang';
console.log(myCar.make,myCar.model);
}
///accessing object properties with function arguments.
function Cars(make, model, year,tire) {
    this.make = make;
    this.model = model;
    this.year = year;
    this.tire = tire;
	
  }
var mycar = new Cars('Eagle', 'Talon TSi', 1993);
kenscar = new Cars('Nissan', '300ZX', 1992);
vpgscar = new Cars('Mazda', 'Miata', 1990);

///2nd example
function Home(washroom,bedrooms,kitchen){
  this.washroom = 3;

}
var tire = {type:"car",company:"panther"};
hondacar = new Cars("honda","civic",1999,tire);
console.log(JSON.stringify(hondacar,null,2));
console.log(JSON.stringify(kenscar,null,2));
var dealerShip = {cars:[]};
dealerShip.cars[0] = hondacar;

dealerShip.cars[1]=kenscar;
console.log(JSON.stringify(dealerShip,null,2));
///////////
 var plan1Name = "Basic";
 var plan1Price = 3.99;
 var plan1Space = 100;
 var plan1Data = 1000;
 var plan1Pages = 10;
 var plan2Name = "Professional";
 var plan2Price = 5.99;
 var plan2Space = 500;
 var plan2Data = 5000;
 var plan2Pages = 50;
 var plan3Name = "Ultimate";
 var plan3Price = 9.99;
 var plan3Space = 2000;
 var plan3Data = 20000;
 var plan3Pages = 500;
 console.log("The cost of the " + plan2Name + "package is $" + plan2Price + " per month.");
 console.log("The cost of the " + plan1Name + "package is $" + plan1Price + " per month.");


 /*var plan1 = {
   name: "Basic",
   price: 3.99,
   space: 100+"Gb",
   transfer: 1000+"Gb",
   pages: 10,
   discountMonths: [6,7],
   };
   console.log(JSON.stringify(plan1,null,2));*/
   ///////accessing the object properties with loop.
   var bike = new Object();
   
   bike.name = "honda";
   bike.type = "4 stork";
   bike.start = "manual";
    propertyExists = "start" in bike;
   console.log(propertyExists);
   for (var bik in bike) {
   //  delete bike.start;
   
    console.log(bik,"-",bike[bik]);
    
}
///example 2.
var person = {fname :"talha",lname :"rasheed",age :35};
for (var man in person) {
  console.log(man, ': ', person[man]);
 }
 ////object constructors.
 function Plan(name, price, space, transfer, pags) {
  this.name = name;
  this.price = price;
  this.space = space;
  this.transfer = transfer;
  this.pages = pags;

 }
 var plan1 = new Plan("Basic", 3.99, 100, 1000, 10);
 plan2 = new Plan("Premium", 5.99, 500, 5000, 50);
 plan3 = new Plan("Ultimate", 9.99, 2000, 20000, 500);
 console.log(JSON.stringify(plan1,null,2));
 console.log(JSON.stringify(plan2,null,2));
 console.log(JSON.stringify(plan3,null,2));
 /////////
 /*var fruit = {name: 'apple'};
 var fruitbear = {name: 'apple'};
 console.log(fruit === fruitbear);  // return false*/
 var fruit = {name: 'apple'};
var fruitbear = fruit;
console.log(fruit === fruitbear);
fruit.name = "grape";
console.log(fruitbear,fruit);