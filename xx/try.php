<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/dropzone/src/dropzone.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> -->

    	<?php
				include "adminsidebar.php";
		?>


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Manage Gallery</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Manage Gallery
                                    </li>
                                </ol>
                            </nav>



                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <!-- <div class="dropdown">
                                        <a
                                            class="btn btn-primary dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            Category
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Dosa</a>
                                            <a class="dropdown-item" href="#">Bhaji</a>
                                            <a class="dropdown-item" href="#">Pav</a>
                                        </div>
                                    </div> -->
                            <!-- <label>Selesct Category</label>
                            <form>
                                <select class="btn btn-primary dropdown-toggle" role="button" data-toggle="dropdown">
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <option class="dropdown-item" value="AK"><a>Alaska</a></option>
                                        <option class="dropdown-item" value="HI">Hawaii</option>


                                        <option class="dropdown-item" value="CA">California</option>
                                        <option class="dropdown-item" value="NV">Nevada</option>
                                        <option class="dropdown-item" value="OR">Oregon</option>
                                        <option class="dropdown-item" value="WA">Washington</option>
                                    </div>
                                </select>
                            </form> -->

                            <!-- <div class="pd-20 card-box mb-30"> -->
                            <!-- <div class="clearfix">
							<div class="pull-left">
								 <h4 class="text-blue h4">Select 2</h4> 
								 <p class="mb-30">Select2 for custom search and select</p> 
							</div>
						</div>  -->
                            <!-- <form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
                                        <div class="dropdown">	
                                        <label>Single Select</label>
										<select
											class="btn btn-primary dropdown-toggle"
											name="state"
                                            role="button"
                                            >
											style="width: 100%; height: 38px"
                                            <div class="dropdown-menu dropdown-menu-right">
												<option class="dropdown-item" value="AK">Alaska</option>
												<option class="dropdown-item" value="HI">Hawaii</option>
											
											
												<option class="dropdown-item" value="CA">California</option>
												<option class="dropdown-item" value="NV">Nevada</option>
												<option class="dropdown-item" value="OR">Oregon</option>
												<option class="dropdown-item" value="WA">Washington</option>
											
											</div>
										</select>
                                        </div>
									</div>
								</div>
								
							</div>
						</form> -->
                        </div>
                    </div>
                    <hr>
                    <label class="weight-600">Image Category</label>
                        
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked/>
                                    <label class="custom-control-label" for="customCheck1">Check Me For
                                        Add Category</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                <label class="custom-control-label" for="customCheck2   ">Check Me For
                                    Delete Category</label>
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Add Image Category</label>
                                <input type="text" class="form-control" disabled="" />
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="dropdown">


                                <button type="button" class="btn btn-primary  btn-right"
                                    style="margin-top: 10px;width: 90%;">Add</button>
                                <!-- January 2018 -->
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Delete Image Category</label>
                                <div class="form-group row">
                                    <!-- <label class="col-sm-12 col-md-2 col-form-label">Category</label> -->
                                    <div class="col-sm-12 col-md-10">
                                        <select class="custom-select col-12">
                                            <option selected="">Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="dropdown">


                                <button type="button" class="btn btn-primary  btn-right"
                                    style="margin-top: 10px;width: 90%;">Delete</button>
                                <!-- January 2018 -->
                                </a>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <!-- <div class="pull-left">
                        <h4 class="text-blue h4">Dropzone</h4>
                    </div> -->
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="pull-left">
                                <h4 class="text-blue h4">Dropzone</h4>
                            </div>
                           

                        </div>
                        <div class="col-md-6 col-sm-12 text-right">

                            <form>
                                <label>Select Category</label>
                                <select class="btn btn-primary dropdown-toggle" role="button" data-toggle="dropdown">
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <option class="dropdown-item" value="AK"><a>Alaska</a></option>
                                        <option class="dropdown-item" value="HI">Hawaii</option>


                                        <option class="dropdown-item" value="CA">California</option>
                                        <option class="dropdown-item" value="NV">Nevada</option>
                                        <option class="dropdown-item" value="OR">Oregon</option>
                                        <option class="dropdown-item" value="WA">Washington</option>
                                    </div>
                                </select>
                            </form>

                            <!-- <div class="pd-20 card-box mb-30"> -->
                            <!-- <div class="clearfix">
							<div class="pull-left">
								 <h4 class="text-blue h4">Select 2</h4> 
								 <p class="mb-30">Select2 for custom search and select</p> 
							</div>
						</div>  -->
                            <!-- <form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
                                        <div class="dropdown">	
                                        <label>Single Select</label>
										<select
											class="btn btn-primary dropdown-toggle"
											name="state"
                                            role="button"
                                            >
											style="width: 100%; height: 38px"
                                            <div class="dropdown-menu dropdown-menu-right">
												<option class="dropdown-item" value="AK">Alaska</option>
												<option class="dropdown-item" value="HI">Hawaii</option>
											
											
												<option class="dropdown-item" value="CA">California</option>
												<option class="dropdown-item" value="NV">Nevada</option>
												<option class="dropdown-item" value="OR">Oregon</option>
												<option class="dropdown-item" value="WA">Washington</option>
											
											</div>
										</select>
                                        </div>
									</div>
								</div>
								
							</div>
						</form> -->
                        </div>
                    </div>
                </div>
                
                  
                <form class="dropzone" action="#" id="my-awesome-dropzone">
                    <div class="fallback">
                        <input type="file" name="file" />
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <!-- <h4>Image Dropzone</h4> -->
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <!-- <ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a> 
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											 
										</li>
									</ol> -->
                        </nav>
                    </div>

                    <!-- Sumit button -->
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">

                            <button type="button" class="btn btn-primary  btn-right"
                                style="margin-top: 10px;">Submit</button>
                            <!-- January 2018 -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
    </div>


    <!-- https://localhost.run/docs/ -->
    </div>






    <!-- welcome modal start -->
    <!-- <div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button> -->
    <!-- welcome modal end -->
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/dropzone/src/dropzone.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function (file) {
                var name = file.name;
                var _ref;
                return (_ref = file.previewElement) != null
                    ? _ref.parentNode.removeChild(file.previewElement)
                    : void 0;
            },
        });
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>