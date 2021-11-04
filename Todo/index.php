<div class="container">
    <div class="row">
        <div class="col-md12 mt-5">
            <?php
            if (session()->getFlashdata('status')) {
                echo "<h5>" . session()->getFlashdata('status') . "</h5>";
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h4>To-do list
                        <a href="<?= base_url('todo-add') ?>" class="btn btn-primary float-end">Add task</a>
                    </h4>
                    
                </div>
                <div class="card-body">
                <small>Made with Codeigniter 4 (php mvc-framework) and bootstrap5</small>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Deadline</th>
                                <th>Added at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($todo as $row) : ?>
                                <tr>
                                    <td><?= $row['task'] ?> </td>
                                    <td><?= $row['deadline'] ?> </td>
                                    <td><?= $row['created_at'] ?> </td>
                                    <td>
                                        <a href="<?= base_url('todo/edit/'.$row['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url('todo/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>