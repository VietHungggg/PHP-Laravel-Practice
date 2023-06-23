

<nav class="navbar navbar-expand-sm bg-blue">
    <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-link">
            <a class="{{ request()->is('/') ? 'active' : '' }}" 
                href="/">HomePage
            </a>
          </li>
          <li class="nav-link" style="margin-left: 20px">
            <a class="{{ request()->is('about') ? 'active' : '' }}" 
                href="about">AboutMe</a>
          </li>
          <li class="nav-link" style="margin-left: 20px">
            <a class="{{ request()->is('foods') ? 'active' : '' }}" 
                href="foods">Foods</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a> --}}
          </li>
        </ul>
      </div>
    </div>
</nav>