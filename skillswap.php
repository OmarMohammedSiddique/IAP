<!DOCTYPE html>
<html style="font-size: 16px" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>SkillSwap</title>
    <link rel="stylesheet" href="nicepage.css" media="screen" />
    <link rel="stylesheet" href="SkillSwap.css" media="screen" />
    <script
      class="u-script"
      type="text/javascript"
      src="jquery.js"
      defer=""
    ></script>
    <script
      class="u-script"
      type="text/javascript"
      src="nicepage.js"
      defer=""
    ></script>
    <meta name="generator" content="Nicepage 5.15.1, nicepage.com" />
    <meta name="referrer" content="origin" />
    <link
      id="u-theme-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "SkillSwap",
        "logo": "images/skilsharelogo.png"
      }
    </script>
    <meta name="theme-color" content="#2799b1" />
    <meta property="og:title" content="SkillSwap" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-9c34">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        </a>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="Home.html">SkillSwap</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="Home.html"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="skillswap.php">SkillSwap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactus.html">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Join us
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="login.html">Log in</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="signup.html">Signup</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="aboutus.html"
                        >Learn more</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="wallpaper.html"
                        >Wallpapers</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true"
                    >Dashboard</a
                  >
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section class="u-clearfix u-palette-1-base u-section-1" id="sec-3bc9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-palette-1-base u-form-1">
          <form action="signup_process.php" method="POST">

            <div
              class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-1"
            >
              <label for="name-9311" class="u-label">First Name</label>
              <input
                type="text"
                placeholder="Enter your First Name"
                id="name-9311"
                name="name-1"
                class="u-input u-input-rectangle"
                required=""
              />
            </div>
            <div
              class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2"
            >
              <label for="name-9311" class="u-label">Last Name</label>
              <input
                type="text"
                placeholder="Enter your Last Name"
                id="name-9311"
                name="name-2"
                class="u-input u-input-rectangle"
                required=""
              />
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-1184" class="u-label">Email</label>
              <input
                type="email"
                placeholder="Enter a valid email address"
                id="email-1184"
                name="email"
                class="u-input u-input-rectangle"
                required=""
              />
            </div>
            <div class="u-form-date u-form-group u-form-group-4">
              <label for="date-4fdd" class="u-label">DateOfBirth</label>
              <input
                type="text"
                readonly="readonly"
                placeholder="MM/DD/YYYY"
                id="date-4fdd"
                name="date"
                class="u-input u-input-rectangle"
                required=""
                data-date-format="mm/dd/yyyy"
              />
            </div>
            <div class="u-form-group u-form-phone u-form-group-5">
              <label for="phone-728d" class="u-label">Phone</label>
              <input
                type="tel"
                pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                placeholder="Enter your phone (e.g. +14155552675)"
                id="phone-728d"
                name="phone"
                class="u-input u-input-rectangle"
                required=""
              />
            </div>
            <div class="u-form-group u-form-group-6">
              <label for="text-18a8" class="u-label">Password</label>
              <input
                type="text"
                placeholder="Enter your Password"
                id="text-18a8"
                name="password"
                class="u-input u-input-rectangle"
                required="required"
              />
            </div>
            <div class="u-form-group u-form-group-7">
              <label for="text-6b64" class="u-label">Confirm Password</label>
              <input
                type="text"
                placeholder="Confirm your Password"
                id="text-6b64"
                name="password-1"
                class="u-input u-input-rectangle"
                required="required"
              />
            </div>
            <div class="u-form-group u-form-select u-form-group-8">
              <label for="select-33b7" class="u-label">Gender</label>
              <div class="u-form-select-wrapper">
                <select
                  id="select-33b7"
                  name="select"
                  class="u-input u-input-rectangle"
                  required="required"
                >
                  <option value="Male" data-calc="">Male</option>
                  <option value="Female" data-calc="">Female</option>
                </select>
                <svg
                  class="u-caret u-caret-svg"
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  width="16px"
                  height="16px"
                  viewBox="0 0 16 16"
                  style="fill: currentColor"
                  xml:space="preserve"
                >
                  <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                </svg>
              </div>
            </div>
            <div class="u-form-checkbox-group u-form-group u-form-group-9">
              <label class="u-label">Select your course(s)</label>
              <div class="u-form-checkbox-group-wrapper">
                <div class="u-input-row">
                  <input
                    id="field-bf31"
                    type="checkbox"
                    name="checkbox[]"
                    value="Math"
                    class="u-active-palette-1-base u-border-2 u-border-grey-75 u-field-input"
                    checked="checked"
                    data-calc=""
                  />
                  <label class="u-field-label" for="field-bf31">Math</label>
                </div>
                <div class="u-input-row">
                  <input
                    id="field-8892"
                    type="checkbox"
                    name="checkbox[]"
                    value="Physics"
                    class="u-active-palette-1-base u-border-2 u-border-grey-75 u-field-input"
                    data-calc=""
                  />
                  <label class="u-field-label" for="field-8892">Physics</label>
                </div>
                <div class="u-input-row">
                  <input
                    id="field-3bdf"
                    type="checkbox"
                    name="checkbox[]"
                    value="Economics"
                    class="u-active-palette-1-base u-border-2 u-border-grey-75 u-field-input"
                    data-calc=""
                  />
                  <label class="u-field-label" for="field-3bdf"
                    >Economics</label
                  >
                </div>
              </div>
            </div>
            <div class="u-form-checkbox-group u-form-group u-form-group-10">
              <label class="u-label">Choose course(s) to teach</label>
              <div class="u-form-checkbox-group-wrapper">
                <div class="u-input-row">
                  <input
                    id="field-4762"
                    type="checkbox"
                    name="checkbox-1[]"
                    value="Math"
                    class="u-active-palette-1-base u-border-2 u-border-grey-75 u-field-input"
                    checked="checked"
                    data-calc=""
                  />
                  <label class="u-field-label" for="field-4762">Math</label>
                </div>
                <div class="u-input-row">
                  <input
                    id="field-4fce"
                    type="checkbox"
                    name="checkbox-1[]"
                    value="Physics"
                    class="u-active-palette-1-base u-border-2 u-border-grey-75 u-field-input"
                    data-calc=""
                  />
                  <label class="u-field-label" for="field-4fce">Physics</label>
                </div>
                <div class="u-input-row">
                  <input
                    id="field-a426"
                    type="checkbox"
                    name="checkbox-1[]"
                    value="Economics"
                    class="u-active-palette-1-base u-border-2 u-border-grey-75 u-field-input"
                    data-calc=""
                  />
                  <label class="u-field-label" for="field-a426"
                    >Economics</label
                  >
                </div>
              </div>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <a
                href="#"
                class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1"
              ></a>
              <input
                type="submit"
                value="submit"
                class="u-form-control-hidden"
              />
            </div>
            <div class="u-form-send-message u-form-send-success">
              Thank you! Your message has been sent.
            </div>
            <div class="u-form-send-error u-form-send-message">
              Unable to send your message. Please fix errors then try again.
            </div>
            <input type="hidden" value="" name="recaptchaResponse" />
            <input
              type="hidden"
              name="formServices"
              value="6d4e4ae0-7780-ef5d-bd07-75e5fb9ead90"
            />
          </form>
        </div>
        <p class="u-text u-text-default u-text-1">
          <a
            class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2"
            data-href="Login.html"
            >Already have an account? Login Here</a
          >
        </p>
        <p class="u-text u-text-2">
          Signup<span style="font-weight: 700"></span>
        </p>
      </div>
    </section>


  </body>
</html>
