<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
 
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link rel="canonical" href="https://coreui.io/docs/forms/validation/">
  </head>
  <body>
  <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      </svg><a href="/dashboard"><center><button type="button" class="btn btn-outline-primary">Dashboard</center></button>
</a></li>              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
</svg><a href="/addreminder"><center><button type="button" class="btn btn-outline-primary">Add reminder</center></button>
</a></li>                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
</svg><a href="/editreminder"><center><button type="button" class="btn btn-outline-primary">Edit reminder</center></button>
</a></li>          </ul>
    </div>
          
       <!-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
            </svg> </a>
          
        </li>
        <li class="nav-item"><a class="nav-link" href="charts.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> </a></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
            </svg> </a>
          
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> </a>
         
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> </a>
          
        </li>
        <li class="nav-item"><a class="nav-link" href="widgets.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
            </svg> <span class="badge badge-sm bg-info ms-auto"></span></a></li>
        <li class="nav-divider"></li>
        <li class="nav-title"></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> </a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> </a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> </a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg></a></li>
          </ul>
        </li>
        <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
            </svg> </a></li>
        <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
            </svg>
            <div class="fw-semibold"></div>
          </a></li>
      </ul>-->
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
          <i class="fa-solid fa-bars"></i>  
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">       
          <h4>Add Reminder</h4></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
         <!-- <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>-->
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <h6>Add your new Reminder here!</h6>
                
            </ol>
          </nav>
        </div>
      </header>
     <!-- <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form validation</strong><span class="small ms-1">Custom styles</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">For custom CoreUI for Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you. When attempting to submit, you’ll see the <code>:invalid</code> and <code>:valid</code> styles applied to your form controls.</p>
                  <p class="text-medium-emphasis small">Custom feedback styles apply custom colors, borders, focus styles, and background icons to better communicate feedback. Background icons for <code>&lt;select&gt;</code>s are only available with <code>.form-select</code>, and not <code>.form-control</code>.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-575" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/validation/#custom-styles" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>-->
                    <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                          
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                         
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-2 active preview" role="tabpanel" id="preview-739">
                       
                      <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-575">
                        <form class="row g-3 needs-validation" novalidate="">
                          <div class="col-md-3">
                            <label class="form-label" for="validationCustom01">Date</label>
                            <input class="form-control" id="validationCustom01" type="text" value="10/12/2022" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationCustom02">Time</label>
                            <input class="form-control" id="validationCustom02" type="text" value="10:12 AM" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>
                   
                          
                          <!--<div class="col-md-4">
                            <label class="form-label" for="validationCustomUsername">Username</label>
                            <div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input class="form-control" id="validationCustomUsername" type="text" aria-describedby="inputGroupPrepend" required="">
                              <div class="invalid-feedback">Please choose a username.</div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="validationCustom03">City</label>
                            <input class="form-control" id="validationCustom03" type="text" required="">
                            <div class="invalid-feedback">Please provide a valid city.</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationCustom04">State</label>
                            <select class="form-select" id="validationCustom04" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option>...</option>
                            </select>
                            <div class="invalid-feedback">Please select a valid state.</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationCustom05">Zip</label>
                            <input class="form-control" id="validationCustom05" type="text" required="">
                            <div class="invalid-feedback">Please provide a valid zip.</div>
                          </div>
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
                              <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                              <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form validation</strong><span class="small ms-1">Browser defaults</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.</p>
                  <p class="text-medium-emphasis small">While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-789" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/validation/#browser-defaults" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-789">
                        <form class="row g-3">
                          <div class="col-md-4">
                            <label class="form-label" for="validationDefault01">First name</label>
                            <input class="form-control" id="validationDefault01" type="text" value="Mark" required="">
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="validationDefault02">Last name</label>
                            <input class="form-control" id="validationDefault02" type="text" value="Otto" required="">
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="validationDefaultUsername">Username</label>
                            <div class="input-group"><span class="input-group-text" id="inputGroupPrepend2">@</span>
                              <input class="form-control" id="validationDefaultUsername" type="text" aria-describedby="inputGroupPrepend2" required="">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="validationDefault03">City</label>
                            <input class="form-control" id="validationDefault03" type="text" required="">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationDefault04">State</label>
                            <select class="form-select" id="validationDefault04" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationDefault05">Zip</label>
                            <input class="form-control" id="validationDefault05" type="text" required="">
                          </div>
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" id="invalidCheck2" type="checkbox" required="">
                              <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form validation</strong><span class="small ms-1">Server side</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">We recommend using client-side validation, but in case you require server-side validation, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
                  <p class="text-medium-emphasis small">For invalid fields, ensure that the invalid feedback/error message is associated with the relevant form field using <code>aria-describedby</code> (noting that this attribute allows more than one <code>id</code> to be referenced, in case the field already points to additional form text).</p>
                  <p class="text-medium-emphasis small">To fix<a href="https://github.com/twbs/bootstrap/issues/25110">issues with border radii</a>, input groups require an additional <code>.has-validation</code> class.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1054" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/validation/#server-side" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1054">
                        <form class="row g-3">
                          <div class="col-md-4">
                            <label class="form-label" for="validationServer01">First name</label>
                            <input class="form-control is-valid" id="validationServer01" type="text" value="Mark" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="validationServer02">Last name</label>
                            <input class="form-control is-valid" id="validationServer02" type="text" value="Otto" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="validationServerUsername">Username</label>
                            <div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend3">@</span>
                              <input class="form-control is-invalid" id="validationServerUsername" type="text" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="">
                              <div class="invalid-feedback" id="validationServerUsernameFeedback">Please choose a username.</div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="validationServer03">City</label>
                            <input class="form-control is-invalid" id="validationServer03" type="text" aria-describedby="validationServer03Feedback" required="">
                            <div class="invalid-feedback" id="validationServer03Feedback">Please provide a valid city.</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer04">State</label>
                            <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option>...</option>
                            </select>
                            <div class="invalid-feedback" id="validationServer04Feedback">Please select a valid state.</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationServer05">Zip</label>
                            <input class="form-control is-invalid" id="validationServer05" type="text" aria-describedby="validationServer05Feedback" required="">
                            <div class="invalid-feedback" id="validationServer05Feedback">Please provide a valid zip.</div>
                          </div>
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input is-invalid" id="invalidCheck3" type="checkbox" aria-describedby="invalidCheck3Feedback" required="">
                              <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
                              <div class="invalid-feedback" id="invalidCheck3Feedback">
                                You must agree before submitting.

                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>--
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form validation</strong><span class="small ms-1">Supported elements</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Validation styles are available for the following form controls and components:</p>
                  <ul>
                    <li><code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s with <code>.form-control</code> (including up to one <code>.form-control</code> in input groups)</li>
                    <li><code>&lt;select&gt;</code><code>.form-select</code></li>
                    <li><code>.form-check</code>s</li>
                  </ul>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1275" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/validation/#supported-elements" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                          </svg>Code</a></li>-->
                    </ul>
                    
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-4 active preview" role="tabpanel" id="preview-1275">
                        <form class="was-validated">
                          <div class="mb-3">
                            <label class="form-label" for="validationTextarea">Type Messege</label>
                            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="write your messege here!" required=""></textarea>
                          </div>
                          <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-2 active preview" role="tabpanel" id="preview-264">
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">Select Vertical</option>
                          <option value="1">B.Voc IT</option>
                          <option value="2">B.Voc BFSI</option>
                          <option value="3">B.Voc MEPS</option>
                          <option value="3">B.Voc Design</option>

                        </select>
                      </div>
                      <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-2 active preview" role="tabpanel" id="preview-264">
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">Select Student</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-2 active preview" role="tabpanel" id="preview-700">
                        <div class="form-check form-example-indeterminate">
                          <input class="form-check-input" id="flexCheckIndeterminate" type="checkbox">
                          <label class="form-check-label" for="flexCheckIndeterminate">All</label>
                        </div>
                        </div>
                      <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-2 active preview" role="tabpanel" id="preview-264">
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">Select Messege Type</option>
                          <option value="1">Whatsapp</option>
                          <option value="2">Text</option>
                          <option value="3">Email</option>
                        </select>
                      </div>
                      <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-460">
                  <button class="btn btn-primary px-4" type="button">Save</button>
                  <button class="btn btn-primary px-4" type="button">Delete</button>                    
                  </div>
                     
                         <!-- <div class="form-check mb-3">
                            <input class="form-check-input" id="validationFormCheck1" type="checkbox" required="">
                            <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                            <div class="invalid-feedback">Example invalid feedback text</div>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="validationFormCheck2" type="radio" name="radio-stacked" required="">
                            <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" id="validationFormCheck3" type="radio" name="radio-stacked" required="">
                            <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                          </div>
                          <div class="mb-3">
                            <select class="form-select" required="" aria-label="select example">
                              <option value="">Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback">Example invalid select feedback</div>
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="file" aria-label="file example" required="">
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                          </div>
                          <div class="mb-3">
                            <button class="btn btn-primary" type="submit" disabled="">Submit form</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form validation</strong><span class="small ms-1">Tooltips</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code>position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-503" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/validation/#tooltips" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-503">
                        <form class="row g-3 needs-validation" novalidate="">
                          <div class="col-md-4 position-relative">
                            <label class="form-label" for="validationTooltip01">First name</label>
                            <input class="form-control" id="validationTooltip01" type="text" value="Mark" required="">
                            <div class="valid-tooltip">Looks good!</div>
                          </div>
                          <div class="col-md-4 position-relative">
                            <label class="form-label" for="validationTooltip02">Last name</label>
                            <input class="form-control" id="validationTooltip02" type="text" value="Otto" required="">
                            <div class="valid-tooltip">Looks good!</div>
                          </div>
                          <div class="col-md-4 position-relative">
                            <label class="form-label" for="validationTooltipUsername">Username</label>
                            <div class="input-group has-validation"><span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                              <input class="form-control" id="validationTooltipUsername" type="text" aria-describedby="validationTooltipUsernamePrepend" required="">
                              <div class="invalid-tooltip">Please choose a unique and valid username.</div>
                            </div>
                          </div>
                          <div class="col-md-6 position-relative">
                            <label class="form-label" for="validationTooltip03">City</label>
                            <input class="form-control" id="validationTooltip03" type="text" required="">
                            <div class="invalid-tooltip">Please provide a valid city.</div>
                          </div>
                          <div class="col-md-3 position-relative">
                            <label class="form-label" for="validationTooltip04">State</label>
                            <select class="form-select" id="validationTooltip04" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option>...</option>
                            </select>
                            <div class="invalid-tooltip">Please select a valid state.</div>
                          </div>
                          <div class="col-md-3 position-relative">
                            <label class="form-label" for="validationTooltip05">Zip</label>
                            <input class="form-control" id="validationTooltip05" type="text" required="">
                            <div class="invalid-tooltip">Please provide a valid zip.</div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      })()
    </script>

  </body>
</html>