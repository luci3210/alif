<div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
          {{-- <img src="{{ url('/storage/profile-pic',Auth::user()->avatar == '' ? '1586777833.jpg' : Auth::user()->avatar )}}" alt="{{Auth::user()->name}}"/> --}}
          </div>
        </a>
        <a href="#" class="simple-text logo-normal" style="padding-bottom:22px;">
          {{ Auth::user()->name }}<br>
          
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li {{Route::is('home')? 'class=active':''}}>
            <a href="{{route('home')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>

          @role('admin')

      
          <li {{Route::is('chart.index')? 'class=active':''}}>
            <a href="{{route('chart.generate')}}" target="_blank">
            <i class="nc-icon nc-money-coins"></i>
                <p>Chart</p>
            </a>
          </li>

          <li {{Route::is('manage-registered.index')? 'class=active':''}}>
            <a href="{{route('manage-registered.index')}}">
            <i class="nc-icon nc-money-coins"></i>
                <p>Membership Export</p>
            </a>
          </li>

          <li {{Route::is('manage-leader.index') || Route::is('manage-leader.create')? 'class=active':''}}>
            <a href="{{route('manage-leader.index')}}">
            <i class="nc-icon nc-money-coins"></i>
                <p>Manage learders</p>
            </a>
          </li>

          <li {{Route::is('manage-voters.index')||Route::is('manage-voters.create')? 'class=active':''}}>
            <a href="{{route('manage-voters.index')}}">
            <i class="nc-icon nc-money-coins"></i>
                <p>Number of voters</p>
            </a>
          </li>



      <li {{Route::is('permissions.index')||Route::is('permissions.create')||Route::is('permissions.edit')||Route::is('roles.index')||Route::is('roles.create')||Route::is('roles.edit')||Route::is('users.index')||Route::is('users.create')||Route::is('users.edit')? 'class=active':''}}>
          <a data-toggle="collapse" href="#users" aria-expanded="false" class="collapsed">
              <i class="nc-icon nc-bank"></i>
              <p>Manage Users</p>
              <b class="caret"></b>
          </a>
        <div class="collapse" id="users" aria-expanded="false" style="height: 0px;">
          <ul class="nav">
          <li {{Route::is('permissions.index')||Route::is('permissions.create')||Route::is('permissions.edit')? 'class=active':''}}>
              <a href="{{route('permissions.index')}}">
              <i class="nc-icon nc-single-02"></i>
                  <p>Permissions</p>
              </a>
            </li>
            <li {{Route::is('roles.index')||Route::is('roles.create')||Route::is('roles.edit')? 'class=active':''}}>
              <a href="{{route('roles.index')}}">
              <i class="nc-icon nc-single-02"></i>
                  <p>Roles</p>
              </a>
            </li>
            <li {{Route::is('users.index')||Route::is('users.create')||Route::is('users.edit')? 'class=active':''}}>
              <a href="{{route('users.index')}}">
              <i class="nc-icon nc-single-02"></i>
                  <p>Users</p>
              </a>
            </li>

           

          </ul>
        </div>
      </li>

      @endrole

       

      <li {{Route::is('profile.index')? 'class=active':''}}>
        <a href="{{ route('profile.index') }}">
          <i class="nc-icon nc-circle-10"></i>
          <p>User Profile</p>
        </a>
      </li>



        </ul>
      </div>
</div>
