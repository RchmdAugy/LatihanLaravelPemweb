<!--
=========================================================
* Argon Dashboard 3 - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
@extends('layout.v_template')
@section('content')
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Creative Tim</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="../pages/dashboard.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/tables.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/billing.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="../assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tabel Barang</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga beli</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Jual</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                      <th class="text-secondary opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">KD101</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Samsung M30s</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Ada</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.2.520.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.2.700.000</span>
                      </td>
                      <td>
                      <div>
                            <img src="data:image/jpeg;base64,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" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">KD102</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Redmi Note 6</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Ada</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.2.200.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.2.500.000</span>
                      </td>
                      <td>
                      <div>
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUQExIVFRUVFRcVFhUVFRUVFRgVFRYYFxUXFRUYHSggGBolGxUVIjIhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQFysfHx0rLS0tLSstKy0tLS0tLS0rLS0rLS0rLS0tLSsrLS0rLS0rLSstLS0rLS0rNy0rKy8rLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAgMEBQEGCAf/xABLEAABAwIBBgYOBggGAwAAAAABAAIDBBEhBRIxQVGxBgcyYXGBExQXIjRTcnORkpOy0dJCVHShwfAjJDNSs8TT4WNkoqPC8UNEgv/EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EACQRAQEAAgICAQUAAwAAAAAAAAABAhEDEhMhMQQyQVFhIiMz/9oADAMBAAIRAxEAPwD3FCEIBCEFBDyplSGnjMs8rY2DDOebC50AbSdgxWl1XG7QNNmsqJBtbG1o/wBx7T9y874aZXdX1zySexQudHE3UA02LhzuIvfZYalVSZPYNiD1HuyUX1eq9WD+sjuyUX1eq9WD+qvKO0mLBo2cyD1juyUX1eq9WD+ssd2Si+r1Xqwf1l5MaRqSaRvMg9b7slF9XqvVg/rLPdkovq9V6sH9ZeQmmbzJuSJjRc6Ob0IPZY+OCjJt2vU9YgA/jKSeNWi/cn9Vnzrn7Kkz+yujjGba1wMLYaL7R8VXmlkOJe771aYZX4Vucny6R7qtF4uf1WfOjuq0X7k/qs+dc19ru/fd6VDle9pIzj6SmWFnyTKX4dQd1ai8XP6rPnR3VqLxc/qs+dcu9nd+8fSsslcTi8jrKqs6h7qtF+5P6rPnR3VqLxc/qs+dcwvkOp59KJpCDg8nr+CDp7urUXi5/VZ86O6tReLn9VnzrmF8hABzySdIun6ClmmcI485zzoaDsFzpNlMmzbpfuq0Xi5/VZ86nUPGNk+Q2dKYvOgNHW4EhvSbLl1lBUFzmhshc14jcBc2e45rW3GsnCysa7J1fSBpqIpo2OOaOyg5pIxIF9dkuNiNuvmOBAINwcQRiLFZXlPErwnLx2g/6MXZYtmYCGvaNgBczDyl6soSEIQgEIQgEIQgEiY2aTsB3Jabn5Lug7kHM3BnHOJx0aecKbWZQaJCzNLg3lEENx2AkHVpNv7Q+Cuvq3KDlaTMle2/P6wDvxQSJsrgOHeENOHKziOsAX6LfBTrjStRyvO0NzmuFzjm44HTYXJNhtPMtpp2gNABuBgL6bA2H3BAtybcllNlAkpmdl2kc1/V74feAnSkO0O8l24oKN7h2eck49meNV7Bxw6EovztV7a7KPMLzz7ezSe8U829wV38M/wji5PuofCAMVXVFM0m+IVrp09aaqW7FfLjlisysvpT9qDaUdqDaVNfGkWWPjx/TWcmX7RDSjaVjtYbSpWaklqjx4/pM5L+0ftcBOMeWkOaSCMQQSCDtBCU5qQQpmEi3bZ1tdKGhglkDQQ4ND3BocDcOAvbOvjfSs1+VaiYATTyygG4Ekj3gHaA4mxTAaslidUzJ6pxIY1lO7X2CZvUXvP/ABC6BXP/ABHeFU/mpfekXQC42wQhCAQhCAQhCATc/Jd0HcnEzWyhsb3uNmtY4knQAASSepBzTwV0O6tyimnhnykyCd+ZE+RrXvuG2HYxYZxwbdwDb86l8Fhg7q3LVsoWfPLnaATrtow/BBe8a/B+jo54mUruWwmSPP7JmG4zTc4jOBOBOpS6J142naL/AHrSq+la0G2kOtcG7XDDEHWNhGlblk4/omeSFEmoHikuSikFSEkpDtDvJd7pSikHQ7yXbig12o/bT+ek94qWxwIChVP7afz0nvFOxlelwfZHDzfdVgID04atKa7FdP0c5AvvWCw6D+eZdHWMdq2SMgppzFtpyXTl0MDuy9kmER7IxzAyM1ABjHYi0mQAPZnHObrA0Y67NSOaHPsCGv7GSCCM+xNgNJFgcbWWHqtIhlqS5qvRk6A00srZXvljERNmhsQ7I7NLO+757hts0bM7SoVDRtc2SWRxbHG3Ei1zI64ijbf6TnC/M1rzqVfS3tWlqbLVILUgtU9Uymc1DgnDZJIUXH0tK9P4jfCqfzU3vSLoBc+8SMgFVTXIF45WjnOdKbDqBXQS851hCEIBCEIBCEIBVvCTwSp8xL/DcrJVvCTwSp8xL/Dcg554O6X9KreE2S7OEsLDnEOEovcOJN2uA0g2JBGjAbSrLg9pk6VLqCg0+goJJrtkBja0XHem7iOS0XsGt1no1rY44w1oaNAAA6k44pBKDBSClFKhDbOe7ENAs3RnOPJBOoYEnothe6BgpJ0O8l24okdfHR0YBJBwd5LvdKDXqg/pp/PSe8VlpWKgfpp/PSe8VkBepwfZHDzfdU2kfjZSnNOrG33elQKckFWFPUEki2JC6p8OexsGUMpSU88dPFGyQMDWR3YHTSNlYDeOb9ozOLyW9jLQL4a765ligZHLK1j2kMmfG1uJeWNc4B9wM23egadJ0WVlk7Ks4Pa/bL4mWdbvsBgXZoNwWg2tgdJ13S38Hif/AGKUC3jhpGgaNtui6w69flpu1Aycz9UrOin/AIqkTZSmpqamELuxxyNfI94DbvnEr2Oa5xH0Y2Rd7sdfWsjJDm50bqiJoJivaTvXteTZw0ZwZyjsunBDNSteY61jb5p7HDMSXZ1gDmjC4a4G+JsqXGVaZaV3CSEB8bswMfJBHJKwNDQ2R19DBgzOYI35uFs8qmIUuoziS5zi5zjcucSSTrJJxJTGarzDURct0wWfn89CbcE+QkPaosXxreuKM/rdD0v/AJhdHrnDij8Loel/8wuj15LuCEIQCEIQCEIQCreEnglT5iX+G5WSh5YpzJBNEDYviewE6AXMIv8Aeg5y4P6ZOlSqg4qHwcdcPO3H0hSpzigYJSSslJKDBSHuwtzg+i/xKyUlyBDcdCXM0C4Bv3hudV7HAbQBbHbfVZJKSNB8l24oKKVt5p/Pye8ltYs2/Sz+fk95SY416/08/wBccPLP8qxTx4qwhhAIdbQmoolYxAfnFdWMZaQ66GxBGtLpo7hWzoQ4ZttWHXsUCRhjdbZjiEsRpGfDa4USSNWDpgTiU3PEFTRpVyMUd4UyR2lRJXKtTIaDfz+egpuQa06Qm3LOxeN34ox+t0PS/wDmF0eud+Jmmz6qkN7ZjZH9NjMLf6l0QvHegEIQgEIQgEIQgFHyjOI4pJHcljHONsTZrSTYdSkKt4S+B1P2eX+G5BzpwcFg4bLblKnUfIP/AJOlPzHFAyUklZJSSgwU2UopJQYKwNDvJduKwSga/JduKCrhH6Wfz8nvKfGxR6Jl5ag/5iTerOOJez9N/wA45s8d0hkSlRxJcbFIbHddEV6UqmBBCdyjmvIFrk4kpULOtKmjDTnW02BHMFbaOihkpS03tcbFGmGrHRrWyTwXbcNtsGvFVVVQuGr4qlOimLf7pl0amupyMUxK1UsW6IMiRIz882P560+WJmQKmSejfuJSdraqlv8ASZK0dJMxG4roVc4cUXhdD5T/AOYXR68V0hCEIBCEIBCEIBRsp04khkicSA+N7CRa4DmkG19eKkpufku6DuQcy8HXXDzrwUic4qLwd5LurcpE2lA2SklBSSUGCklZKSUCSst+l5LtxWChuvyXbigzkaK76g/5mXeFbthUPg2y5qftUv4K9EK9bgz1xxecW5tEZDqT8cClMjUiOJaeVbwmKaJSn0Oc3QnoolYUkV08iPE1uRjgQcbgWHQNGhIqY84XOvVsW01NCNg2/wBlRyRkPvsKeSHia9PRkDEaSqqog+C3mdjXYAH4Kor6AalPeHiahJEFGewK5qqW34qBUMA9Cpb6R422cStOH1VLe/eMleLbQZhjzd8V0Muf+I3wmn81L70q6AXjqBCEIBCEIBCEIBNz8l3QdycTc/Jd0Hcg5i4Pcl3VuT8ulRuD5713VuUiUoGykFZJWEGCkkrJSSgwUM1+S7csErMZ0+S7cgueB0WcKn7XL/xWxinVTwBju2q+2S7mLaRAt8ebU09Ph498cqvbTqRFCprYU7FDZW88XvGYjhVjRR44pMcIUiJtsVM5opeNZihY4d8LgY+ha9lSmAeQGYYWNtq2KnkGhTJom9jN7HXYq3k/LKzrWgz5rW3AP/fVoVZUQEAG974m2OOtbBPCHd6dBw0qrrqVovbCyp5mvVrs9PnElUmUKO2pbW5miyr62IOuStceWIywO8R3hVP5qX3pV0Auf+I7wmn81L70i6AXC80IQhAIQhAIQhAJufku6DuTibn5Lug7kHL+QeS7q3J+UqNkI967q3J+VAhJJWSUklAEpJWSklBgrMevyXbklKj1+S7cUG6cWsV46v7bNuYtv7BzLSuLp5DKr7bNuYtsDztXFy8tmVke79Lx28ONSWwp1saitkO1SGTu2qk5a2uFSGxpQYoxmcsF5U+WqdKmxGx0qc95LbXVA8nagTuta59Kvj9RZ6UvDazWQHRrVLlR7I250jg0bSfT0lWhkkvfGy89n4SslkDpS8EZ2YWuzc0HTYgXucMbqceS5fCM50ntNocrRT3DQ64OADXPJG0hoNutRzPOA8TtAAvmkC2FyAA3E6LYm2lNmupX2jbUSAnbPP1gAuzSU5LGWDvZRI0jAPPfFuzO23236VvMsmHbf5SOI7wqn8zL70q6AXP/ABHeFU/mpfelXQC0eUEIQgEIQgEIQgE3PyXdB3JxNz8l3QdyDlzIh713VuT0hUfIuh3VuTshQYJWFhYJQZKQslYQYKVF9LyXbikpUX0vIduQbVxfnvKr7ZNuYtsBWkcC5w0VI/zkv/FbL22Fllx7u3t/TcuuKRaNeE4JFTOrAMSVFOX4fGs9YKPF/FrzSflswlCW14WvU2WI38l7XdBBU6OqS8X8V8/9WwsltIVc2ZOMlWd44jzp0koAuvG+HGQ3QSmaJ145XGwuLtcblzba27D1asfWJJMF5Nw9qpJXCMk5rXEgar6L/etOPDV9MfqOXHLD21gOBwNgdYLACpNPXSx8ggen4qubTLPa+K36153d6nxG+E0/mpfelXQC5/4jfCafzUvvSroBQoEIQgEIQgEIQgE3PyXdB3JxNz8l3QdyDljI5wd1bk68pjJRwPVuS3lBklJWLrGcgVdDDiOlIuglA+Lc2rekQ/S8l24ppOQfS8h24oIMeVZYpZ2s5PbEjjhc8q34LYKDLueL6/uPQtNrqjNnmH+NIf8AUVIoq5ode+bfTcd6efmK1x1ppjy5Y+trbhHVTPsGv7y3JtpPPtVHnS7bf/Lfgp9VXtGlw6sdyaFQ3Tj0Wx+9a9YyzytuzEJmLm2JBBBBFhY304L0GjykQBcgm2Ntq06nlbpCnMqlMwhjncW6R5S50+3KHOtNirFJZWql44t5q2yTKBtpWk5bZnOJVgaw20qprJLq2OEinJy2zSp7GAkZoupDwmCr2MW/cR3hVP5qX3pV0Auf+I7wqn81L70q6AXE6AhCEAhCEAhCEAm5+S7oO5OJufku6DuQcp5MOB6tyW8prJ5wPVuWXFBm6LpF0XQKui6RdF0C7pynPK8h25MXTtLpd5DtyDXMrW7Ym87J75UcOCk5U8ImH+LJ75TlOQw3tc7cMOgLXGbRbox3wboNtIJGrYCsw1gGpbDS5SIwubHUfipU9KyRty0O6hnW02DtR+KvZZ7iJWqS1d7Ad7z3VjSzuIxGOv4pNRkq98zE4nNdg4gfunbzKNHU5ozSMRhYnEcynC+/kq2ZKRpTzKhVcNUPjjcKQw3xC19KWVZCqTE011EMnOm3S2UbRo696ZLkB5OjFJeVCXonEb4TT+al96VdALn/AIjvCqfzU3vyroBcbUIQhAIQhAIQhAJufku6DuTiRPyXdB3IOTaE4Hq3LLnJFJoPVuWHFArOWLpN0XQKui6QSi6Bd09RnF3kO3KNdP0Zxd5DtyCmyg39YmsMezSWt5RSJYnNtnC1+cHd0j0oym8tqZTsmeesPKVW5SdLm51u9Fha/Nt6FrhfStLhksRqVtS1mbjpGv8A6/OhUAepdPOLY9eP55lptVftkY45wsNg0b9OjQqnLNCSc9vKtjb6Q+IUZ783QejH8VJgrfoudbn2FU9VbalZLbmKcbMRod+bqTlGnDu/Fs7WBaxVUouVidLCKp1E8/8AZK7IFCgGN1Ytgb9Ino+JV8PatnswJC6wAxOAAxPRYaVKkpZmWzo3i+pzSAes6CnaaYRkFlgQQdWNscdacypl1z25rs3C9g0HSQBjcnABo9CWa97Tpv8AxHeFU/mpfflXQC5/4jh+tU/mZffkXQC51ghCEAhCEAhCEAsFZQg5e4XZKdRVs1M4WGcXR88TiTGR1YdLXDUqUvC6c4W8EaXKEYZO05zb5krDmyMvpzXawbC7SCDYYLzWr4jpM79FXNzdXZITndZa+x9AQeWZywXL03uHVP12H2L/AJ0dw+p+uw+yf86DzLOWM5endw+p+uxeyf8AOjuH1P12L2T/AJ0HmOclRyY6bXwJ5rg482AXpncPqfrsPsX/ADoHEfU/XYvZP+dB5TwgpXCVziNJuSNFzpIOw6etUrgveqTiaqG8qrhe21rGOQEdBz1IdxMXx7NH7IfBBz3ZC6D7iw8dH7Jvyo7iw8dF7JvyoOfELoPuLDx0Xsm/KjuLDx0Xsm/Kg58Qugu4sPHR+zb8qz3Fh46L2TflQc+IXQfcWHjo/ZN+CO4sPHReyb8qDnyykU8BcbAL3vuLDx0fsm/KrPJ/FDAP20xc392Nojv1j8BfnQU/ElkCQS9tuwZHB2Fg2ve4OceoD/cXsij0FFHDG2KJgYxos1o0AfiedSEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEH/9k=" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">KD101</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">IPHONE 13</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Ada</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.12.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.11.000.000</span>
                      </td>
                      <td>
                      <div>
                            <img src="data:image/jpeg;base64,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" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">KD102</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">POCO X6 5G</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">HABIS</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.3.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.4.000.000</span>
                      </td>
                      <td>
                      <div>
                            <img src="data:image/jpeg;base64,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" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">KD101</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">IPHONE 13</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Ada</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.12.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.11.000.000</span>
                      </td>
                      <td>
                      <div>
                            <img src="data:image/jpeg;base64,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" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">KD101</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">IPHONE 13</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Ada</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.12.000.000</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rp.11.000.000</span>
                      </td>
                      <td>
                      <div>
                            <img src="data:image/jpeg;base64,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" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>
@endsection