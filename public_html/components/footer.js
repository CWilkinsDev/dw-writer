const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = `
  <style>
    footer {
      height: 40px;
      padding: 0 10px;
      list-style: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #17172b;
      color: goldenrod;
    }

    .rhs {
      display: flex;
    }

    input {
      border: none;
      background-color: transparent;
      color: inherit;
      font-family: sans-serif;
      font-size: medium;
    }

    ul {
      padding: 0;
      margin-left: 10px;
    }

    ul li {
      list-style: none;
      display: inline;
    }

    a {
      margin: 0 15px;
      color: inherit;
      text-decoration: none;
    }

    a:hover {
      padding-bottom: 5px;
      box-shadow: inset 0 -2px 0 0 goldenrod;
    }

    .social-row {
      font-size: 20px;
    }

    .social-row li a {
      margin: 0 15px;
    }
  </style>
  <footer>
  </footer>
`;

class Footer extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const shadowRoot = this.attachShadow({ mode: 'closed' });

    shadowRoot.appendChild(footerTemplate.content);
  }
}

customElements.define('footer-component', Footer);
