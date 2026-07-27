const priceInput = document.querySelector('#calculator-price');
const downPaymentSlider = document.querySelector('#calculator-down-payment');
const downPaymentValue = document.querySelector('#calculator-down-payment-value');
const interestSlider = document.querySelector('#calculator-interest-rate');
const interestValue = document.querySelector('#calculator-interest-rate-value');
const termButtons = document.querySelectorAll('.calculator__term-btn');
const output = document.querySelector('#calculator-output');

function calculateAndUpdate() {
	const price = parseFloat(priceInput.value);
	const downPaymentPercent = parseFloat(downPaymentSlider.value);
	const interestRatePercent = parseFloat(interestSlider.value);

	const activeTermBtn = document.querySelector('.calculator__term-btn--active');
	const termYears = parseInt(activeTermBtn.dataset.term, 10);

	const principal = price - (price * downPaymentPercent / 100);
	const monthlyRate = (interestRatePercent / 100) / 12;
	const numPayments = termYears * 12;

	const monthlyPayment = principal *
		(monthlyRate * Math.pow(1 + monthlyRate, numPayments)) /
		(Math.pow(1 + monthlyRate, numPayments) - 1);

	output.textContent = '$' + Math.round(monthlyPayment).toLocaleString('en-US');

	downPaymentValue.textContent = downPaymentPercent + '%';
	interestValue.textContent = interestRatePercent + '%';
}

termButtons.forEach((btn) => {
	btn.addEventListener('click', () => {
		termButtons.forEach((b) => b.classList.remove('calculator__term-btn--active'));
		btn.classList.add('calculator__term-btn--active');
		calculateAndUpdate();
	});
});