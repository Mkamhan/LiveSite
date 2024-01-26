// custom-elements.js
class AppFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <footer>
        <div class="footer-main">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                <div class="block" style="display: table;">
                  <a href="index.html"><img src="site/images/logo-alt2.png" alt="footer-logo"></a>
                  <!-- Social Site Icons -->
                  <ul class="social-icon list-inline">
                    <li class="list-inline-item">
                      <a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
               <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                <div class="block-2 text-center" >
                  <!-- heading -->
                  <h6>لايف تك</h6>
                  <!-- links -->
                  <ul>
                    <li><a href="about.html">من نحن</a></li>
                    <li><a href="contact.html">تواصل معنا</a></li>
                    <li><a href="team.html"></a></li>
                    <li><a href="privacy-policy.html">سياية الخصوصية </a></li>
                  </ul>
                </div>
              </div>
               <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                <div class="block-2 text-center">
                  <!-- heading -->
                  <h6>خدماتنا</h6>
                  <!-- links -->
                  <ul>
                  <li><a href="carts.html">بطائق الدفع الالكتروني</a></li>
                    <li><a href="career.html">قسم الالعاب</a></li>
                    <li><a href="blog-single.html">شحن تطبيقات الشات  </a></li>
                    <li><a href="privacy.html"></a></li>
                  </ul>
                </div>
              </div>
              
              <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                <div class="block-2 text-center">
                  <!-- heading -->
                  <h6>لايف  تك </h6>
                  <!-- links -->
                  <ul>
                    <li><a href="">انشاء حساب</a></li>
                    <li><a href="">تسجيل دخول</a></li>
                    <li><a href="">المدونة</a></li>
                  </ul>
                </div>
              </div>
             <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                <div class="block-2 text-center">
                  <!-- heading -->
                  <h6>لايف  تك </h6>
                  <!-- links -->
                  <ul>
                    <li><a href="https://livetach.yemoney.net/register">انشاء حساب</a></li>
                    <li><a href="https://livetachw.yemoney.net/#/">تسجيل دخول</a></li>
                    <li><a href="">المدونة</a></li>
                  </ul>
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <div class="text-center bg-dark py-4">
          <small class="text-secondary">جميع الحقوق محفوظة  &copy; <script>document.write(new Date().getFullYear())</script>. لدئ &amp; فريق <a href="https://">لايف تك</a></small class="text-secondary">
        </div>
      </footer>
        `
    }
}
window.customElements.define('app-footer', AppFooter)


// custom-elements.js
class AppHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="site/images/logo3.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
          </button>
          <div class="collapse navbar-collapse" style="margin-right: 30%;" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="index.html" data-toggle="">الرئيسية
                  <!--<span><i class="ti-angle-down"></i></span>-->
                </a>
                <!-- Dropdown list -->
               <!-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item active" href="index.html">Homepage</a></li>
                  <li><a class="dropdown-item" href="homepage-2.html">Homepage 2</a></li>
                  <li><a class="dropdown-item active3" href="homepage-3.html">Homepage 3</a></li>
      
                  <li class="dropdown dropdown-submenu dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
      
                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                      <li><a class="dropdown-item" href="index.html">Submenu 11</a></li>
                      <li><a class="dropdown-item" href="index.html">Submenu 12</a></li>
                    </ul>
                  </li>
                </ul>-->
              </li>
              <li class="nav-item dropdown @@pages">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">خدماتنا
                  <span><i class="ti-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <ul class="dropdown-menu" style="text-align: right;">
                  <li><a class="dropdown-item @@team" href="carts.html">بطائق الدفع الالكتروني</a></li>
                  <li><a class="dropdown-item @@career" href="career.html">قسم الالعاب</a></li>
                  <li><a class="dropdown-item @@blogSingle" href="blog-single.html">شحن تطبيقات الشات </a></li>
                   <li><a class="dropdown-item @@blog" href="blog.html">المدونة</a></li>
                  <li><a class="dropdown-item @@privacy" href="privacy-policy.html">سياسة الخصوصية</a></li>
                  <!--<li><a class="dropdown-item @@faq" href="FAQ.html">FAQ</a></li>
                  <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                  <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                  <li><a class="dropdown-item" href="404.html">404</a></li>
                  <li><a class="dropdown-item" href="comming-soon.html">Coming Soon</a></li>
      
                  <li class="dropdown dropdown-submenu dropleft">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
      
                    <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                      <li><a class="dropdown-item" href="index.html">Submenu 21</a></li>
                      <li><a class="dropdown-item" href="index.html">Submenu 22</a></li>
                    </ul>
                  </li>-->
                </ul>
              </li>
              <li class="nav-item @@about">
                <a class="nav-link" href="about.html">من نحن</a>
              </li>
              <li class="nav-item @@contact">
                <a class="nav-link" href="contact.html">تواصل معنا</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        `
    }
}
window.customElements.define('app-header', AppHeader)









class Appconect extends HTMLElement {
  connectedCallback() {
      this.innerHTML = `
      <section class="section cta-hire bg-gary">
      <div class="container">
        <div class="row"> 
          <div class="col-md-12 text-center">
            <!-- Hire Title -->
            <h2>يمكنك الان الشراء </h2>
            <!-- Job Description -->
            <p>كل ما عليك هو مراسلتنا .</p>
            <!-- Action Button -->
            <a href="https://wa.me/967772377668" class="mt-3 btn btn-main-md">مراسلتنا</a>
          </div>
        </div>
      </div>
    </section>
      `
  }
}
window.customElements.define('app-conect', Appconect)


class AppListicon extends HTMLElement {
  connectedCallback() {
      this.innerHTML = `
      <ul class="list-inline social-links">
		<li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-facebook"></i></a></li>
		<li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-twitter"></i></a></li>
		<li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-instagram"></i></a></li>
		<li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-dribbble"></i></a></li>
	</ul>
      `
  }
}
window.customElements.define('app-list', AppListicon)