<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('home_page')}}">Admin Home PAge</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="{{route('classesList')}}">Classes</a></li>
      <li><a href="{{route('add_class')}}">Insert Class</a></li>
      <li><a href="{{route('trashedClass')}}">Trashed</a></li>
      
    </ul>
  </div>
</nav>