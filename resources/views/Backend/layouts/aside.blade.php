<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Admin <b class="font-black">Dashboard</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="active">
                <a href="/dashboard">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Pages</p>
        <ul class="menu-list">
            <li>
                <a href="{{route('section.title')}}">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    <span class="menu-item-label">Section Title</span>
                </a>
            </li>
            <li class="--set-active-tables-html">
                <a href="{{route('hero.index')}}">
                    <span class="icon"><i class="mdi mdi-table"></i></span>
                    <span class="menu-item-label">Hero</span>
                </a>
            </li>
            <li class="--set-active-forms-html">
                <a href="{{route('about.index')}}">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">About</span>
                </a>
            </li>
            <li class="--set-active-profile-html">
                <a href="{{route('resume.index')}}">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    <span class="menu-item-label">Resume</span>
                </a>
            </li>

            <li>
                <a href="{{route('service.index')}}">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    <span class="menu-item-label">Services</span>
                </a>
            </li>
            <li>
                <a href="{{route('skill.index')}}">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    <span class="menu-item-label">Skill</span>
                </a>
            </li>
            <li>
                <a href="{{route('project.index')}}">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    <span class="menu-item-label">Project</span>
                </a>
            </li>
            <li class="--set-active-forms-html">
                <a href="{{route('hire.index')}}">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Hire</span>
                </a>
            </li>
            <li class="--set-active-forms-html">
                <a href="{{route('contact.index')}}">
                    <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                    <span class="menu-item-label">Contact</span>
                </a>
            </li>
        </ul>

    </div>
</aside>
