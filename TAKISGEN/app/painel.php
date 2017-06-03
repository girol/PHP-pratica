<?php
session_start(); // Session sempre antes de tudo!

require 'config.php';
include('includes/header.html'); // Deixe o conteúdo fora da sua aplicação

# ｡･:*:･ﾟ★,｡･:*:･ﾟ☆　LOGIN MAGIC GOES HERE　 ｡･:*:･ﾟ★,｡･:*:･ﾟ☆ #
/*
Se o usuário não está http://localhost/PHP-pratica/TAKISGEN/app/logado, ou seja a chave 'logado' do array de sessão não foi setada.
então, redireciona de volta para a página de login
É importante que essa chave no array da session para controle seja configurada por VOCÊ.
Te explico melhor depois se quiesr
*/
if(!isset($_SESSION['logado'])) {
	session_destroy(); // Destrua a sessão, just in case! ;)
	header("Location: login.php");
}

?>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Painel Frases</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#frases"><i class="fa fa-fw fa-table"></i> Frases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#usuarios"><i class="fa fa-fw fa-user-o"></i> Usuários</a>
                </li>

                <!--
                <li class="nav-item">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"><i class="fa fa-fw fa-wrench"></i> Components</a>
                    <ul class="sidebar-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="#">Fixed Navigation</a>
                        </li>
                        <li>
                            <a href="#">Custom Card Examples</a>
                        </li>
                        <li>
                            <a href="#">Blank Page</a>
                        </li>
                        <li>
                            <a href="#">Login Page</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"><i class="fa fa-fw fa-sitemap"></i> Menu Levels</a>
                    <ul class="sidebar-second-level collapse" id="collapseMulti">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                            <ul class="sidebar-third-level collapse" id="collapseMulti2">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                -->

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">

                    <!--
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i> <span class="hidden-lg-up">Messages <span class="badge badge-pill badge-primary">12 New</span></span>
                        <span class="new-indicator text-primary hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">12</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>Jane Smith</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>John Doe</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">
                            View all messages
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i> <span class="hidden-lg-up">Alerts <span class="badge badge-pill badge-warning">6 New</span></span>
                        <span class="new-indicator text-warning hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">6</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                    </span>
                        </div>
                    </form>
                </li>
                -->

                <li class="nav-item">
                    <a class="nav-link" href="<?php 	?>"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li id="dashboard" class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Meu Dashboard</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-primary o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">
								<?php
									$sql = "SELECT id, frase, autor FROM lista ORDER BY RAND() LIMIT 1";
									$result = $pdo->query($sql);

									$chosen_one = $result->fetch(PDO::FETCH_ASSOC);

									echo "{$chosen_one['frase']} <br> <strong>{$chosen_one['autor']}</strong>";
								?>
                            </div>
                        </div>
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">Ver próxima</span>

<!--Ver como faz para clicar no "Ver próxima" e aparecer a próxima frase no espaço (como se fosse um atualizar)-->

                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-success o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">
                                <?php
                                    echo "Bem vindo,  <strong>".$_SESSION['nome']."</strong>!";
                                    echo "<br/>";
                                    echo "Seu e-mail é: ".$_SESSION['email'];
                                ?>
                            </div>
                        </div>
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">Ver Detalhes</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-warning o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">
                                (n° frases cadastradas)
                                <?php
$sql = "SELECT COUNT(*) AS num_phrases FROM lista";
$result = $pdo->query($sql);
$total = $result->fetch(PDO::FETCH_ASSOC);

//var_dump($total);

echo $total['num_phrases']." frases cadastradas"; // Vc tava dando echo num array
                                ?>
                            </div>
                        </div>

                        <!--
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                        -->

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-danger o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">
                                (n° usuários cadastrados)
                                <?php
$sql = "SELECT COUNT(*) AS users FROM usuarios";

$result = $pdo->query($sql);

$total = $result->fetch(PDO::FETCH_ASSOC);

//var_dump($total);

