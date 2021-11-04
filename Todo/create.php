<div class="container">
    <div class="row">
        <div class="col-md12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Add task
                        <a href="<?= base_url('todo') ?>" class="btn btn-secondary float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('todo-store') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Task</label>
                                    <input type="text" name="task" class="form-control" placeholder="Type out the task to be added...">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input type="date" name="deadline" class="form-control">
                                </div>
                            </div>
                            
                        </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-primary">Add task</button>
                                </div>
                                
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>