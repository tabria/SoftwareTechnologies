function solve(args){
    let obj={};
    for(let item of args){
        let subArr = item.split(/\s->\s/);
        obj[subArr[0]] = isNaN(subArr[1]) ? subArr[1] : Number(subArr[1]);
    }
    console.log(JSON.stringify(obj));
}

let args = [
    'name -> Angel',
    'surname -> Georgiev',
    'age -> 20',
    'grade -> 6.00',
    'date -> 23/05/1995',
    'town -> Sofia'
];
solve(args);
