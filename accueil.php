<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card">
          <div class="card-body p-5">

            <form action="edit.php?mod=add" method="post" class="d-flex justify-content-center align-items-center mb-4">
              <div class="form-outline flex-fill">
                <input type="text" name="Tasks" id="form2" class="form-control" />
                <label class="form-label" for="form2">New task...</label>
              </div>
              <button type="submit" class="btn btn-info ms-2">Add</button>
            </form>

            <?php

            

            ?>

                        <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#ex-with-icons-tabs-1" role="tab"
                aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i class="fas fa-chart-pie fa-fw me-2"></i>All</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2" role="tab"
                aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fas fa-chart-line fa-fw me-2"></i>In Progress</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
                aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Done</a>
            </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex-with-icons-content">
            <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
                Tab 1 content
            </div>
            <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
                Tab 2 content
            </div>
            <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
                Tab 3 content
            </div>
            </div>
            <!-- Tabs content -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex1-content">
              <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                aria-labelledby="ex1-tab-1">
                <ul class="list-group mb-0">

                  <!-- affichage de la table avec une boucle  -->
                  <?php

                  $result = $mysqli->query("SELECT * FROM task LIMIT 10");

                  while ($obj = $result->fetch_object()) {
                  
                  ?>

                  <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                    style="background-color: #f4f6f7;">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                    <?php echo $obj->Tasks; ?>
                  </li>
                  <?php
                  } 

                  ?>
                </ul>
              </div>
              <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                <ul class="list-group mb-0">
                  <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                    style="background-color: #f4f6f7;">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                    Morbi leo risus
                  </li>
                  <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                    style="background-color: #f4f6f7;">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                    Porta ac consectetur ac
                  </li>
                  <li class="list-group-item d-flex align-items-center border-0 mb-0 rounded"
                    style="background-color: #f4f6f7;">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                    Vestibulum at eros
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                <ul class="list-group mb-0">
                  <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                    style="background-color: #f4f6f7;">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                    <s>Cras justo odio</s>
                  </li>
                  <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                    style="background-color: #f4f6f7;">
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                    <s>Dapibus ac facilisis in</s>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Tabs content -->

          </div>
        </div>

      </div>
    </div>
  </div>
</section>