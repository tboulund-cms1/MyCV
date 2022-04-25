<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>
    <?php while(have_posts()): the_post() ?>
        <div class="wrapper">
            <div class="sidebar-wrapper">
                <div class="profile-container">
                    <img class="profile" src="<?php echo get_stylesheet_directory_uri() ?>/images/profile.jpg" alt="">
                    <h1 class="name"><?php the_field("name") ?></h1>
                    <h3 class="tagline"><?php the_field("title") ?></h3>
                </div>
                <!--//profile-container-->

                <div class="contact-container container-block">
                    <ul class="list-unstyled contact-list">
                        <li class="email"><i class="fa fa-envelope"></i><a href="mailto:<?php the_field("email") ?>"><?php the_field("email") ?></a></li>
                        <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?php the_field("phone_number") ?>"><?php the_field("phone_number") ?></a></li>
                        <li class="phone"><i class="fa fa-birthday-cake"></i><?php the_field("birthday") ?></li>
                        <li class="linkedin"><i class="fa fa-linkedin"></i><a href="<?php the_field("linkedin_url") ?>" target="_blank"><?php the_field("linkedin_text") ?></a></li>
                        <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/<?php the_field("twitter_handle") ?>" target="_blank">@<?php the_field("twitter_handle") ?></a></li>
                    </ul>
                </div>
                <!--//contact-container-->
                <div class="education-container container-block">
                    <h2 class="container-block-title">Education</h2>
                    <div class="item">
                        <h4 class="degree">Primary school</h4>
                        <div class="meta">Sædding skole</div>
                        <div class="time">1993 - 2001</div>
                    </div>
                    <!--//item-->
                    <div class="item">
                        <h4 class="degree">Primary school</h4>
                        <div class="meta">Fourfeldt skole</div>
                        <div class="time">2001 - 2004</div>
                    </div>
                    <!--//item-->
                    <div class="item">
                        <h4 class="degree">HHx</h4>
                        <div class="meta">Esbjerg Handelsgymnasium</div>
                        <div class="time">2004 - 2007</div>
                    </div>
                    <!--//item-->
                    <div class="item">
                        <h4 class="degree">Computer Science</h4>
                        <div class="meta">Business Academy South West</div>
                        <div class="time">2007 - 2009</div>
                    </div>
                    <!--//item-->
                    <div class="item">
                        <h4 class="degree">PBa Software Development</h4>
                        <div class="meta">Business Academy South West</div>
                        <div class="time">2011 - 2012</div>
                    </div>
                    <!--//item-->
                </div>
                <!--//education-container-->

                <div class="languages-container container-block">
                    <h2 class="container-block-title">Languages</h2>
                    <ul class="list-unstyled interests-list">
                        <li>Danish <span class="lang-desc">(primary)</span></li>
                        <li>English <span class="lang-desc">(fluently)</span></li>
                    </ul>
                </div>
                <!--//interests-->

            </div>
            <!--//sidebar-wrapper-->

            <div class="main-wrapper">

                <section class="section summary-section">
                    <h2 class="section-title"><i class="fa fa-user"></i>About me</h2>
                    <div class="summary">
                        <p>Passionate software developer / software designer / project manager with a huge focus on new technologies within software development and with a great interest in quality-driven development of scalable and future-proof applications.</p>
                    </div>
                    <!--//summary-->
                </section>
                <!--//section-->

                <section class="section experiences-section">
                    <h2 class="section-title"><i class="fa fa-briefcase"></i>Experience</h2>

                    <?php $experienceLoop = new WP_Query(array("post_type" => "experience", "meta_key" => "from_year", "orderby" => "meta_value")) ?>
                    <?php while($experienceLoop->have_posts()): $experienceLoop->the_post() ?>
                        <div class="item">
                            <div class="meta">
                                <div class="upper-row">
                                    <h3 class="job-title"><?php the_title() ?></h3>
                                    <div class="time"><?php the_field("from_year") ?> - <?php the_field("to_year") ?></div>
                                </div>
                                <div class="company"><?php the_field("workplace") ?></div>
                            </div>
                            <div class="details">
                                <?php the_content() ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata() ?>

                </section>
                <!--//section-->

                <section class="section projects-section">
                    <h2 class="section-title"><i class="fa fa-archive"></i>Spare time</h2>
                    <div class="intro">
                        <?php the_field("sparetime") ?>
                    </div>
                    <!--//intro-->
                </section>
                <!--//section-->

                <section class="skills-section section">
                    <h2 class="section-title"><i class="fa fa-rocket"></i>Skills</h2>
                    <div class="skillset">
                        <?php $skillLoop = new WP_Query(array("post_type" => "skill", "meta_key" => "percentage", "orderby" => "meta_value", "posts_per_page" => -1)) ?>
                        <?php while($skillLoop->have_posts()): $skillLoop->the_post() ?>
                            <div class="item">
                                <h3 class="level-title"><?php the_title() ?></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="<?php the_field("percentage") ?>%" style="width: <?php the_field("percentage") ?>%;">
                                    </div>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>
                </section>
                <!--//skills-section-->

            </div>
            <!--//main-body-->
        </div>
    <?php endwhile ?>

    <footer class="footer">
        <div class="text-center">
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div>
    </footer>

    <?php wp_footer() ?>
</body>

</html>