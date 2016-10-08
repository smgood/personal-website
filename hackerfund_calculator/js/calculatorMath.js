// JavaScript Document

// edge cases so far solved
// can't add 2 functions in a row
// must have number at end to calculate
// after function   - if you do operator than it keeps old number
//					- else it erases old number
// pushing equals twice repeats function
// can only add decimal once to number

// still to do 
// fix when numbers go over edge
// make workshop friendly by making 3 new files
//		1 - users can input own text 
// 		2 - users can easily style buttons
//		3 - users can easily make functions 
// 	order of operations?
//  remove extra zeros at end of number

var currentNumber = null;
var numberArray = [];
var operationArray = [];

// equal sign was just pushed
var isSolution = false; 
// currentNumber has decimal
var hasDecimal = false;
// decimal place of current number
var currentDecimalPlace = 0;

var lastNumber;
var lastOperation;

jQuery(document).ready(function () {
	$('.button-C').on("click", erase);
	$('.button-Equals').on("click", calculate);
	$('.button-Decimal').on("click", addDecimal);

	$('.button-0').on("click", function () { addDigit(0, event.target) });
	$('.button-1').on("click", function () { addDigit(1, event.target ) });
	$('.button-2').on("click", function () { addDigit(2, event.target) });
	$('.button-3').on("click", function () { addDigit(3, event.target) });
	$('.button-4').on("click", function () { addDigit(4, event.target) });
	$('.button-5').on("click", function () { addDigit(5, event.target) });
	$('.button-6').on("click", function () { addDigit(6, event.target) });
	$('.button-7').on("click", function () { addDigit(7, event.target) });
	$('.button-8').on("click", function () { addDigit(8, event.target) });
	$('.button-9').on("click", function () { addDigit(9, event.target) });

	$('.button-Plus').on("click", function (event) { addOperation(Add, event.target) });
	$('.button-Minus').on("click", function (event) { addOperation(Subtract, event.target) });
	$('.button-Times').on("click", function (event) { addOperation(Multiply, event.target) });
	$('.button-Divide').on("click", function (event) { addOperation(Divide, event.target) });
});

function displayText(button) {
	var text = $(button).text();
	text = text.trim();
	text = text.replace("×", "*");
	text = text.replace("÷", "/");
	text = text.replace("−", "-");

	$(".screen-text").append(text);
};

function erase() {
	$(".screen-text").empty();
	currentNumber = null;
	numberArray = [];
	isSolution = false;
	hasDecimal = false;
	currentDecimalPlace = 0;
};

function calculate() {
	if (isSolution) {
		var answer = lastOperation.execute(currentNumber, lastNumber);
		if (Math.abs(answer) >= 10000 || Math.abs(answer) < 0.0001){
			$(".screen-text").html(answer.toExponential(4));
		} else if (answer.toPrecision(5) != answer) {
			$(".screen-text").html(answer.toPrecision(5));			
		} else {
			$(".screen-text").html(answer);
		}
		
		currentNumber = answer;
		
	}
	else {
		if (currentNumber != null) {
			pushNumber();
			
			lastNumber = numberArray[numberArray.length - 1];
			lastOperation = operationArray[operationArray.length - 1];
			
			var answer = numberArray.shift();
			
			while (operationArray.length > 0)
				{
					answer = operationArray.shift().execute(answer, numberArray.shift());
				}
			
			if (Math.abs(answer) >= 10000 || Math.abs(answer) < 0.0001){
				$(".screen-text").html(answer.toExponential(4));
			} else if (answer.toPrecision(5) != answer) {
				$(".screen-text").html(answer.toPrecision(5));			
			} else {
				$(".screen-text").html(answer);
			}
		
			currentNumber = answer;
			numberArray = [];
			isSolution = true;
		}
	}
}

function addDigit(newDigit, button) {
	if (isSolution) {
		erase();
		currentNumber = newDigit;
	} else if (currentNumber == null){
		if (hasDecimal) {
			currentNumber = newDigit / 10;
			currentDecimalPlace++;
		} else {
			currentNumber = newDigit;
		}
	} else {
		if (hasDecimal) {
			currentNumber += newDigit / Math.pow(10, currentDecimalPlace);
			currentDecimalPlace++;
		} else {
		currentNumber = currentNumber * 10 + newDigit;
		}
	}
	displayText(button);
	isSolution = false;
};

function addOperation (newOperation, button) {
	if (currentNumber != null) {
		pushNumber();
		operationArray.push(newOperation);
		displayText(button);
		isSolution = false;
	}
}

function addDecimal () {
	if (hasDecimal == false) {
		if (isSolution) {
			erase();
			$(".screen-text").append("0.");
		} else if (currentNumber == null){
			$(".screen-text").append("0.");
		} else {
			$(".screen-text").append(".");
		}
		
		hasDecimal = true;
		currentDecimalPlace = 1;
	}
}

function pushNumber() {
	numberArray.push(currentNumber);
	currentNumber = null;
	hasDecimal = false;
	currentDecimalPlace = 0;
};

Add = {
    execute: function(x,y) {
        return performOperation1(x,y);
    }   
}

Subtract = {
    execute: function(x,y) {
        return performOperation2(x,y);
    }   
}

Multiply = {
    execute: function(x,y) {
        return performOperation3(x,y);
    }   
}

Divide = {
    execute: function(x,y) {
        return performOperation4(x,y);
    }   
}
