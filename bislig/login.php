<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Bislig City Travel Guide</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box
    }

    :root {
      --green-deep: #0b3b2f;
      --green-mid: #1c6e4a;
      --green-soft: #d4ead9;
      --amber: #e8a040;
      --text: #1a2e1a;
      --muted: #5a7a5e;
      --bg: #f2f7f0;
      --white: #ffffff;
      --border: #c8ddc8;
      --radius: 14px;
      --shadow: 0 4px 24px rgba(11, 59, 47, 0.10);
    }

    body {
      font-family: 'DM Sans', sans-serif; 
      background: var(--bg);
      min-height: 100vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    .panel-left {
      background: var(--green-deep);
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 3rem;
    }

    .panel-left::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        linear-gradient(180deg, rgba(11, 59, 47, 0.2) 0%, rgba(11, 59, 47, 0.85) 70%),
        url('https://1.bp.blogspot.com/-jGaAF2uf6xA/XtduAdektsI/AAAAAAAAvlk/GD7Qdrn5bOYLuvidTeCTuOpU_AZIFBJqwCLcBGAsYHQ/s1600/DSC_5152.JPG') center/cover no-repeat;
      z-index: 0;
    }

    .panel-left-content {
      position: relative;
      z-index: 1;
      color: white
    }

    .brand {
      font-family: 'Playfair Display', serif;
      font-size: 2.4rem;
      font-weight: 700;
      line-height: 1.15;
      margin-bottom: 1rem;
    }

    .brand span {
      color: var(--amber)
    }

    .tagline {
      font-size: 1rem;
      font-weight: 300;
      opacity: 0.8;
      line-height: 1.6;
      max-width: 340px;
    }

    .spots-preview {
      display: flex;
      gap: 0.6rem;
      margin-top: 1.8rem;
      flex-wrap: wrap;
    }

    .spot-pill {
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(6px);
      color: white;
      font-size: 0.78rem;
      padding: 0.35rem 0.9rem;
      border-radius: 40px;
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }

    .corner-logo {
      position: absolute;
      top: 2.5rem;
      left: 3rem;
      z-index: 1;
      display: flex;
      align-items: center;
      gap: 0.6rem;
      color: white;
      font-size: 0.88rem;
      font-weight: 500;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      opacity: 0.85;
    }

    .corner-logo i {
      font-size: 1.2rem;
      color: var(--amber)
    }

    .panel-right {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2.5rem;
      background: var(--white);
      position: relative;
    }

    .form-box {
      width: 100%;
      max-width: 400px;
    }

    .form-heading {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 600;
      color: var(--text);
      margin-bottom: 0.4rem;
    }

    .form-sub {
      font-size: 0.92rem;
      color: var(--muted);
      margin-bottom: 2rem;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    label {
      display: block;
      font-size: 0.82rem;
      font-weight: 500;
      color: var(--text);
      margin-bottom: 0.45rem;
      letter-spacing: 0.02em;
    }

    /* ── Input wrapper ── */
    .input-wrap {
      position: relative;
      display: flex;
      align-items: center;
    }

    /* Left icon — purely decorative, inside the wrapper */
    .input-wrap .icon-left {
      position: absolute;
      left: 1rem;
      color: var(--muted);
      font-size: 0.88rem;
      pointer-events: none;
      transition: color 0.2s;
      z-index: 2;
    }

    /* Input itself */
    .input-wrap input {
      width: 100%;
      padding: 0.78rem 1rem 0.78rem 2.6rem;
      border: 1.5px solid var(--border);
      border-radius: var(--radius);
      font-family: 'DM Sans', sans-serif;
      font-size: 0.95rem;
      color: var(--text);
      background: var(--bg);
      transition: border-color 0.2s, box-shadow 0.2s;
      outline: none;
    }

    .input-wrap input:focus {
      border-color: var(--green-mid);
      box-shadow: 0 0 0 3px rgba(28, 110, 74, 0.12);
      background: white;
    }

    /* Left icon turns green on focus */
    .input-wrap input:focus~.icon-left,
    .input-wrap:focus-within .icon-left {
      color: var(--green-mid);
    }

    /* Password field needs extra right padding for the eye button */
    .input-wrap input.has-toggle {
      padding-right: 2.8rem;
    }

    /* Eye toggle button */
    .toggle-pw {
      position: absolute;
      right: 0.85rem;
      color: var(--muted);
      font-size: 0.88rem;
      background: none;
      border: none;
      cursor: pointer;
      padding: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 6px;
      transition: color 0.2s, background 0.15s;
      z-index: 2;
    }

    .toggle-pw:hover {
      color: var(--green-mid);
      background: rgba(28, 110, 74, 0.08);
    }

    .row-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: -0.3rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .checkbox-row {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.83rem;
      color: var(--muted);
      cursor: pointer;
    }

    .checkbox-row input[type=checkbox] {
      width: 16px;
      height: 16px;
      accent-color: var(--green-mid);
      cursor: pointer;
      padding: 0;
    }

    .forgot {
      font-size: 0.83rem;
      color: var(--green-mid);
      text-decoration: none;
      font-weight: 500;
    }

    .forgot:hover {
      text-decoration: underline
    }

    .btn-primary {
      width: 100%;
      padding: 0.85rem;
      background: var(--green-mid);
      color: white;
      font-family: 'DM Sans', sans-serif;
      font-size: 1rem;
      font-weight: 500;
      border: none;
      border-radius: var(--radius);
      cursor: pointer;
      transition: background 0.2s, transform 0.1s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .btn-primary:hover {
      background: var(--green-deep);
      transform: translateY(-1px)
    }

    .btn-primary:active {
      transform: translateY(0)
    }

    .divider {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin: 1.5rem 0;
      font-size: 0.8rem;
      color: var(--muted);
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border);
    }

    .btn-ghost {
      width: 100%;
      padding: 0.78rem;
      border: 1.5px solid var(--border);
      background: white;
      border-radius: var(--radius);
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--text);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.65rem;
      transition: border-color 0.2s, background 0.2s;
    }

    .btn-ghost:hover {
      border-color: var(--green-mid);
      background: var(--bg)
    }

    .signup-row {
      text-align: center;
      margin-top: 1.8rem;
      font-size: 0.87rem;
      color: var(--muted);
    }

    .signup-row a {
      color: var(--green-mid);
      font-weight: 500;
      text-decoration: none;
    }

    .signup-row a:hover {
      text-decoration: underline
    }

    .error-msg {
      display: none;
      background: #fff3f3;
      border: 1px solid #f5c6c6;
      color: #c0392b;
      font-size: 0.82rem;
      padding: 0.6rem 0.9rem;
      border-radius: 10px;
      margin-bottom: 1rem;
      align-items: center;
      gap: 0.5rem;
    }

    .error-msg.show {
      display: flex
    }

    @media(max-width:720px) {
      body {
        grid-template-columns: 1fr
      }

      .panel-left {
        display: none
      }

      .panel-right {
        padding: 2rem 1.4rem
      }
    }

    .back-btn {
      position: absolute;
      top: 2rem;
      right: 2rem;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
      background: white;
      color: var(--green-mid);
      border: 1.5px solid var(--border);
      padding: 0.7rem 1.2rem;
      border-radius: 50px;
      font-size: 0.9rem;
      font-weight: 600;
      transition: all 0.25s ease;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
    }

    .back-btn:hover {
      background: var(--green-mid);
      color: white;
      border-color: var(--green-mid);
      transform: translateY(-2px);
    }

    .back-btn i {
      font-size: 0.85rem;
    }
  </style>
