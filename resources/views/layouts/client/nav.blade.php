  @php
      $nav = [['name' => 'Home', 'route' => 'client.index'], ['name' => 'About Me', 'route' => 'client.about'], ['name' => 'Services', 'route' => 'client.service'], ['name' => 'Works', 'route' => 'client.work'], ['name' => 'Blog', 'route' => 'client.blog'], ['name' => 'Contact', 'route' => 'client.contact']];
  @endphp
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
      <div class="container py-2 py-md-5">
          <div class="row align-items-start">
              <div class="col-md-2">
                  <ul class="custom-menu">
                      @foreach ($nav as $item)
                          <li class="{{ url()->current() == route($item['route']) ? 'active' : '' }}"><a
                                  href="{{ url()->current() == route($item['route']) ? 'javascript:void(0)' : route($item['route']) }}">{{ $item['name'] }}</a>
                          </li>
                      @endforeach


                  </ul>
              </div>
              <div class="col-md-6 d-none d-md-block  mr-auto">
                  <div class="tweet d-flex">
                      <span class="icofont-twitter text-white mt-2 mr-3"></span>
                      <div>
                          <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus
                                  incidunt ut
                                  officiis explicabo inventore. <br> <a href="#">t.co/v82jsk</a></em></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 d-none d-md-block">
                  <h3>Hire Me</h3>
                  <p>You are looking for an expert in the field of technology, wanting to own a modern, luxurious
                      product with good performance and easy to use. Please contact me.<br> <a
                          href="mailto:{{ author()->email }}?subject=Product manufacturing - Hire">{{ author()->email }}</a>
                  </p>
              </div>
          </div>

      </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
      <div class="container">
          <a class="navbar-brand" href="{{ route('client.index') }}">{{ getEnv('APP_NAME') }}</a>

          <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
          </a>

      </div>
  </nav>
