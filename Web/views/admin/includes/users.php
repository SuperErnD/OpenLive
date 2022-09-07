<?php

require __DIR__ . "/modals/users/delete.phtml";
require __DIR__ . "/modals/users/edit.phtml";

$deleteId = $_GET['delete_id'] ?? null; 
if (!is_null($deleteId)) {
   $delete_user($deleteId);
}

if(!empty($_POST) && isset($_GET['edit_id']) && (int) $_GET['edit_id'] > -1 &&
    strlen($_GET['edit_id']) == strlen((int) $_GET['edit_id'])
){
    if (!isset($_POST['admin'])){
        $_POST['admin']='off';
    }
    $edit_user($_GET['edit_id']);
    header("Location: ". $_SERVER['SCRIPT_NAME'] . "?action=users");
}

?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $id => $user) { ?>
            <?php echo getDeleteModal($user['id']); ?>
            <?php echo getEditModal($user['id'], $user); ?>
            <tr>
                <th scope="row"><?php echo $id+1; ?></th>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['surname']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <button class="btn-fa" data-bs-toggle="modal" data-bs-target="#editModal-<?php echo $user['id']?>" type="button"><i class="fa fa-gear"></i></button>
                    <button class="btn-fa" data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo $user['id']?>" type="button"><i class="fa fa-trash"></i></button>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>