</head>

<body>

  <div class="panel-left">
    <div class="corner-logo">
      <i class="fas fa-leaf"></i>
      Bislig City Tourism
    </div>
    <div class="panel-left-content">
      <div class="brand">Discover<br>Surigao del <span>Sur.</span></div>
      <p class="tagline">Your gateway to waterfalls, beaches, caves, and serene lakes hidden in the heart of Bislig
        City.</p>
      <div class="spots-preview">
        <span class="spot-pill"><i class="fas fa-water"></i> Tinuy-an Falls</span>
        <span class="spot-pill"><i class="fas fa-umbrella-beach"></i> Hagonoy Island</span>
        <span class="spot-pill"><i class="fas fa-mountain"></i> Hinayagan Cave</span>
        <span class="spot-pill"><i class="fas fa-spa"></i> Lake 77</span>
      </div>
    </div>
  </div>

  <div class="panel-right">
    <a href="index.html" class="back-btn">
      <i class="fas fa-arrow-left"></i>
      Back to Home
    </a>
    <div class="form-box">
      <h1 class="form-heading">Welcome back</h1>
      <p class="form-sub">Sign in to your travel account</p>

      <div class="error-msg" id="err">
        <i class="fas fa-exclamation-circle"></i>
        <span>Invalid email or password. Please try again.</span>
      </div>

      <form action="authenticate.php" method="POST">

        <?php if (isset($_GET['error'])): ?>
          <div class="error-msg show">
            <i class="fas fa-exclamation-circle"></i>
            <span>
              <?php echo htmlspecialchars($_GET['error']); ?>
            </span>
          </div>
        <?php endif; ?>

        <!-- Email -->
        <div class="form-group">
          <label for="email">Email address</label>

          <div class="input-wrap">
            <input type="email" name="email" id="email" placeholder="you@example.com" required>

            <i class="fas fa-envelope icon-left"></i>
          </div>
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password">Password</label>

          <div class="input-wrap">
            <input type="password" name="password" id="password" class="has-toggle" placeholder="Enter your password"
              required>

            <i class="fas fa-lock icon-left"></i>

            <button class="toggle-pw" id="togglePw" type="button">

              <i class="fas fa-eye" id="eyeIcon"></i>
            </button>
          </div>
        </div>

        <div class="row-meta">
          <label class="checkbox-row">
            <input type="checkbox" name="remember">
            Remember me
          </label>

          <a href="#" class="forgot">Forgot password?</a>
        </div>

        <button class="btn-primary" type="submit">
          <i class="fas fa-arrow-right-to-bracket"></i>
          Sign In
        </button>

      </form>

      <p class="signup-row">Don't have an account? <a href="register.php">Sign up free</a></p>
    </div>
  </div>

  <script>
    // Toggle password visibility
    const togglePw = document.getElementById('togglePw');
    const pwInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePw.addEventListener('click', () => {
      const isHidden = pwInput.type === 'password';

      pwInput.type = isHidden ? 'text' : 'password';

      eyeIcon.className = isHidden ?
        'fas fa-eye-slash' :
        'fas fa-eye';
    });

    // Clear error on input
    document.querySelectorAll('input').forEach(el => {
      el.addEventListener('input', () => document.getElementById('err').classList.remove('show'));
    });
  </script>
</body>

</html>