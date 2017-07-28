function solve(args){
    let students =[];
    for(let item of args){
        let subArray = item.split(/\s->\s/);
        let student = {
            name: subArray[0],
            age: subArray[1],
            grade: subArray[2]
        };
        students.push(student);

    }
    for(let stud of students){
        console.log(`Name: ${stud.name}`);
        console.log(`Age: ${stud.age}`);
        console.log(`Grade: ${stud.grade}`);

    }
}

let args = ['Pesho -> 13 -> 6.00', 'Ivan -> 12 -> 5.57', 'Toni -> 13 -> 4.90'];
solve(args);
