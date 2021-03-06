<main class="container my-3 py-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary text-truncate">Estatísticas Gerais</h3>
            <small>Nesta área estão presentes as estatísticas gerais da Empresa.</small>
        </div>

        <div class="card-body">
            <div class="row" style="text-align: center">
                <div class="col-6 col-md-4 teste shadow p-2 my-2 text-primary" data-toggle="tooltip"
                    data-placement="top" title="Selecione para visualizar as estatísticas de
			fidelização de clientes na Empresa.">
                    <i class="fas fa-users fa-fw" style="font-size: 5vw;"></i><br>
                    <small>Clientes Fidelizados</small>
                </div>

                <div class="col-6 col-md-4 teste shadow p-2 my-2 text-muted" data-toggle="tooltip" data-placement="top"
                    title="Selecione para visualizar as estatísticas de
			crescimento de rating da Empresa.">
                    <i class=" fas fa-star fa-fw" style="font-size: 5vw;"></i><br>
                    <small>Crescimento de Rating</small>
                </div>

                <div class="col-6 col-md-4 teste shadow p-2 my-2 text-muted" data-toggle="tooltip" data-placement="top"
                    title="Selecione para visualizar as estatísticas de
			campanhas utilizadas da Empresa.">
                    <i class=" fas fa-money-bill-wave fa-fw" style="font-size: 5vw;"></i><br>
                    <small>Campanhas Utilizadas</small>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="chart_container">
                        <canvas id="myChartEG"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="card bg-transparent shadow-none">
        <div class="card-deck">
            <!-- Localizacao dos Fidelizados -->
            <div class="card">
                <div class="card-header">
                    <h3 class="text-primary text-truncate">Localização dos Clientes</h3>
                    <small>Nesta área estão presentes a percentagem de <strong class="text-primary">Localização dos
                            Clientes</strong> na Empresa.</small>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div id="chart_container">
                                <canvas id="myChartLF"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Idade dos Fidelizados -->
            <div class="card">
                <div class="card-header">
                    <h3 class="text-primary text-truncate">Idade dos Fidelizados</h3>
                    <small>Nesta área estão presentes a percentagem de <strong class="text-primary">Idade dos
                            Fidelizados</strong>
                        na Empresa.</small>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div id="chart_container">
                                <canvas id="myChartIF"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ($this->session->userdata("TipoEmpresa") == 3): ?>
    <!-- Estatisticas de Campanhas -->
    <br>
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary text-truncate">Estatísticas Campanhas</h3>
            <small>Nesta área estão presentes as estatísticas de campanhas da Empresa.</small>
        </div>

        <div class="card-body d-none pt-1">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide col-12 text-center p-4 shadow"
                    data-interval="false" data-ride="carousel">
                    <div class="carousel-inner">
                    </div>
                    <a class="carousel-control-prev slideArrows" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next slideArrows" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-12">
                    <div id="chart_container">
                        <canvas id="myChartEC"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</main>