@extends('layouts.default')

@section('content')

<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container no-padding">
		<div class="row">
			<div class="col-md-3 l-content" style="height:400px;">
				<div class="profile-pic"> 
					<!--<div class="pic-bg" style="color:red;">-->
     <img src="vcard_data/profile-avatar.jpg" class="img-responsive" style="margin-top: 0px;width: 300px;height: 300px;" alt="Sahil">
                                <!--</div>-->
				</div>
				<nav>
				<ul class="navigation">
					<li id="mavli1" class="flex-active"><a href="#">Profile <i class="fa fa-user"></i></a></li>
					<!--<li class=""><a href="#">Work <i class="fa fa-briefcase"></i></a></li> -->
					<li id="mavli2" class=""><a href="#">Resume <i class="fa fa-file-text"></i></a></li>
					<!--<li class=""><a href="#">Blog <i class="fa fa-comment"></i></a></li> -->
					<li id="mavli3" class=""><a href="#">Contact <i class="fa fa-envelope"></i></a></li>
				</ul>
				</nav>
			</div>

			<div class="col-md-9 r-content">
				<div style="height: 578px;" class="flexslider">
					<div class="slides">
						<!-- SECTION 1 - HOMEPAGE -->
						<section style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="no-display flex-active-slide">
							<div class="profile" id="1">
								<h2 class="animated fadeInDown">Hello, I am <span>Sahil Chhabra</span><br>Application Developer - J2EE</h2>
								<div class="sep1"></div>
								<p class="animated fadeInDown">I have five months experience as a 
