// Run by Node.js
const readline = require('readline');

const rl = readline.createInterface({ input: process.stdin, output: process.stdout });

let N;

let count = 0;

rl.on('line', function (line) {
	if (count == 0) {
		N = Number(line.trim());
	} else if (count == 1) {
		get_Min_Max(line.trim());
		rl.close();
	}
	count++;
});

function get_Min_Max(input) {
	let arr = input.split(' ').map((num) => parseInt(num));
	console.log(arr);
}
