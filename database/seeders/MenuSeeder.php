<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'id' => 1,
                'title' => 'Dashboard',
                'url' => 'dashboard',
                'icon' => 'si si-speedometer',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 2,
                'title' => 'System Settings',
                'url' => '',
                'icon' => 'si si-settings',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 3,
                'title' => 'Assets Type',
                'url' => 'assetsType',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 4,
                'title' => 'Banks',
                'url' => 'bank',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 5,
                'title' => 'Branches',
                'url' => 'branch',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 6,
                'title' => 'Calender',
                'url' => 'calender',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 7,
                'title' => 'Degree',
                'url' => 'degree',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 8,
                'title' => 'Departments',
                'url' => 'department',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 9,
                'title' => 'Designations',
                'url' => 'designation',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 10,
                'title' => 'Institutes',
                'url' => 'institute',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 11,
                'title' => 'Leaves',
                'url' => 'leave',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 12,
                'title' => 'Roles',
                'url' => 'role',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 13,
                'title' => 'Users',
                'url' => '',
                'icon' => 'si si-users',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 14,
                'title' => 'Add User',
                'url' => 'user/create',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 13,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 15,
                'title' => 'Manage Users',
                'url' => 'user/manage',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 13,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 16,
                'title' => 'Assets',
                'url' => '',
                'icon' => 'si si-grid',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 17,
                'title' => 'Add Asset',
                'url' => 'asset/add',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 16,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 18,
                'title' => 'Manage Assets',
                'url' => 'asset/',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 16,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 19,
                'title' => 'Requisition',
                'url' => '',
                'icon' => 'far  fa-plus-square',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 20,
                'title' => 'Request',
                'url' => 'requisition/request',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 19,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 21,
                'title' => 'Manage',
                'url' => 'requisition/',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 19,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 22,
                'title' => 'Apply for Leave',
                'url' => '',
                'icon' => 'si si-note',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 23,
                'title' => 'Apply Leave',
                'url' => 'leaveApply/apply',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 22,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 24,
                'title' => 'Manage Leaves',
                'url' => 'leaveApply/manage',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 22,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 25,
                'title' => 'Logs',
                'url' => 'log',
                'icon' => 'far fa-clone',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 26,
                'title' => 'Tickets',
                'url' => '',
                'icon' => 'fa fa-tasks',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 27,
                'title' => 'Add Ticket',
                'url' => 'ticket/add',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 26,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 28,
                'title' => 'Manage Tickets',
                'url' => 'ticket/',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 26,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 29,
                'title' => 'Events',
                'url' => '',
                'icon' => 'fa fa-calendar-alt',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 30,
                'title' => 'Create Event',
                'url' => 'event/create',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 29,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 31,
                'title' => 'Manage Events',
                'url' => 'event/manage',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 29,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 32,
                'title' => 'Warnings',
                'url' => '',
                'icon' => 'fa fa-mountain',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 33,
                'title' => 'Add Warning',
                'url' => 'warning/add',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 32,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 34,
                'title' => 'Manage Warnings',
                'url' => 'warning/',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 32,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 35,
                'title' => 'Meeting Places',
                'url' => 'meeting_place',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 2,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 36,
                'title' => 'Meetings',
                'url' => '',
                'icon' => 'fab fa-meetup',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 37,
                'title' => 'Add Meeting',
                'url' => 'meeting/add',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 36,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 38,
                'title' => 'Manage Meetings',
                'url' => 'meeting/',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 36,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 39,
                'title' => 'Complaints',
                'url' => '',
                'icon' => 'fa fa-pen',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => null,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 40,
                'title' => 'Create Complaint',
                'url' => 'complaint/create',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 39,
                'status' => Config::get('variable_constants.activation.active'),
            ],
            [
                'id' => 41,
                'title' => 'Manage Complaints',
                'url' => 'complaint/manage',
                'icon' => '',
                'description' => '',
                'menu_order' => '',
                'parent_menu' => 39,
                'status' => Config::get('variable_constants.activation.active'),
            ],
        ];

        foreach ($menus as $key=>$menu)
        {
            Menu::updateOrCreate([
                'id'=> $menu['id']
            ],
                $menu);
        }
    }
}
