<nav class="navbar navbar-expand-lg navbar-warning bg-info">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="201571.png" alt="logo" style="width: 50px;" class="rounded-pill">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('login') }}">ล็อคอิน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('register') }}">สมัครสมาชิก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('panel') }}">ผู้ใช้งาน</a>
          </li>
        </ul>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('book-pdf') }}">รายการหนังสือ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('Calculator') }}">คำนวณ</a>
        </li>
      </ul>
      </div>
    </div>
  </nav>