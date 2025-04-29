<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (preg_match('/curl|wget/i', $userAgent)) {
    http_response_code(403);
    exit('Access denied');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manikandan - Portfolio</title>
  <script src="./assets/js/blockscript.js"></script>
   <link rel="shortcut icon" href="./assets/images/fav_icon2.png" type="image/x-icon"> 
  <link rel="stylesheet" href="./assets/css/style_checking.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <main>
    <aside class="sidebar" data-sidebar>
      <div class="sidebar-info">
        <figure class="avatar-box">
        <img src="./assets/images/output10111.png" alt="Manikandan H" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Manikandan H">Manikandan H</h1>

          <p class="title">Software / Web developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:igmaddy23@gmail.com.com" class="contact-link">igmaddy23@gmail.com</a>
            </div>

          </li> 

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+91967711XXX" class="contact-link">+91967711XXXX</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="20XX-01-23">Jan 23, 20XX</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Chennai, Tamilnadu</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

        

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>


    <div class="main-content">

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

           <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Certificate</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>


      <article class="about  active" data-page="about">

        <header>
          <h2 class="h3 article-title">Professional Summary</h2>
        </header>

        <section class="about-text">
          <p>
            A motivated and dedicated individual ✨ aiming to succeed in my chosen field by demonstrating professionalism 🤝, determination 💪, and a passion for continuous learning 📚 and development 🌱. Committed to utilizing my skills and abilities 🛠️ to contribute effectively to organizational goals 🎯 and achieve personal growth 🚀.
        </section>


        <header>
          <h2 class="h3 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            👋 
            I'm Manikandan H, a BTech graduate in IT, passionate about building impactful web applications. 🚀 I thrive on solving complex problems, optimizing performance, and creating exceptional user experiences. </p>

          <p>
            🔧 With a strong foundation in software development, I bring innovation, efficiency, and scalability to every project. 🤝 As a dedicated team player, I excel in collaborative environments, ensuring the delivery of high-quality, reliable applications.
          </p>
          <p>
            🌍 Driven by curiosity and continuous learning, I am eager to contribute my skills to dynamic tech initiatives, creating meaningful and lasting impact. ✨
          </p>
        </section>

        <section class="service">
          <h3 class="h3 service-title article-title">What I'm Doing</h3>
          <ul class="testimonials-list has-scrollbar">
        
            <!-- Web Development Item -->
            <li class="service-item" data-testimonials-item data-testimonials-date="June 2022 - Present">
              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40" data-testimonials-avatar>
              </div>
        
              <div class="service-content-box">
                <h4 class="h4 service-item-title" data-testimonials-title>Web Development</h4>
                <p class="service-item-text" data-testimonials-text>
                  High-quality development of sites at the professional level.
                </p>
              </div>
            </li>
        
            <!-- Photography Item -->
            <li class="service-item" data-testimonials-item data-testimonials-date="Feb 2019 - Present">
              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="Photography icon" width="40" data-testimonials-avatar>
              </div>
        
              <div class="service-content-box">
                <h4 class="h4 service-item-title" data-testimonials-title>Photography</h4>
                <p class="service-item-text" data-testimonials-text>
                  I make high-quality photos of any category at a professional level.
                </p>
              </div>
            </li>
        
          </ul>
        </section>
        
        <!-- Modal Section -->
        <div class="modal-container" data-modal-container>
          <div class="overlay" data-overlay></div>
          <section class="testimonials-modal">
            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
            <div class="modal-img-wrapper">
              <figure class="modal-avatar">
                <img src="./assets/images/avatar-1.png" alt="Daniel Lewis" width="80" data-modal-img>
              </figure>
              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>
            <div class="modal-content">
              <h4 class="h3 modal-title" data-modal-title>Daniel Lewis</h4>
              <time datetime="2022-06-14" class="modal-date" data-modal-date>June 2022 - Present</time> <!-- Date in Modal -->
              <div data-modal-text>
                <p>Working!</p>
              </div>
            </div>
          </section>
        </div>
              
      </article>

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">
            <li class="timeline-item">
               <!--  <h4 class="h4 timeline-item-title">B.Tech - IT (Information Technology)</h4> -->
                 <span class="timeline-date">B.Tech - IT (Information Technology)</span>
                  <h4 class="h4 timeline-item-title">St.Peter's College of Engineering and Technology</h4>
                  <span class="timeline-date">2021 — 2024 (Lateral Entry)</span>
            </li>


            <li class="timeline-item">
               <!--  <h4 class="h4 timeline-item-title">B.Tech - IT (Information Technology)</h4> -->
                 <span class="timeline-date">DCE - Diploma in Computer Engineering </span>
                  <h4 class="h4 timeline-item-title">Thai Moogambigai Polytechnic College</h4>
                  <span class="timeline-date">2018 - 2020</span>
            </li>

          </ol>

        </section>

             </section> 

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="layers-outline"></ion-icon>
            </div>

            <h3 class="h3">Technical Skills</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Programming Languages</h4>
                <ul class="skills-list content-card">
                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">
                                Python • PHP • JavaScript • HTML & CSS
                                <span class="hidden-values">85% 64% 80% 70% </span>
                            </h5>
                            <data class="progress-value" value="0"></data> 
                        </div>
                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill"></div>
                        </div>
                    </li>
                </ul>
            </li>
    
            <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Frameworks & Libraries</h4>
                <ul class="skills-list content-card">
                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">
                                FastAPI • React
                                <span class="hidden-values">75% 85%</span>
                            </h5>
                            <data class="progress-value" value="0"></data>
                        </div>
                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill"></div>
                        </div>
                    </li>
                </ul>
            </li>
    
            <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Databases & Backend</h4>
                <ul class="skills-list content-card">
                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">
                                  MySQL • Supabase • PostgreSQL
                                <span class="hidden-values">70% 80% 65%</span>
                            </h5>
                            <data class="progress-value" value="0"></data>
                        </div>
                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill"></div>
                        </div>
                    </li>
                </ul>
            </li>
    
            <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Cloud & Deployment</h4>
                <ul class="skills-list content-card">
                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">
                                Vercel • Netlify • GCP
                                <span class="hidden-values">85% 75% 80%</span>
                            </h5>
                            <data class="progress-value" value="0"></data>
                        </div>
                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill"></div>
                        </div>
                    </li>
                </ul>
            </li>
    
            <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Version Control</h4>
                <ul class="skills-list content-card">
                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">
                                Git • GitHub
                                <span class="hidden-values">90% 85%</span>
                            </h5>
                            <data class="progress-value" value="0"></data>
                        </div>
                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill"></div>
                        </div>
                    </li>
                </ul>
            </li>
    
            <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Other Skills</h4>
                <ul class="skills-list content-card">
                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">
                                API Development • Microsoft Office Suite (Word, Excel, PowerPoint, Outlook)
                                <span class="hidden-values">80% 75%</span>
                            </h5>
                            <data class="progress-value" value="0"></data>
                        </div>
                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill"></div>
                        </div>
                    </li>
                </ul>
            </li>
    
        </ol>

        </section>

        

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>


            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Finance</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

         
            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Landng Page.jpg" alt="IGM" loading="lazy">
                </figure>

                <h3 class="project-title">Ignish Monarch</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

          
          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="certificate">

        <header>
          <h2 class="h2 article-title">Certificate </h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box 1">
                  <img src="./assets/images/Guvi - webinar.png" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Webinar</p>

                    <span class="dot"></span>

                    <time datetime="2025-03-02">Mar 02, 2025</time>
                  </div>

                  <h3 class="h3 blog-item-title">Land fullstack in 3 months</h3>

                  <p class="blog-text">
                    Participated in a webinar focusing on industry best practices, emerging technologies, and career advancement strategies in full-stack development.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box 2">
                  <img src="./assets/images/cerificate-2.png" alt="SQL Certificate" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Webinar</p>

                    <span class="dot"></span>

                    <time datetime="2025-03-02">Mar 10, 2025</time>
                  </div>

                  <h3 class="h3 blog-item-title">Master SQL Basics in 90 mins</h3>

                  <p class="blog-text">
                    An intensive course providing hands-on experience in crafting efficient SQL queries, including single-table operations, joins, and subqueries. Covered practical applications across multiple database systems such as SQL Server, MySQL
                  </p>

                </div>

              </a>
            </li>

          
          </ul>

        </section>

      </article>

      <!--
        - #CONTACT
      -->
      <article class="contact" data-page="contact">
        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>
      
        <section class="contact-form">
          <h3 class="h3 form-title">Contact Form</h3>
      
          <form action="#" class="form" data-form autocomplete="off">
            <div class="input-wrapper">
              <div class="input-field">
                <input type="text" id="fullname" name="fullname" class="form-input" placeholder="Full name" required>
                <p class="error-message" id="fullnameError"></p> 
                <p class="feedback-message" id="fullnameFeedback"></p>
              </div>
            </div>
      
            <div class="input-wrapper">
              <div class="input-field">
                <input type="email" id="email" name="email" class="form-input" placeholder="Email address" required>
                <p class="error-message" id="emailError"></p> 
                <p class="feedback-message" id="emailFeedback"></p>
              </div>
            </div>

            <div class="input-wrapper">
              <div class="input-field">
                <input type="text" id="subject" name="subject" class="form-input" placeholder="Subject" required>
                <p class="error-message" id="subjectError"></p> 
                <p class="feedback-message" id="subjectFeedback"></p>
              </div>
            </div>
      
           <div class="input-wrapper">
    <div class="input-field">
        <div class="textarea-container">
            <textarea id="message" name="message" class="form-input" placeholder="Your Message" maxlength="100" required></textarea>
            <span id="charCount" class="char-count">0 / 100</span>
        </div>
        <p class="error-message" id="messageError"></p>
        <p class="feedback-message" id="messageFeedback"></p>
    </div>
</div>

            
      
            <button class="form-btn" type="button" id="sendButton" data-modal="contact">
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Email</span>
            </button>
          </form>
        </section>
      
        <!-- 🔹 Modal Now Inside Contact Page -->
        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  working!
                </p>
              </div>

            </div>

          </section>

        </div>
      </article>
      
      
    </div>

  </main>

  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>