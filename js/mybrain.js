'use strict';
let ctx = document.getElementById('myChart');
let chart = new Chart(myChart, {
	type: 'pie',
	data: {
		labels: [
			'html',
			'xml',
			'css',
			'javascript',
			'php',
			'python',
			'C++',
			'Shell',
			'VBA'
		],
		datasets: [{
			backgroundColor: [
				'#00A2FF',
				'#1DB100',
				'#EE220C',
				'#F8BA00',
				'#CB297B',
				'#16E7CF',
				'#61D836',
				'#FAE232',
				'#EFA5CB'
			],
			data: [8, 14, 25, 20, 12, 15, 1, 3, 2],
		}]
	},
	options: {
		title: {
			display: true,
			text: "私の脳内"
		}
	}
});