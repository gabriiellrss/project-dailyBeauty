<header> 
<style>
    #brand {
        height: 25px;
        transition: height 0.3s ease, opacity 0.3s ease; 
    }

    #navbar {
        box-shadow: none;
        top: 0px;
        display: block;
        padding-left: 10%;
        padding-right: 10%;
        width: 100%;
        position: fixed;
        transition: backdrop-filter 0.9s ease, background-color 0.3s ease;


        .cls-1 {
            fill: #433833;
            width: 30rem;
        }

        #brand {
            height: 40px;
        }
    }

    .navbar-active {
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.5);


        .cls-1 {
            fill: white !important;
        }

        #brand {
            height: 30px !important;
            opacity: 1; 
        }
    }

    #navbarNav {
        opacity: 0;
        visibility: hidden;
        height: 0;
        overflow: hidden;
        transition: opacity 0.3s ease, backdrop-filter 0.3s ease, height 0.3s ease; 
    }

    #navbarNav.visible {
        opacity: 1;
        visibility: visible;
        height: 50px;
    }

    #btn-whats {
      .bi {
            transition: 0.1s;
            width: 1.5rem;
            height: auto;
            color: white;
            border: none;
          }
          p {
            transition: 0.1s;
            color: white;
            border: none;#5CF978

          }      
    }

    #btn-whats:hover {
      .bi {
            transition: 0.3s;
            width: 1.5rem;
            height: auto;
            color:rgba(83, 219, 105, 0.6);
            border: none;
          }
          p {
            transition: 0.3s;
            color: rgba(83, 219, 105, 0.6);
            border: none;

          }      
    }

    #btn-whats:active {
      .bi {
            transition: 0.2s;
            width: 1.5rem;
            height: auto;
            color: rgba(83, 219, 105, 0.4);
            border: none;
          }
          p {
            transition: 0.2s;
            color: rgba(83, 219, 105, 0.4);
            border: none;

          }      
    }

    li {
        color: white;
        border: none !important;

        .bi {
          width: 1.5rem;
          height: auto;
          border: none;

          color: white;
          transition: 0.5s;
        }
        p, a {
          transition: 0.5s;
          color:white;
          border: none;
          text-decoration: none !important;
        }
    }

    li:hover {
        transition: 0.8s;
        color: white;
        .bi {
          transition: 0.3s;
          width: 1.5rem;
          height: auto;
          color: #c4bcad;
        }
        p {
          transition: 0.3s;
          color:#c4bcad;
        }
    }

    li:active {
        color: white;
        border: none;

        .bi {
          transition: 0.2s;
          width: 1.5rem;
          height: auto;
          color: #8d877c;
          border: none;
        }
        p {
          transition: 0.2s;
          color:#8d877c;
          border: none;

        }
    }

    #navbar-brand a:hover use {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
    }

    .cls-1 {
        fill: white;
        stroke-width: 0px;
    }

    #btn-ico {
        transition: opacity 0.3s ease, max-width 0.3s ease; 
    }
