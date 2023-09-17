class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <nav class="nav nav-tabs flex-row h5 font-weight-light border-bottom">
           <!-- <a class="p-4 flex-fill text-sm-center nav-link active" aria-current="page" href="/get-a-quote/"><i
                class="fa-solid fa-cube"></i> LCL</a>-->
            <a class="p-4 flex-fill text-sm-center nav-link" href="/get-a-quote/fcl/"><i class="fa-solid fa-cube"></i> FCL</a>
           <!-- <a class="p-4 flex-fill text-sm-center nav-link" href="/get-a-quote/air/"><i class="fa-regular fa-paper-plane"></i> Air</a>-->
        </nav>
      `;
    }
}

customElements.define('tg-header', Header);