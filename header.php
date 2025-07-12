<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dr. P. A. Inamdar University</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .header {
      border: 2px solid #7e7e7e;
      padding: 10px;
    }

    .top-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      width: 100px;
      height: auto;
    }

    .main-content {
      flex: 1;
      text-align: center;
      padding: 0 10px;
    }

    .subheading {
      font-size: 14px;
      margin: 0;
    }

    .university-name {
      color: #800000;
      font-size: 24px;
      font-weight: bold;
      margin: 2px 0;
    }

    .address, .contact-info {
      font-size: 13px;
      color: #333;
      margin: 2px 0;
    }

    .tags {
      font-size: 13px;
      color: #800000;
      font-weight: bold;
      line-height: 1.3;
      text-align: right;
    }

    .footer-container {
  position: relative;
  height: 40px; /* adjust height as needed */
  margin-top: 10px;
  border-top: 1px solid #ccc;
}

.footer-left,
.footer-right {
  position: absolute;
  font-size: 13px;
  font-weight: bold;
  color: #800000;
}

.footer-left {
  left: 0;
  text-align: left;
}

.footer-right {
  right: 0;
  text-align: right;
}

.footer-title {
  color: #333;
  font-weight: normal;
  display: block;
  font-size: 12px;
}


    /* Responsive scaling but preserve horizontal layout */
    @media (max-width: 768px) {
      .logo {
        width: 70px;
      }

      .subheading {
        font-size: 12px;
      }

      .university-name {
        font-size: 18px;
      }

      .address, .contact-info, .tags {
        font-size: 11px;
      }

      .main-content {
        padding: 0 5px;
      }

      .footer-names {
        font-size: 12px;
      }
    }
  </style>
</head>
<body>

<div class="header">
  <div class="top-row">
    <img src="drpaiu-logo.png" alt="University Logo" class="logo">

    <div class="main-content">
      <p class="subheading">Maharashtra Cosmopolitan Education Society’s</p>
      <div class="university-name">DR. P. A. INAMDAR UNIVERSITY, PUNE</div>
      <p class="subheading">(Established under Maharashtra Act No. XXXVII of 2022)</p>
      <div class="address">
        2390 – B, K. B. Hidayatullah Road, Azam Campus, Camp, Maharashtra, Pune 411001.
      </div>
      <div class="contact-info">
        Website: <a href="https://www.drpaiu.edu.in">www.drpaiu.edu.in</a> |
        Email: <a href="mailto:info@drpaiu.edu.in">info@drpaiu.edu.in</a> |
        Contact: 020 26433202
      </div>
    </div>

    <div class="tags">
      🔻 EDUCATE<br>
      🔻 EMPOWER<br>
      🔻 EVOLVE
    </div>
  </div>

  <div class="footer-container">
  <div class="footer-left">
    Dr. P. A. Inamdar<br>
    <span class="footer-title">President - Chancellor</span>
  </div>
  <div class="footer-right">
    Dr. M. D. Lawrence<br>
    <span class="footer-title">Vice Chancellor</span>
  </div>
</div>

</div>

</body>
</html>
