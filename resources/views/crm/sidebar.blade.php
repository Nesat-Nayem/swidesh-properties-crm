<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="/">
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
   

          <!-- <li class="nav-item">
            <a class="nav-link" href="opportunity.html">Builder Opportunities</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="contacts">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="followups">Follow Up</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('leads.index') }}">
         <span class="menu-title">Leads</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('leads.cold') }}">
         <span class="menu-title">Cold Leads</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('leads.hot') }}">
         <span class="menu-title">Hot Leads</span>
            </a>
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
            <a class="nav-link" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/expenses">Expenses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/payments">Payment Receipts</a>
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
          <!-- <li class="nav-item">
            <a class="nav-link" href="call.html">Calls</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="email.html">Emails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="meeting.html">Follow Up</a>
          </li> -->

          <li class="nav-item">
            <!-- <a class="nav-link" href="task.html">Tasks</a> -->
            <a class="nav-link" href="/tasks">Tasks</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- <li class="nav-item">
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
    </li> -->
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
            <a class="nav-link" href="/teams">Team List</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="time-sheet.html">Time Sheet</a>
          </li> -->
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="report">
        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
        <span class="menu-title">Reports</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/">
        <span class="icon-bg"><i class="mdi mdi-settings  menu-icon"></i></span>
        <span class="menu-title">Inventory</span>
      </a>
    </li>

    <!-- <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#auth"
        aria-expanded="false"
        aria-controls="auth">
        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
        <span class="menu-title">Report</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="profile.html"> Lead Report </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html"> Contract Report </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html"> Product Report </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html"> Expences Report </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html"> Payment Report </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html"> Task Report </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html"> Team Report </a>
          </li>
        </ul>
      </div>
    </li> -->

    <!-- <li class="nav-item sidebar-user-actions mt-5">
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
    </li> -->
    <!-- <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="profile.html" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </div>
    </li> -->

    <li class="nav-item sidebar-user-actions">
      <!-- <div class="sidebar-user-menu">
        <a href="index.html" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div> -->

      <div class="sidebar-user-menu">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
            <i class="mdi mdi-logout menu-icon"></i>
            <span class="menu-title">Log Out</span>
          </a>
        </form>
      </div>
    </li>
  </ul>
</nav>