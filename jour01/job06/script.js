function fizzbuzz() {
    for (let nbr = 0; nbr <= 151; nbr++) {
        
        if (nbr % 5 === 0 && nbr % 3 === 0) {
        console.log("FizzBuzz");
        }
        else if (nbr % 3 === 0) {
        console.log("Fizz");
        }
        else if (nbr % 5 === 0) {
        console.log("Buzz");
        }
        else {
            console.log(nbr);
        }
    }
}

fizzbuzz();