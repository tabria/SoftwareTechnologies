function solve(town){
    let obj = town.map(JSON.parse);
    let result ={};
    for (let i=0; i<obj.length; i++){
        if (obj[i].town in result) {
            result[obj[i].town] += obj[i].income;
        } else {
            result[obj[i].town] = obj[i].income;
        }
    }
    let towns = Object.keys(result).sort();
    for(let town of towns) {
        console.log(`${town} -> ${result[town]}`);
    }
}

solve(
    [
        '{"town":"Sofia","income":200}',
        '{"town":"Varna","income":120}',
        '{"town":"Pleven","income":60}',
        '{"town":"Varna","income":70}'
    ]
);