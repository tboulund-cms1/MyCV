<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="<?php echo get_stylesheet_directory_uri() ?>/images/profile.jpg" alt="">
                <h1 class="name">Thomas Boulund</h1>
                <h3 class="tagline">Software Architecht &amp; Developer</h3>
            </div>
            <!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com">tbmh@easv.dk</a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:41991208">41 99 12 08</a></li>
                    <li class="phone"><i class="fa fa-birthday-cake"></i>10. august 1987</li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="http://linkedin.com/in/thohadk" target="_blank">linkedin.com/in/thohadk</a></li>
                    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/ThomasBoulund" target="_blank">@ThomasBoulund</a></li>
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

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">IT Project Manager</h3>
                            <div class="time">2014 - 2017</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Blue Water Shipping A/S, Esbjerg</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <ul>
                            <li>Design and architecute of new .NET-based platform.</li>
                            <li>Consultant for developer-tasks.</li>
                            <li>Definition of tasks for student programmers and trainess through Kanban.</li>
                            <li>Short- and long-term planning of tasks with an agile mindset (primarily Scrum).</li>
                            <li>Configuration and management of Continuous Integration through Bamboo.</li>
                            <li>Performance improvements on Microsoft SQL databases.</li>
                        </ul>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">IT Software Developer</h3>
                            <div class="time">2009 - 2014</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Blue Water Shipping A/S, Esbjerg</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <ul>
                            <li>Development and maintainance of systems for:</li>
                            <ul>
                                <li>booking of transport through a user-friendly interface.</li>
                                <li>management and bookkeeping of creditor-vouchers.</li>
                            </ul>
                            <li>Responsible for design and development of a tailor-made platform for fil-integrations between clients/subcontractors and the internal Blue Water systems.</li>
                            <li>Responsible for design and development of a Warehousing system for Blue Waters warehouses around the globe.</li>
                            <li>Development of app for tracking goods from external haulier smartphones.</li>
                        </ul>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Trainee (school project)</h3>
                            <div class="time">2009 - 2009</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Esbjerg Trailer Service, Esbjerg</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <ul>
                            <li>Development and deployment of a system for time registration and stock-management in a garage that services trucks.</li>
                        </ul>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Student developer</h3>
                            <div class="time">2007 - 2009</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Blue Water IT A/S, Esbjerg</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <ul>
                            <li>Development of features and bug fixes for Lotus Notes based systems uden, eller med langsiget, deadline.</li>
                        </ul>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->

            </section>
            <!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Spare time</h2>
                <div class="intro">
                    <p>In my sparetime I do amateur acting in Esbjerg and have participated in more than 30 productions either on, behind or in front of the stage.</p>
                    <p>I'm in the executive committee for the oldest amateur theater in Esbjerg named Skarntyden.</p>
                </div>
                <!--//intro-->
            </section>
            <!--//section-->

            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills</h2>
                <div class="skillset">
                    <div class="item">
                        <h3 class="level-title">C#</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%" style="width: 98%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">ASP.NET MVC</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%" style="width: 98%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Entity Framework</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%" style="width: 98%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">RabbitMQ</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%" style="width: 98%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Autofac</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%" style="width: 98%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%" style="width: 98%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">SQL</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="95%" style="width: 95%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">MSTest &amp; NUnit</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="93%" style="width: 93%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="93%" style="width: 93%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">PHP</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="90%" style="width: 90%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Java</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="85%" style="width: 85%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Scrum</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="95%" style="width: 95%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Kanban</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="90%" style="width: 90%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">JIRA</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="80%" style="width: 80%;">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->
                </div>
            </section>
            <!--//skills-section-->

        </div>
        <!--//main-body-->
    </div>

    <footer class="footer">
        <div class="text-center">
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div>
    </footer>

    <?php wp_footer() ?>
</body>

</html>