class div extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <header>
            <div class="d-lg-none">

                <nav class="navbar">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="/bombeiro/HTML/conta.html"><img src="/bombeiro/images/botãologin.png"></a>
                    </div>
                </nav>
                <div class="offcanvas offcanvas-start" id="offcanvasNav">

                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Fechar"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/bombeiro/HTML/index.html">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bombeiro/HTML/ocorrencia.html">Fazer Registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bombeiro/HTML/conta.html">Conta</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </header>
        `;
    }
}

customElements.define("navbar-1", div);