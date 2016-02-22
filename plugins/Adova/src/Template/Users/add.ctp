<div class="page-title">
    <span class="title">Add Users</span>
    <div class="description">Add User Information</div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <table class="table" cellpadding="0" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('first_name') ?></th>
                        <th><?= $this->Paginator->sort('last_name') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('phone') ?></th>
                        <th><?= $this->Paginator->sort('address') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>