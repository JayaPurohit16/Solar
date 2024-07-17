 <!-- Side Nav START -->
 <div class="side-nav">
     <div class="side-nav-inner">
         <ul class="side-nav-menu scrollable">

             <!-- Dashboard -->
             <li class="{{ Request::route()->getName() == 'admin.dashboard' ? 'active' : '' }}">
                 <a href="{{ route('admin.dashboard') }}">
                     <span class="icon-holder">
                         <i class="anticon anticon-dashboard"></i>
                     </span>
                     <span class="title" title="Dashboard">Dashboard</span>
                     <span class="arrow">
                         <i class="arrow-icon"></i>
                     </span>
                 </a>
             </li>

             <!-- Category -->
             <li
                 class="{{ Request::route()->getName() == 'admin.category.index' || Request::route()->getName() == 'admin.category.create' || Request::route()->getName() == 'admin.category.edit' ? 'active' : '' }}">
                 <a href="{{ route('admin.category.index') }}">
                     <span class="icon-holder">
                         <i class="anticon anticon-build"></i>
                     </span>
                     <span class="title" title="Category">Category</span>
                     <span class="arrow">
                         <i class="arrow-icon"></i>
                     </span>
                 </a>
             </li>

             <!-- Project -->
             <li
                 class="{{ Request::route()->getName() == 'admin.project.index' || Request::route()->getName() == 'admin.project.create' || Request::route()->getName() == 'admin.project.edit' ? 'active' : '' }}">
                 <a href="{{ route('admin.project.index') }}">
                     <span class="icon-holder">
                         <i class="anticon anticon-project"></i>
                     </span>
                     <span class="title" title="Project">Project</span>
                     <span class="arrow">
                         <i class="arrow-icon"></i>
                     </span>
                 </a>
             </li>

             <!-- Product -->
             <li
                 class="{{ Request::route()->getName() == 'admin.services.index' || Request::route()->getName() == 'admin.services.create' || Request::route()->getName() == 'admin.services.edit' ? 'active' : '' }}">
                 <a href="{{ route('admin.services.index') }}">
                     <span class="icon-holder">
                         <i class="anticon anticon-appstore"></i>
                     </span>
                     <span class="title" title="Product">Product</span>
                     <span class="arrow">
                         <i class="arrow-icon"></i>
                     </span>
                 </a>
             </li>

             <!-- News -->
             <li
                 class="{{ Request::route()->getName() == 'admin.news.index' || Request::route()->getName() == 'admin.news.create' || Request::route()->getName() == 'admin.news.edit' ? 'active' : '' }}">
                 <a href="{{ route('admin.news.index') }}">
                     <span class="icon-holder">
                         <i class="far fa-newspaper"></i>
                     </span>
                     <span class="title" title="News">News</span>
                     <span class="arrow">
                         <i class="arrow-icon"></i>
                     </span>
                 </a>
             </li>

             <!-- FAQ -->
             {{-- <li
                 class="{{ Request::route()->getName() == 'admin.questions.index' || Request::route()->getName() == 'admin.questions.create' || Request::route()->getName() == 'admin.questions.edit' ? 'active' : '' }}">
                 <a href="{{ route('admin.questions.index') }}">
                     <span class="icon-holder">
                         <i class="anticon anticon-question"></i>
                     </span>
                     <span class="title" title="Questions">FAQ</span>
                     <span class="arrow">
                         <i class="arrow-icon"></i>
                     </span>
                 </a>
             </li> --}}

             <!-- CMS -->
             <li class="{{ Request::route()->getName() == 'admin.cms.index' ? 'active' : '' }}">
                 <a href="{{ route('admin.cms.index') }}">
                     <span class="icon-holder">
                         <i class="anticon anticon-setting"></i>
                     </span>
                     <span class="title" title="CMS">CMS</span>
                     <span class="arrow">
                         <i class="arrow-icon"></i>
                     </span>
                 </a>
             </li>
         </ul>
     </div>
 </div>
 <!-- Side Nav END -->

 <!-- Page Container START -->
 <div class="page-container">
