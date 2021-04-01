<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đồ án</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jobhunt/css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/jobhunt/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/jobhunt/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jobhunt/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jobhunt/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jobhunt/css/chosen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jobhunt/css/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jobhunt/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>
<body>

<div class="page-loading">
    <img src="https://grandetest.com/theme/jobhunt-html/images/loader.gif" alt="" />
</div>

<div class="theme-layout" id="scrollup">
    <div class="responsive-header">
        <div class="responsive-menubar">
            <div class="res-logo"><a href="{{ route('get.home') }}" title=""><img src="https://grandetest.com/theme/jobhunt-html/images/resource/logo.png" alt=""></a></div>
            <div class="menu-resaction">
                <div class="res-openmenu">
                    <img src="https://grandetest.com/theme/jobhunt-html/images/icon.png" alt=""> Menu
                </div>
                <div class="res-closemenu">
                    <img src="https://grandetest.com/theme/jobhunt-html/images/icon2.png" alt=""> Close
                </div>
            </div>
        </div>
        <div class="responsive-opensec">
            <div class="btn-extars">
                <a href="employer_manage_jobs.html#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
                <ul class="account-btns">
                    <li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
                    <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
                </ul>
            </div>
            <!-- Btn Extras -->
            <form class="res-search">
                <input type="text" placeholder="Job title, keywords or company name">
                <button type="submit"><i class="la la-search"></i></button>
            </form>
            <div class="responsivemenu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="employer_manage_jobs.html#" title="">Home</a>
                        <ul>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index.html" title="">Home Layout 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index2.html" title="">Home Layout 2</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index3.html" title="">Home Layout 3</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index4.html" title="">Home Layout 4</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index5.html" title="">Home Layout 5</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index6.html" title="">Home Layout 6</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index7.html" title="">Home Layout 7</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/index8.html" title="">Home Layout 8</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="employer_manage_jobs.html#" title="">Employers</a>
                        <ul>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list1.html" title=""> Employer List 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list2.html" title="">Employer List 2</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list3.html" title="">Employer List 3</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list4.html" title="">Employer List 4</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/employer_single1.html" title="">Employer Single 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/employer_single2.html" title="">Employer Single 2</a></li>
                            <li class="menu-item-has-children">
                                <a href="employer_manage_jobs.html#" title="">Employer Dashboard</a>
                                <ul>
                                    <li><a href="employer_manage_jobs.html" title="">Employer Job Manager</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/employer_packages.html" title="">Employer Packages</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/employer_post_new.html" title="">Employer Post New</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/employer_profile.html" title="">Employer Profile</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/employer_resume.html" title="">Employer Resume</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/employer_transactions.html" title="">Employer Transaction</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/employer_job_alert.html" title="">Employer Job Alert</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/employer_change_password.html" title="">Employer Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="employer_manage_jobs.html#" title="">Candidates</a>
                        <ul>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_list.html" title="">Candidates List 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_list2.html" title="">Candidates List 2</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_list3.html" title="">Candidates List 3</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_single.html" title="">Candidates Single 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_single2.html" title="">Candidates Single 2</a></li>
                            <li class="menu-item-has-children">
                                <a href="employer_manage_jobs.html#" title="">Candidates Dashboard</a>
                                <ul>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_my_resume.html" title="">Candidates Resume</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_profile.html" title="">Candidates Profile</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_shortlist.html" title="">Candidates Shortlist</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_job_alert.html" title="">Candidates Job Alert</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_dashboard.html" title="">Candidates Dashboard</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_change_password.html" title="">Change Password</a></li>
                                    <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="employer_manage_jobs.html#" title="">Blog</a>
                        <ul>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/blog_list.html"> Blog List 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/blog_list2.html">Blog List 2</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/blog_list3.html">Blog List 3</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/blog_single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="employer_manage_jobs.html#" title="">Job</a>
                        <ul>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/job_list_classic.html">Job List Classic</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/job_list_grid.html">Job List Grid</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/job_list_modern.html">Job List Modern</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/job_single1.html">Job Single 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/job_single2.html">Job Single 2</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/job-single3.html">Job Single 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="employer_manage_jobs.html#" title="">Pages</a>
                        <ul>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/about.html" title="">About Us</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/404.html" title="">404 Error</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/contact.html" title="">Contact Us 1</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/contact2.html" title="">Contact Us 2</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/faq.html" title="">FAQ's</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/how_it_works.html" title="">How it works</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/login.html" title="">Login</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/pricing.html" title="">Pricing Plans</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/register.html" title="">Register</a></li>
                            <li><a href="https://grandetest.com/theme/jobhunt-html/terms_and_condition.html" title="">Terms &amp; Condition</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header class="stick-top">
        <div class="menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('get.home') }}" title=""><img src="https://grandetest.com/theme/jobhunt-html/images/resource/logo.png" alt=""></a>
                </div><!-- Logo -->
                <div class="btns-profiles-sec">
                    <span><img src="https://grandetest.com/theme/jobhunt-html/images/resource/profile.jpg" alt=""> {{ Auth::guard('users')->user()->name }} <i class="la la-angle-down"></i></span>
                    <ul>
                        @foreach(config('user.drop_menu') as $item)
                            <li><a href="{{ route($item['route']) }}" title="{{ $item['name'] }}"><i class="la la-file-text"></i>{{ $item['name'] }}</a></li>
                        @endforeach

                        <li><a href="" title=""><i class="la la-unlink"></i>Đăng xuất</a></li>
                    </ul>
                </div>
                <nav>
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="employer_manage_jobs.html#" title="">Home</a>
                            <ul>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index.html" title="">Home Layout 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index2.html" title="">Home Layout 2</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index3.html" title="">Home Layout 3</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index4.html" title="">Home Layout 4</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index5.html" title="">Home Layout 5</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index6.html" title="">Home Layout 6</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index7.html" title="">Home Layout 7</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/index8.html" title="">Home Layout 8</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="employer_manage_jobs.html#" title="">Employers</a>
                            <ul>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list1.html" title=""> Employer List 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list2.html" title="">Employer List 2</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list3.html" title="">Employer List 3</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/employer_list4.html" title="">Employer List 4</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/employer_single1.html" title="">Employer Single 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/employer_single2.html" title="">Employer Single 2</a></li>
                                <li class="menu-item-has-children">
                                    <a href="employer_manage_jobs.html#" title="">Employer Dashboard</a>
                                    <ul>
                                        <li><a href="employer_manage_jobs.html" title="">Employer Job Manager</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/employer_packages.html" title="">Employer Packages</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/employer_post_new.html" title="">Employer Post New</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/employer_profile.html" title="">Employer Profile</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/employer_resume.html" title="">Employer Resume</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/employer_transactions.html" title="">Employer Transaction</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/employer_job_alert.html" title="">Employer Job Alert</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/employer_change_password.html" title="">Employer Change Password</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="employer_manage_jobs.html#" title="">Candidates</a>
                            <ul>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_list.html" title="">Candidates List 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_list2.html" title="">Candidates List 2</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_list3.html" title="">Candidates List 3</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_single.html" title="">Candidates Single 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_single2.html" title="">Candidates Single 2</a></li>
                                <li class="menu-item-has-children">
                                    <a href="employer_manage_jobs.html#" title="">Candidates Dashboard</a>
                                    <ul>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_my_resume.html" title="">Candidates Resume</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_profile.html" title="">Candidates Profile</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_shortlist.html" title="">Candidates Shortlist</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_job_alert.html" title="">Candidates Job Alert</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_dashboard.html" title="">Candidates Dashboard</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_change_password.html" title="">Change Password</a></li>
                                        <li><a href="https://grandetest.com/theme/jobhunt-html/candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="employer_manage_jobs.html#" title="">Blog</a>
                            <ul>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/blog_list.html"> Blog List 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/blog_list2.html">Blog List 2</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/blog_list3.html">Blog List 3</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/blog_single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="employer_manage_jobs.html#" title="">Job</a>
                            <ul>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/job_list_classic.html">Job List Classic</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/job_list_grid.html">Job List Grid</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/job_list_modern.html">Job List Modern</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/job_single1.html">Job Single 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/job_single2.html">Job Single 2</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/job-single3.html">Job Single 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="employer_manage_jobs.html#" title="">Pages</a>
                            <ul>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/about.html" title="">About Us</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/404.html" title="">404 Error</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/contact.html" title="">Contact Us 1</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/contact2.html" title="">Contact Us 2</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/faq.html" title="">FAQ's</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/how_it_works.html" title="">How it works</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/login.html" title="">Login</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/pricing.html" title="">Pricing Plans</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/register.html" title="">Register</a></li>
                                <li><a href="https://grandetest.com/theme/jobhunt-html/terms_and_condition.html" title="">Terms &amp; Condition</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- Menus -->
            </div>
        </div>
    </header>
    @yield('content')

    @include('components._inc_footer')

</div>

@include('components.auth._inc_auth')

{{--<script data-cfasync="false" src="https://grandetest.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">--}}
{{--</script>--}}
<script src="{{ asset('assets/jobhunt/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobhunt/js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobhunt/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobhunt/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobhunt/js/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobhunt/js/slick.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jobhunt/js/parallax.js') }}" type="text/javascript"></script>
{{--<script src="{{ asset('assets/jobhunt/js/select-chosen.js') }}" type="text/javascript"></script>--}}

</body>
</html>

