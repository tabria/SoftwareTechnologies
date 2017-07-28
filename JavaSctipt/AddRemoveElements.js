function solve(args){
    let result = [];
    for(let val of args){
        let subArr = val.split(' ');
        let operation = subArr[0];
        let num = Number(subArr[1]);
        if (operation === "add") {
            result.push(num);
        } else if (operation === "remove"){
            result.splice(num, 1);
        }
    }

    for(let item of result){
        console.log(item);
    }
}
let args = ['add 3', 'add 5', 'remove 2', 'remove 0' , 'add 7'];
solve(args);
