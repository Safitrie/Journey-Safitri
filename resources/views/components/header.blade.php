<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <div class="btn-group" style="margin-left: auto">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#">
            <div class="media">
                <img class="align-self-center mr-3" src="https://upload.wikimedia.org/wikipedia/commons/4/44/210604_%EA%B3%A0%EC%9C%A4%EC%A0%95%282%29.jpg" style="width: 40px" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0">{{Auth::user()->nama}}</h5>
                  <small><p class="mb-0">Pkl 13.00 WIB</p></small>
                </div>
              </div>
            </a>
          <a class="dropdown-item" href="/forgett">Ubah Password</a>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </div>
</nav>