<?php

namespace Tests\Commands;

test('can make model', function () {
    $this->artisan('beyond:make:model User/User');

    expect(base_path() . '/src/Domain/User/Models/User.php')->toBeFile();
});