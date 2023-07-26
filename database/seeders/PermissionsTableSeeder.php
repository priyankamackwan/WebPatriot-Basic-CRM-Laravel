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
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_create',
            ],
            [
                'id'    => 50,
                'title' => 'product_edit',
            ],
            [
                'id'    => 51,
                'title' => 'product_show',
            ],
            [
                'id'    => 52,
                'title' => 'product_delete',
            ],
            [
                'id'    => 53,
                'title' => 'product_access',
            ],
            [
                'id'    => 54,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 55,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 56,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 57,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 58,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 59,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 60,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 61,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 62,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 63,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 64,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 65,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 66,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 67,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 68,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 69,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 70,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 71,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 72,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 73,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 74,
                'title' => 'asset_create',
            ],
            [
                'id'    => 75,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 76,
                'title' => 'asset_show',
            ],
            [
                'id'    => 77,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 78,
                'title' => 'asset_access',
            ],
            [
                'id'    => 79,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 80,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 81,
                'title' => 'currency_create',
            ],
            [
                'id'    => 82,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 83,
                'title' => 'currency_show',
            ],
            [
                'id'    => 84,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 85,
                'title' => 'currency_access',
            ],
            [
                'id'    => 86,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 87,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 88,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 89,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 90,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 91,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 92,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 93,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 94,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 95,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 96,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 97,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 98,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 99,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 100,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 101,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 102,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 103,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 104,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 105,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 106,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 107,
                'title' => 'client_create',
            ],
            [
                'id'    => 108,
                'title' => 'client_edit',
            ],
            [
                'id'    => 109,
                'title' => 'client_show',
            ],
            [
                'id'    => 110,
                'title' => 'client_delete',
            ],
            [
                'id'    => 111,
                'title' => 'client_access',
            ],
            [
                'id'    => 112,
                'title' => 'project_create',
            ],
            [
                'id'    => 113,
                'title' => 'project_edit',
            ],
            [
                'id'    => 114,
                'title' => 'project_show',
            ],
            [
                'id'    => 115,
                'title' => 'project_delete',
            ],
            [
                'id'    => 116,
                'title' => 'project_access',
            ],
            [
                'id'    => 117,
                'title' => 'note_create',
            ],
            [
                'id'    => 118,
                'title' => 'note_edit',
            ],
            [
                'id'    => 119,
                'title' => 'note_show',
            ],
            [
                'id'    => 120,
                'title' => 'note_delete',
            ],
            [
                'id'    => 121,
                'title' => 'note_access',
            ],
            [
                'id'    => 122,
                'title' => 'document_create',
            ],
            [
                'id'    => 123,
                'title' => 'document_edit',
            ],
            [
                'id'    => 124,
                'title' => 'document_show',
            ],
            [
                'id'    => 125,
                'title' => 'document_delete',
            ],
            [
                'id'    => 126,
                'title' => 'document_access',
            ],
            [
                'id'    => 127,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 128,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 129,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 130,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 131,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 132,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 133,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 134,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 135,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 136,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 137,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 138,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 139,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 140,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 141,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 142,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 143,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 144,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 145,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 146,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 147,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 148,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 149,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 150,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 151,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 152,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 153,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 154,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 155,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 156,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 157,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 158,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 159,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 160,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 161,
                'title' => 'expense_create',
            ],
            [
                'id'    => 162,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 163,
                'title' => 'expense_show',
            ],
            [
                'id'    => 164,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 165,
                'title' => 'expense_access',
            ],
            [
                'id'    => 166,
                'title' => 'income_create',
            ],
            [
                'id'    => 167,
                'title' => 'income_edit',
            ],
            [
                'id'    => 168,
                'title' => 'income_show',
            ],
            [
                'id'    => 169,
                'title' => 'income_delete',
            ],
            [
                'id'    => 170,
                'title' => 'income_access',
            ],
            [
                'id'    => 171,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 172,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 173,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 174,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 175,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 176,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
