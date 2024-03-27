        <!-- Banner -->
        <div class="navbar banner">
            <div class="navbar-left">
                <a href="/">Darren Stokes</a>
            </div>

            <!-- Hamburger Icon with transform for mobile devices. Credit: https://codepen.io/ainalem/pen/PoYvggj -->
            <div class="mobile-nav-icon" onclick="toggleMobileMenu()">
              <svg xmlns="http://www.w3.org/2000/svg" width="53.33" height="53.33" viewBox="0 0 200 200">
                <g stroke-width="6.5" stroke-linecap="round">
                  <path
                    d="M72 82.286h28.75"
                    fill="#009100"
                    fill-rule="evenodd"
                    stroke="#fff"
                  />
                  <path
                    d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554"
                    fill="none"
                    stroke="#fff"
                  />
                  <path
                    d="M72 125.143h28.75"
                    fill="#009100"
                    fill-rule="evenodd"
                    stroke="#fff"
                  />
                  <path
                    d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554"
                    fill="none"
                    stroke="#fff"
                  />
                  <path
                    d="M100.75 82.286h28.75"
                    fill="#009100"
                    fill-rule="evenodd"
                    stroke="#fff"
                  />
                  <path
                    d="M100.75 125.143h28.75"
                    fill="#009100"
                    fill-rule="evenodd"
                    stroke="#fff"
                  />
                </g>
              </svg>
            </div>

            <div class="navbar-right">
              <div class="lang lang-en lang-navbar">
                <a href="#about" onclick="collapseMenu()">About</a>
                <a href="#education" onclick="collapseMenu()">Education</a>
                <a href="#experience" onclick="collapseMenu()">Experience</a>
                <a href="#contact" onclick="collapseMenu()">Contact</a>
              </div>
              <div class="lang lang-es lang-navbar">
                <a href="#about" onclick="collapseMenu()">Sobre Mi</a>
                <a href="#education" onclick="collapseMenu()">Educación</a>
                <a href="#experience" onclick="collapseMenu()">Experiencia</a>
                <a href="#contact" onclick="collapseMenu()">Contacto</a>
              </div>
              <select id="language-select" onfocus='this.size=2;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                <option value="en">English</option>
                <option value="es">Español</option>
              </select>
              <label class="switch">
                <input type="checkbox" checked onclick="toggleDarkMode()">
                <span class="slider round"></span>
              </label>
            </div>
        </div>