application developer. I have a love of clean, elegant coding, and I 
have good experience in web application development. I have a reasonable grasp of using J2EE and PHP.</p>
								<div class="personal-info col-md-12 no-padding animated flipInX">
									<h4>Personal Info</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<div class="p-info"><em>name</em><span>Sahil Chhabra</span></div>
										</li>
										<li>
											<div class="p-info"><em>date of birth</em><span>December 29, 1990</span></div>
										</li>
										<li>
											<div class="p-info"><em>e-mail</em><span>sahil2921@gmail.com</span></div>
										</li>
										<li>
											<div class="p-info"><em>address</em><span>Marathalli, Banaglore</span></div>
										</li>
										<li>
											<div class="p-info"><em>phone</em><span>+91-98-8607-7155</span></div>
										</li>
										<!--<li>
											<div class="p-info"><em>website</em><span>www.themeforest.net</span></div>
										</li> -->
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</section>
						<!-- SECTION 1 - HOMEPAGE -->

						<!-- SECTION 2 - WORKS / PROJECTS / PORTFOLIO -->
					<!--	<section style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="no-display">
							<div class="works" id="2">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>Portfolio</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="portfolio-wrap">
									<div class="row">
										<ul id="filter-list" class="clearfix">
											<li class="filter" data-filter="all"><i class="fa fa-th"></i> All</li>
											<li class="filter active" data-filter="webdesign">Web Design</li>
											<li class="filter" data-filter="appicon">App Icons</li>
											<li class="filter" data-filter="iosappui">iOS App UI</li>
											<li class="filter" data-filter="illustration">Illustration</li>
										</ul>
										<ul style="   " id="portfolio">
											<li style=" display: inline-block; opacity: 1;" class="item col-md-4 webdesign animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/1_002.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 illustration animated flipInX mix_all">
												<a href="https://www.youtube.com/watch?v=L9szn1QQfas" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/2.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 appicon animated flipInX mix_all">
												<a href="http://vimeo.com/71071717" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/3.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 iosappui animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/4.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 iosappui animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/5.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 illustration animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/6.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style=" display: inline-block; opacity: 1;" class="item col-md-4 webdesign animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/7.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 iosappui animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/8.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style=" display: inline-block; opacity: 1;" class="item col-md-4 webdesign animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/9.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 illustration animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/10.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 appicon animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/11.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li style="" class="item col-md-4 iosappui animated flipInX mix_all">
												<a href="http://premiumlayers.com/demos/vcard/images/projects/1-big.jpg" class="nivo-lbox">
													<div class="folio-img">
														<img draggable="false" src="vcard_data/12.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</section> -->
						<!-- SECTION 2 - WORKS / PROJECTS / PORTFOLIO -->

						<!-- SECTION 3 - CV / RESUME -->
						<section style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="no-display">
							<div class="item resume" id="3">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>Resume</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="resume-info animated slideInLeft">
									<h4>Education</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<h5>Holy Child School (C.B.S.E.), Rampur, India</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2006 - 2007</span>
											<p>High School (Class: 10) with 84%</p>
										</li>
										<li>
											<h5>Holy Child School (C.B.S.E.), Rampur, India</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2008 - 2009</span>
											<p>Intermediate (Class: 10+2) with 90.6%</p>
										</li>
										<li>
											<h5>G.B. Pant University of Agriculture and Technology, Pantnagar, India</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2009 - 2013</span>
											<p>Bachelor of Technology in Computer Engineering with OGPA: 7.756/10</p>
										</li>
									</ul>
								</div>
								<div class="skills-info">
									<h4>Skills</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<p>Java <span>85%</span></p>
											<div class="skills-bg"><span style="width: 85%;" class="skill11"></span></div>
										</li>
										<li>
											<p>J2EE <span>85%</span></p>
											<div class="skills-bg"><span style="width: 85%;" class="skill12"></span></div>
										</li>
										<li>
											<p>PHP <span>80%</span></p>
											<div class="skills-bg"><span style="width: 80%;" class="skill13"></span></div>
										</li>
                                                                                <li>
											<p>C <span>65%</span></p>
											<div class="skills-bg"><span style="width: 65%;" class="skill14"></span></div>
										</li>
                                                                                <li>
											<p>HTML5/CSS3 <span>75%</span></p>
											<div class="skills-bg"><span style="width: 75%;" class="skill15"></span></div>
										</li>
										<li>
											<p>JavaScript and jQuery <span>80%</span></p>
											<div class="skills-bg"><span style="width: 80%;" class="skill16"></span></div>
										</li>
                                                                                <li>
											<p>SQL <span>80%</span></p>
											<div class="skills-bg"><span style="width: 80%;" class="skill17"></span></div>
										</li>
                                                                                <li>
											<p>PL/SQL <span>65%</span></p>
											<div class="skills-bg"><span style="width: 65%;" class="skill18"></span></div>
										</li>
										
										<li>
											<p>Photoshop <span>70%</span></p>
											<div class="skills-bg"><span style="width: 70%;" class="skill19"></span></div>
										</li>
									</ul>
								</div>
								<!--<div class="services-info">
									<h4>Services</h4>
									<div class="sep2"></div>
									<ul>
										<li class="animated flipInX">
											<i class="fa fa-cloud"></i>
											<h5>Design</h5>
										</li>
										<li class="animated flipInX">
											<i class="fa fa-smile-o"></i>
											<h5>Coding</h5>
										</li>
										<li class="animated flipInX">
											<i class="fa fa-desktop"></i>
											<h5>Responsive</h5>
										</li>
										<li class="animated flipInX">
											<i class="fa fa-text-width"></i>
											<h5>Planing</h5>
										</li>
										<li class="animated flipInX">
											<i class="fa fa-comment"></i>
											<h5>Wordpress</h5>
										</li>
										<li class="animated flipInX">
											<i class="fa fa-picture-o"></i>
											<h5>Photography</h5>
										</li>
									</ul>
								</div>-->
								<div class="resume-info animated slideInLeft">
									<h4>Work Experience</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<h5>IBM India Pvt. Ltd.</h5>
											<span class="year"><i class="fa fa-calendar"></i> Feb 2014 - Present</span>
											<p>Working as a J2EE Application Developer.</p>
										</li>
										<!--<li>
											<h5>Video Hive</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2005 - 2008</span>
											<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida
 nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
 auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis 
sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi 
accumsan ipsum velit.</p>
										</li>
										<li>
											<h5>Themeforest</h5>
											<span class="year"><i class="fa fa-calendar"></i> 2009 - 2014</span>
											<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida
 nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
 auctor.</p>
										</li>-->
									</ul>
								</div>
							</div>
						</section>
						<!-- SECTION 3 - CV / RESUME -->

						<!-- SECTION 4 - BLOG / NEWS -->
					<!--	<section style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="no-display">
							<div class="item blog" id="4">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>Blog</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="blog-wrap">
									<article class="animated flipInX">
										<div class="row">
											<div class="col-md-5">
												<img draggable="false" src="vcard_data/1.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-md-7">
												<h3><a href="http://premiumlayers.com/demos/vcard/blog-single.html">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin 
gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis 
bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id 
elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 
Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
									<div class="link-post">
										<div class="row">
											<div class="col-md-12">
												<i class="fa fa-link"></i>
												<a href="http://www.themeforest.net/" target="_blank">www.themeforest.net</a>
											</div>
										</div>
									</div>
									<article class="animated flipInX">
										<div class="row">
											<div class="col-md-5">
												<img draggable="false" src="vcard_data/2_002.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-md-7">
												<h3><a href="http://premiumlayers.com/demos/vcard/blog-single.html">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin 
gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis 
bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id 
elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 
Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
									<div class="quote-post">
										<div class="row">
											<div class="col-md-12">
												<blockquote>This is Photoshop's version  of Lorem Ipsum. 
Proin gravida nibh vel velit auctor aliquet. Aene.This is photoshop's 
version f Lorem Ipsum.</blockquote>
												<i class="fa fa-quote-left"></i>
												<span class="author-name">John Smith</span>
											</div>
										</div>
									</div>
									<article class="no-border animated flipInX">
										<div class="row">
											<div class="col-md-5">
												<img draggable="false" src="vcard_data/3_002.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-md-7">
												<h3><a href="http://premiumlayers.com/demos/vcard/blog-single.html">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin 
gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis 
bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id 
elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 
Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
								</div>
							</div>
						</section>  -->
						<!-- SECTION 4 - BLOG / NEWS -->

						<!-- SECTION 5 - CONTACT -->
						<section style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="no-height">
							<div class="item contact" id="5">
								<div class="page-head animated fadeInDown">
									<div class="row">
										<div class="col-md-5">
											<h3>Contact Us</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							<!--	<div class="map">
									<div class="gmap">
										<div style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;" id="map"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="position: absolute; left: 0px; top: 0px; width: 100%; z-index: 200;"><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div></div><div style="position: absolute; left: 0px; top: 0px; width: 100%; z-index: 201;"><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 127px; top: -64px;"><canvas width="256" height="256" style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;" draggable="false"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 383px; top: -64px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 127px; top: -320px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 127px; top: 192px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 383px; top: -320px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 383px; top: 192px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -129px; top: -64px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 639px; top: -64px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -129px; top: -320px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -129px; top: 192px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 639px; top: -320px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 639px; top: 192px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; width: 100%; z-index: 202;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: 127px; top: -64px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 383px; top: -64px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 127px; top: -320px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 127px; top: 192px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 383px; top: -320px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 383px; top: 192px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -129px; top: -64px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 639px; top: -64px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -129px; top: -320px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -129px; top: 192px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 639px; top: -320px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 639px; top: 192px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: 383px; top: 192px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_003.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 383px; top: -320px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_011.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -129px; top: -64px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_012.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -129px; top: 192px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_002.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 127px; top: -320px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_004.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 127px; top: -64px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_009.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 639px; top: -64px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 639px; top: -320px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_010.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -129px; top: -320px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_006.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 127px; top: 192px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_005.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 639px; top: 192px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_008.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 383px; top: -64px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img draggable="false" src="vcard_data/vt_007.png" style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a title="Click to see this area on Google Maps" href="http://maps.google.com/maps?ll=40.714353,-74.005973&amp;z=15&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" target="_blank" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img draggable="false" src="vcard_data/google_white2.png" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></a></div><div style="z-index: 1000001; position: absolute; right: 168px; bottom: 0px; width: 125px;" class="gmnoprint"><div class="gm-style-cc" style="-moz-user-select: none;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2014 Google</span></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 185px; top: 90px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2014 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img draggable="false" src="vcard_data/mapcnt3.png" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></div><div style="position: absolute; right: 0px; bottom: 0px;" class="gmnoscreen"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2014 Google</div></div><div draggable="false" style="z-index: 1000001; position: absolute; -moz-user-select: none; right: 0px; bottom: 0px;" class="gmnoprint gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_blank" href="http://www.google.com/intl/en-US_US/help/terms_maps.html" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div class="gm-style-cc" style="-moz-user-select: none; position: absolute; right: 0px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; display: none;"><a href="http://maps.google.com/maps?ll=40.714353,-74.005973&amp;z=15&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3&amp;skstate=action:mps_dialog$apiref:1&amp;output=classic" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" title="Report errors in the road map or imagery to Google" target="_new">Report a map error</a></div></div><div controlheight="124" controlwidth="78" draggable="false" style="margin: 5px; -moz-user-select: none; position: absolute; left: 0px; top: 0px;" class="gmnoprint"><div style="cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;" controlheight="80" controlwidth="78" class="gmnoprint"><div style="width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;" controlheight="80" controlwidth="78" class="gmnoprint"><div style="visibility: hidden;"><svg viewBox="0 0 78 78" height="78px" width="78px" overflow="hidden" version="1.1" style="position: absolute; left: 0px; top: 0px;"><circle stroke="#f2f4f6" fill="#f2f4f6" fill-opacity="0.2" stroke-width="3" r="35" cy="39" cx="39"></circle><g transform="rotate(0 39 39)"><rect fill="#f2f4f6" stroke-width="1" stroke="#a6a6a6" height="11" width="12" ry="4" rx="4" y="0" x="33"></rect><polyline stroke="#000" fill="#f2f4f6" stroke-width="1.5" stroke-linejoin="bevel" points="36.5,8.5 36.5,2.5 41.5,8.5 41.5,2.5"></polyline></g></svg></div></div><div style="position: absolute; left: 10px; top: 11px;" controlheight="59" controlwidth="59" class="gmnoprint"><div style="width: 59px; height: 59px; overflow: hidden; position: relative;"><img draggable="false" src="vcard_data/mapcnt3.png" style="position: absolute; left: 0px; top: 0px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"><div title="Pan left" style="position: absolute; left: 0px; top: 20px; width: 19.6667px; height: 19.6667px; cursor: pointer;"></div><div title="Pan right" style="position: absolute; left: 39px; top: 20px; width: 19.6667px; height: 19.6667px; cursor: pointer;"></div><div title="Pan up" style="position: absolute; left: 20px; top: 0px; width: 19.6667px; height: 19.6667px; cursor: pointer;"></div><div title="Pan down" style="position: absolute; left: 20px; top: 39px; width: 19.6667px; height: 19.6667px; cursor: pointer;"></div></div></div></div><div controlheight="0" controlwidth="0" style="opacity: 0.6; display: none; position: absolute;" class="gmnoprint"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img draggable="false" src="vcard_data/mapcnt3.png" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></div><div style="position: absolute; left: 29px; top: 85px;" controlheight="39" controlwidth="20" class="gmnoprint"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img draggable="false" src="vcard_data/mapcnt3.png" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gm-style-cc" style="-moz-user-select: none; position: absolute; right: 70px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><span>200 m&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 55px;"><div style="width: 100%; height: 4px; position: absolute; background-color: rgb(255, 255, 255); bottom: 0px; left: 0px;"></div><div style="position: absolute; left: 0px; top: 0px; width: 4px; height: 8px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); bottom: 0px; right: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; bottom: 1px; right: 1px; left: 1px;"></div><div style="position: absolute; left: 1px; top: 1px; width: 2px; height: 6px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div></div></div></div></div></div>
									</div>
								</div>
   
							-->	<br><div class="contact-info">
									<h4>Contact info</h4>
									<p></p>
									<ul>
										<li><i class="fa fa-home"></i> Marathalli, Bangalore</li>
										<li><i class="fa fa-phone"></i> +91 98 8607 7155</li>
										<li><i class="fa fa-envelope"></i> sahil2921@gmail.com</li>
									</ul>
								</div>
								<div class="contact-form animated fadeInUp">
									<h4>Send us a message</h4>
                                                                   {{ Form::open(array('url'=>'sendMsg','class'=>'positioned','id'=>'contactForm')) }}
                                                                   <div>
                                                                    @if($errors->has())
                                                                        <p style="color:red;"><ul style="color:red;list-style: none;">
                                                                           <li><span class="err">{{ $errors->first('name') }}</span></li>
                                                                           <li><span class="err">{{ $errors->first('email') }}</span></li>
                                                                           <li><span class="err">{{ $errors->first('subject') }}</span></li>
                                                                           <li><span class="err">{{ $errors->first('message') }}</span></li>
                                                                        </ul>
                                                                       </p>
                                                                   @endif
                                                                   @if(Session::has('message'))
                                                                   <p style="color:green;">{{ Session::get('message') }}</p>
                                                                   @endif
                                                                                                                                  </div>     
                                                                   <div class="row">
                                                                            <div class="col-md-4">
                                                                                {{ Form::text('name',null,array('placeholder'=>'Name','type'=>'text','required'=>'required')) }}
                                                                                {{ Form::email('email',null,array("placeholder"=>"Email","type"=>"email","required"=>"required")) }}
                                                                                {{ Form::text('subject',null,array("placeholder"=>"Subject","type"=>"text","required"=>"required")) }}
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                               {{Form::textarea('message',null,array("placeholder"=>"Message","rows"=>6,"required"=>"required")) }}
                                                                               {{ Form::submit('Send Message',array('class'=>'mavBut','style'=>'width:120px;height:43px;')) }}
                                                                            </div>
                                                                        </div>
                                                                   {{ Form::close() }}
								<!--	<form class="positioned" id="contactForm" action="php/contact.php" method="post">
										<div class="row">
											<div class="col-md-4">
												<input name="senderName" id="senderName" placeholder="name" type="text">
												<input name="senderEmail" id="senderEmail" placeholder="e-mail" type="email">
												<input name="subject" id="subject" placeholder="Subject" type="text">
											</div>
											<div class="col-md-8">
												<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
												<button type="submit">Send Message</button>
											</div>
										</div>
									</form> -->
									<div id="successMessage" class="successmessage">
										<p><span class="success-ico"></span> Thanks for sending your message! I'll get back to you shortly.</p>
									</div>
									<div id="failureMessage" class="errormessage">
										<p><span class="error-ico"></span> There was a problem sending your message. Please try again.</p>
									</div>
									<div id="incompleteMessage" class="statusMessage">
										<p>Please complete all the fields in the form before sending.</p>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 5 - CONTACT -->
					</div>
				</div>

				<!-- FOOTER -->
				<footer>
					<div class="row">
						<div class="col-md-7">
							<p>© 2014 Sahil Chhabra. All Rights Reserved</p>
						</div>
						<div class="col-md-5">
							<ul class="social">
								<li><a href="https://www.facebook.com/sahilchhabra29" target="_blank" alt="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/imsahilchhabra" target="_blank" alt="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="https://www.linkedin.com/profile/view?id=90130133" target="_blank" alt="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                                                
							<!--	<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="http://www.specificfeeds.com/follow"><i class="fa fa-rss"></i></a></li>
							-->
                                                        </ul>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<!-- MAIN CONTENT -->

@endsection