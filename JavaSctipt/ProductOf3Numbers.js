function solve(args){
    let negatives = 0;
    for(let val of args){
        let number = Number(val);
        if(number === 0){
            return console.log("Positive");
        }
        if (number<0) {
            negatives++;
        }
    }
    console.log(negatives % 2 === 0 ? "Positive" : "Negative");
}

let args = ['-3', '-4','-0'];
solve(args);
