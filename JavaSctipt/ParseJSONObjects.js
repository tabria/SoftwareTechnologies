function solve(args){
    let students = args.map(JSON.parse);
    for(let item of students){
        let student = `Name: ${item.name}\n` + `Age: ${item.age}\n` + `Date: ${item.date}`;
        console.log(student);
    }
}

let args =[
    '{"name":"Gosho","age":10,"date":"19/06/2005"}',
    '{"name":"Gosho","age":10,"date":"19/06/2005"}'
    ];
solve(args);
