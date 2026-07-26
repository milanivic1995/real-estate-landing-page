<?php
/**
 * Mortgage calculator section.
 */
?>
<section class="calculator">

	<h2 class="calculator__heading">See What This Could Cost You Monthly</h2>

	<div class="calculator__inputs">

		<label class="calculator__field">
			Home Price
			<input
				type="number"
				id="calculator-price"
				class="calculator__number-input"
				value="385000"
				min="0"
				step="1000"
			/>
		</label>

		<label class="calculator__field">
			Down Payment: <span id="calculator-down-payment-value">20%</span>
			<input
				type="range"
				id="calculator-down-payment"
				class="calculator__slider"
				min="0"
				max="50"
				value="20"
			/>
		</label>

		<label class="calculator__field">
			Interest Rate: <span id="calculator-interest-rate-value">6.5%</span>
			<input
				type="range"
				id="calculator-interest-rate"
				class="calculator__slider"
				min="2"
				max="10"
				step="0.1"
				value="6.5"
			/>
		</label>

		<div class="calculator__term-toggle" id="calculator-term">
			<button type="button" class="calculator__term-btn calculator__term-btn--active" data-term="15">15-Year</button>
			<button type="button" class="calculator__term-btn" data-term="30">30-Year</button>
		</div>

	</div>

	<div class="calculator__result">
		<p class="calculator__result-label">Estimated Monthly Payment</p>
		<p class="calculator__result-value" id="calculator-output">$0</p>
	</div>

</section>