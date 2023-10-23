class nav extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {z
        this.innerHTML = `
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <img src="/bombeiro/images/home.png" class="rounded mx-auto d-block">
                <a class="nav-link" href="/bombeiro/HTML/index.html">Menu</a>
            </li>
            <li class="nav-item">
                <img src="/bombeiro/images/fazerregistro.png" class="rounded mx-auto d-block">
                <a class="nav-link active" aria-current="page" href="#">Fazer Registro</a>
            </li>
            <li class="nav-item">
                <img src="/bombeiro/images/registro.png" class="rounded mx-auto d-block">
                <a class="nav-link" href="/bombeiro/HTML/registro.html">Registros</a>
            </li>
        </ul>`;
    }
}

customElements.define("navpills-1", nav);