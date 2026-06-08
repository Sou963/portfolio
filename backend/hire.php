<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hire Sourav Bosu</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=Libre+Baskerville:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />
  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Sora', sans-serif;
      background: #f0ede8;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
      position: relative;
      overflow-x: hidden;
    }

    /* Background decoration */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: radial-gradient(circle, rgba(0, 0, 0, 0.055) 1.2px, transparent 1.2px);
      background-size: 28px 28px;
      pointer-events: none;
      z-index: 0;
    }

    body::after {
      content: '';
      position: fixed;
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, rgba(212, 82, 42, 0.12) 0%, transparent 70%);
      top: -100px;
      right: -100px;
      border-radius: 50%;
      pointer-events: none;
      z-index: 0;
    }

    .page-wrap {
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      max-width: 860px;
      width: 100%;
      background: #fff;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.11);
      position: relative;
      z-index: 1;
    }

    /* ── LEFT PANEL ── */
    .left-panel {
      background: #1c1917;
      padding: 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
    }

    .left-panel::before {
      content: '';
      position: absolute;
      width: 320px;
      height: 320px;
      background: radial-gradient(circle, rgba(212, 82, 42, 0.25) 0%, transparent 65%);
      bottom: -80px;
      left: -80px;
      border-radius: 50%;
      pointer-events: none;
    }

    .left-panel::after {
      content: '';
      position: absolute;
      width: 180px;
      height: 180px;
      background: radial-gradient(circle, rgba(212, 82, 42, 0.15) 0%, transparent 65%);
      top: 20px;
      right: -40px;
      border-radius: 50%;
      pointer-events: none;
    }

    .panel-top {
      position: relative;
      z-index: 1;
    }

    .back-link {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      color: rgba(255, 255, 255, 0.4);
      text-decoration: none;
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 2.5rem;
      transition: color 0.25s;
    }

    .back-link:hover {
      color: rgba(255, 255, 255, 0.8);
    }

    .panel-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      background: rgba(212, 82, 42, 0.18);
      border: 1px solid rgba(212, 82, 42, 0.35);
      color: #e8845a;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 0.3rem 0.75rem;
      border-radius: 20px;
      margin-bottom: 1.5rem;
    }

    .panel-title {
      font-family: 'Libre Baskerville', serif;
      font-size: 2rem;
      font-weight: 700;
      color: #fff;
      line-height: 1.2;
      margin-bottom: 0.75rem;
    }

    .panel-title em {
      color: #d4522a;
      font-style: italic;
    }

    .panel-desc {
      font-size: 0.85rem;
      color: rgba(255, 255, 255, 0.5);
      line-height: 1.75;
      margin-bottom: 2.5rem;
    }

    /* perks list */
    .perk {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .perk-icon {
      width: 32px;
      height: 32px;
      background: rgba(212, 82, 42, 0.15);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #d4522a;
      font-size: 0.8rem;
      flex-shrink: 0;
      margin-top: 1px;
    }

    .perk-text strong {
      display: block;
      font-size: 0.82rem;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.85);
      margin-bottom: 0.15rem;
    }

    .perk-text span {
      font-size: 0.75rem;
      color: rgba(255, 255, 255, 0.4);
    }

    .panel-bottom {
      position: relative;
      z-index: 1;
      padding-top: 2rem;
      border-top: 1px solid rgba(255, 255, 255, 0.07);
    }

    .panel-contact {
      font-size: 0.75rem;
      color: rgba(255, 255, 255, 0.35);
      margin-bottom: 0.3rem;
    }

    .panel-email {
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.6);
      font-weight: 500;
    }

    /* ── RIGHT PANEL (FORM) ── */
    .right-panel {
      padding: 3rem 2.5rem;
      background: #fff;
    }

    .form-heading {
      font-family: 'Libre Baskerville', serif;
      font-size: 1.4rem;
      font-weight: 700;
      color: #1c1917;
      margin-bottom: 0.3rem;
    }

    .form-sub {
      font-size: 0.82rem;
      color: #a8a29e;
      margin-bottom: 2rem;
    }

    /* Alert */
    .sb-alert {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      padding: 0.8rem 1rem;
      border-radius: 10px;
      font-size: 0.82rem;
      font-weight: 500;
      margin-bottom: 1.5rem;
    }

    .sb-alert.success {
      background: #f0fdf4;
      border: 1.5px solid #bbf7d0;
      color: #15803d;
    }

    .sb-alert.error {
      background: #fef2f2;
      border: 1.5px solid #fecaca;
      color: #dc2626;
    }

    .sb-alert.warning {
      background: #fffbeb;
      border: 1.5px solid #fde68a;
      color: #92400e;
    }

    /* Fields */
    .field {
      margin-bottom: 1.1rem;
    }

    .field label {
      display: block;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #78716c;
      margin-bottom: 0.4rem;
    }

    .field input {
      width: 100%;
      background: #faf9f7;
      border: 1.5px solid #e7e5e0;
      border-radius: 10px;
      padding: 0.72rem 1rem;
      font-family: 'Sora', sans-serif;
      font-size: 0.88rem;
      color: #1c1917;
      outline: none;
      transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
    }

    .field input::placeholder {
      color: #c4bfb8;
    }

    .field input:focus {
      border-color: #d4522a;
      background: #fff;
      box-shadow: 0 0 0 3.5px rgba(212, 82, 42, 0.1);
    }

    .field-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    .btn-submit {
      width: 100%;
      margin-top: 0.5rem;
      background: #d4522a;
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 0.85rem 1.5rem;
      font-family: 'Sora', sans-serif;
      font-size: 0.88rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      transition: background 0.25s, transform 0.2s, box-shadow 0.25s;
      box-shadow: 0 4px 18px rgba(212, 82, 42, 0.28);
    }

    .btn-submit:hover {
      background: #b03d1a;
      transform: translateY(-2px);
      box-shadow: 0 8px 28px rgba(212, 82, 42, 0.38);
    }

    .btn-submit:active {
      transform: translateY(0);
    }

    .form-note {
      text-align: center;
      font-size: 0.72rem;
      color: #c4bfb8;
      margin-top: 1rem;
    }

    .form-note a {
      color: #d4522a;
      text-decoration: none;
    }

    .form-note a:hover {
      text-decoration: underline;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 680px) {
      .page-wrap {
        grid-template-columns: 1fr;
        border-radius: 16px;
      }

      .left-panel {
        padding: 2rem 1.75rem;
      }

      .right-panel {
        padding: 2rem 1.75rem;
      }

      .field-row {
        grid-template-columns: 1fr;
        gap: 0;
      }
    }
  </style>
