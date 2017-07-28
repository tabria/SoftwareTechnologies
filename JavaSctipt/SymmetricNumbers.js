function solve(param){
  let num = param[0];

  let result ='';
  for (let i=1; i<=Number(num); i++){
      if (isSymmetric(i.toString())) {
        result += i + ' ';
      }
  }
  console.log(result);

  function isSymmetric (num) {
      for(let i=0; i<num.length/2; i++) {
          if (num[i] != num[num.length -i -1]){
              return false;
          }
      }
      return true;
  }
}

solve(
    ['300']
);
