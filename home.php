<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DPS Home Portal</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
     body {
      background-color: #f5f8fa;
      color: #333;
      line-height: 1.6;
      padding-bottom: 80px; /* for footer spacing */
    }
     header {
      background-color: #004080;
      color: white;
      padding: 20px 40px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
     header h1 {
      font-size: 2.5rem;
      letter-spacing: 2px;
    }
     .welcome, .cards, .admission-section {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
     .welcome h2 {
      font-size: 2rem;
      color: #004080;
      margin-bottom: 15px;
      text-align: center;
    }
     .welcome p {
      font-size: 1.2rem;
      color: #555;
      text-align: center;
    }
     .cards {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }
     .card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
      flex: 1 1 200px;
      max-width: 220px;
      padding: 25px 20px;
      text-align: center;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      user-select: none;
    }
     .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 15px rgba(0,0,0,0.15);
    }
     .card h3 {
      margin-bottom: 15px;
      color: #004080;
    }
     .card p {
      color: #666;
      font-size: 0.95rem;
    }
     footer {
      text-align: center;
      padding: 15px 0;
      background-color: #004080;
      color: white;
      font-size: 0.9rem;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
     /* Admission form */
    .admission-section {
      display: none;
      flex-direction: column;
    }
    /* Contact form */
    .contact-section {
      display: none;
      flex-direction: column;
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
     .admission-section h2 {
      color: #004080;
      text-align: center;
      margin-bottom: 20px;
    }
     form label {
      display: block;
      margin-top: 15px;
      font-weight: 600;
    }
     form input, form select, form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }
     form textarea {
      resize: vertical;
    }
     form button {
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #004080;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
    }
     form button:hover {
      background-color: #003366;
    }
     /* Close button */
    .close-btn {
      text-align: right;
    }
     .close-btn button {
      background: red;
      border: black;
      font-size: 1 rem;
      color: #ffffff;
      cursor: pointer;
    }
     .close-btn button:hover {
      color: #444;
    }
    @media (max-width: 600px) {
      .cards {
        flex-direction: column;
        max-width: 320px;
        margin: 20px auto 40px;
      }
    }
  </style>
</head>
<body>
   <header>
    <h1>Delhi Public School</h1>
  </header>
   <section class="welcome">
    <h2>Welcome to DPS Portal</h2>
    <p>Your gateway to excellence in education and holistic development.</p>
  </section>
   <section class="cards">
    <div class="card" id="admissions">
      <h3>Admissions</h3>
      <p>Apply online or learn about admission criteria, important dates, and procedures.</p>
    </div>
    <div class="card" id="academics">
      <h3>Academics</h3>
      <p>Explore curriculum, class schedules, and academic resources for students.</p>
    </div>
    <div class="card" id="events">
      <h3>Events</h3>
      <p>Stay updated with upcoming events, school functions, and extracurricular activities.</p>
    </div>
    <div class="card" id="contact">
      <h3>Contact</h3>
      <p>Get in touch with school administration, faculty, or support services.</p>
    </div>
  </section>
   <!-- ADMISSION FORM SECTION -->
  <section class="admission-section" id="admission-section">
    <div class="close-btn">
      <button onclick="document.getElementById('admission-section').style.display='none'">&times; Close</button>
    </div>
    <h2>Admission Form</h2>
    <form id="admissionForm" action="admission_process.php" method="post" onsubmit="handleSubmit(event)">
      <label for="studentName">Student Name *</label>
      <input type="text" id="studentName" name="studentName" placeholder="Enter full name" required />
       <label for="age">Age *</label>
      <input type="number" id="age" name="age" min="3" max="20" placeholder="Enter age" required />
       <label for="grade">Grade Applying For *</label>
      <select id="grade" name="grade" required>
        <option value="" disabled selected>Select Grade</option>
        <option value="Nursery">Nursery</option>
        <option value="KG">KG</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
       <label for="parentName">Parent/Guardian Name *</label>
      <input type="text" id="parentName" name="parentName" placeholder="Enter parent's full name" required />
       <label for="contact">Contact Number *</label>
      <input type="text" id="contact" name="contact" placeholder="Enter contact number" pattern="[0-9]{10}" title="10 digit phone number" required />
       <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Enter email (optional)" />
       <label for="address">Address *</label>
      <textarea id="address" name="address" placeholder="Enter residential address" required></textarea>
       <button type="submit">Submit Application</button>
    </form>
  </section>
  <!-- CONTACT FORM SECTION -->
  <section class="contact-section" id="contact-section">
    <div class="close-btn">
      <button onclick="document.getElementById('contact-section').style.display='none'">&times; Close</button>
    </div>
    <h2>Contact Us</h2>
    <form id="contactForm" action="#" method="POST" onsubmit="handleContactSubmit(event)">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Your full name" required />
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="you@example.com" required />
      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" placeholder="Subject of your message" required />
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
      <button type="submit">Send Message</button>
    </form>
    <div>
      <table>
        <tr><td><strong>Address:</strong></td><td>Delhi Public School, Sector 12, New Delhi, India</td></tr>
        <tr><td><strong>Phone:</strong></td><td>+91 12345 67890</td></tr>
        <tr><td><strong>Email:</strong></td><td>info@dps.edu.in</td></tr>
        <tr><td><strong>Hours:</strong></td><td>Mon - Fri, 9:00 AM to 5:00 PM</td></tr>
      </table>
    </div>
  </section>

  <!-- SUBMISSION RESULT SECTION -->
  <section class="submission-result" id="submission-result" style="display: none; max-width: 900px; margin: 40px auto; padding: 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <h2 style="color: #004080; text-align: center; margin-bottom: 20px;">Admission Application Submitted Successfully!</h2>
    <div id="submitted-data" style="font-size: 1.1rem; line-height: 1.6;"></div>
    <div style="text-align: center; margin-top: 20px;">
      <button onclick="document.getElementById('submission-result').style.display='none'; document.getElementById('admission-section').style.display='block';" style="padding: 10px 20px; background-color: #004080; color: white; border: none; border-radius: 5px; cursor: pointer;">Submit Another Application</button>
    </div>
  </section>

  <!-- CONTACT RESULT SECTION -->
  <section class="contact-result" id="contact-result" style="display: none; max-width: 900px; margin: 40px auto; padding: 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <h2 style="color: #004080; text-align: center; margin-bottom: 20px;">Message Sent Successfully!</h2>
    <div id="contact-data" style="font-size: 1.1rem; line-height: 1.6;"></div>
    <div style="text-align: center; margin-top: 20px;">
      <button onclick="document.getElementById('contact-result').style.display='none'; document.getElementById('contact-section').style.display='block';" style="padding: 10px 20px; background-color: #004080; color: white; border: none; border-radius: 5px; cursor: pointer;">Send Another Message</button>
    </div>
  </section>

  <!-- ACADEMICS SECTION -->
  <section class="academics-section" id="academics-section" style="display: none; max-width: 900px; margin: 40px auto; padding: 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <div class="close-btn">
      <button onclick="document.getElementById('academics-section').style.display='none'">&times; Close</button>
    </div>
    <h2 style="color: #004080; text-align: center; margin-bottom: 20px;">Academics</h2>
    <p style="font-size: 1.1rem; line-height: 1.6;">Welcome to the Academics section! Here you can explore our comprehensive curriculum, class schedules, and academic resources designed to foster excellence in education.</p>
    <ul style="font-size: 1rem; line-height: 1.8; margin-top: 20px;">
      <li><strong>Curriculum:</strong> CBSE-aligned syllabus with innovative teaching methods.</li>
      <li><strong>Class Schedules:</strong> Timetables available for all grades.</li>
      <li><strong>Resources:</strong> Online libraries, study materials, and interactive tools.</li>
      <li><strong>Excellence Programs:</strong> Special coaching for competitive exams and skill development.</li>
    </ul>
  </section>

  <!-- EVENTS SECTION -->
  <section class="events-section" id="events-section" style="display: none; max-width: 900px; margin: 40px auto; padding: 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <div class="close-btn">
      <button onclick="document.getElementById('events-section').style.display='none'">&times; Close</button>
    </div>
    <h2 style="color: #004080; text-align: center; margin-bottom: 20px;">Events</h2>
    <p style="font-size: 1.1rem; line-height: 1.6;">Stay updated with our exciting events, school functions, and extracurricular activities that enrich student life and promote holistic development.</p>
    <div style="margin-top: 20px;">
      <h3 style="color: #004080;">Upcoming Events:</h3>
      <ul style="font-size: 1rem; line-height: 1.8;">
        <li><strong>Annual Sports Day:</strong> March 15, 2025 - Show your athletic skills!</li>
        <li><strong>Science Fair:</strong> April 10, 2025 - Showcase innovative projects.</li>
        <li><strong>Cultural Fest:</strong> May 5, 2025 - Celebrate diversity and talent.</li>
        <li><strong>Parent-Teacher Meeting:</strong> Monthly - Connect with educators.</li>
      </ul>
    </div>
  </section>

   <footer>
    &copy; 2025 Delhi Public School. All Rights Reserved.
  </footer>
   <script>
    document.getElementById('admissions').addEventListener('click', function () {
      document.getElementById('admission-section').style.display = 'block';
      window.scrollTo({ top: document.getElementById('admission-section').offsetTop - 20, behavior: 'smooth' });
    });
    document.getElementById('academics').addEventListener('click', function () {
      window.location.href = 'academics.html';
    });
    document.getElementById('events').addEventListener('click', function () {
      window.location.href = 'events.html';
    });
    document.getElementById('contact').addEventListener('click', function () {
      document.getElementById('contact-section').style.display = 'block';
      window.scrollTo({ top: document.getElementById('contact-section').offsetTop - 20, behavior: 'smooth' });
    });

    function handleSubmit(event) {
      event.preventDefault(); // Prevent default form submission
      const formData = new FormData(event.target);
      let dataHtml = '';
      for (let [key, value] of formData.entries()) {
        const label = key.charAt(0).toUpperCase() + key.slice(1).replace(/([A-Z])/g, ' $1');
        dataHtml += `<p><strong>${label}:</strong> ${value}</p>`;
      }
      document.getElementById('submitted-data').innerHTML = dataHtml;
      document.getElementById('admission-section').style.display = 'none';
      document.getElementById('submission-result').style.display = 'block';
      window.scrollTo({ top: document.getElementById('submission-result').offsetTop - 20, behavior: 'smooth' });
      // In a real server setup, this would submit to PHP
    }

    function handleContactSubmit(event) {
      event.preventDefault(); // Prevent default form submission
      const formData = new FormData(event.target);
      let dataHtml = '';
      for (let [key, value] of formData.entries()) {
        const label = key.charAt(0).toUpperCase() + key.slice(1).replace(/([A-Z])/g, ' $1');
        dataHtml += `<p><strong>${label}:</strong> ${value}</p>`;
      }
      document.getElementById('contact-data').innerHTML = dataHtml;
      document.getElementById('contact-section').style.display = 'none';
      document.getElementById('contact-result').style.display = 'block';
      window.scrollTo({ top: document.getElementById('contact-result').offsetTop - 20, behavior: 'smooth' });
      // In a real server setup, this would submit to PHP
    }
  </script>
 </body>
</html>