</style>


  <script>
    let isScrolling = false;

    window.addEventListener('scroll', function () {
      if (!isScrolling) {
        window.requestAnimationFrame(function() {
          const navbarNav = document.getElementById('navbarNav');
          const navbar = document.getElementById('navbar');
          if (window.scrollY > 50) {
            navbar.classList.add('navbar-active');
            navbarNav.classList.add('visible'); 
          } else {
            navbar.classList.remove('navbar-active');
            navbarNav.classList.remove('visible'); 
          }
          isScrolling = false;
        });
        isScrolling = true;
      }
    });
  </script>

  <nav class="nav justify-content-between z-3 navbar-expand-lg " id="navbar">
    <div id="navbar-brand" class="nav-item d-flex justify-content-center align-items-center m-3 mb-1">
      <a class="navbar-brand" href="#">
        <svg id="brand" data-name="Camada 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1001.66 117.56">
          <defs>
          </defs>
          <g id="Camada_1-2" data-name="Camada 1">
            <g >
              <path class="cls-1" d="M0,116.06v-5.73c3.07-.1,5.56-.38,7.46-.83,1.9-.45,3.38-1.3,4.43-2.56,1.05-1.25,1.76-2.96,2.12-5.12.36-2.16.55-5.05.55-8.67V22.91c0-3.52-.14-6.35-.42-8.52-.28-2.16-.85-3.87-1.7-5.12-.85-1.26-2.08-2.11-3.7-2.56-1.62-.45-3.72-.78-6.31-.98V0h42.59c7.28,0,14.02,1.51,20.2,4.52,6.19,3.01,11.53,7.19,16.02,12.51,4.49,5.33,7.99,11.66,10.5,18.99,2.51,7.34,3.76,15.32,3.76,23.96s-1.17,15.8-3.52,22.68c-2.35,6.88-5.64,12.79-9.89,17.71-4.25,4.92-9.32,8.77-15.23,11.53-5.91,2.76-12.38,4.14-19.41,4.14H0ZM29.36,7.38c-1.38,0-2.06.86-2.06,2.56v81.54c0,11.46,6.03,17.18,18.08,17.18,11.08,0,19.58-4.09,25.48-12.28,5.9-8.19,8.86-20.22,8.86-36.1,0-8.34-.81-15.77-2.43-22.31-1.62-6.53-3.94-12.06-6.98-16.58-3.03-4.52-6.69-7.99-10.98-10.4-4.29-2.41-9.14-3.62-14.56-3.62h-15.41Z"/>
              <path class="cls-1" d="M158.47,74h-32.4c-1.38,4.12-2.55,7.76-3.52,10.93-.97,3.17-1.76,5.9-2.37,8.21-.61,2.31-1.03,4.27-1.27,5.88-.24,1.61-.36,2.92-.36,3.92,0,2.81.73,4.75,2.18,5.8,1.46,1.06,3.88,1.58,7.28,1.58v5.73h-29.49v-5.73c1.86-.3,3.46-.7,4.79-1.21,1.33-.5,2.51-1.21,3.52-2.11,1.01-.9,1.9-2.08,2.67-3.54.77-1.46,1.52-3.24,2.24-5.35L143.3,0h5.22l27.54,85.01c1.86,5.63,3.48,10.12,4.85,13.49,1.37,3.37,2.71,5.9,4,7.61,1.29,1.71,2.69,2.81,4.19,3.32,1.5.5,3.29.75,5.4.75v5.88h-39.56v-5.88c4.29,0,7.24-.5,8.86-1.51,1.62-1,2.43-2.66,2.43-4.97,0-1-.04-1.93-.12-2.79-.08-.85-.22-1.78-.42-2.79-.2-1-.49-2.13-.85-3.39-.36-1.26-.83-2.74-1.4-4.45l-4.98-16.28ZM128.5,66.47h27.67l-13.47-44.46-14.2,44.46Z"/>
              <path class="cls-1" d="M224.48,87.57c0,5.03.16,8.99.49,11.91.32,2.92.95,5.18,1.88,6.78.93,1.61,2.26,2.66,4,3.17,1.74.5,4.02.81,6.86.9v5.73h-39.31v-5.73c2.83-.1,5.12-.43,6.86-.98,1.74-.55,3.09-1.58,4.06-3.09.97-1.51,1.62-3.64,1.94-6.41.32-2.76.49-6.5.49-11.23V27.43c0-4.22-.14-7.71-.42-10.48-.28-2.76-.85-4.95-1.7-6.56-.85-1.61-2.08-2.74-3.7-3.39-1.62-.65-3.72-1.08-6.31-1.28V0h36.89v5.73c-2.59.1-4.67.5-6.25,1.21-1.58.7-2.79,1.88-3.64,3.54-.85,1.66-1.42,3.95-1.7,6.86-.28,2.92-.42,6.63-.42,11.15v59.08Z"/>
              <path class="cls-1" d="M327.13,116.06h-78.39v-5.73c2.83-.1,5.12-.4,6.86-.9,1.74-.5,3.09-1.36,4.06-2.56s1.62-2.91,1.94-5.12c.32-2.21.49-5.07.49-8.59V22.91c0-3.52-.14-6.35-.42-8.52-.28-2.16-.85-3.87-1.7-5.12-.85-1.26-2.08-2.11-3.7-2.56-1.62-.45-3.72-.78-6.31-.98V0h36.89v5.73c-2.59.1-4.67.4-6.25.9-1.58.5-2.79,1.41-3.64,2.71-.85,1.31-1.42,3.12-1.7,5.43-.28,2.31-.42,5.38-.42,9.19v64.96c0,4.22.34,7.66,1.03,10.32.69,2.66,1.86,4.72,3.52,6.18,1.66,1.46,3.86,2.46,6.61,3.01,2.75.55,6.23.83,10.44.83,4.61,0,8.49-.33,11.65-.98,3.15-.65,5.8-1.81,7.95-3.47,2.14-1.66,3.84-3.97,5.1-6.93,1.25-2.96,2.32-6.81,3.22-11.53h4.61l-1.82,29.69Z"/>
              <path class="cls-1" d="M335.74,18.69c-1.21-2.61-2.35-4.75-3.4-6.41-1.05-1.66-2.12-2.99-3.22-3.99-1.09-1-2.24-1.68-3.46-2.03-1.21-.35-2.67-.53-4.37-.53V0h38.22v5.73c-4.05,0-6.9.38-8.55,1.13-1.66.75-2.49,2.09-2.49,3.99,0,2.11.93,5.12,2.79,9.04l18.81,39.94h.49l13.71-28.64c2.59-5.43,4.43-9.7,5.52-12.81,1.09-3.11,1.64-5.63,1.64-7.54s-.59-3.24-1.76-3.99c-1.17-.75-3.22-1.13-6.13-1.13V0h27.79v5.73c-1.7,0-3.22.3-4.55.9-1.33.6-2.73,1.81-4.19,3.62s-3.05,4.32-4.79,7.54c-1.74,3.22-3.86,7.44-6.37,12.66l-18.69,39.19v17.94c0,4.92.14,8.87.42,11.83.28,2.97.89,5.25,1.82,6.86.93,1.61,2.26,2.69,4,3.24,1.74.55,4.06.83,6.98.83v5.73h-39.31v-5.73c2.91,0,5.24-.28,6.98-.83,1.74-.55,3.07-1.61,4-3.17.93-1.56,1.56-3.74,1.88-6.56.32-2.81.49-6.53.49-11.15v-18.39l-24.27-51.55Z"/>
              <path class="cls-1" d="M445.56,116.06v-5.73c3.15-.1,5.68-.4,7.58-.9,1.9-.5,3.36-1.36,4.37-2.56,1.01-1.21,1.7-2.91,2.06-5.12.36-2.21.55-5.07.55-8.59V22.91c0-3.52-.14-6.35-.42-8.52-.28-2.16-.85-3.87-1.7-5.12-.85-1.26-2.08-2.11-3.7-2.56-1.62-.45-3.72-.78-6.31-.98V0h36.28c10.92,0,19.41,2.41,25.48,7.23s9.1,11.61,9.1,20.35c0,6.63-1.68,12.06-5.04,16.28-3.36,4.22-8.68,7.69-15.96,10.4v.6c2.51.3,4.69.65,6.55,1.05,1.86.4,3.52.88,4.97,1.43,1.46.55,2.81,1.23,4.07,2.04,1.25.81,2.49,1.71,3.7,2.71,7.2,6.33,10.8,14.27,10.8,23.81,0,5.33-1.19,10.28-3.58,14.85-2.39,4.57-5.72,8.17-10.01,10.78-1.38.9-2.79,1.63-4.25,2.19-1.46.55-3.16,1-5.1,1.36-1.94.35-4.19.6-6.73.75-2.55.15-5.56.23-9.04.23h-43.68ZM479.65,51.25c2.51,0,4.61-.05,6.31-.15,1.7-.1,3.15-.28,4.37-.53,1.21-.25,2.28-.6,3.21-1.05.93-.45,1.88-1.08,2.85-1.88,2.59-2.01,4.43-4.42,5.52-7.23,1.09-2.81,1.64-6.48,1.64-11,0-7.94-1.56-13.64-4.67-17.11-3.12-3.47-7.99-5.2-14.62-5.2h-9.34c-1.38,0-2.06.85-2.06,2.56v41.6h6.8ZM489.6,109.58c14.64,0,21.96-7.79,21.96-23.36,0-11.35-3.76-19.29-11.29-23.81-1.29-.7-2.55-1.3-3.76-1.81-1.21-.5-2.63-.88-4.25-1.13-1.62-.25-3.54-.43-5.76-.53-2.23-.1-4.96-.15-8.19-.15h-5.46v33.61c0,6.13,1.29,10.53,3.88,13.19,2.59,2.66,6.88,3.99,12.86,3.99Z"/>
              <path class="cls-1" d="M564.83,52.3c4.37,0,8.03-.33,10.98-.98,2.95-.65,5.3-1.68,7.04-3.09,1.74-1.41,2.99-3.21,3.76-5.43.77-2.21,1.15-4.82,1.15-7.84h4.25v41.15h-4.25c0-3.01-.34-5.63-1.03-7.84-.69-2.21-1.9-4.04-3.64-5.5-1.74-1.46-4.09-2.56-7.04-3.32-2.95-.75-6.69-1.13-11.22-1.13v34.06c0,3.32.32,6.06.97,8.21.65,2.16,1.76,3.92,3.34,5.28,1.58,1.36,3.66,2.31,6.25,2.86,2.59.55,5.78.83,9.59.83,4.29,0,7.93-.38,10.92-1.13,2.99-.75,5.5-2.04,7.52-3.84,2.02-1.81,3.64-4.19,4.85-7.16,1.21-2.96,2.22-6.66,3.03-11.08h4.61l-1.82,29.69h-75.35v-5.73c2.83-.1,5.12-.4,6.86-.9,1.74-.5,3.09-1.36,4.06-2.56s1.62-2.91,1.94-5.12c.32-2.21.49-5.07.49-8.59V22.91c0-3.52-.14-6.35-.42-8.52-.28-2.16-.85-3.87-1.7-5.12-.85-1.26-2.08-2.11-3.7-2.56-1.62-.45-3.72-.78-6.31-.98V0h70.13l1.09,26.53h-4.25c-.49-4.02-1.27-7.31-2.37-9.87-1.09-2.56-2.59-4.6-4.49-6.1-1.9-1.51-4.31-2.56-7.22-3.17-2.91-.6-6.43-.9-10.56-.9h-15.41c-1.38,0-2.06.86-2.06,2.56v43.26Z"/>
              <path class="cls-1" d="M680.59,74h-32.4c-1.38,4.12-2.55,7.76-3.52,10.93-.97,3.17-1.76,5.9-2.37,8.21-.61,2.31-1.03,4.27-1.27,5.88-.24,1.61-.36,2.92-.36,3.92,0,2.81.73,4.75,2.18,5.8,1.46,1.06,3.88,1.58,7.28,1.58v5.73h-29.49v-5.73c1.86-.3,3.46-.7,4.79-1.21,1.33-.5,2.51-1.21,3.52-2.11,1.01-.9,1.9-2.08,2.67-3.54.77-1.46,1.52-3.24,2.25-5.35L665.42,0h5.22l27.54,85.01c1.86,5.63,3.48,10.12,4.85,13.49,1.37,3.37,2.71,5.9,4,7.61,1.29,1.71,2.69,2.81,4.19,3.32,1.5.5,3.29.75,5.4.75v5.88h-39.56v-5.88c4.29,0,7.24-.5,8.86-1.51,1.62-1,2.43-2.66,2.43-4.97,0-1-.04-1.93-.12-2.79-.08-.85-.22-1.78-.42-2.79-.2-1-.49-2.13-.85-3.39-.36-1.26-.83-2.74-1.39-4.45l-4.98-16.28ZM650.62,66.47h27.67l-13.47-44.46-14.2,44.46Z"/>
              <path class="cls-1" d="M797.93,69.33c0,7.94-.63,14.92-1.88,20.95-1.25,6.03-3.28,11.05-6.07,15.07-2.79,4.02-6.41,7.06-10.86,9.12-4.45,2.06-9.83,3.09-16.14,3.09s-11.21-.73-15.65-2.19c-4.45-1.46-8.17-3.87-11.16-7.23-2.99-3.37-5.22-7.76-6.67-13.19-1.46-5.43-2.18-12.11-2.18-20.05v-39.79c0-7.43-.14-13.16-.42-17.18-.28-4.02-1.11-6.98-2.49-8.89-.97-1.3-2.29-2.19-3.94-2.64-1.66-.45-3.86-.68-6.61-.68V0h41.38v5.73c-2.75,0-4.97.2-6.67.6-1.7.4-3.03,1.41-4,3.01-1.13,1.81-1.86,4.7-2.18,8.67-.32,3.97-.49,9.67-.49,17.11v41c0,5.12.42,9.67,1.27,13.64.85,3.97,2.25,7.34,4.19,10.1,1.94,2.77,4.47,4.85,7.58,6.26,3.11,1.41,6.94,2.11,11.47,2.11,8.09,0,14.15-2.79,18.2-8.37,4.04-5.58,6.07-13.79,6.07-24.64v-36.33c0-8.94-.28-15.72-.85-20.35-.57-4.62-1.62-7.89-3.15-9.8-1.13-1.3-2.55-2.13-4.25-2.49-1.7-.35-3.8-.53-6.31-.53V0h35.19v5.73c-2.59,0-4.71.25-6.37.75-1.66.5-2.97,1.61-3.94,3.32-1.21,2.11-2.02,5.4-2.43,9.87-.41,4.47-.61,10.88-.61,19.22v30.45Z"/>
              <path class="cls-1" d="M910.17,28.79h-4.97c-.24-4.32-.81-7.94-1.7-10.85-.89-2.91-2.17-5.2-3.82-6.86-1.66-1.66-3.74-2.84-6.25-3.54-2.51-.7-5.5-1.06-8.98-1.06-2.99,0-5.4.08-7.22.23-1.82.15-3.22.43-4.19.83-.97.4-1.6.88-1.88,1.43-.28.55-.42,1.28-.42,2.19v80.64c0,3.22.18,5.98.55,8.29.36,2.31,1.09,4.2,2.18,5.65,1.09,1.46,2.67,2.56,4.73,3.32s4.79,1.18,8.19,1.28v5.73h-45.87v-5.73c3.4-.1,6.15-.53,8.25-1.28,2.1-.75,3.7-1.86,4.79-3.32,1.09-1.46,1.82-3.34,2.18-5.65.36-2.31.55-5.07.55-8.29V11.15c0-.9-.14-1.63-.42-2.19-.28-.55-.85-1.03-1.7-1.43-.85-.4-2.04-.68-3.58-.83-1.54-.15-3.6-.23-6.19-.23-3.16,0-6.09.15-8.8.45-2.71.3-5.06,1.18-7.04,2.64-1.98,1.46-3.58,3.69-4.79,6.71-1.21,3.01-1.86,7.19-1.94,12.51h-4.49V0h91.61l1.21,28.79Z"/>
              <path class="cls-1" d="M926.06,18.69c-1.21-2.61-2.35-4.75-3.4-6.41-1.05-1.66-2.12-2.99-3.22-3.99-1.09-1-2.25-1.68-3.46-2.03-1.21-.35-2.67-.53-4.37-.53V0h38.22v5.73c-4.05,0-6.9.38-8.55,1.13-1.66.75-2.49,2.09-2.49,3.99,0,2.11.93,5.12,2.79,9.04l18.81,39.94h.49l13.71-28.64c2.59-5.43,4.43-9.7,5.52-12.81,1.09-3.11,1.64-5.63,1.64-7.54s-.59-3.24-1.76-3.99c-1.17-.75-3.22-1.13-6.13-1.13V0h27.79v5.73c-1.7,0-3.22.3-4.55.9-1.33.6-2.73,1.81-4.19,3.62s-3.05,4.32-4.79,7.54c-1.74,3.22-3.86,7.44-6.37,12.66l-18.69,39.19v17.94c0,4.92.14,8.87.42,11.83.28,2.97.89,5.25,1.82,6.86.93,1.61,2.26,2.69,4,3.24,1.74.55,4.06.83,6.98.83v5.73h-39.31v-5.73c2.91,0,5.24-.28,6.98-.83,1.74-.55,3.07-1.61,4-3.17.93-1.56,1.56-3.74,1.88-6.56.32-2.81.49-6.53.49-11.15v-18.39l-24.27-51.55Z"/>
            </g>
          </g>
        </svg>
      </a>
    </div>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav column-gap-lg-3 ">

        <li class="nav-item">
          <a href="#" id="btn" type="button" class="rounded-5 d-flex justify-content-center align-items-center gap-1 p-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
            <p class="m-0 text-center">Home</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#quemdenos" id="btn" type="button" class="rounded-5 d-flex justify-content-center align-items-center gap-1 p-0 text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
          </svg>
            <p class="m-0 text-center">Quem nós somos</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="./produtos.php" id="btn" type="button" class="rounded-5 d-flex justify-content-center align-items-center gap-1 p-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg>
            <p class="m-0 text-center">Produtos</p>
          </a>
        </li>

        <li class="nav-item " id="btn-whats">
          <a href="https://wa.me/5581993310136" id="btn" type="button" class="rounded-5 d-flex justify-content-center align-items-center gap-1 p-0 text-center">
            <svg id="btn-ico" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp text-center" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"></path>
            </svg>
            <p class="m-0 text-center">Contato</p>
          </a>
        </li>

      </ul>
    </div>
  </nav>
</header>