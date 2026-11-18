<?php include 'include/header.php'; ?>


<section class="pay-section padd70">
  <div class="container">



    <div class="row g-4">

      <!-- UPI -->
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="qr-panel">
          <div class="qr-head">
            <span class="bar"></span>
            <h3>Pay with UPI</h3>
          </div>

          <div class="qr-frame">
            <span class="qr-corner tl"></span><span class="qr-corner tr"></span>
            <span class="qr-corner bl"></span><span class="qr-corner br"></span>
            <!-- QR aur logos base64 me embed hain -->
            <div class="img">
            	<img src="assets/img/qr.png" class="img-fluid">
            </div>
            <div class="vpa">
              <span id="vpa">chinta123@fbl</span>
              <button type="button" data-copy="chinta123@fbl">Copy</button>
            </div>
          </div>

          <div class="apps">
            <p class="apps-label">Scan with any UPI app</p>
            <img src="assets/img/pay1.png" class="img-fluid">
            <img src="assets/img/pay2.png" class="img-fluid">
          </div>
        </div>
      </div>

      <!-- Bank -->
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="bank-card">
          <div class="bank-head">
            <div>
              <div class="eyebrow mb-2">Direct Transfer</div>
              <h3>Bank Details</h3>
            </div>
            <span class="badge-soft">NEFT / RTGS / IMPS</span>
          </div>

          <div class="row-item">
            <div><div class="k">Account Name</div><div class="v">Chintamani Finlease Limited</div></div>
          </div>
          <div class="row-item">
            <div><div class="k">Bank</div><div class="v">Federal Bank</div></div>
          </div>
          <div class="row-item">
            <div><div class="k">Branch</div><div class="v">New Delhi / Nirman Vihar</div></div>
          </div>
          <div class="row-item">
            <div><div class="k">Account Number</div><div class="v">14510200012013</div></div>
            <button class="copy-btn" type="button" data-copy="14510200012013" aria-label="Copy account number">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15V5a2 2 0 0 1 2-2h10"/></svg>
            </button>
          </div>
          <div class="row-item">
            <div><div class="k">IFSC Code</div><div class="v">FDRL0001451</div></div>
            <button class="copy-btn" type="button" data-copy="FDRL0001451" aria-label="Copy IFSC code">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15V5a2 2 0 0 1 2-2h10"/></svg>
            </button>
          </div>

          <div class="note">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#C4383E" stroke-width="2" style="flex:0 0 18px;margin-top:1px"><circle cx="12" cy="12" r="9"/><path d="M12 8v5M12 16.5v.01"/></svg>
            <div>After making the payment, please share the transaction reference number with your Relationship Manager so that the receipt can be issued promptly.</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'include/cta.php'; ?>
<?php include 'include/footer.php'; ?>