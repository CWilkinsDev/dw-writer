const homeDirectoryPointer = (countChar(document.baseURI, '/') == 3) ? '.' : '..';

const headerTemplate = document.createElement('template');

headerTemplate.innerHTML = `
  <style>
    nav {
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #1a1a1f;
    }

    ul {
      padding: 0;
    }

    ul li {
      list-style: none;
      display: inline;
    }

    a {
      font-weight: 700;
      color: goldenrod;
      text-decoration: none;
    }

    @media only screen and (min-width: 1026px) {
        a {
          margin: 0 25px;
        }
    }

    @media only screen and (max-width: 1026px) {
        a {
          margin: 0 15px;
        }
    }

    a:hover {
      padding-bottom: 5px;
      box-shadow: inset 0 -2px 0 0 goldenrod;
    }
  </style>
  <header>
    <nav>
      <ul>
        <li><a href="${homeDirectoryPointer}/">Home</a></li>
        <li><a href="${homeDirectoryPointer}/about.php">About</a></li>
        <li><a href="${homeDirectoryPointer}/work.php">Work</a></li>
        <li><a href="${homeDirectoryPointer}/contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
`;

class Header extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const shadowRoot = this.attachShadow({ mode: 'closed' });
    shadowRoot.appendChild(headerTemplate.content);
  }
}

customElements.define('header-component', Header);

function countChar(word, char) {
  var count = 0
  for (let i = 0; i <= word.length; i++) {
    if (word[i] === `${char}`) {
      count += 1
    }
  }
  return count;
}
