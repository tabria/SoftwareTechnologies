function solve(args){
    let result = [];
    for(let i=0; i<args.length-1; i++){
        let subArr = args[i].split(' ');
        let key = subArr[0];
        let val = subArr[1];
        result[key] = val;
    }
    let printKey = args[args.length-1];
    if (result[printKey] === undefined) {
        console.log('None');
    } else {
        console.log(result[printKey]);
    }
}

let args = ['3 bla', '3 alb', '-1'];
solve(args);
