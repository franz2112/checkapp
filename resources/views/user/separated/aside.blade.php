<aside  x-data="{ open: false }"  class="sidebar-part">
    <ul class="navbar-nav ps-4">
      <div class="main-title-page py-4 px-3">
        <a href="" class="nav-title">
          <img src="../assets/img/Checkapp logo 2.0.png" alt="logo" />
          <span class="links-name text-black">Check</span>
          <span class="links-name">App</span>
        </a>
      </div>
      <li class="nav-item active">
        <!-- "active" for active Home -->
        <a href="/" class="home-nav">
          <i class="icons fa-solid fa-house px-2"></i>
          <span class="links-name">Home</span>
        </a>
      </li>
      <li id="active-c" class="nav-item">
        <!-- "active - clinic" for active Clinic -->
        <a href="/clinics" class="side-nav-clinic">
          <i class="fa-brands fa-medrt px-3"></i>
          <span class="links-name">Clinics</span>
        </a>
      </li>
      <li id="active-a" class="nav-item">
        <!-- "active - appoint" for active Appointment -->
        <a href="/" class="side-nav-appoint">
          <i class="fa-solid fa-pen px-3"></i>
          <span class="links-name">Appointments</span>
        </a>
      </li>
      <li id="active-n"  class="nav-item">
        <!-- "active - notif" for active notification-->
        <a href="/pages/notification.html" class="side-nav-notif">
          <i class="fa-solid fa-message px-3"></i>
          <span class="links-name">Notifications</span>
        </a>
      </li>
      <li id="active-r" class="nav-item">
        <!-- "active - Rec" for active Records-->
        <a href="/pages/records.html" class="side-nav-rec">
          <i class="fa-solid fa-file-prescription px-3"></i>
          <span class="links-name">Records</span>
        </a>
      </li>

      <!-- All navlower, the active is "active-lower" -->
      <li class="pt-5 nav-lower">
        <a href="#" class="side-nav-lower">
          <i class="icons fa-solid fa-gear px-3"></i>
          <span class="links-name">Settings</span>
        </a>
      </li>
      <li class="nav-lower">
        <a href="#" class="side-nav-lower">
          <i class="icons fa-solid fa-circle-question px-3"></i>
          <span class="links-name">Help</span>
        </a>
      </li>
      
      <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf
        <li class="nav-lower">
            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="side-nav-out" >
                <i
                class="icons fa-solid fa-arrow-right-from-bracket px-3"
                data-fa-transform="flip-h"
                ></i>
                <span class="links-name">{{ __('Log Out') }}</span>
            </a>
        </li>
      </form>
    </ul>
  </aside>