
@guest()
@else

@endguest

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">

        <img src="{{-- {{$auth_staff->user->photo}} --}}" class="img-circle" title="{{-- {{$auth_staff->user->name}} --}}"
        >
      </div>
      <div class="pull-left info">
        <p> UserName{{-- {{$auth_staff->user->name}} --}}</p>
        <!-- Status -->
        <small>Admin</small><br/>
        
      </div>
    </div>

  {{--   <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form --> --}}

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" id="sidebar-menu" data-widget="tree">
      {{-- <li class="header">HEADER</li> --}}
      <!-- Optionally, you can add icons to the links -->

      
      <li class=" treeview" >
        <a href="#"><i class="fa fa-lightbulb-o"></i> <span>CV</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" >
          <li class="" ><a href="{{ route('cv.index') }}"><i class="fa fa-circle-o"></i>Your CV</a></li>
          <li class="" ><a  href="cv/edit"><i class="fa fa-circle-o"></i>Edit Bio </a></li>
          <li class="" ><a  href="{{ route('experience.index') }}"><i class="fa fa-circle-o"></i>Experience </a></li>
          <li class="" ><a  href="{{ route('education.index') }}"><i class="fa fa-circle-o"></i>Education </a></li>
          <li class="" ><a  href="{{ route('skill.index') }}"><i class="fa fa-circle-o"></i>Skill </a></li>
          <li class="" ><a  href="#"><i class="fa fa-circle-o"></i>Refference </a></li>
          <li class="" ><a  href="{{ route('social.index') }}"><i class="fa fa-circle-o"></i>Social </a></li>
          <li class="" ><a  href="#"><i class="fa fa-circle-o"></i>Hobbies </a></li>
        </ul>
      </li>
      <li class="" ><a  href="#"><i class="fa fa-circle-o"></i>Area </a></li>
      
      </li>


     

  </ul>

     
       
  <!-- /.sidebar-menu -->
</section>
  <!-- /.sidebar 
  -->
</aside>