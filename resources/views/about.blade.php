@extends('layouts.default')
@section('content')
<svg class="hidden">
  <symbol id="icon-cross" viewBox="0 0 24 23">
    <title>cross</title>
    <path d="M23.865 3.677c.197-.383.164-.818-.008-1.18.048-.41-.06-.827-.448-1.147L22.323.457c-.636-.524-1.632-.689-2.25 0a155.348 155.348 0 0 1-8.797 9.001C9.011 7.342 6.72 5.255 4.443 3.165c-.8-.734-1.956-.503-2.458.37C1.253 3.9.659 4.374.168 5.182c-.233.386-.215.872 0 1.258 1.47 2.635 4.31 4.951 6.646 7.083-.313.28-.623.562-.942.836-3.146 2.702-5.268 4.416-1.331 7.187.053.037.107.029.161.05.076.036.148.06.232.074.026 0 .05.005.075.003.082.007.16.027.243.011 2.117-.415 4.085-2.074 5.872-3.9 1.74 1.715 3.592 3.353 5.63 4.325.485.232 1.063.097 1.436-.227.626.047 1.197-.342 1.484-.901.042-.026.07-.041.116-.07.91-.569.993-1.701.32-2.482-1.522-1.762-3.138-3.438-4.787-5.084 2.968-2.9 6.674-6.027 8.542-9.667z"/>
  </symbol>
