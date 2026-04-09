<?php include("include/header.php") ?>

<!-- PAGE HERO -->
<section class="page-hero" style="
        background-image: url(https://dev261.kodesolution.com/degency/wp-content/uploads/2026/03/project2.jpg);
      ">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                <h1>Contact Us</h1>
                <ul class="breadcrumb-custom justify-content-center mt-3">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===== CONTACT SECTION ===== -->
<section class="contact-section" id="contactSection">
    <div class="contact-container">
        <div class="row align-items-lg-center">

            <!-- Left Column -->
            <div class="col-lg-6 contact-left-col" data-animate="fade-right">
                <div class="contact-label">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                        <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"
                            fill="#ffffff" />
                    </svg>
                    <span>CONTACT US</span>
                </div>

                <h2 class="contact-title">
                    Feel free to ask anything <br>
                    Anytime Just <span class="text-accent">Contact with</span> <br>
                    <span class="text-accent">Support Centre</span>
                </h2>

                <div class="wrapContact">


                    <div class="contact-image-box">
                        <img src="https://dev261.kodesolution.com/degency/wp-content/uploads/2026/02/contact1.jpg"
                            alt="Support Team" class="contact-main-img">
                        <div class="contact-arrow">
                            <svg width="80" height="80" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 20C20 20 40 40 80 50M80 50L65 35M80 50L60 65" stroke="#ffffff"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="contact-details">
                        <div class="contact-item">
                            <span class="item-label">Any Help?</span>
                            <span class="item-value">+1 (234) 568 000</span>
                        </div>
                        <div class="contact-item">
                            <span class="item-label">Email</span>
                            <span class="item-value">support@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 contact-right-col" data-animate="fade-left">
                <div class="contact-form-wrapper">
                    <h3 class="form-title">Get In Touch</h3>
                    <p class="form-subtitle">We've been doing this for a while now and great news for deliver
                        results that matter</p>

                    <form class="contact-form">
                        <div class="form-group-custom">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="form-group-custom">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="form-group-custom">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="form-group-custom">
                            <textarea placeholder="Message" rows="2" required></textarea>
                        </div>

                        <button type="submit" class="btn-appointment">
                            MAKE AN APPOINTMENT
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include("include/footer.php") ?>