echo $total['users']." usuários cadastradas"; // Aqui também
                                ?>
                            </div>
                        </div>

                        <!--
                        <a href="#" class="card-footer clearfix small z-1">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                        -->

                    </div>
                </div>
            </div>

            <!-- Area Chart Example
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-area-chart"></i> Area Chart Example
                </div>
                <div class="card-block">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
            -->

            <div class="row">

                <div class="col-lg-8">

                    <!-- Example Bar Chart Card
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bar-chart"></i> Bar Chart Example
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-8">
                                    <canvas id="myBarChart" width="100" height="50"></canvas>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <hr class="hidden-sm-up">
                                    <div class="h4 mb-0 text-primary">$34,693</div>
                                    <div class="small text-muted">YTD Revenue</div>
                                    <hr>
                                    <div class="h4 mb-0 text-warning">$18,474</div>
                                    <div class="small text-muted">YTD Expenses</div>
                                    <hr>
                                    <div class="h4 mb-0 text-success">$16,219</div>
                                    <div class="small text-muted">YTD Margin</div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">
                            Updated yesterday at 11:59 PM
                        </div>
                    </div>
                    -->

                    <!-- Card Columns Example Social Feed -->
                    <div class="card-columns">

                        <!-- Example Social Card
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                                <p class="card-text small">These waves are looking pretty good today! <a href="#">#surfsup</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <hr class="my-0">
                            <div class="card-block small bg-faded">
                                <div class="media">
                                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6> Very nice! I wish I was there! That looks amazing!
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">Like</a>
                                            </li>
                                            <li class="list-inline-item">
                                                ·
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                        </ul>
                                        <div class="media mt-3">
                                            <a class="d-flex pr-3" href="#">
                                                <img src="http://placehold.it/45x45" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6> Next time for sure!
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#">Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        ·
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#">Reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted 32 mins ago
                            </div>
                        </div>
                        -->

                        <!-- Example Social Card
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
                                <p class="card-text small">Another day at the office... <a href="#">#workinghardorhardlyworking</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <hr class="my-0">
                            <div class="card-block small bg-faded">
                                <div class="media">
                                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6> Where did you get that camera?! I want one!
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">Like</a>
                                            </li>
                                            <li class="list-inline-item">
                                                ·
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted 46 mins ago
                            </div>
                        </div>
                        -->

                        <!-- Example Social Card
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                                <p class="card-text small">Nice shot from the skate park! <a href="#">#kickflip</a> <a href="#">#holdmybeer</a> <a href="#">#igotthis</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted 1 hr ago
                            </div>
                        </div>
                        -->

                        <!-- Example Social Card
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                                <p class="card-text small">It's hot, and I might be lost... <a href="#">#desert</a> <a href="#">#water</a> <a href="#">#anyonehavesomewater</a> <a href="#">#noreally</a> <a href="#">#thirsty</a> <a href="#">#dehydration</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <hr class="my-0">
                            <div class="card-block small bg-faded">
                                <div class="media">
                                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6> The oasis is a mile that way, or is that just a mirage?
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">Like</a>
                                            </li>
                                            <li class="list-inline-item">
                                                ·
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                        </ul>
                                        <div class="media mt-3">
                                            <a class="d-flex pr-3" href="#">
                                                <img src="http://placehold.it/45x45" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
                                                <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt=""> I'm saved, I found a cactus. How do I open this thing?
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#">Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        ·
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#">Reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted yesterday
                            </div>
                        </div>
                        -->

                    </div>
                    <!-- /Card Columns -->

                </div>

                <div class="col-lg-4">
                    <!-- Example Notifications Card
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bell-o"></i> Feed Example
                        </div>
                        <div class="list-group list-group-flush small">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>David Miller</strong> posted a new article to <strong>David Miller Website</strong>.
                                        <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Samantha King</strong> sent you a new message!
                                        <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Jeffery Wellings</strong> added a new photo to the album <strong>Beach</strong>.
                                        <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <i class="fa fa-code-fork"></i> <strong>Monica Dennis</strong> forked the <strong>startbootstrap-sb-admin</strong> repository on <strong>GitHub</strong>.
                                        <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                            View all activity...
                        </a>
                        </div>
                        <div class="card-footer small text-muted">
                            Updated yesterday at 11:59 PM
                        </div>
                    </div>
                    -->
                </div>
            </div>

            <!-- Example Tables Card FRASES-->
            <div class="card mb-3">
                <div class="card-header">
                    <i id="frases" class="fa fa-table"></i> Frases Cadastradas
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Frase</th>
                                    <th>Autor</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Frase</th>
                                    <th>Autor</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </tfoot>
                            <tbody>
							<?php
								$sql = "SELECT * FROM lista";
								$sql = $pdo->query($sql);
								if($sql->rowCount() > 0) {
									foreach ($sql->fetchAll() as $phrase) {
										echo '<tr>';
										echo '<td>'.$phrase['frase'].'</td>';
										echo '<td>'.$phrase['autor'].'</td>';
										echo '<td><a href="update.php?id='.$phrase['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>';
										echo '<td><a href="delete.php?id='.$phrase['id'].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>';
										echo '</tr>';
									}
								}
							?>
							</tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>

			<!-- Example Tables Card USUÁRIOS -->
            <div class="card mb-3">
                <div class="card-header">
                    <i id="usuarios" class="fa fa-user-o"></i> Usuários Cadastrados
                </div>

                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Editar</th>
                                    <th>Deletar</th>
                                </tr>
                            </tfoot>
                            <tbody>
							<?php
								$sql = "SELECT * FROM usuarios";
								$sql = $pdo->query($sql);
								if($sql->rowCount() > 0) {
									foreach ($sql->fetchAll() as $user) {
										echo '<tr>';
										echo '<td>'.$user['nome'].'</td>';
										echo '<td>'.$user['email'].'</td>';
										echo '<td><a href="update.php?id='.$user['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>';
										echo '<td><a href="delete.php?id='.$user['id'].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>';
										echo '</tr>';
									}
								}
							?>
							</tbody>
                        </table>
                    </div>
                </div>

				<!--
				<div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div>
                    </div>

                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                        	<ul class="pagination">
                        		<li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        		<li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        		<li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        		<li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                        	</ul>
                        </div>
                    </div>
                </div>
				-->

                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

<?php
include('includes/footer.html');
?>

</body>
</html>