</svg>
<div id="main">
  <div id="container">
    <div class="made-in">Made in Indonesia</div>
    <div class="image-about">
      <h3>WORKERS</br>DESIGN</h3>
    </div>
    <div id="desc">
    </div>
    <div class="made-in">
      <div id="distortion-text">
      </div>
    </div>
    <div id="desc-about">
      <p>We're Workers Design, a Indonesian designers, developers and marketers. We get inspired by homework on the campus and then we make the company. We work have been varied such as company profile, e-commerce, blog, catalog, portfolio, Android app, IOS app, business, branding, print, event, promotion, UX/UI, Facebook Ads, Google Adword, Instagram Ads, or anything else. I'm glad to collaborate with many creative disciplines and offer a full range of production services in the design, lifestyle, arts, fashion and architecture industries. Let's get in touch, for any project inquires or just drop me a message.</p>
    </div>
  </div>
  <div class="content-about">
    <div class="grid">
      <a class="grid__item" href="#preview-1">
        <div class="box">
          <div class="box__shadow"></div>
          <img class="box__img" src="{{ asset('img/TaufanBagusDPA.jpg') }}" alt="Apps Development Service"/>
          <h3 class="box__title"><span class="box__title-inner" data-hover="Founder">Founder</span></h3>
          <h4 class="box__text"><span class="box__text-inner">TAUFAN</span></h4>
          <div class="box__deco">&#x2654;</div>
        </div>
      </a>
      <a class="grid__item" href="#preview-2">
        <div class="box">
          <div class="box__shadow"></div>
          <img class="box__img " src="{{ asset('img/Rohmat-suseno.jpg') }}" alt="Web Development Service"/>
          <h3 class="box__title"><span class="box__title-inner" data-hover="Developer">Developer</span></h3>
          <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Seno</span></h4>
        </div>
      </a>
      <a class="grid__item" href="#preview-3">
        <div class="box">
          <div class="box__shadow"></div>
          <img class="box__img" src="{{ asset('img/Restu-rahmi-andika.jpg') }}" alt="Design Development Service"/>
          <h3 class="box__title"><span class="box__title-inner" data-hover="Designer">Designer</span></h3>
          <h4 class="box__text box__text--topcloser"><span class="box__text-inner">Andika</span></h4>
          <div class="box__deco">&#x2656;</div>
        </div>
      </a>
      <a class="grid__item" href="#preview-4">
        <div class="box">
          <div class="box__shadow"></div>
          <img class="box__img" src="{{ asset('img/Zulfahmi-husein.jpg') }}" alt="Design Development Service"/>
          <h3 class="box__title"><span class="box__title-inner" data-hover="Developer">Developer</span></h3>
          <h4 class="box__text box__text--topcloser"><span class="box__text-inner">Fahmi</span></h4>
          <div class="box__deco">&#x2657;</div>
        </div>
      </a>
      <a class="grid__item" href="#preview-5">
        <div class="box">
          <div class="box__shadow"></div>
          <img class="box__img " src="{{ asset('img/Mutia-Ayu-Juliani.jpg') }}" alt="Web Development Service"/>
          <h3 class="box__title"><span class="box__title-inner" data-hover="Accountant">Accountant</span></h3>
          <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Mutia</span></h4>
        </div>
      </a>
      <a class="grid__item" href="#preview-6">
        <div class="box">
          <div class="box__shadow"></div>
          <img class="box__img" src="{{ asset('img/Milzam-hibatullah.jpg') }}" alt="Design Development Service"/>
          <h3 class="box__title"><span class="box__title-inner" data-hover="Developer">Developer</span></h3>
          <h4 class="box__text box__text--topcloser"><span class="box__text-inner">Milzam</span></h4>
          <div class="box__deco">&#x2658;</div>
        </div>
      </a>
    </div>
  </div>
  <div class="overlay">
    <div class="overlay__reveal"></div>
    <div class="overlay__item" id="preview-1">
      <div class="col-md-7">
        <div class="overlay__content">
          <h2>Taufan Bagus D.P.A</h2>
          <p>I'm TaufanBagusDPA, a founder of Workers Design based in Special Region of Yogyakarta. Bachelor in Informatic Engineering, and currently taking master degree in Gadjah Mada University. I'm an open-minded individual with a proven track record in designing websites and creating databases. I have strong technical skills as well as excellent interpersonal skills. I am eager to be challenged in order to grow and improve my communication and professional IT skills gained through previous experiences in the IT sector.</p>
        </div>
      </div>
    </div>
    <div class="overlay__item" id="preview-2">
      <div class="col-md-7">
        <div class="overlay__content">
          <h2>Rohmat Suseno</h2>
          <p>I'm Rohmat Suseno, a developer of MayLaundry App based in Special Region of Yogyakarta. Bachelor in Informatic Engineering, accomplished software developer with 4 years of experience in development of applications. Excels in every stage of the life cycle of software development, including design creation, coding, debugging, testing, and maintenance.</p>
        </div>
      </div>
    </div>
    <div class="overlay__item" id="preview-3">
      <div class="col-md-7">
        <div class="overlay__content">
          <h2>Restu Rachmi Andika</h2>
          <p>I'm Restu Rachmi Andika, a designer of Workers Design based in Tangerang. Creative graphic designer with innovative ideas and a unique approach to visuals. More than 6 years of experience developing designs for print media, online websites, video, and advertising. Solid understanding of marketing principles and advertising techniques. Great attention to detail and a talent for creating memorable visual designs. Enthusiastic team player who is committed to delivering top results on time and within the budget. Passion for keeping clients satisfied with each project.</p>
        </div>
      </div>
    </div>
    <div class="overlay__item" id="preview-4">
      <div class="col-md-7">
        <div class="overlay__content">
          <h2>Zulfahmi Husein</h2>
          <p>I'm Zulfahmi Husein, a developer of Workers Design based in Pekalongan. Skilled IT professional dedicated to improving the development methods used to create new software programs. Experienced with database software management, web platform development, and program testing software. Managed small groups of employees during special projects. Team-oriented worker able to collaborate with coworkers in various departments in order to complete projects in a timely manner.</p>
        </div>
      </div>
    </div>
    <div class="overlay__item" id="preview-5">
      <div class="col-md-7">
        <div class="overlay__content">
          <h2>Mutia Ayu Juliani</h2>
          <p>I'm Mutia Ayu Juliani, an accountant of Workers Design based in Special Region of Yogyakarta. Accomplished Certified Public Accountant with 7 years of experience in accounting and finance. Experienced in bookkeeping, tax calculating, and reporting for business clients and organizations. Capable professional with expertise in many of the most common accounting software programs. Strong work ethic and commitment to integrity and accurate record keeping. Eager to join a team and help improve an organization’s financial focus.</p>
        </div>
      </div>
    </div>
    <div class="overlay__item" id="preview-6">
      <div class="col-md-7">
        <div class="overlay__content">
          <h2>Milzam Hibatullah</h2>
          <p>I'm Milzam Hibatullah, a developer of Workers Design based in Cilegon. Experienced web designer and coder, proficient in CSS, JavaScript, HTML, and more. Bachelor in Informatic Engineering, Associate in Computer Programming. Efficient time management skills and clear communication abilities. Excelled as team leader in several long-term website developments for commercial clients. Seeking senior web developer position with direct client consultation. Innovative, eager to try new ideas and find creative, inspiring web design solutions. Experience in leadership roles and team building, project development, and technical problem solving.</p>
        </div>
      </div>
    </div>
    <button class="overlay__close"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
  </div>
</div>
@endsection
