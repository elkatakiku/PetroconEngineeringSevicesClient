<main class="content">
    <!-- Header -->
    <div class="page-header">
        <span>                
        <a id="backBtn" href="<?= SITE_URL ?>/project" class="link-btn">
            <span class="material-icons">
                arrow_back
            </span>
            <small>Go back</small>
        </a>
        <h1 class="page-title">New project</h1>
        </span>
    </div>

    <form id="newProject" class="main-content">
        <!-- Alert -->
        <div class="alert alert-danger" role="alert"></div>

        <!-- Content -->
        <div class="linear-container">
            <div class="linear">
                <div class="project-form basis-lg-8">
                    <h5 class="form-header">Project</h5>

                    <div class="linear flex-md-nowrap flex-wrap" data-gap="5">
                      <div class="form-group basis-12 basis-md-6">
                        <label for="">Purchase order no.</label>
                        <input type="text" class="form-control" name="purchaseOrd" placeholder="Type the purchase order number here" required>
                      </div>

                      <div class="form-group basis-12 basis-md-6">
                        <label for="">Date of award</label>
                        <input type="date" class="form-control" name="awardDate" required>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" rows="1"  placeholder="Type the project description here"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Type the location here" required>
                    </div>

                    <div class="form-group">
                        <label for="">Building no.</label>
                        <input type="text" class="form-control" name="buildingNo" placeholder="Type the building number here" required>
                    </div>

                    <div class="form-group">
                        <label for="">Completion Date</label>
                        <div class="linear">
                            <input type="date" class="form-control" name="start" data-start="completionDate" required>
                            -
                            <input type="date" class="form-control" name="end" data-end="completionDate" required>
                        </div>
                    </div>

<!--                    <button type="button" class="btn action-btn btn-block" data-toggle="popup" data-target="#taskPopup">Tasks</button>-->

<!--                    <style>-->
<!--                        .completion-btn {-->
<!--                            width: 100%;-->
<!--                        }-->
<!--                    </style>-->

<!--                    <a href="--><?//= SITE_URL.'/project/completion' ?><!--" target="_blank" class="">-->
<!--                        <button type="button" class="btn outline-action-btn btn-block completion-btn">View completion date</button>-->
<!--                    </a>-->
                </div>

                <div class="client-form basis-lg-4">
                    <h5 class="form-header">Client</h5>

                    <style>
                        [list]::-webkit-calendar-picker-indicator {
                            display:none !important;
                        }
                    </style>

                    <div class="form-group">
                        <label for="">Company name</label>
                        <input type="text" class="form-control" name="cmpnyName" placeholder="Type the company name here" required>
                    </div>

                    <div class="form-group">
                        <label for="">Representative</label>
                        <input type="text" class="form-control" name="cmpnyRepresentative" placeholder="Type the representative's name here" required>
                    </div>

                    <div class="form-group">
                        <label for="">Contact number</label>
                        <div class="input-container" id="contact">
                            <div class="input-prepend">
                                <span class="icon">+63</span>
                            </div>
                            <input type="number" class="contact-number" name="cmpnyContact" placeholder="9123456789" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="page-footer">
        <button class="btn action-btn" type="submit" form="newProject" name="createProject">Create</button>
        <a href="<?= SITE_URL.'/project/list#all' ?>"><button type="button" class="btn outline-action-btn">Cancel</button></a>
    </div>
</main>

<!-- Task -->
<!--<div class="popup popup-center" id="taskPopup" tabindex="-1" aria-hidden="true">-->
<!--    <div class="pcontainer popup-lg">-->
<!--        <div class="pcontent">-->
<!--            <header class="pheader">-->
<!--                <h2 class="ptitle">Tasks</h2>-->
<!--                <button type="button" class="icon-btn close-btn" data-dismiss="popup" aria-label="Close">-->
<!--                    <span class="material-icons">close</span>-->
<!--                </button>-->
<!--            </header>-->
<!---->
<!--            <div class="pbody">-->
<!---->
                <!-- Alert -->
<!--                <div class="alert alert-danger mb-0" role="alert"></div>-->
<!---->
<!--                <form id="taskForm">-->
<!--                    <div class="form-group">-->
<!--                        <label for="">Task</label>-->
<!--                        <textarea class="form-control" name="taskDescription" rows="1"  placeholder="Type the task name here" required></textarea>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label for="">Duration</label>-->
<!--                        <div class="linear">-->
<!--                            <input type="date" class="form-control" name="start" data-start="taskDuration" required>-->
<!--                            --->
<!--                            <input type="date" class="form-control" name="end" data-end="taskDuration" required>-->
<!--                            <button type="button" class="btn action-btn px-lg-5" id="addTask">Add task</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!---->
<!---->
<!--                <div class="mesa-container">-->
<!--                    <table class="mesa mesa-hover" id="tasksTable">-->
<!--                        <thead class="mesa-head">-->
<!--                        <tr>-->
<!--                            <th scope="col" class="taskCell tname" style="width: 80%"><strong>Task</strong></th>-->
<!--                            <th scope="col">Start</th>-->
<!--                            <th scope="col">Due</th>-->
<!--                            <th scope="col"></th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody class="empty-table">-->
<!--                        <tr class="empty-table">-->
<!--                            <td colspan="4" class="text-center" style="color: gray">No tasks added.</td>-->
<!--                        </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <footer class="pfooter">-->
<!--                <button type="submit" class="btn action-btn" data-dismiss="popup">Continue</button>-->
<!--            </footer>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->