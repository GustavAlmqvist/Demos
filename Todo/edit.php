<div class="container">
    <div class="row">
        <div class="col-md12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Edit task
                        <a href="<?= base_url('todo') ?>" class="btn btn-secondary float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('todo/update/'.$todo['id']) ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Task</label>
                                    <input type="text" name="task" class="form-control"  value="<?= $todo['task'] ?>" placeholder="Type out the task to be added...">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input type="date" name="deadline" class="form-control" value="<?= $todo['deadline'] ?>">
                                </div>
                            </div>
                            
                        </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-primary">Update task</button>
                                </div>
                                
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>