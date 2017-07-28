function solve(args){
    for(let word of args){
        if (word === "Stop"){
            return
        }
        console.log(word);
    }
}

let args = ['3', '6', '5','4','Stop', '10'];
solve(args);