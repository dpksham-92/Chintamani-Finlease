<?php include 'include/header.php'; ?>

<section class="infocnt padd80">
	<div class="container">
    <div class="emi-calc" aria-label="EMI calculator" data-emi-calc
             data-amount="30000" data-tenure="6" data-rate="12.5"
             data-amount-min="30000" data-amount-max="1000000" data-amount-step="1000"
             data-rate-min="8" data-rate-max="66" data-rate-step="0.5"
             data-tenures="6,9,12,15,18,24,30,36,42,48,54,60"
             data-method="flat">
 
      <!-- LEFT: inputs -->
      <div class="emi-calc__form">
        <h2 class="emi-calc__title">Calculate <span>Your Loan</span></h2>
        <p class="emi-calc__lead">Adjust the sliders to estimate your monthly repayments.</p>
 
        <!-- Loan amount -->
        <div class="emi-field">
          <div class="emi-field__head">
            <span class="emi-field__label">Loan Amount</span>
            <div class="emi-box">
              <span class="emi-box__affix">₹</span>
              <input class="emi-box__input" type="number" inputmode="numeric" data-amount-input aria-label="Loan amount in rupees" value="30000">
            </div>
          </div>
          <input class="emi-slider" type="range" data-amount-range aria-label="Loan amount" value="30000">
          <div class="emi-range-labels" aria-hidden="true">
            <span data-amount-min-label>₹30k</span>
            <span data-amount-max-label>₹10L</span>
          </div>
        </div>
 
        <!-- Tenure -->
        <div class="emi-field">
          <div class="emi-field__head">
            <span class="emi-field__label">Tenure (Months)</span>
            <span class="emi-pill" data-tenure-out><strong>6</strong> <span>Months</span></span>
          </div>
          <input class="emi-slider" type="range" data-tenure-range aria-label="Loan tenure in months" value="0">
          <div class="emi-ticks" data-ticks></div>
        </div>
 
        <!-- Interest rate -->
        <div class="emi-field">
          <div class="emi-field__head">
            <span class="emi-field__label">Interest Rate (% P.A.)</span>
            <div class="emi-box">
              <input class="emi-box__input" type="number" inputmode="decimal" step="0.1" data-rate-input aria-label="Interest rate percent per annum" value="12.5">
              <span class="emi-box__affix">%</span>
            </div>
          </div>
          <input class="emi-slider" type="range" data-rate-range aria-label="Interest rate percent per annum" value="12.5">
        </div>
      </div>
 
      <!-- RIGHT: result -->
      <div class="emi-calc__result">
        <div class="emi-result__hero">
          <p class="emi-result__label">Monthly EMI</p>
          <output class="emi-result__emi" data-emi>₹ 5,313</output>
        </div>
 
        <dl class="emi-stats">
          <div class="emi-stats__row">
            <dt><span class="emi-dot emi-dot--principal"></span>Principal Amount</dt>
            <dd data-principal>₹ 30,000</dd>
          </div>
          <div class="emi-stats__row">
            <dt><span class="emi-dot emi-dot--interest"></span>Total Interest</dt>
            <dd data-interest>₹ 1,875</dd>
          </div>
          <div class="emi-stats__total">
            <dt>Total Payable</dt>
            <dd data-total>₹ 31,875</dd>
          </div>
        </dl>
 
        <!-- href apne apply page ka link kar do -->
        <a class="emi-cta" href="#apply">
          Apply for Loan
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 8h11M9 3.5 13.5 8 9 12.5"/></svg>
        </a>
      </div>
    </div>
 
  
  </div>
</section>

<?php include 'include/cta.php'; ?>

<?php include 'include/footer.php'; ?>