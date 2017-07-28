function solve(num){
    let arrs = num
                .map(Number)
                .sort((a, b) => b-a);
    let cycles = arrs.length<3 ? arrs.length : 3;
    for (let i=0; i<cycles; i++){
        console.log(arrs[i]);
    }
}

solve(
    [10, 30, 15, 20, 50, 5]
);