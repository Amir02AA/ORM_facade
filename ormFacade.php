<?php
ORMFacade::createUser(['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com']); //user | users
ORMFacade::createProduct(['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com']); //product | products
ORMFacade::createUser(['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com']);

$user = ORMFacade::findUser(['id' => 1]);
if ($user) {
    echo "Found user: " . $user['name'] . "\n";
} else {
    echo "User not found.\n";
}

ORMFacade::updateUser(['id' => 2, 'name' => 'Jane Johnson']);
$user = ORMFacade::findUser(['id' => 2]);
if ($user) {
    echo "Updated user name: " . $user['name'] . "\n";
} else {
    echo "User not found.\n";
}

ORMFacade::deleteUser(1);
$user = ORMFacade::findUser(['id' => 1]);
if ($user) {
    echo "Found user: " . $user['name'] . "\n";
} else {
    echo "User not found.\n";
}