function solve(args){
    let result = {};
    for(let i=0; i<args.length-1; i++){
        let subArr = args[i].split(' ');
        let key = subArr[0];
        let val = subArr[1];
        if (result[key] === undefined){
            result[key] = [];
        }
        result[key].push(val);
    }
    let printKey = args[args.length-1];
    if (result[printKey] === undefined) {
        console.log('None');
    } else {
        for(let items of result[printKey]) {
            console.log(items);
        }

    }
}

let args = ['3 test', '3 test1', '4 test2', '4 test3', '4 test5', '4'];
solve(args);
