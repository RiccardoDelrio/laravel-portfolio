<!-- Footer -->
<footer class="bg-dark text-white py-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Informazioni Personali -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="mb-3">
                    <span class="text-primary">Riccardo</span> Delrio
                </h5>
                <p class="mb-3">
                    Sviluppatore Web Full-Stack appassionato di tecnologie moderne e soluzioni innovative.
                </p>
                <div class="social-links">
                    <a href="#" class="text-light me-3 fs-4" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="text-light me-3 fs-4" title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-light me-3 fs-4" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-light me-3 fs-4" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Link Rapidi -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="mb-3">Link Rapidi</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ url('/') }}" class="text-light text-decoration-none">
                            <i class="fas fa-home me-2"></i>Home
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#about" class="text-light text-decoration-none">
                            <i class="fas fa-user me-2"></i>Chi Sono
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#projects" class="text-light text-decoration-none">
                            <i class="fas fa-folder-open me-2"></i>Progetti
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#contact" class="text-light text-decoration-none">
                            <i class="fas fa-envelope me-2"></i>Contatti
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tecnologie -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Tecnologie</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <span class="badge bg-primary mb-1">Laravel</span>
                    </div>
                    <div class="col-6">
                        <span class="badge bg-success mb-1">Vue.js</span>
                    </div>
                    <div class="col-6">
                        <span class="badge bg-info mb-1">React</span>
                    </div>
                    <div class="col-6">
                        <span class="badge bg-warning mb-1">JavaScript</span>
                    </div>
                    <div class="col-6">
                        <span class="badge bg-danger mb-1">PHP</span>
                    </div>
                    <div class="col-6">
                        <span class="badge bg-secondary mb-1">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Contatti -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Contatti</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-envelope me-2 text-primary"></i>
                        <a href="mailto:riccardo@example.com" class="text-light text-decoration-none">
                            riccardo@example.com
                        </a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone me-2 text-primary"></i>
                        <span class="text-light">+39 123 456 7890</span>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                        <span class="text-light">Italia</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="my-4">

        <!-- Copyright -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0 text-muted">
                    &copy; {{ date('Y') }} Riccardo Delrio. Tutti i diritti riservati.
                </p>
            </div>
            <div class="col-md-6 text-end">
                <p class="mb-0 text-muted">
                    Realizzato con <i class="fas fa-heart text-danger"></i> e Laravel
                </p>
            </div>
        </div>
    </div>
</footer>