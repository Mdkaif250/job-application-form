<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Important Information Application Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #f8fafc 0%, #e0e7ef 100%);
      min-height: 100vh;
    }
    .form-section {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 2rem 1.5rem;
      margin-bottom: 2rem;
      transition: box-shadow 0.2s;
    }
    .form-section:not(.hidden):hover {
      box-shadow: 0 4px 24px rgba(0,0,0,0.12);
    }
    .hidden { display: none !important; }
    .form-label {
      font-weight: 500;
      color: #2d3748;
    }
    .form-control, .form-select {
      border-radius: 0.5rem;
      border: 1px solid #bfc9d1;
      box-shadow: none;
      transition: border-color 0.2s;
    }
    .form-control:focus, .form-select:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.1rem rgba(13,110,253,.15);
    }
    .section-title {
      border-left: 4px solid #0d6efd;
      padding-left: 0.75rem;
      margin-bottom: 1.25rem;
      font-weight: 600;
      color: #0d6efd;
      background: linear-gradient(90deg, #e7f1ff 0%, #fff 100%);
      border-radius: 0.25rem;
    }
    .required-star {
      color: #e3342f;
      font-size: 1.1em;
      margin-left: 2px;
    }
    .custom-btn {
      padding: 0.75rem 2.5rem;
      font-size: 1.1rem;
      border-radius: 2rem;
      font-weight: 600;
      letter-spacing: 0.03em;
    }
    .info-list li {
      margin-bottom: 0.5rem;
      font-size: 1.05rem;
    }
    @media (max-width: 767px) {
      .form-section {
        padding: 1rem 0.5rem;
      }
    }
  </style>
</head>
<body>

<?php include('header.php'); ?>
<div class="container my-5">
  <h3 class="mb-3 text-danger fw-bold">Important Information</h3>
  <ul class="mb-4 info-list">
    <li>Read the advertisement carefully before filling out the application form.</li>
    <li>Fill in all the required fields correctly.</li>
    <li>Wrong entries / incomplete forms will not be considered.</li>
    <li>Please attach your updated CV and all documents in a single PDF file.</li>
    <li>For the <strong>Teaching post</strong>, all documents are mandatory.</li>
  </ul>

  <form action="submit_form.php" method="POST" enctype="multipart/form-data" class="row g-4 needs-validation" novalidate>
    <div class="form-section col-12">
      <div class="row g-3">
        <div class="col-md-6">
          <label for="email" class="form-label">Email <span class="required-star">*</span></label>
          <input type="email" class="form-control" id="email" name="email" required autocomplete="email" placeholder="your@email.com">
          <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
        <div class="col-md-6">
          <label for="application_for" class="form-label">Application For <span class="required-star">*</span></label>
          <select class="form-select" id="application_for" name="application_for" onchange="toggleFormSections()" required>
            <option value="">Select</option>
            <option value="Teaching">Teaching</option>
            <option value="Non-Teaching">Non-Teaching</option>
          </select>
          <div class="invalid-feedback">Please select an option.</div>
        </div>
      </div>
    </div>

    <!-- Teaching Form Section -->
    <div id="teaching-form" class="form-section hidden">
      <div class="section-title mb-3">Teaching Application</div>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="college" class="form-label">Name of College/Department <span class="required-star">*</span></label>
          <select class="form-select" name="college" required>
            <option value="">Select</option>
            <option>HGM Azam College of Education</option>
            <option>MBA (HHM)</option>
            <option>Allana College of Architecture</option>
            <option>School of Visual Effects, Design & Art</option>
            <option>Allana Institute of Computer Application and IT</option>
          </select>
          <div class="invalid-feedback">Please select a college/department.</div>
        </div>
        <div class="col-md-6">
          <label class="form-label">Application for the Course</label>
          <select class="form-select" name="course">
            <option value="">Select</option>
            <option>B.Ed.</option>
            <option>B.A. B.Ed.</option>
            <option>B.Sc. B.Ed.</option>
            <option>M.Ed.</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Teaching Post (If applicable)</label>
          <select class="form-select" name="teaching_post">
            <option value="">Select</option>
            <option>Professor</option>
            <option>Associate Professor</option>
            <option>Assistant Professor</option>
          </select>
        </div>
      </div>

      <div class="section-title mt-4">Personal Information</div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Full Name (CAPITAL LETTERS) <span class="required-star">*</span></label>
          <input type="text" class="form-control text-uppercase" name="full_name" required placeholder="FULL NAME">
          <div class="invalid-feedback">Please enter your full name.</div>
        </div>
        <div class="col-md-6">
          <label class="form-label">Present Address (CAPITAL LETTERS) <span class="required-star">*</span></label>
          <textarea class="form-control text-uppercase" name="address" rows="2" required placeholder="ADDRESS"></textarea>
          <div class="invalid-feedback">Please enter your address.</div>
        </div>
        <div class="col-md-6">
          <label class="form-label">Mobile Number <span class="required-star">*</span></label>
          <input type="tel" class="form-control" name="mobile" required pattern="[0-9]{10}" maxlength="10" placeholder="10-digit number">
          <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
        </div>
        <div class="col-md-6">
          <label class="form-label">Date of Birth <span class="required-star">*</span></label>
          <input type="date" class="form-control" name="dob" required>
          <div class="invalid-feedback">Please select your date of birth.</div>
        </div>
        <div class="col-md-6">
          <label class="form-label">Aadhar Number</label>
          <input type="text" class="form-control" name="aadhar" pattern="[0-9]{12}" maxlength="12" placeholder="12-digit Aadhar">
        </div>
        <div class="col-md-6">
          <label class="form-label">PAN Number</label>
          <input type="text" class="form-control" name="pan" maxlength="10" placeholder="ABCDE1234F">
        </div>
        <div class="col-md-6">
          <label class="form-label">Category</label>
          <select class="form-select" name="category">
            <option>General</option>
            <option>OBC</option>
            <option>SC</option>
            <option>ST</option>
            <option>Minority</option>
            <option>Other</option>
          </select>
        </div>
      </div>

      <div class="section-title mt-4">Qualification Details</div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Undergraduate Degree</label>
          <input type="text" class="form-control" name="ug_degree" placeholder="e.g. B.Sc.">
        </div>
        <div class="col-md-3">
          <label class="form-label">UG Percentage / Grade</label>
          <input type="text" class="form-control" name="ug_grade" placeholder="e.g. 75%">
        </div>
        <div class="col-md-3">
          <label class="form-label">UG Passing Year</label>
          <input type="text" class="form-control" name="ug_year" maxlength="4" placeholder="e.g. 2020">
        </div>
        <div class="col-md-6">
          <label class="form-label">UG Institute / University</label>
          <input type="text" class="form-control" name="ug_university">
        </div>
        <div class="col-md-6">
          <label class="form-label">Post-Graduate Degree</label>
          <input type="text" class="form-control" name="pg_degree">
        </div>
        <div class="col-md-6">
          <label class="form-label">Specialisation in PG</label>
          <input type="text" class="form-control" name="pg_specialisation">
        </div>
        <div class="col-md-3">
          <label class="form-label">PG Grade</label>
          <input type="text" class="form-control" name="pg_grade">
        </div>
        <div class="col-md-3">
          <label class="form-label">PG Year</label>
          <input type="text" class="form-control" name="pg_year" maxlength="4">
        </div>
        <div class="col-md-6">
          <label class="form-label">PG University</label>
          <input type="text" class="form-control" name="pg_university">
        </div>
        <div class="col-md-6">
          <label class="form-label">Ph.D. Specialization</label>
          <input type="text" class="form-control" name="phd_specialization" placeholder="NA if not applicable">
        </div>
        <div class="col-md-6">
          <label class="form-label">Title of Ph.D. Thesis</label>
          <input type="text" class="form-control" name="phd_title">
        </div>
        <div class="col-md-6">
          <label class="form-label">Ph.D. Compilation Year</label>
          <input type="text" class="form-control" name="phd_year" maxlength="4">
        </div>
        <div class="col-md-6">
          <label class="form-label">University Name</label>
          <input type="text" class="form-control" name="phd_university">
        </div>
      </div>

      <div class="section-title mt-4">Experience Details</div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Total Experience</label>
          <input type="text" class="form-control" name="exp_total" placeholder="e.g. 5 years">
        </div>
        <div class="col-md-6">
          <label class="form-label">Teaching Experience</label>
          <input type="text" class="form-control" name="exp_teaching">
        </div>
        <div class="col-md-6">
          <label class="form-label">Research Experience</label>
          <input type="text" class="form-control" name="exp_research">
        </div>
        <div class="col-md-6">
          <label class="form-label">Administrative Experience</label>
          <input type="text" class="form-control" name="exp_admin">
        </div>
      </div>

      <div class="section-title mt-4">Research Details</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">No. of Papers (National)</label><input type="text" class="form-control" name="paper_national"></div>
        <div class="col-md-6"><label class="form-label">No. of Papers (International)</label><input type="text" class="form-control" name="paper_international"></div>
        <div class="col-md-6"><label class="form-label">Books/Chapters Published</label><input type="text" class="form-control" name="books_published"></div>
        <div class="col-md-6"><label class="form-label">No. of Patents</label><input type="text" class="form-control" name="patents"></div>
        <div class="col-md-6"><label class="form-label">Seminars/Workshops Attended</label><input type="text" class="form-control" name="seminars_attended"></div>
        <div class="col-md-6"><label class="form-label">Seminars/Workshops Organized</label><input type="text" class="form-control" name="seminars_organized"></div>
        <div class="col-md-6"><label class="form-label">Ph.D. Students Guided</label><input type="text" class="form-control" name="phd_guided"></div>
        <div class="col-md-3"><label class="form-label">H-Index</label><input type="text" class="form-control" name="h_index"></div>
        <div class="col-md-3"><label class="form-label">I-Index</label><input type="text" class="form-control" name="i_index"></div>
        <div class="col-md-12"><label class="form-label">Achievements / Awards</label><textarea class="form-control" name="achievements" rows="2"></textarea></div>
      </div>

      <div class="section-title mt-4">Salary Details</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Current Salary per Month (Rs)</label><input type="text" class="form-control" name="salary_current"></div>
        <div class="col-md-6"><label class="form-label">Expected Salary per Month (Rs)</label><input type="text" class="form-control" name="salary_expected"></div>
      </div>

      <div class="section-title mt-4">Document Upload</div>
      <div class="row g-3">
        <div class="col-md-12">
          <label class="form-label">Upload Combined PDF (CV, Marksheets, Certificates etc) <span class="required-star">*</span></label>
          <input type="file" class="form-control" name="combined_pdf" accept="application/pdf" required>
          <div class="invalid-feedback">Please upload your combined PDF.</div>
        </div>
        <div class="col-md-6"><label class="form-label">Papers Published PDF</label><input type="file" class="form-control" name="papers_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Books/Chapters PDF</label><input type="file" class="form-control" name="books_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Patents PDF</label><input type="file" class="form-control" name="patents_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Seminars/Workshops PDF</label><input type="file" class="form-control" name="seminars_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Ph.D. Students PDF</label><input type="file" class="form-control" name="phd_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Passport Size Photo (PDF)</label><input type="file" class="form-control" name="photo_pdf" accept="application/pdf"></div>
      </div>

      <div class="form-check mt-4">
        <input class="form-check-input" type="checkbox" id="declaration" required>
        <label class="form-check-label" for="declaration">
          I hereby affirm that the above details are true to the best of my knowledge &amp; belief. I understand that if any information provided is false, my candidature is liable to be cancelled.
        </label>
        <div class="invalid-feedback">You must agree before submitting.</div>
      </div>
    </div>

    <!-- Non-Teaching Form Section -->
    <div id="nonteaching-form" class="form-section hidden">
      <div class="section-title mb-3">Non-Teaching Application</div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Application for the Post</label>
          <select class="form-select" name="nonteaching_post">
            <option>Chief Finance & Accounts Officer</option>
            <option>Deputy Registrar</option>
            <option>Training & Placement</option>
            <option>Assistant Registrar</option>
            <option>Assistant Controller of Examinations</option>
            <option>Accountant</option>
            <option>Clerk</option>
          </select>
        </div>
      </div>

      <div class="section-title mt-4">Personal Information</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Full Name <span class="required-star">*</span></label><input type="text" class="form-control" name="full_name" required></div>
        <div class="col-md-6"><label class="form-label">Present Address <span class="required-star">*</span></label><textarea class="form-control" name="address" rows="2" required></textarea></div>
        <div class="col-md-6"><label class="form-label">Mobile Number <span class="required-star">*</span></label><input type="tel" class="form-control" name="mobile" required pattern="[0-9]{10}" maxlength="10"></div>
        <div class="col-md-6"><label class="form-label">Email ID</label><input type="email" class="form-control" name="email_id"></div>
        <div class="col-md-6"><label class="form-label">Date of Birth</label><input type="date" class="form-control" name="dob"></div>
        <div class="col-md-6"><label class="form-label">Aadhar Number</label><input type="text" class="form-control" name="aadhar" pattern="[0-9]{12}" maxlength="12"></div>
        <div class="col-md-6"><label class="form-label">PAN Number</label><input type="text" class="form-control" name="pan" maxlength="10"></div>
        <div class="col-md-6"><label class="form-label">Category</label><input type="text" class="form-control" name="category"></div>
      </div>

      <div class="section-title mt-4">Qualification Details</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Undergraduate Degree</label><input type="text" class="form-control" name="ug_degree"></div>
        <div class="col-md-3"><label class="form-label">UG Percentage / Grade</label><input type="text" class="form-control" name="ug_grade"></div>
        <div class="col-md-3"><label class="form-label">UG Passing Year</label><input type="text" class="form-control" name="ug_year" maxlength="4"></div>
        <div class="col-md-6"><label class="form-label">UG Institute / University</label><input type="text" class="form-control" name="ug_university"></div>
      </div>

      <div class="section-title mt-4">Experience Details</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Total Experience</label><input type="text" class="form-control" name="exp_total"></div>
        <div class="col-md-6"><label class="form-label">Teaching Experience</label><input type="text" class="form-control" name="exp_teaching"></div>
        <div class="col-md-6"><label class="form-label">Research Experience</label><input type="text" class="form-control" name="exp_research"></div>
        <div class="col-md-6"><label class="form-label">Administrative Experience</label><input type="text" class="form-control" name="exp_admin"></div>
      </div>

      <div class="section-title mt-4">Research Details</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Papers (National)</label><input type="text" class="form-control" name="paper_national"></div>
        <div class="col-md-6"><label class="form-label">Papers (International)</label><input type="text" class="form-control" name="paper_international"></div>
        <div class="col-md-6"><label class="form-label">Books / Chapters Published</label><input type="text" class="form-control" name="books_published"></div>
        <div class="col-md-6"><label class="form-label">Patents</label><input type="text" class="form-control" name="patents"></div>
        <div class="col-md-6"><label class="form-label">Seminars Attended</label><input type="text" class="form-control" name="seminars_attended"></div>
        <div class="col-md-6"><label class="form-label">Seminars Organized</label><input type="text" class="form-control" name="seminars_organized"></div>
        <div class="col-md-6"><label class="form-label">Ph.D. Students Guided</label><input type="text" class="form-control" name="phd_guided"></div>
        <div class="col-md-3"><label class="form-label">H Index</label><input type="text" class="form-control" name="h_index"></div>
        <div class="col-md-3"><label class="form-label">I Index</label><input type="text" class="form-control" name="i_index"></div>
        <div class="col-md-12"><label class="form-label">Achievements / Awards</label><textarea class="form-control" name="achievements" rows="2"></textarea></div>
      </div>

      <div class="section-title mt-4">Salary Details</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Current Salary</label><input type="text" class="form-control" name="salary_current"></div>
        <div class="col-md-6"><label class="form-label">Expected Salary</label><input type="text" class="form-control" name="salary_expected"></div>
      </div>

      <div class="section-title mt-4">Document Upload</div>
      <div class="row g-3">
        <div class="col-md-12"><label class="form-label">Combined PDF (CV, Certificates) <span class="required-star">*</span></label><input type="file" class="form-control" name="combined_pdf" accept="application/pdf" required></div>
        <div class="col-md-6"><label class="form-label">Papers Published PDF</label><input type="file" class="form-control" name="papers_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Books/Chapters PDF</label><input type="file" class="form-control" name="books_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Patents PDF</label><input type="file" class="form-control" name="patents_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Seminars PDF</label><input type="file" class="form-control" name="seminars_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Ph.D. Guided PDF</label><input type="file" class="form-control" name="phd_pdf" accept="application/pdf"></div>
        <div class="col-md-6"><label class="form-label">Passport Size Photo</label><input type="file" class="form-control" name="photo_pdf" accept="application/pdf"></div>
      </div>

      <div class="form-check mt-4">
        <input class="form-check-input" type="checkbox" id="declaration_nonteaching" required>
        <label class="form-check-label" for="declaration_nonteaching">
          I hereby affirm that the above details are true to the best of my knowledge &amp; belief. I understand that if any information provided is false, my candidature is liable to be cancelled.
        </label>
        <div class="invalid-feedback">You must agree before submitting.</div>
      </div>
    </div>

    <div class="col-12 text-center mt-4">
      <button type="submit" class="btn btn-success custom-btn">Submit Application</button>
    </div>
  </form>
</div>

<script>
function toggleFormSections() {
  const selected = document.getElementById('application_for').value;
  document.getElementById('teaching-form').classList.add('hidden');
  document.getElementById('nonteaching-form').classList.add('hidden');
  if (selected === 'Teaching') {
    document.getElementById('teaching-form').classList.remove('hidden');
  } else if (selected === 'Non-Teaching') {
    document.getElementById('nonteaching-form').classList.remove('hidden');
  }
}

// Bootstrap validation
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>
