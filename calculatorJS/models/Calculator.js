function Calculator(leftOperand, operator, rightOperand, equalOperator){
    this.leftOperand = leftOperand;
    this.operator = operator;
    this.rightOperand = rightOperand;
    this.equalOperator = equalOperator;

    this.calculateResult = function() {
        let result = 0;

        switch(this.operator){
            case "+":
                result = this.leftOperand + this.rightOperand;
                break;
            case "-":
                result = this.leftOperand - this.rightOperand;
                break;
            case "*":
                result = this.leftOperand * this.rightOperand;
                break;
            case "/":
                result = this.leftOperand / this.rightOperand;
                break;
            case "^":
                result = Math.pow(this.leftOperand, this.rightOperand);
                break;
            case "%":
                result = this.leftOperand % this.rightOperand;
        }

        switch(this.equalOperator) {
            case "=b":
                result = result.toString(2);
                break;
            case "=o":
                result = result.toString(8);
                break;
            case "=h":
                result = result.toString(16);
        }
        return result;
    }
}

module.exports = Calculator;
