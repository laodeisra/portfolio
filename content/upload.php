<!-- <div class="contact-form mx-auto w-30">
        <h1>Contacts <span>Me</span></h1>
        <form>
            <div action="index.php?page=action" methoh="post" enctype="multipart/form-data" class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="file" class="form-control" id="name"  name="file" accept=".jpg,.jpeg,.png" required>
            </div>
            
            <button type="submit" class="btn btn-send w-100 bg-success .text-light-emphasis">Send Message</button>
        </form>
</div> -->
<style>
    .container {
        height: 100%;
    }
    .upload-section {
      padding: 80px 0;
    }

    .form-control:focus {
      border-color: #6a11cb;
      box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
    }

  </style>

<section class="upload-section">
    <div class="container">
      <h2 class="text-center mb-4">Upload File</h2>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <form action="index.php?page=action" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="file" name="file" class="form-label">Choose File</label>
              <input type="file" class="form-control"  name="file" accept=".jpeg,.png,.jpg"required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Add a description for your file (optional)"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Upload</button>
          </form>
        </div>
      </div>
    </div>
  </section>