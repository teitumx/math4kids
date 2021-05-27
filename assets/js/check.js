let numOne = document.querySelector('.num-one');
let numTwo = document.querySelector('.num-two');
let operation = document.querySelector('.operation');
let exampleInput = document.querySelector('.example-input');
let result;

if (numOne && numTwo && operation && exampleInput) {
    numOne = +numOne.textContent;
    numTwo = +numTwo.textContent;
    operation = operation.textContent.trim();
    result = eval(`numOne ${operation} numTwo`);
    exampleInput.addEventListener('change', () => {
        if (exampleInput.value == result) {
            exampleInput.classList.add('border-success', 'text-success');
        } else {
            exampleInput.classList.add('border-danger', 'text-danger');
        }
    });
}

console.log('numOne: ', numOne);
console.log('numTwo: ', numTwo);
console.log('operation: ', operation);
console.log('exampleInput: ', exampleInput);
console.log('result: ', result);
