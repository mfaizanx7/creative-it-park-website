<aside class="aside is-placed-left is-expanded " >  

  <div class="menu is-menu-main">

    <p class="menu-label">General</p>

    <ul class="menu-list">

      <li class="active">

        <a href="#">

          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>

          <span class="menu-item-label">Dashboard</span>

        </a>

      </li>

    </ul>

    <p class="menu-label">Our Teams</p>

    <ul class="menu-list">

     <li>

        <a class="dropdown">

          <span class="icon"><i class="mdi mdi-view-list"></i></span>

          <span class="menu-item-label">Teams</span>

          <span class="icon"><i class="mdi mdi-plus"></i></span>

        </a>

        <ul>

          <li>

            <a href="{{ route('admin.team.index')}}">

              <span>Team Members</span>

            </a>

          </li>

        </ul>

      </li>  

    </ul>

    <p class="menu-label">Services</p>

    <ul class="menu-list">

     <li>

        <a class="dropdown">

          <span class="icon"><i class="mdi mdi-view-list"></i></span>

          <span class="menu-item-label">Services</span>

          <span class="icon"><i class="mdi mdi-plus"></i></span>

        </a>

        <ul>

          <li class="--set-active-profile-html">

            <a href="{{ route('admin.website.index')}}">

              <span class="icon"><i class="mdi mdi-account"></i></span>

              <span class="menu-item-label">Website Development</span>

            </a>

          </li>

          <li class="--set-active-profile-html">

            <a href="{{ route('admin.app.index')}}">

              <span class="icon"><i class="mdi mdi-account"></i></span>

              <span class="menu-item-label">App Development</span>

            </a>

          </li>      

          <li class="--set-active-profile-html">

            <a href="{{ route('admin.ui.index')}}">

              <span class="icon"><i class="mdi mdi-account"></i></span>

              <span class="menu-item-label">UI/UX Design</span>

            </a>

          </li>      

          <li class="--set-active-profile-html">

            <a href="{{ route('admin.cloud.index')}}">

              <span class="icon"><i class="mdi mdi-account"></i></span>

              <span class="menu-item-label">Cloud Computing</span>

            </a>

          </li>   

        </ul>

      </li>  

    </ul>

    <p class="menu-label">Setting</p>

    <ul class="menu-list">

      <li>

        <a class="dropdown">

          <span class="icon"><i class="mdi mdi-view-list"></i></span>

          <span class="menu-item-label">Seting</span>

          <span class="icon"><i class="mdi mdi-plus"></i></span>

        </a>

        <ul>

          <li>

            <a href="{{ route('admin.home_about.create')}}">

              <span>Home About</span>

            </a>

          </li>

          <li>

          <li>

            <a href="{{ route('admin.about.create')}}">

              <span>About</span>

            </a>

          </li>

          <li>

            <a href="{{ route('admin.footer.create')}}">

              <span>Footer</span>

            </a>

          </li>

          <li>

            <a href="{{ route('admin.subscribe.index')}}">

              <span>Subscribe</span>

            </a>

          </li>

        </ul>

      </li>  

    </ul>

    {{-- <p class="menu-label">Portfolio</p> --}}

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.portfolio.index')}}">

          <span class="icon"><i class="mdi mdi-account"></i></span>

          <span class="menu-item-label">portfolio</span>

        </a>

      </li> 

    </ul>

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.faqs.index')}}">

          <span class="icon"><i class="mdi mdi-account"></i></span>

          <span class="menu-item-label">Faqs</span>

        </a>

      </li> 

    </ul>

    {{-- <p class="menu-label">Client</p> --}}

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.client.index')}}">

          <span class="icon"><i class="mdi mdi-account"></i></span>

          <span class="menu-item-label">Client</span>

        </a>

      </li> 

    </ul>

    {{-- <p class="menu-label">Industry</p> --}}

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.industry.index')}}">

          <span class="icon"><i class="mdi mdi-account"></i></span>

          <span class="menu-item-label">Industry</span>

        </a>

      </li> 

    </ul>

    {{-- <p class="menu-label">News</p> --}}

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.news.index')}}">

          <span class="icon"><i class="mdi mdi-account"></i></span>

          <span class="menu-item-label">News</span>

        </a>

      </li> 

    </ul>

    <ul class="menu-list">
      <li class="--set-active-profile-html">
        <a href="{{ route('admin.events.index')}}">
          <span class="icon"><i class="mdi mdi-account"></i></span>
          <span class="menu-item-label">Events</span>
        </a>
      </li> 
    </ul>

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.contact.index')}}">

          <span class="icon"><i class="mdi mdi-account"></i></span>

          <span class="menu-item-label">Contact</span>

        </a>

      </li> 

    </ul>

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.blogs.index')}}">

          <span class="icon"><i class="mdi mdi-account"></i></span>

          <span class="menu-item-label">Blogs</span>

        </a>

      </li> 

    </ul>

    <ul class="menu-list">

      <li class="--set-active-profile-html">

        <a href="{{ route('admin.roles.index')}}">

          <span class="icon"><i class="mdi mdi-account-lock"></i></span>

          <span class="menu-item-label">Roles</span>

        </a>

      </li>

    </ul>

  </div>

</aside>