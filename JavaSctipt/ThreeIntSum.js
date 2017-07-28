function solve(nums){
    let numsArr = nums[0].split(' ').map(Number);

    function sum(numA, numB, numC){
        if(numA + numB != numC){
            return false;
        }
        if (numA > numB){
            [numA, numB] = [numB, numA];
        }
        return `${numA} + ${numB} = ${numC}`;
    }

    console.log(
        sum(numsArr[0], numsArr[1], numsArr[2]) ||
        sum(numsArr[1], numsArr[2], numsArr[0]) ||
        sum(numsArr[2], numsArr[0], numsArr[1]) || 'No'
    );
}

solve(
    ['8 15 7']
);