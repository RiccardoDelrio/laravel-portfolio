@extends('layouts.app')

@section('title', 'Home | Portfolio Riccardo Delrio')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="text-white">
                            Ciao, sono <span class="text-accent">Riccardo Delrio</span>
                        </h1>
                        <h2 class="text-white">Junior Full-Stack Developer</h2>
                        <p class="lead text-white">
                            Sviluppatore Full-Stack con competenze in React, Node.js, Express e MySQL. Il mio background
                            tecnico e logistico mi ha fornito una solida base di capacità analitiche, organizzative e di
                            problem solving che applico nello sviluppo software.
                        </p>
                        <div class="hero-buttons">
                            <a href={{ route('projects.index') }} class="btn-primary-custom">
                                <i class="fas fa-folder-open me-2"></i>Vedi i Progetti
                            </a>
                            <a href="#contact" class="btn-outline-custom">
                                <i class="fas fa-envelope me-2"></i>Contattami
                            </a>
                        </div>
                        <div class="social-links">
                            <a href="https://github.com/riccardodelrio" aria-label="GitHub"><i
                                    class="fab fa-github"></i></a>
                            <a href="https://linkedin.com/in/riccardo-delrio" aria-label="LinkedIn"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="mailto:riccardodelrio92@gmail.com" aria-label="Email"><i
                                    class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual">
                        <div class="code-illustration">
                            <i class="fas fa-code"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Chi Sono</h2>
                <p>La mia passione per il codice e l'innovazione tecnologica</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <h3>Il Mio Profilo</h3>
                        <p class="mb-4">
                            Junior Full-Stack Developer con competenze in React, Node.js, Express e MySQL. Il mio background
                            in ambito tecnico e logistico mi ha fornito una solida base di capacità analitiche,
                            organizzative e di problem solving che applico nello sviluppo software.
                        </p>
                        <p>
                            Sono orientato ai risultati, con particolare attenzione alla creazione di interfacce responsive
                            e intuitive e all'implementazione di architetture back-end efficienti. Attualmente risiedo a
                            Como (CO) e possiedo un permesso G valido fino al 2027.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="skills-grid">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="skill-item">
                                    <i class="fas fa-laptop-code text-frontend"></i>
                                    <h5>Frontend</h5>
                                    <p>HTML, CSS, JavaScript, React, Bootstrap</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill-item">
                                    <i class="fas fa-server text-backend"></i>
                                    <h5>Backend</h5>
                                    <p>Node.js, Express, MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection