<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="title-box">
                <h4 class="title">View Accounts</h4>
            </div>
        </div>
    </div>

    <div id="dynamic-modal"></div>

    <div class="row">
        <div class="col-12">
            <div class="custom-card">
                <div class="card-body">
                    <div class="table-container">
                        <table id="accounts-table" class="table table-centered table-striped mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>#id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody id="account-rows">
                                <?php
                                    require_once '../classes/account.class.php';
                                    session_start();
                                    $accountService = new Account();

                                    $counter = 1;
                                    $users = $accountService->getAll();

                                    foreach ($users as $user) {
                                ?>
                                    <tr>
                                        <td><?= $counter ?></td>
                                        <td><?= htmlspecialchars($user['first_name'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($user['last_name'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($user['role'], ENT_QUOTES, 'UTF-8') ?></td>
                                    </tr>
                                <?php
                                        $counter++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
