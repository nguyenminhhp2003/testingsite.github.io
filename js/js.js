function car(name,price){
	this.name = name;
	this.price = price;
	this.description = `This is ${this.name} car , it's ${this.price} dolar $$$$$$ `
	
}
let lamb = new car("lamboghini" , 2345)
console.log(lamb.description)