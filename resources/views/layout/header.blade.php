<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Swadesh Properties</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('crm/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('crm/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('crm/assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('crm/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('crm/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('crm/assets/css/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('crm/assets/images/logo.png') }}" />
</head>


<div>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav
        class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo bg-white" href="index.html"><img src="crm/assets/images/logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="crm/assets/images/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input
                  type="text"
                  class="form-control bg-transparent border-0"
                  placeholder="Search..." />
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-md-block">
              <a
                class="nav-link dropdown-toggle"
                id="reportDropdown"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false">
                Reports
              </a>
              <div
                class="dropdown-menu navbar-dropdown"
                aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-pdf mr-2"></i>PDF
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-word mr-2"></i>doc
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-md-block">
              <a
                class="nav-link dropdown-toggle"
                id="projectDropdown"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false">
                Add
              </a>
              <div
                class="dropdown-menu navbar-dropdown"
                aria-labelledby="projectDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="contact.html">
                  <i class="mdi mdi-airplay mr-2"></i>Contact
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="lead.html">
                  <i class="mdi mdi-apps mr-2"></i>Lead
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="opportunity.html">
                  <i class="mdi mdi-heart-box-outline mr-2"></i>Builder
                  Opportunity
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="meeting.html">
                  <i class="mdi mdi-google-physical-web mr-2"></i>Follow Up
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="call.html">
                  <i class="mdi mdi-phone-in-talk mr-2"></i>Call
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="task.html">
                  <i class="mdi mdi-filter-variant mr-2"></i>Task
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="service-ticket.html">
                  <i class="mdi mdi-file-document-box mr-2"></i>Service Ticket
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="email.html">
                  <i class="mdi mdi-email-outline mr-2"></i>EMail
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </li>

            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="profileDropdown"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="crm/assets/images/faces/face1.jpg" alt="image" />
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Smith</p>
                </div>
              </a>
              <div
                class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                aria-labelledby="profileDropdown"
                data-x-placement="bottom-end">
                <div class="p-3 text-center" style="background: #030336">
                  <img
                    class="img-avatar img-avatar48 img-avatar-thumb"
                    src="crm/assets/images/faces/face1.jpg"
                    alt="" />
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">
                    David Smith
                  </h5>

                  <a
                    class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                    href="profile.html">
                    <span>Profile</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <h5
                    class="dropdown-header text-uppercase pl-2 text-dark mt-2">
                    Actions
                  </h5>

                  <!-- <a
                    class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                    href="index.html">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a> -->
                  <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </form>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link count-indicator dropdown-toggle"
                id="messageDropdown"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="messageDropdown">
                <h6
                  class="p-3 mb-0 text-white py-4"
                  style="background: #030336">
                  Messages
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img
                      src="crm/assets/images/faces/face4.jpg"
                      alt="image"
                      class="profile-pic" />
                  </div>
                  <div
                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6
                      class="preview-subject ellipsis mb-1 font-weight-normal">
                      Mark send you a message
                    </h6>
                    <p class="text-gray mb-0">1 Minutes ago</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img
                      src="crm/assets/images/faces/face2.jpg"
                      alt="image"
                      class="profile-pic" />
                  </div>
                  <div
                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6
                      class="preview-subject ellipsis mb-1 font-weight-normal">
                      Cregh send you a message
                    </h6>
                    <p class="text-gray mb-0">15 Minutes ago</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img
                      src="crm/assets/images/faces/face3.jpg"
                      alt="image"
                      class="profile-pic" />
                  </div>
                  <div
                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6
                      class="preview-subject ellipsis mb-1 font-weight-normal">
                      Profile picture updated
                    </h6>
                    <p class="text-gray mb-0">18 Minutes ago</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link count-indicator dropdown-toggle"
                id="notificationDropdown"
                href="#"
                data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="notificationDropdown">
                <h6
                  class="p-3 mb-0 text-white py-4"
                  style="background: #030336">
                  Notifications
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div
                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">
                      Event today
                    </h6>
                    <p class="text-gray ellipsis mb-0">
                      Just a reminder that you have an event today
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div
                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">
                      Settings
                    </h6>
                    <p class="text-gray ellipsis mb-0">Update dashboard</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div
                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">
                      Launch Admin
                    </h6>
                    <p class="text-gray ellipsis mb-0">New admin wow!</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>