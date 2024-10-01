<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="dashboard.html">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#Customers"
        aria-expanded="false"
        aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-account menu-icon"></i></span>
        <span class="menu-title">Customers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Customers">
        <ul class="nav flex-column sub-menu">
          <!-- <li class="nav-item">
                    <a class="nav-link" href="lead.html">Leads</a>
                  </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('leads.index') }}">
              <!-- <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span> -->
              <span class="menu-title">Leads</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="opportunity.html">Builder Opportunities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contacts</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#Sales"
        aria-expanded="false"
        aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-currency-inr menu-icon"></i></span>
        <span class="menu-title">Sales Automation</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Sales">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="products.html">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="expenses.html">Expenses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="payment-receipts.html">Payment Receipts</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#Activities"
        aria-expanded="false"
        aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-gnome menu-icon"></i></span>
        <span class="menu-title">Activities</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Activities">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="call.html">Calls</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="email.html">Emails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="meeting.html">Follow Up</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="task.html">Tasks</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#Contracts"
        aria-expanded="false"
        aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-highway menu-icon"></i></span>
        <span class="menu-title">Builder Contracts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Contracts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="contracts-list.html">Contracts List</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#Team"
        aria-expanded="false"
        aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-human-male-female menu-icon"></i></span>
        <span class="menu-title">Team</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Team">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="team-list.html">Team List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="time-sheet.html">Time Sheet</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="reports.html">
        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
        <span class="menu-title">Reports</span>
      </a>
    </li>

    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#auth"
        aria-expanded="false"
        aria-controls="auth">
        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="profile.html"> Profile </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html"> Register </a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item sidebar-user-actions mt-5">
      <div class="user-details">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <div class="d-flex align-items-center">
              <div class="sidebar-profile-img">
                <img
                  src="crm/assets/images/faces/face1.jpg"
                  alt="image"
                  style="width: 30px" />
              </div>
              <div class="sidebar-profile-text">
                <p class="mb-1">David Smith</p>
              </div>
            </div>
          </div>
          <div class="badge badge-danger">Admin</div>
        </div>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="profile.html" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </div>
    </li>

    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="index.html" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li>
  </ul>
</nav>