</head>

<body>

  <?php
  $successMsg = $errorMsg = $warnMsg = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Name    = trim($_POST['Name']    ?? '');
    $Email   = trim($_POST['Email']   ?? '');
    $Number  = trim($_POST['Number']  ?? '');
    $Address = trim($_POST['Address'] ?? '');

    if ($Name && $Email && $Number && $Address) {
      $host   = 'sql312.infinityfree.com';       // change to 'sql204' on live server
      $user   = 'if0_42120550';            // change to 'if0_39606568' on live server
      $pass   = 'PbUuzIa3S1';                // change to 'lOMmyvfzCCqF' on live server
      $dbname = 'if0_42120550_portfolio';     // change to 'if0_39606568_portfolio_s' on live server

      $connection = new mysqli($host, $user, $pass, $dbname);

      if ($connection->connect_error) {
        $errorMsg = "Connection failed: " . $connection->connect_error;
      } else {
        $stmt = $connection->prepare(
          "INSERT INTO souravp (Name, Email, Number, Address) VALUES (?, ?, ?, ?)"
        );
        $stmt->bind_param("ssss", $Name, $Email, $Number, $Address);
        if ($stmt->execute()) {
          $successMsg = "Your message was sent! I'll get back to you soon.";
        } else {
          $errorMsg = "Submission failed: " . $stmt->error;
        }
        $stmt->close();
        $connection->close();
      }
    } else {
      $warnMsg = "Please fill in all fields before submitting.";
    }
  }
  ?>

  <div class="page-wrap">

    <!-- LEFT -->
    <div class="left-panel">
      <div class="panel-top">
        <a href="../index.php" class="back-link">
          <i class="fa-solid fa-arrow-left fa-xs"></i> Back to Portfolio
        </a>
        <div class="panel-badge">
          <i class="fa-solid fa-circle-check fa-xs"></i> Open to Work
        </div>
        <h2 class="panel-title">Let's Build<br>Something <em>Great</em></h2>
        <p class="panel-desc">Have a project, idea, or opportunity? I'd love to hear about it. Fill in the form and I'll respond within 24 hours.</p>

        <div class="perk">
          <div class="perk-icon"><i class="fa-solid fa-bolt"></i></div>
          <div class="perk-text">
            <strong>Fast Delivery</strong>
            <span>Clean, optimized code shipped on time</span>
          </div>
        </div>
        <div class="perk">
          <div class="perk-icon"><i class="fa-solid fa-mobile-screen"></i></div>
          <div class="perk-text">
            <strong>Web & Mobile</strong>
            <span>React, Next.js, Flutter — all covered</span>
          </div>
        </div>
        <div class="perk">
          <div class="perk-icon"><i class="fa-solid fa-headset"></i></div>
          <div class="perk-text">
            <strong>Ongoing Support</strong>
            <span>I stay available after delivery</span>
          </div>
        </div>
      </div>

      <div class="panel-bottom">
        <p class="panel-contact">Or reach me directly at</p>
        <p class="panel-email">souravbosu844@gmail.com</p>
      </div>
    </div>

    <!-- RIGHT -->
    <div class="right-panel">
      <h3 class="form-heading">Get in Touch</h3>
      <p class="form-sub">All fields are required.</p>

      <?php if ($successMsg): ?>
        <div class="sb-alert success">
          <i class="fa-solid fa-circle-check"></i>
          <?= htmlspecialchars($successMsg) ?>
        </div>
      <?php endif; ?>
      <?php if ($errorMsg): ?>
        <div class="sb-alert error">
          <i class="fa-solid fa-circle-exclamation"></i>
          <?= htmlspecialchars($errorMsg) ?>
        </div>
      <?php endif; ?>
      <?php if ($warnMsg): ?>
        <div class="sb-alert warning">
          <i class="fa-solid fa-triangle-exclamation"></i>
          <?= htmlspecialchars($warnMsg) ?>
        </div>
      <?php endif; ?>

      <form action="hire.php" method="post" novalidate>
        <div class="field-row">
          <div class="field">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="Name" placeholder="John Doe" required />
          </div>
          <div class="field">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="Email" placeholder="john@example.com" required />
          </div>
        </div>
        <div class="field-row">
          <div class="field">
            <label for="number">Phone Number</label>
            <input type="text" id="number" name="Number" placeholder="+880 1xxx-xxxxxx" required />
          </div>
          <div class="field">
            <label for="address">Address</label>
            <input type="text" id="address" name="Address" placeholder="City, Country" required />
          </div>
        </div>
        <button type="submit" name="submit" class="btn-submit">
          Send Message <i class="fa-solid fa-paper-plane fa-sm"></i>
        </button>
      </form>

      <p class="form-note">
        By submitting you agree to be contacted. <a href="../index.php#Contact">Privacy</a>
      </p>
    </div>

  </div>

</body>

</html>