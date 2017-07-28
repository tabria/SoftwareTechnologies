function solve(args){
    let lenght = Number(args[0]);
    let arr = new Int32Array(lenght);

    for(let i=1; i<args.length; i++){
        let subArr = args[i].split(' ').filter(s=>s!=='-').map(Number);
        let key = subArr[0];
        let value = subArr[1];
        arr[key] = value;
    }

    for(let item of arr){
        console.log(item);
    }
}

let args = ['5', '0 - 3', '3 - -1', '4 - 2'];

solve(args);
