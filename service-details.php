<?php include ("include/header.php"); ?>

<?php
// Define service data
$services = [
    'digital-marketing' => [
        'title' => 'Digital Marketing',
        'desc' => 'We help brands reach their full potential through data-driven digital marketing strategies. From social media management to targeted ad campaigns, we ensure your message reaches the right audience at the right time.',
        'image' => 'assets/images/services/services01.jpg',
        'icon' => 'fas fa-bullhorn',
        'features' => ['Social Media Management', 'Pay-Per-Click (PPC)', 'Email Marketing', 'Content Strategy', 'Influencer Marketing', 'Conversion Optimization']
    ],
    'web-development' => [
        'title' => 'Web Development',
        'desc' => 'Our web development team creates high-performance, scalable, and secure websites and web applications. We use the latest technologies to deliver seamless user experiences across all devices and platforms.',
        'image' => 'assets/images/services/services03.jpg',
        'icon' => 'fas fa-code',
        'features' => ['Custom Web Applications', 'E-commerce Solutions', 'CMS Integration', 'API Development', 'Progressive Web Apps', 'Cloud Infrastructure']
    ],
    'brand-identity' => [
        'title' => 'Brand Identity Design',
        'desc' => 'We craft unique and memorable brand identities that resonate with your target audience. Our creative process ensures your brand stands out and communicates its values effectively in a crowded market.',
        'image' => 'assets/images/services/services02.jpg',
        'icon' => 'fas fa-gem',
        'features' => ['Logo Design', 'Visual Guidelines', 'Brand Positioning', 'Typography & Color', 'Brand Assets', 'Market Research']
    ],
    'seo-analytics' => [
        'title' => 'SEO & Analytics',
        'desc' => 'Elevate your search rankings and understand your users better. Our SEO and analytics services provide the insights and optimization needed to drive organic growth and maximize ROI.',
        'image' => 'assets/images/services/services04.jpg',
        'icon' => 'fas fa-chart-line',
        'features' => ['Technical SEO', 'Keyword Research', 'On-Page Optimization', 'Backlink Building', 'Performance Tracking', 'Competitor Analysis']
    ],
    'ui-ux-design' => [
        'title' => 'UI/UX Design',
        'desc' => 'We create intuitive and visually stunning user interfaces that prioritize user experience. Our designs are grounded in user research and best practices to ensure your product is both beautiful and functional.',
        'image' => 'assets/images/services/services01.jpg', // Using placeholder for now
        'icon' => 'fas fa-palette',
        'features' => ['User Research', 'Wireframing', 'Prototyping', 'Visual Design', 'Interaction Design', 'Usability Testing']
    ],
    'mobile-apps' => [
        'title' => 'Mobile App Development',
        'desc' => 'Building powerful mobile applications for iOS and Android that deliver exceptional performance. We focus on creating smooth, feature-rich apps that keep your users engaged and satisfied.',
        'image' => 'assets/images/services/services02.jpg', // Using placeholder for now
        'icon' => 'fas fa-mobile-alt',
        'features' => ['Native App Development', 'Cross-Platform Solutions', 'App Store Optimization', 'Mobile UI Design', 'Back-end Integration', 'Maintenance & Updates']
    ]
];

// Get current service from URL, default to first one
$currentKey = isset($_GET['s']) ? $_GET['s'] : 'web-development';
$service = isset($services[$currentKey]) ? $services[$currentKey] : $services['web-development'];
?>

    <!-- PAGE HERO -->
    <section class="page-hero" style="background-image: url('<?php echo $service['image']; ?>'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-animate="fade-up">
                    <h1 class="service-detail-hero-title"><?php echo $service['title']; ?></h1>
                    <ul class="breadcrumb-custom justify-content-center mt-4">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li class="active"><?php echo $service['title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICE DETAILS SECTION -->
    <section class="service-details-section">
        <div class="container">
            <div class="service-details-row">
                
                <!-- Main Content -->
                <div class="service-main-content">
                    <div data-animate="fade-up">
                        <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" class="service-detail-img">
                        <h2 class="service-detail-title"><?php echo $service['title']; ?> Details</h2>
                        <p class="service-detail-desc">
                            <?php echo $service['desc']; ?>
                        </p>
                        
                        <p class="service-detail-desc">
                            We take a comprehensive approach to <?php echo $service['title']; ?>, ensuring every aspect is 
                            aligned with your overall business objectives. Our team of experts stays ahead of 
                            the curve, utilizing emerging trends and technologies to give you a competitive edge.
                        </p>

                        <h3 class="mb-4">Key Features & Benefits</h3>
                        <div class="service-features-list">
                            <?php foreach($service['features'] as $feature): ?>
                            <div class="feature-item-inline">
                                <i class="fas fa-check-circle"></i>
                                <span><?php echo $feature; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="service-bottom-content">
                            <h3 class="mb-3">Our Core Philosophy</h3>
                            <p class="service-detail-desc">
                                At Satvion Systems, we believe that technology should empower, not complicate. 
                                Our philosophy is rooted in simplicity, efficiency, and human-centric design. We 
                                work closely with our clients to understand their unique challenges and provide 
                                customized solutions that deliver real, measurable results.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="service-sidebar">
                    
                    <!-- Services List Widget -->
                    <div class="sidebar-widget" data-animate="fade-left">
                        <h4 class="widget-title">Other Services</h4>
                        <ul class="services-list-widget">
                            <?php foreach($services as $key => $s): ?>
                            <li>
                                <a href="service-details.php?s=<?php echo $key; ?>" class="<?php echo ($currentKey == $key) ? 'active' : ''; ?>">
                                    <?php echo $s['title']; ?>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Contact Widget -->
                    <div class="sidebar-widget cta-widget" data-animate="fade-left" style="transition-delay: 0.1s;">
                        <div class="icon-box">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Need Any Help?</h4>
                        <p>Our team is ready to help you Scale your business globally.</p>
                        <a href="contact.php" class="btn-sidebar-cta">Contact Us Now</a>
                    </div>

                    <!-- Download Widget -->
                    <div class="sidebar-widget" data-animate="fade-left" style="transition-delay: 0.2s;">
                        <h4 class="widget-title">Resources</h4>
                        <a href="#" class="service-learn-more" style="color: var(--white); background: rgba(255,255,255,0.05); padding: 15px; border-radius: 12px; width: 100%; justify-content: space-between; margin-bottom: 10px;">
                            <span>Company Profile</span>
                            <i class="fas fa-file-pdf"></i>
                        </a>
                        <a href="#" class="service-learn-more" style="color: var(--white); background: rgba(255,255,255,0.05); padding: 15px; border-radius: 12px; width: 100%; justify-content: space-between;">
                            <span>Service Catalog</span>
                            <i class="fas fa-file-download"></i>
                        </a>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="section-padding" style="background: var(--brand-bar);">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-animate="zoom-in">
                    <h2 class="section-title mb-4">Let’s Start Working Together</h2>
                    <p class="mb-5" style="color: var(--gray-300);">
                        Every project begins with a conversation. We’re excited to hear about 
                        your ideas and help you turn them into reality.
                    </p>
                    <a href="contact.php" class="btn-hero" style="background: var(--white); color: var(--brand-black);">
                        Start A Project
                        <span class="btn-hero-icon"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include ("include/footer.php"); ?>
