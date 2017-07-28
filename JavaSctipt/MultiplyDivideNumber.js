function solve(args){
    let num1 = Number(args[0]);
    let num2 = Number(args[1]);
    let result = num2 >= num1 ? num1*num2 : num1/num2;
    console.log(result);
}

let args=['0','-1'];
solve(args);
