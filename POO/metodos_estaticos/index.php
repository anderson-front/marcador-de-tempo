<?php

$hired = UserRole::where('code', 'hired-default')->first();
$collectPermissions = $hired['permissions'];

$permissions = [
    "oldpocket.rodobank.permission_user" => "1",
];

foreach ($collectPermissions as $key => $value) {
    if ($key !== "oldpocket.rodobank.permission_user") {
        $permissions += [$key => $value];
    }
}

// UserRole::where('code', 'hired-default')->update([
//     'permissions' => \json_encode($permissions)
// ]);