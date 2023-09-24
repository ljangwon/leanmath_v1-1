// Run by Node.js
const readline = require('readline');

(async () => {
	let rl = readline.createInterface({ input: process.stdin });
	let n,
		str,
		arr,
		sum = 0;

	for await (const line of rl) {
		n = parseInt(line);
		rl.close();
	}

	rl = readline.createInterface({ input: process.stdin });

	for await (const line of rl) {
		str = line;
		arr = str.split(' ');
		rl.close();
	}

	for (i = 0; i < parseInt(n); i++) {
		sum += parseInt(arr[i]);
	}

	console.log(sum);

	process.exit();
})();
