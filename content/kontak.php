<style>
  .container {
      height: 100%;
    }
    .contact-section {
      padding: 80px 0;
      /* height: 100%; */
    }

    .contact-info {
      color: #555;
    }

    .contact-icon {
      font-size: 1.6rem;
      color: #6a11cb;
    }

    .form-control:focus {
      border-color: #6a11cb;
      box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
    }
    
</style>


<section class="contact-section">
    <div class="container">
      <div class="row">
        <!-- Contact Info -->
        <div class="col-lg-5 mb-4">
          <h2 class="mb-4">Contact Information</h2>
          <p class="contact-info"><i class="bi bi-geo-alt-fill contact-icon"></i> Nusaniwe, Ambon, Indonesia</p>
          <p class="contact-info"><i class="bi bi-telephone-fill contact-icon"></i> +628 1243 8276 </p>
          <p class="contact-info"><i class="bi bi-envelope-fill contact-icon"></i> isranodex99@gmail,com</p>
        </div>
        <!-- Contact Form -->
        <div class="col-lg-7">
          <h2 class="mb-4">Contact me</h2>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengksp</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>