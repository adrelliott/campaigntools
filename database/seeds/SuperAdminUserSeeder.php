<?php

use Illuminate\Database\Seeder;

class SuperAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create our org
        $organisation = factory(App\Organisation::class)->create([
            'id'    => 1322,
            'organisation_name' => 'Oblong Media',
            'website'   => 'oblonghq.com'
        ]);

        // Create a super admin 
        $superadmin = factory(App\User::class)->create([
            'id' => 6212,
            'name' => 'Al Elliott',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'organisation_id' => $organisation->id,
        ]);

        // Add role
        $role = App\Role::where('role_name','superadmin')->first();
        $superadmin->role()->associate($role)->save();

        // Add Modules
        $modules = App\Module::all();
        $superadmin->modules()->sync($modules);
        
	}
}
