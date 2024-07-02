<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 23,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 25,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 26,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 27,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 28,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 29,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 30,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 31,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 32,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 33,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 34,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 35,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 36,
                'title' => 'product_create',
            ],
            [
                'id'    => 37,
                'title' => 'product_edit',
            ],
            [
                'id'    => 38,
                'title' => 'product_show',
            ],
            [
                'id'    => 39,
                'title' => 'product_delete',
            ],
            [
                'id'    => 40,
                'title' => 'product_access',
            ],
            [
                'id'    => 41,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 42,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 43,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 44,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 45,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 46,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 47,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 48,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 49,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 50,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 51,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 52,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 53,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 54,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 55,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 56,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 57,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 58,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 59,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 60,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 61,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 62,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 63,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 64,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 65,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 66,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 67,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 68,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 69,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 70,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 71,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 72,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 73,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 74,
                'title' => 'task_create',
            ],
            [
                'id'    => 75,
                'title' => 'task_edit',
            ],
            [
                'id'    => 76,
                'title' => 'task_show',
            ],
            [
                'id'    => 77,
                'title' => 'task_delete',
            ],
            [
                'id'    => 78,
                'title' => 'task_access',
            ],
            [
                'id'    => 79,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 80,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 81,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 82,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 83,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 84,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 85,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 86,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 87,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 88,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 89,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 90,
                'title' => 'contact_contact_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
