<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Important Information Application Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
  </style>
</head>
<body class="bg-light">
  
  <?php include('header.php'); ?>
<div class="container my-5">
  <h3 class="mb-3 text-danger">Important Information</h3>
  <ul class="mb-4">
    <li>Read the advertisement carefully before filling out the application form.</li>
    <li>Fill in all the required fields correctly.</li>
    <li>Wrong entries / incomplete forms will not be considered.</li>
    <li>Please attach your updated CV and all documents in a single PDF file.</li>
    <li>For the <strong>Teaching post</strong>, all documents are mandatory.</li>
  </ul>

  <form action="submit_form.php" method="POST" enctype="multipart/form-data" class="row g-3">
    <div class="col-md-6">
      <label for="email" class="form-label">Email*</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="col-md-6">
      <label for="application_for" class="form-label">Application For*</label>
      <select class="form-select" name="application_for" required>
        <option value="">Select</option>
        <option>Teaching</option>
        <option>Non-Teaching</option>
      </select>
    </div>

    <div class="col-md-6">
      <label for="college" class="form-label">Name of College/Department*</label>
      <select class="form-select" name="college" required>
        <option value="">Select</option>
        <option>HGM Azam College of Education</option>
        <option>MBA (HHM)</option>
        <option>Allana College of Architecture</option>
        <option>School of Visual Effects, Design & Art</option>
        <option>Allana Institute of Computer Application and IT</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="form-label">Application for the...</label>
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

    <!-- Personal Information -->
    <h5 class="mt-4 text-primary">Personal Information</h5>

    <div class="col-md-6">
      <label class="form-label">Full Name (CAPITAL LETTERS)*</label>
      <input type="text" class="form-control text-uppercase" name="full_name" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Present Address (CAPITAL LETTERS)*</label>
      <textarea class="form-control text-uppercase" name="address" rows="2" required></textarea>
    </div>

    <div class="col-md-6">
      <label class="form-label">Mobile Number*</label>
      <input type="tel" class="form-control" name="mobile" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Date of Birth*</label>
      <input type="date" class="form-control" name="dob" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Aadhar Number</label>
      <input type="text" class="form-control" name="aadhar">
    </div>

    <div class="col-md-6">
      <label class="form-label">PAN Number</label>
      <input type="text" class="form-control" name="pan">
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

    <!-- Qualification -->
    <h5 class="mt-4 text-primary">Qualification Details</h5>

    <div class="col-md-6">
      <label class="form-label">Undergraduate Degree</label>
      <input type="text" class="form-control" name="ug_degree">
    </div>

    <div class="col-md-3">
      <label class="form-label">UG Percentage / Grade</label>
      <input type="text" class="form-control" name="ug_grade">
    </div>

    <div class="col-md-3">
      <label class="form-label">UG Passing Year</label>
      <input type="text" class="form-control" name="ug_year">
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
      <input type="text" class="form-control" name="pg_year">
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
      <input type="text" class="form-control" name="phd_year">
    </div>

    <div class="col-md-6">
      <label class="form-label">University Name</label>
      <input type="text" class="form-control" name="phd_university">
    </div>

    <!-- Experience -->
    <h5 class="mt-4 text-primary">Experience Details</h5>

    <div class="col-md-6">
      <label class="form-label">Total Experience</label>
      <input type="text" class="form-control" name="exp_total">
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

    <!-- Research -->
    <h5 class="mt-4 text-primary">Research Details</h5>
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

    <!-- Salary -->
    <h5 class="mt-4 text-primary">Salary Details</h5>
    <div class="col-md-6"><label class="form-label">Current Salary per Month (Rs)</label><input type="text" class="form-control" name="salary_current"></div>
    <div class="col-md-6"><label class="form-label">Expected Salary per Month (Rs)</label><input type="text" class="form-control" name="salary_expected"></div>

    <!-- File Uploads -->
    <h5 class="mt-4 text-primary">Document Upload</h5>
    <div class="col-md-12">
      <label class="form-label">Upload Combined PDF (CV, Marksheets, Certificates etc)*</label>
      <input type="file" class="form-control" name="combined_pdf" accept="application/pdf" required>
    </div>
    <div class="col-md-6"><label class="form-label">Papers Published PDF</label><input type="file" class="form-control" name="papers_pdf" accept="application/pdf"></div>
    <div class="col-md-6"><label class="form-label">Books/Chapters PDF</label><input type="file" class="form-control" name="books_pdf" accept="application/pdf"></div>
    <div class="col-md-6"><label class="form-label">Patents PDF</label><input type="file" class="form-control" name="patents_pdf" accept="application/pdf"></div>
    <div class="col-md-6"><label class="form-label">Seminars/Workshops PDF</label><input type="file" class="form-control" name="seminars_pdf" accept="application/pdf"></div>
    <div class="col-md-6"><label class="form-label">Ph.D. Students PDF</label><input type="file" class="form-control" name="phd_pdf" accept="application/pdf"></div>
    <div class="col-md-6"><label class="form-label">Passport Size Photo (PDF)</label><input type="file" class="form-control" name="photo_pdf" accept="application/pdf"></div>

    <!-- Declaration -->
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="declaration" required>
      <label class="form-check-label" for="declaration">
        I hereby affirm that the above details are true to the best of my knowledge & belief. I understand that if any information provided is false, my candidature is liable to be cancelled.
      </label>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-success">Submit Application</button>
    </div>
  </form>
</div>
</body>
</html>
