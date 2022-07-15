// const operator = prompt('Enter operator ( either +, -, * or / ): ');

// const number1 = parseFloat(prompt('Enter first number: '));
// const number2 = parseFloat(prompt('Enter second number: '));

// let result;


// if (operator == '+') {
//     result = number1 + number2;
// }
// else if (operator == '-') {
//     result = number1 - number2;
// }
// else if (operator == '*') {
//     result = number1 * number2;
// }
// else {
//     result = number1 / number2;
// }


// document.write(`${number1} ${operator} ${number2} = ${result}`);







//*******************using Switch case*************** */







const operator = prompt('Enter operator ( either +, -, * or / ): ');


const number1 = parseFloat(prompt('Enter first number: '));
const number2 = parseFloat(prompt('Enter second number: '));

switch(operator) {
    case '+':
         result = number1 + number2;
        document.write(`${number1} + ${number2} = ${result}`);
        break;

    case '-':
         result = number1 - number2;
        document.write(`${number1} - ${number2} = ${result}`);
        break;

    case '*':
         result = number1 * number2;
        document.write(`${number1} * ${number2} = ${result}`);
        break;

    case '/':
         result = number1 / number2;
        document.write(`${number1} / ${number2} = ${result}`);
        break;

    default:
        document.write('Invalid operator');
        break;
}