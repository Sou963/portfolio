<?php
$successMsg = '';
$errorMsg   = '';

if (isset($_POST['submit'])) {
  $name    = trim($_POST['Name']    ?? '');
  $email   = trim($_POST['Email']   ?? '');
  $number  = trim($_POST['Number']  ?? '');
  $address = trim($_POST['Address'] ?? '');

  if ($name && $email && $number && $address) {
    // Suppress connection warnings with @ and handle manually
    $conn = @mysqli_connect(
      'sql312.infinityfree.com',
      'if0_42120550',
      'PbUuzIa3S1',
      'if0_42120550_portfolio'
    );

    if (!$conn) {
      $errorMsg = "Could not connect to the database. Please try again later.";
    } else {
      // Use prepared statement — prevents SQL injection
      $stmt = $conn->prepare(
        "INSERT INTO contacts (name, email, number, address) VALUES (?, ?, ?, ?)"
      );
      if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $number, $address);
        if ($stmt->execute()) {
          $successMsg = "Message sent! I'll get back to you soon. 🎉";
        } else {
          $errorMsg = "Submission failed. Please try again.";
        }
        $stmt->close();
      } else {
        $errorMsg = "Database error. Please try again.";
      }
      $conn->close();
    }
  } else {
    $errorMsg = "Please fill in all fields.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sourav Bosu — Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div class="cursor" id="cursor"></div>
  <div class="cursor-trail" id="cursor-trail"></div>

  <nav class="navbar" id="navbar">
    <div class="nav-container">
      <a class="nav-brand" href="#">SB<span class="dot">.</span></a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
      <ul class="nav-links" id="navLinks">
        <li><a href="#Home" class="nav-link">Home</a></li>
        <li><a href="#Aboutme" class="nav-link">About</a></li>
        <li><a href="#Experience" class="nav-link">Experience</a></li>
        <li><a href="#Research" class="nav-link">Research</a></li>
        <li><a href="#Project" class="nav-link">Projects</a></li>
        <li><a href="#Contact" class="nav-link">Contact</a></li>
        <li><a href="image/Sourav_Bosu_CV.pdf" class="nav-link cv-btn" download>CV</a></li>
        <li><button class="theme-toggle" id="themeToggle" aria-label="Toggle theme"><i class="fa-solid fa-moon"></i></button></li>
      </ul>
    </div>
  </nav>

  <section id="Home" class="hero">
    <div class="hero-bg">
      <div class="grid-overlay"></div>
      <div class="orb orb1"></div>
      <div class="orb orb2"></div>
      <div class="orb orb3"></div>
    </div>
    <div class="hero-container">
      <div class="hero-image-wrap">
        <div class="image-ring ring1"></div>
        <div class="image-ring ring2"></div>
        <img src="image/souravbosu.jpeg" class="hero-img" alt="Sourav Bosu" />
        <div class="status-badge"><span class="pulse-dot"></span>Available for work</div>
      </div>
      <div class="hero-text">
        <p class="hero-greeting">Hello there 👋</p>
        <h1 class="hero-name">Sourav<br><span class="outline-text">Bosu</span></h1>
        <p class="hero-title">
          <span class="typed-text" id="typedText"></span><span class="cursor-blink">|</span>
        </p>
        <p class="hero-desc">Crafting digital experiences with code &amp; creativity.</p>
        <div class="hero-cta">
          <a href="backend/hire.php" class="btn-primary">Hire Me <i class="fa-solid fa-arrow-right"></i></a>
          <a href="#Project" class="btn-secondary">View Work</a>
        </div>
        <div class="hero-socials">
          <a href="https://github.com/Sou963" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/sourav-bosu/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.facebook.com/sourav.sbose.003" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
      </div>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-line"></div>
    </div>
  </section>

  <section id="Aboutme" class="about section-pad">
    <div class="section-container">
      <div class="section-label">01 / About</div>
      <h2 class="section-title">Who I Am</h2>
      <div class="about-grid">
        <div class="about-text">
          <p>👋 Hi there! I'm the mind behind innovative web and app solutions that not only meet but exceed user expectations. Passionate about crafting digital experiences that delight and engage, I've spent years honing my craft in web and mobile development.</p>
          <p>📱💻 From concept to code, every project I touch turns into a user-centric platform where aesthetics meet functionality. My toolbox is full of HTML, CSS, JavaScript, React — each used to elevate user interfaces for more intuitive digital interactions.</p>
          <p>Beyond my technical skills, my projects are known for their robust performance, a testament to my meticulous back-end work using Node.js and PHP. I also know databases like MySQL, MongoDB, and Mongoose.</p>
        </div>
        <div class="skills-grid">
          <h4 class="skills-label">Tech Stack</h4>
          <div class="skill-tags">
            <span class="tag tag-highlight">JavaScript</span>
            <span class="tag tag-highlight">React.js</span>
            <span class="tag tag-highlight">Node.js</span>
            <span class="tag tag-highlight">PHP</span>
            <span class="tag tag-highlight">Flutter</span>
            <span class="tag">HTML / CSS</span>
            <span class="tag">Next.js</span>
            <span class="tag">TypeScript</span>
            <span class="tag">MySQL</span>
            <span class="tag">MongoDB</span>
            <span class="tag">Python</span>
            <span class="tag">C / C++</span>
            <span class="tag">Dart</span>
            <span class="tag">Bootstrap</span>
            <span class="tag">Tailwind CSS</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Experience" class="experience section-pad alt-bg">
    <div class="section-container">
      <div class="section-label">02 / Experience</div>
      <h2 class="section-title">Work History</h2>
      <div class="timeline">

        <div class="timeline-item reveal">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <div class="timeline-meta">
              <span class="timeline-period">May 2024 – Oct 2024</span>
              <span class="timeline-badge">Past</span>
            </div>
            <h3 class="timeline-role">Data Entry Operator</h3>
            <p class="timeline-company"><i class="fa-solid fa-building"></i> Intelligent Image Management Limited</p>
            <p class="timeline-desc">Responsible for inputting and managing data within the organization, ensuring accuracy and efficiency in all tasks.</p>
          </div>
        </div>

        <div class="timeline-item reveal">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <div class="timeline-meta">
              <span class="timeline-period">Nov 2024 – Jun 2025</span>
              <span class="timeline-badge">Past</span>
            </div>
            <h3 class="timeline-role">Computer Trainer</h3>
            <p class="timeline-company"><i class="fa-solid fa-building"></i> DCTI</p>
            <p class="timeline-desc">Conducted training sessions for students on MS Word, MS Excel, and MS PowerPoint, enhancing their technical skills.</p>
          </div>
        </div>

        <div class="timeline-item reveal">
          <div class="timeline-dot active"></div>
          <div class="timeline-content active-card">
            <div class="timeline-meta">
              <span class="timeline-period">Jul 2025 – Present</span>
              <span class="timeline-badge badge-active">Current</span>
            </div>
            <h3 class="timeline-role">Frontend Web Developer</h3>
            <p class="timeline-company"><i class="fa-solid fa-building"></i> Scalup Ads Agency</p>
            <p class="timeline-desc">Developed and maintained responsive websites using HTML, CSS, JavaScript, TypeScript and frameworks like Bootstrap, Tailwind CSS, Daisy UI, React, Next.js. Collaborated with designers and backend developers to deliver user-friendly interfaces.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="Research" class="research section-pad">
    <div class="section-container">
      <div class="section-label">03 / Research</div>
      <h2 class="section-title">Research Work</h2>
      <div class="research-card reveal">
        <div class="research-tag"><span class="pulse-dot green"></span> Running — August 2025</div>
        <h3 class="research-title">Animal Disease Detection Using Image &amp; Symptom Classification</h3>
        <p class="research-subtitle">Lumpy Skin Disease (LSD) Detection System</p>
        <div class="research-body">
          <div class="research-col">
            <div class="research-highlight">
              <i class="fa-solid fa-virus"></i>
              <div>
                <strong>The Disease</strong>
                <p>Lumpy Skin Disease (LSD) is a contagious viral disease in cattle caused by <em>Capripoxvirus</em>, characterized by firm nodules, fever, swollen lymph nodes, and reduced milk production.</p>
              </div>
            </div>
            <div class="research-highlight">
              <i class="fa-solid fa-eye"></i>
              <div>
                <strong>Image Analysis</strong>
                <p>Computer vision techniques analyze cattle images to detect skin nodules and lesions automatically with high precision.</p>
              </div>
            </div>
          </div>
          <div class="research-col">
            <div class="research-highlight">
              <i class="fa-solid fa-clipboard-list"></i>
              <div>
                <strong>Symptom Input</strong>
                <p>The system collects user-inputted symptoms (fever, appetite loss, etc.) to strengthen and validate the diagnosis.</p>
              </div>
            </div>
            <div class="research-highlight">
              <i class="fa-solid fa-bullseye"></i>
              <div>
                <strong>Goal</strong>
                <p>Assist farmers and veterinarians in early, accurate LSD detection — reducing disease spread and economic losses.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Project" class="projects section-pad alt-bg">
    <div class="section-container">
      <div class="section-label">04 / Projects</div>
      <h2 class="section-title">Recent Work</h2>
      <div class="projects-grid">

        <div class="project-card reveal">
          <div class="project-img-wrap">
            <img src="image/abc_university_protal.png" alt="ABC University Portal" class="project-img" />
            <div class="project-overlay">
              <a href="https://abc-university-protal.vercel.app/" target="_blank" class="project-link">View Live <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="project-info">
            <h4 class="project-title">ABC University Portal</h4>
            <p class="project-tech">React • Express.js • Mongoose • Vercel</p>
          </div>
        </div>

        <div class="project-card reveal">
          <div class="project-img-wrap">
            <img src="image/movie_site.png" alt="Movie App" class="project-img" />
            <div class="project-overlay">
              <a href="https://movie-review-tnt.vercel.app/pages/Top-rated" target="_blank" class="project-link">View Live <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="project-info">
            <h4 class="project-title">Movie App</h4>
            <p class="project-tech">Next.js • API • Express.js • MongoDB • Vercel</p>
          </div>
        </div>

        <div class="project-card reveal">
          <div class="project-img-wrap">
            <img src="image/dom.png" alt="Drum" class="project-img" />
            <div class="project-overlay">
              <a href="https://sou963.github.io/DOM/" target="_blank" class="project-link">View Live <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="project-info">
            <h4 class="project-title">Drum Kit</h4>
            <p class="project-tech">HTML • CSS • JavaScript</p>
          </div>
        </div>

        <div class="project-card reveal">
          <div class="project-img-wrap">
            <img src="image/satheaci.png" alt="Satheaci" class="project-img" />
            <div class="project-overlay">
              <a href="https://sateachi-com.vercel.app/" target="_blank" class="project-link">View Live <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="project-info">
            <h4 class="project-title">Satheaci</h4>
            <p class="project-tech">React • Express.js • MongoDB • Vercel</p>
          </div>
        </div>

        <div class="project-card reveal">
          <div class="project-img-wrap">
            <img src="image/location_tracker.png" alt="Location Tracker" class="project-img" />
            <div class="project-overlay">
              <a href="https://location-founder.vercel.app/" target="_blank" class="project-link">View Live <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="project-info">
            <h4 class="project-title">Location Tracker</h4>
            <p class="project-tech">Express.js • Maps API • MongoDB</p>
          </div>
        </div>

        <div class="project-card reveal">
          <div class="project-img-wrap">
            <img src="image/ludo.png" alt="Ludo Game" class="project-img" />
            <div class="project-overlay">
              <a href="https://ludo-sb.netlify.app/" target="_blank" class="project-link">View Live <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="project-info">
            <h4 class="project-title">Ludo Game</h4>
            <p class="project-tech">HTML • Bootstrap • JavaScript</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="Contact" class="contact section-pad">
    <div class="section-container">
      <div class="section-label">05 / Contact</div>
      <h2 class="section-title">Get In Touch</h2>
      <div class="contact-grid">
        <div class="contact-info">
          <p class="contact-intro">Have a project in mind or want to work together? I'd love to hear from you.</p>
          <div class="contact-details">
            <div class="contact-item">
              <i class="fa-solid fa-location-dot"></i>
              <span>Dhaka, Bangladesh</span>
            </div>
            <div class="contact-item">
              <i class="fa-solid fa-phone"></i>
              <span>01737992520</span>
            </div>
            <div class="contact-item">
              <i class="fa-solid fa-envelope"></i>
              <span>souravbosu844@gmail.com</span>
            </div>
          </div>
          <div class="contact-socials">
            <a href="https://github.com/Sou963" target="_blank" class="social-card"><i class="fab fa-github"></i><span>GitHub</span></a>
            <a href="https://www.linkedin.com/in/sourav-bosu/" target="_blank" class="social-card"><i class="fab fa-linkedin"></i><span>LinkedIn</span></a>
            <a href="https://www.facebook.com/sourav.sbose.003" target="_blank" class="social-card"><i class="fab fa-facebook"></i><span>Facebook</span></a>
          </div>
        </div>
        <form action="index.php" method="post" class="contact-form">
          <div class="form-row">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="Name" placeholder="Your name" required />
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="Email" placeholder="your@email.com" required />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Phone</label>
              <input type="text" name="Number" placeholder="Your number" required />
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" name="Address" placeholder="Your address" required />
            </div>
          </div>
          <button type="submit" name="submit" class="btn-primary full-width">Send Message <i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-brand">SB<span class="dot">.</span></div>
      <p class="footer-copy">© 2025 Sourav Bosu. Crafted with <span style="color:var(--accent)">♥</span></p>
      <div class="footer-links">
        <a href="#Home">Home</a>
        <a href="#Aboutme">About</a>
        <a href="#Project">Projects</a>
        <a href="#Contact">Contact</a>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>