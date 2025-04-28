<!DOCTYPE html>
<html lang="en" data-footer="true" data-scrollspy="true">

<!-- Mirrored from acorn-html-classic-dashboard.coloredstrategies.com/Interface.Content.Tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Feb 2025 12:58:21 GMT -->
<?php
require 'components/header.php';
?>

<body>
    <div id="root">

        <?php
        require 'components/navbar.php';
        ?>


        <div class="nav-shadow"></div>
    </div>


    <main>



        <div class="container">
            <div class="row">
                <div class="col">
                    <section class="scroll-section" id="title">
                        <div class="page-title-container">
                            <h1 class="mb-0 pb-0 display-4">Tables</h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                <ul class="breadcrumb pt-0">
                                    <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="Interface.html">Interface</a></li>
                                    <li class="breadcrumb-item"><a href="Interface.Content.html">Content</a></li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                    <div>
                        <section class="scroll-section" id="hoverableRows">
                            <h2 class="small-title">Hoverable Rows</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <table class="table table-hover">

                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    require 'components/footer.php';
    ?>

</body>

<!-- Mirrored from acorn-html-classic-dashboard.coloredstrategies.com/Interface.Content.Tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Feb 2025 12:58:21 GMT -->

</html>