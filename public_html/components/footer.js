const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = `
  <style>
    footer {
      height: 60px;
      padding: 0 10px;
      list-style: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #1a1a1f;
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
    <input type="text" id="randomText" size="45" disabled>
    <div class="rhs">
      <input type="text" id="hitCounter" size="20" disabled>
      <ul class="social-row" id="socialRow" hidden="true">
        <li><a href="https://github.com/CWilkinsDev"><i class="fab fa-github"></i></a></li>
        <li><a href="https://www.linkedin.com/in/charlie-wilkins-4b2680195/"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
  </footer>
`;

class Footer extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const quotes = [
      "Hello, World.",
      "Hack the Planet!",
      "so much depends upon a red wheelbarrow",
      "Edward Grove is alive",
      "We out here cloud seeding, the scope gleaming", // This is the max length for mobiles
      "I'm considering a move to Memphis",
      "Get in, loser, we're going shopping!",
      "What's he building in there?",
      "I mean, will you serve the guests the nuts?",
      "It's 128 miles to Chicago.",
      "Always choose the lesser of two weevils",
      "We'll always have Paris",
      "There's coffee in that nebula",
      "You are Number Six",
      "Be seeing you",
      "East is up",
      "Look alive, sunshine...",
      "Can't swim, can't dance, doesn't know karate",
    ];

    const homeDirectoryPointer = (this.countChar(document.baseURI, '/') == 3) ? '.' : '..';

    const fontAwesome = document.querySelector('link[href*="font-awesome"]');
    const shadowRoot = this.attachShadow({ mode: 'closed' });

    if (fontAwesome) {
      shadowRoot.appendChild(fontAwesome.cloneNode());
    }

    let randomText = footerTemplate.content.getElementById('randomText')
    let hitCounter = footerTemplate.content.getElementById('hitCounter')
    let socialRow = footerTemplate.content.getElementById('socialRow')


    shadowRoot.appendChild(footerTemplate.content);

    fetch(homeDirectoryPointer + "/resources/hitcounter.txt")
      .then((res) => res.text())
      .then((text) => {
        hitCounter.value = "You are visitor number " + text + "!";
      })
      .catch((e) => console.error(e))
      .finally(() => {
        randomText.value = quotes[Math.floor(Math.random() * quotes.length)];
        socialRow.removeAttribute("hidden");
      });
  }

  countChar(word, char) {
    var count = 0
    for (let i = 0; i <= word.length; i++) {
      if (word[i] === `${char}`) {
        count += 1
      }
    }
    return count;
  }
}

customElements.define('footer-component', Footer);
